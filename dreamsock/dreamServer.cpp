#include "dreamServer.h"
#include "dreamClient.h"

//#define WIN32

#ifdef WIN32
// Windows specific headers
	#ifndef _WINSOCKAPI_
	#define _WINSOCKAPI_
	#endif

#ifdef WIN32

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
#include "dreamConsole.h"


//-----------------------------------------------------------------------------
// Name: Constructor()
// Desc: 
//-----------------------------------------------------------------------------
DreamServer::DreamServer()
{

	dreamSock = new DreamSock();
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
DreamServer::~DreamServer()
{
	DreamClient *list = clientList;
	DreamClient *next;

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

	dreamSock->dreamSock_CloseSocket(socket);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int DreamServer::Initialise(const char *localIP, int serverPort)
{
	// Initialise DreamSock if it is not already initialised
	dreamSock->dreamSock_Initialize();

	// Store the server IP and port for later use
	port = serverPort;

	// Create server socket
	socket = dreamSock->dreamSock_OpenUDPSocket(localIP, port);

	if(socket == DreamSock_INVALID_SOCKET)
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
void DreamServer::Uninitialise(void)
{
	dreamSock->dreamSock_CloseSocket(socket);

	init = false;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamServer::SendAddClient(DreamClient *newClient)
{
	// Send connection confirmation
	newClient->message.Init(newClient->message.outgoingData,
		sizeof(newClient->message.outgoingData));

	newClient->message.WriteByte(DREAMSOCK_MES_CONNECT);	// type
	newClient->SendPacket();

	// Send 'Add client' message to every client
	DreamClient *client = clientList;

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
void DreamServer::SendRemoveClient(DreamClient *client)
{
	int index = client->GetIndex();

	// Send 'Remove client' message to every client
	DreamClient *list = clientList;

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
void DreamServer::SendPing(void)
{
	// Send ping message to every client
	DreamClient *list = clientList;

	for( ; list != NULL; list = list->next)
	{
		list->SendPing();
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamServer::AddClient(struct sockaddr *address, char *name)
{
	// First get a pointer to the beginning of client list
	DreamClient *list = clientList;
	DreamClient *prev;
	DreamClient *newClient;

	LogString("LIB: Adding client, index %d", runningIndex);

	// No clients yet, adding the first one
	if(clientList == NULL)
	{
		LogString("LIB: Server: Adding first client");

		clientList = (DreamClient *) calloc(1, sizeof(DreamClient));

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

		list = (DreamClient *) calloc(1, sizeof(DreamClient));

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
void DreamServer::RemoveClient(DreamClient *client)
{
	DreamClient *list = NULL;
	DreamClient *prev = NULL;
	DreamClient *next = NULL;

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
void DreamServer::ParsePacket(DreamMessage *mes, struct sockaddr *address)
{
	mes->BeginReading();
	int type = mes->ReadByte();

	// Find the correct client by comparing addresses
	DreamClient *clList = clientList;

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
			clList->SetLastMessageTime(dreamSock->dreamSock_GetCurrentSystemTime());

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

	case DreamSock_MES_PING:
		clList->SetPing(dreamSock->dreamSock_GetCurrentSystemTime() - clList->GetPingSent());
		break;
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int DreamServer::CheckForTimeout(char *data, struct sockaddr *from)
{
	int currentTime = dreamSock->dreamSock_GetCurrentSystemTime();

	DreamClient *clList = clientList;
	DreamClient *next;

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
			DreamMessage mes;
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
int DreamServer::GetPacket(char *data, struct sockaddr *from)
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

	DreamMessage mes;
	mes.Init(data, sizeof(data));

	ret = dreamSock->dreamSock_GetPacket(socket, mes.data, from);

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
void DreamServer::SendPackets(void)
{
	// Check if the server is set up
	if(!socket)
		return;

	DreamClient *clList = clientList;

	for( ; clList != NULL; clList = clList->next)
	{
		if(clList->message.GetSize() == 0)
			continue;

		clList->SendPacket();
	}
}
