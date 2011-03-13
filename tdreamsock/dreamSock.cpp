//
// DreamSock network-library
//
// Programmers:
// Teijo Hakala
//
/////////////////////////////////////////////////////////

//#define WIN32

#ifdef WIN32
// Windows specific headers
	#ifndef _WINSOCKAPI_
	#define _WINSOCKAPI_
	#include <windows.h>
	#include <winsock2.h>

	#endif
#else
// UNIX specific headers
	#include <memory.h>
	#include <errno.h>
	#include <sys/ioctl.h>
	#include <sys/socket.h>
	#include <sys/time.h>
	#include <netinet/in.h>
	#include <arpa/inet.h>
#endif

// Common headers
#include <stdio.h>
#include <stdarg.h>
#include <stdlib.h>
#include <ctype.h>
#include <time.h>
#include "dreamSock.h"
#include "dreamSockLog.h"

bool dreamSock_init = false;

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamSock_Initialize(void)
{
	if(dreamSock_init == true)
		return 0;

	dreamSock_init = true;

	StartLog();

#ifdef WIN32
	return dreamSock_InitializeWinSock();
#else
	return 0;
#endif
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamSock_Shutdown(void)
{
	if(dreamSock_init == false)
		return;

	LogString("Shutting down dreamSock");

	dreamSock_init = false;

	StopLog();

#ifdef WIN32
	WSACleanup();
#endif
}

/***************

  dreamServer stuff

***************/

//-----------------------------------------------------------------------------
// Name: Constructor()
// Desc: 
//-----------------------------------------------------------------------------
dreamServer::dreamServer()
{
	init			= false;

	port			= 0;
	runningIndex	= 1;
	socket			= 0;
	clientList		= NULL;
}

//-----------------------------------------------------------------------------
// Name: Deconstructor()
// Desc: 
//-----------------------------------------------------------------------------
dreamServer::~dreamServer()
{
	dreamClient *list = clientList;
	dreamClient *next;

	while(list != NULL)
	{
		next = list->next;

		if(list)
		{
			free(list);
		}

		list = next;
	}

	clientList = NULL;

	dreamSock_CloseSocket(socket);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamServer::Initialise(char *localIP, int serverPort)
{
	// Initialise dreamSock if it is not already initialised
	dreamSock_Initialize();

	// Store the server IP and port for later use
	port = serverPort;

	// Create server socket
	socket = dreamSock_OpenUDPSocket(localIP, port);

	if(socket == DREAMSOCK_INVALID_SOCKET)
	{
		return DREAMSOCK_SERVER_ERROR;
	}

	init = true;

	return 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamServer::Uninitialise(void)
{
	dreamSock_CloseSocket(socket);

	init = false;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamServer::SendAddClient(dreamClient *newClient)
{
	// Send connection confirmation
	newClient->message.Init(newClient->message.outgoingData,
		sizeof(newClient->message.outgoingData));

	newClient->message.WriteByte(DREAMSOCK_MES_CONNECT);	// type
	newClient->SendPacket();

	// Send 'Add client' message to every client
	dreamClient *client = clientList;

	// First inform the new client of the other clients
	for( ; client != NULL; client = client->next)
	{
		newClient->message.Init(newClient->message.outgoingData,
			sizeof(newClient->message.outgoingData));

		newClient->message.WriteByte(DREAMSOCK_MES_ADDCLIENT); // type

		if(client == newClient)
		{
			newClient->message.WriteByte(1);	// local client
			newClient->message.WriteByte(client->GetIndex());
			newClient->message.WriteString(client->GetName());
		}
		else
		{
			newClient->message.WriteByte(0);	// not-local client
			newClient->message.WriteByte(client->GetIndex());
			newClient->message.WriteString(client->GetName());
		}

		newClient->SendPacket();
	}

	// Then tell the others about the new client
	for(client = clientList; client != NULL; client = client->next)
	{
		if(client == newClient)
			continue;

		client->message.Init(client->message.outgoingData,
			sizeof(client->message.outgoingData));

		client->message.WriteByte(DREAMSOCK_MES_ADDCLIENT); // type

		client->message.WriteByte(0);
		client->message.WriteByte(newClient->GetIndex());
		client->message.WriteString(newClient->GetName());

		client->SendPacket();
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamServer::SendRemoveClient(dreamClient *client)
{
	int index = client->GetIndex();

	// Send 'Remove client' message to every client
	dreamClient *list = clientList;

	for( ; list != NULL; list = list->next)
	{
		list->message.Init(list->message.outgoingData,
			sizeof(list->message.outgoingData));

		list->message.WriteByte(DREAMSOCK_MES_REMOVECLIENT);	// type
		list->message.WriteByte(index);							// index
	}

	SendPackets();

	// Send disconnection confirmation
	client->message.Init(client->message.outgoingData,
		sizeof(client->message.outgoingData));

	client->message.WriteByte(DREAMSOCK_MES_DISCONNECT);
	client->SendPacket();
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamServer::SendPing(void)
{
	// Send ping message to every client
	dreamClient *list = clientList;

	for( ; list != NULL; list = list->next)
	{
		list->SendPing();
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamServer::AddClient(struct sockaddr *address, char *name)
{
	// First get a pointer to the beginning of client list
	dreamClient *list = clientList;
	dreamClient *prev;
	dreamClient *newClient;

	LogString("LIB: Adding client, index %d", runningIndex);

	// No clients yet, adding the first one
	if(clientList == NULL)
	{
		LogString("LIB: Server: Adding first client");

		clientList = (dreamClient *) calloc(1, sizeof(dreamClient));

		clientList->SetSocket(socket);
		clientList->SetSocketAddress(address);

		clientList->SetConnectionState(DREAMSOCK_CONNECTING);
		clientList->SetOutgoingSequence(1);
		clientList->SetIncomingSequence(0);
		clientList->SetIncomingAcknowledged(0);
		clientList->SetIndex(runningIndex);
		clientList->SetName(name);
		clientList->next = NULL;

		newClient = clientList;
	}
	else
	{
		LogString("LIB: Server: Adding another client");

		prev = list;
		list = clientList->next;

		while(list != NULL)
		{
			prev = list;
			list = list->next;
		}

		list = (dreamClient *) calloc(1, sizeof(dreamClient));

		list->SetSocket(socket);
		list->SetSocketAddress(address);

		list->SetConnectionState(DREAMSOCK_CONNECTING);
		list->SetOutgoingSequence(1);
		list->SetIncomingSequence(0);
		list->SetIncomingAcknowledged(0);
		list->SetIndex(runningIndex);
		list->SetName(name);
		list->next = NULL;

		prev->next = list;

		newClient = list;
	}

	runningIndex++;

	SendAddClient(newClient);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamServer::RemoveClient(dreamClient *client)
{
	dreamClient *list = NULL;
	dreamClient *prev = NULL;
	dreamClient *next = NULL;

	int index = client->GetIndex();

	LogString("LIB: Removing client with index %d", index);

	SendRemoveClient(client);

	for(list = clientList; list != NULL; list = list->next)
	{
		if(client == list)
		{
			if(prev != NULL)
			{
				prev->next = client->next;
			}

			break;
		}

		prev = list;
	}

	if(client == clientList)
	{
		LogString("LIB: Server: removing first client in list");

		if(list) next = list->next;

		if(client) free(client);
		client = NULL;
		clientList = next;
	}
	else
	{
		LogString("LIB: Server: removing a client");

		if(list) next = list->next;

		if(client) free(client);
		client = next;
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamServer::ParsePacket(dreamMessage *mes, struct sockaddr *address)
{
	mes->BeginReading();
	int type = mes->ReadByte();

	// Find the correct client by comparing addresses
	dreamClient *clList = clientList;

	// If we do not have clients yet, skip to message type checking
	if(clList != NULL )
	{
		for( ; clList != NULL; clList = clList->next)
		{
			if(memcmp(clList->GetSocketAddress(), address, sizeof(address)) == 0)
			{
				break;
			}
		}

		if(clList != NULL)
		{
			clList->SetLastMessageTime(dreamSock_GetCurrentSystemTime());

			// Check if the type is a positive number
			// -> is the packet sequenced
			if(type > 0)
			{
				unsigned short sequence		= mes->ReadShort();
				unsigned short sequenceAck	= mes->ReadShort();

				if(sequence <= clList->GetIncomingSequence())
				{
					LogString("LIB: Server: Sequence mismatch (sequence: %ld <= incoming seq: %ld)",
						sequence, clList->GetIncomingSequence());
				}

				clList->SetDroppedPackets(sequence - clList->GetIncomingSequence() - 1);

				clList->SetIncomingSequence(sequence);
				clList->SetIncomingAcknowledged(sequenceAck);
			}

			// Wait for one message before setting state to connected
			if(clList->GetConnectionState() == DREAMSOCK_CONNECTING)
				clList->SetConnectionState(DREAMSOCK_CONNECTED);
		}
	}

	// Parse through the system messages
	switch(type)
	{
	case DREAMSOCK_MES_CONNECT:
		AddClient(address, mes->ReadString());

		LogString("LIBRARY: Server: a client connected succesfully");
		break;

	case DREAMSOCK_MES_DISCONNECT:
		if(clList == NULL)
			break;

		RemoveClient(clList);

		LogString("LIBRARY: Server: a client disconnected");
		break;

	case DREAMSOCK_MES_PING:
		clList->SetPing(dreamSock_GetCurrentSystemTime() - clList->GetPingSent());
		break;
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamServer::CheckForTimeout(char *data, struct sockaddr *from)
{
	int currentTime = dreamSock_GetCurrentSystemTime();

	dreamClient *clList = clientList;
	dreamClient *next;

	for( ; clList != NULL;)
	{
		next = clList->next;

		// Don't timeout when connecting
		if(clList->GetConnectionState() == DREAMSOCK_CONNECTING)
		{
			clList = next;
			continue;
		}

		// Check if the client has been silent for 30 seconds
		// If yes, assume crashed and remove the client
		if(currentTime - clList->GetLastMessageTime() > 30000)
		{
			LogString("Client timeout, disconnecting (%d - %d = %d)",
				currentTime, clList->GetLastMessageTime(), currentTime - clList->GetLastMessageTime());

			// Build a 'fake' message so the application will also
			// receive notification of a client disconnecting
			dreamMessage mes;
			mes.Init(data, sizeof(data));
			mes.WriteByte(DREAMSOCK_MES_DISCONNECT);

			*(struct sockaddr *) from = *clList->GetSocketAddress();

			RemoveClient(clList);

			return mes.GetSize();
		}

		clList = next;
	}

	return 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamServer::GetPacket(char *data, struct sockaddr *from)
{
	// Check if the server is set up
	if(!socket)
		return 0;

	// Check for timeout
	int timeout = CheckForTimeout(data, from);

	if(timeout)
		return timeout;

	// Wait for a while or incoming data
	int maxfd = socket;
	fd_set allset;
	struct timeval waittime;

	waittime.tv_sec = 10 / 1000;
	waittime.tv_usec = (10 % 1000) * 1000;

	FD_ZERO(&allset); 
	FD_SET(socket, &allset);

	fd_set reading = allset;

	int nready = select(maxfd + 1, &reading, NULL, NULL, &waittime);

	if(!nready)
		return 0;

	// Read data of the socket
	int ret = 0;

	dreamMessage mes;
	mes.Init(data, sizeof(data));

	ret = dreamSock_GetPacket(socket, mes.data, from);

	if(ret <= 0)
		return 0;

	mes.SetSize(ret);

	// Parse system messages
	ParsePacket(&mes, from);

	return ret;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamServer::SendPackets(void)
{
	// Check if the server is set up
	if(!socket)
		return;

	dreamClient *clList = clientList;

	for( ; clList != NULL; clList = clList->next)
	{
		if(clList->message.GetSize() == 0)
			continue;

		clList->SendPacket();
	}
}

/***************

  dreamClient stuff

***************/

//-----------------------------------------------------------------------------
// Name: Constructor()
// Desc: 
//-----------------------------------------------------------------------------
dreamClient::dreamClient()
{
	connectionState	= DREAMSOCK_DISCONNECTED;

	outgoingSequence		= 1;
	incomingSequence		= 0;
	incomingAcknowledged	= 0;
	droppedPackets			= 0;

	init					= false;

	serverPort				= 0;

	pingSent				= 0;
	ping					= 0;

	lastMessageTime			= 0;

	next = NULL;
}

//-----------------------------------------------------------------------------
// Name: Deconstructor()
// Desc: 
//-----------------------------------------------------------------------------
dreamClient::~dreamClient()
{
	dreamSock_CloseSocket(socket);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamClient::Initialise(char *localIP, char *remoteIP, int port)
{
	// Initialise dreamSock if it is not already initialised
	dreamSock_Initialize();

	// Save server's address information for later use
	serverPort = port;
	strcpy(serverIP, remoteIP);

	LogString("Server's information: IP address: %s, port: %d", serverIP, serverPort);

	// Create client socket
	socket = dreamSock_OpenUDPSocket(localIP, 0);

	// Check that the address is not empty
	u_long inetAddr = inet_addr(serverIP);

	if(inetAddr == INADDR_NONE)
	{
		return DREAMSOCK_CLIENT_ERROR;
	}

	if(socket == DREAMSOCK_INVALID_SOCKET)
	{
		return DREAMSOCK_CLIENT_ERROR;
	}

	init = true;

	return 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamClient::Uninitialise(void)
{
	dreamSock_CloseSocket(socket);

	Reset();

	init = false;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamClient::Reset(void)
{
	connectionState = DREAMSOCK_DISCONNECTED;

	outgoingSequence		= 1;
	incomingSequence		= 0;
	incomingAcknowledged	= 0;
	droppedPackets			= 0;

	pingSent				= 0;
	ping					= 0;

	lastMessageTime			= 0;

	next = NULL;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamClient::DumpBuffer(void)
{
	char data[1400];
	int ret;

	while((ret = dreamSock_GetPacket(socket, data, NULL)) > 0)
	{
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamClient::SendConnect(char *name)
{
	// Dump buffer so there won't be any old packets to process
	DumpBuffer();

	connectionState = DREAMSOCK_CONNECTING;

	message.Init(message.outgoingData, sizeof(message.outgoingData));
	message.WriteByte(DREAMSOCK_MES_CONNECT);
	message.WriteString(name);

	SendPacket(&message);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamClient::SendDisconnect(void)
{
	message.Init(message.outgoingData, sizeof(message.outgoingData));
	message.WriteByte(DREAMSOCK_MES_DISCONNECT);

	SendPacket(&message);
	Reset();

	connectionState = DREAMSOCK_DISCONNECTING;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamClient::SendPing(void)
{
	pingSent = dreamSock_GetCurrentSystemTime();

	message.Init(message.outgoingData, sizeof(message.outgoingData));
	message.WriteByte(DREAMSOCK_MES_PING);

	SendPacket(&message);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamClient::ParsePacket(dreamMessage *mes)
{
	mes->BeginReading();
	int type = mes->ReadByte();

	// Check if the type is a positive number
	// = is the packet sequenced
	if(type > 0)
	{
		unsigned short sequence		= mes->ReadShort();
		unsigned short sequenceAck	= mes->ReadShort();

		if(sequence <= incomingSequence)
		{
			LogString("Client: (sequence: %d <= incoming seq: %d)",
				sequence, incomingSequence);

			LogString("Client: Sequence mismatch");
		}

		droppedPackets = sequence - incomingSequence + 1;

		incomingSequence = sequence;
		incomingAcknowledged = sequenceAck;
	}

	// Parse trough the system messages
	switch(type)
	{
	case DREAMSOCK_MES_CONNECT:
		connectionState = DREAMSOCK_CONNECTED;

		LogString("LIBRARY: Client: got connect confirmation");
		break;

	case DREAMSOCK_MES_DISCONNECT:
		connectionState = DREAMSOCK_DISCONNECTED;

		LogString("LIBRARY: Client: got disconnect confirmation");
		break;

	case DREAMSOCK_MES_ADDCLIENT:
		LogString("LIBRARY: Client: adding a client");
		break;

	case DREAMSOCK_MES_REMOVECLIENT:
		LogString("LIBRARY: Client: removing a client");
		break;

	case DREAMSOCK_MES_PING:
		SendPing();
		break;
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamClient::GetPacket(char *data, struct sockaddr *from)
{
	// Check if the client is set up or if it is disconnecting
	if(!socket)
		return 0;

	int ret;

	dreamMessage mes;
	mes.Init(data, sizeof(data));

	ret = dreamSock_GetPacket(socket, mes.data, from);

	if(ret <= 0)
		return 0;

	mes.SetSize(ret);

	// Parse system messages
	ParsePacket(&mes);

	return ret;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamClient::SendPacket(void)
{
	// Check that everything is set up
	if(!socket || connectionState == DREAMSOCK_DISCONNECTED)
	{
		LogString("SendPacket error: Could not send because the client is disconnected");
		return;
	}

	// If the message overflowed, do not send it
	if(message.GetOverFlow())
	{
		LogString("SendPacket error: Could not send because the buffer overflowed");
		return;
	}

	// Check if serverPort is set. If it is, we are a client sending to the server.
	// Otherwise we are a server sending to a client.
	if(serverPort)
	{
		struct sockaddr_in sendToAddress;
		memset((char *) &sendToAddress, 0, sizeof(sendToAddress));

		u_long inetAddr = inet_addr(serverIP);
		sendToAddress.sin_port = htons((u_short) serverPort);
		sendToAddress.sin_family = AF_INET;
		sendToAddress.sin_addr.s_addr = inetAddr;

		dreamSock_SendPacket(socket, message.GetSize(), message.data,
			*(struct sockaddr *) &sendToAddress);
	}
	else
	{
		dreamSock_SendPacket(socket, message.GetSize(), message.data, myaddress);
	}

	// Check if the packet is sequenced
	message.BeginReading();
	int type = message.ReadByte();

	if(type > 0)
	{
		outgoingSequence++;
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamClient::SendPacket(dreamMessage *theMes)
{
	// Check that everything is set up
	if(!socket || connectionState == DREAMSOCK_DISCONNECTED)
	{
		LogString("SendPacket error: Could not send because the client is disconnected");
		return;
	}

	// If the message overflowed do not send it
	if(theMes->GetOverFlow())
	{
		LogString("SendPacket error: Could not send because the buffer overflowed");
		return;
	}

	// Check if serverPort is set. If it is, we are a client sending to the server.
	// Otherwise we are a server sending to a client.
	if(serverPort)
	{
		struct sockaddr_in sendToAddress;
		memset((char *) &sendToAddress, 0, sizeof(sendToAddress));

		u_long inetAddr = inet_addr(serverIP);
		sendToAddress.sin_port = htons((u_short) serverPort);
		sendToAddress.sin_family = AF_INET;
		sendToAddress.sin_addr.s_addr = inetAddr;

		dreamSock_SendPacket(socket, theMes->GetSize(), theMes->data,
			*(struct sockaddr *) &sendToAddress);
	}
	else
	{
		dreamSock_SendPacket(socket, theMes->GetSize(), theMes->data, myaddress);
	}

	// Check if the packet is sequenced
	theMes->BeginReading();
	int type = theMes->ReadByte();

	if(type > 0)
	{
		outgoingSequence++;
	}
}

/***************

 Message Buffer

****************/

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::Init(char *d, int length)
{
	data		= d;
	maxSize		= length;
	size		= 0;
	readCount	= 0;
	overFlow	= false;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::Clear(void)
{
	size		= 0;
	readCount	= 0;
	overFlow	= false;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
char *dreamMessage::GetNewPoint(int length)
{
	char *tempData;

	// Check for overflow
	if(size + length > maxSize)
	{
		Clear(); 
		overFlow = true;
	}

	tempData = data + size;
	size += length;

	return tempData;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::AddSequences(dreamClient *client)
{
	WriteShort(client->GetOutgoingSequence());
	WriteShort(client->GetIncomingSequence());
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::Write(void *d, int length)
{
	memcpy(GetNewPoint(length), d, length);		
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::WriteByte(char c)
{
	char *buf;

	buf = GetNewPoint(1);

	memcpy(buf, &c, 1);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::WriteShort(short c)
{
	char *buf;

	buf = GetNewPoint(2);

	memcpy(buf, &c, 2);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::WriteLong(long c)
{
	char *buf;
	
	buf = GetNewPoint(4);

	memcpy(buf, &c, 4);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::WriteFloat(float c)
{
	char *buf;
	
	buf = GetNewPoint(4);

	memcpy(buf, &c, 4);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::WriteString(char *s)
{
	if(!s)
	{
		return;
	}
	else
		Write(s, strlen(s) + 1);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::BeginReading(void)
{
	readCount = 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamMessage::BeginReading(int s)
{
	size = s;
	readCount = 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
char *dreamMessage::Read(int s)
{
	static char c[2048];

	if(readCount+s > size)
		return NULL;
	else
		memcpy(&c, &data[readCount], s);

	readCount += s;

	return c;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
char dreamMessage::ReadByte(void)
{
	char c;

	if(readCount+1 > size)
		c = -1;
	else
		memcpy(&c, &data[readCount], 1);

	readCount++;

	return c;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
short dreamMessage::ReadShort(void)
{
	short c;

	if(readCount+2 > size)
		c = -1;
	else		
		memcpy(&c, &data[readCount], 2);

	readCount += 2;

	return c;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
long dreamMessage::ReadLong(void)
{
	long c;

	if(readCount+4 > size)
		c = -1;
	else
		memcpy(&c, &data[readCount], 4);

	readCount += 4;

	return c;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
float dreamMessage::ReadFloat(void)
{
	float c;

	if(readCount+4 > size)
		c = -1;
	else
		memcpy(&c, &data[readCount], 4);

	readCount += 4;

	return c;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
char *dreamMessage::ReadString(void)
{
	static char string[2048];
	int	l, c;

	l = 0;

	do
	{
		c = ReadByte();

		if (c == -1 || c == 0)
			break;

		string[l] = c;
		l++;
	} while(l < sizeof(string)-1);

	string[l] = 0;

	return string;
}
