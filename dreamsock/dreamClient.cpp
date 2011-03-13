#include "dreamClient.h"
#include "dreamSock.h"

#ifdef WIN32

#else
#include <sys/socket.h>
#include <netinet/in.h>
#include <arpa/inet.h>
#endif

DreamClient::DreamClient()
{
	dreamSock  		= new DreamSock();

	connectionState		= DREAMSOCK_DISCONNECTED;

	outgoingSequence	= 1;
	incomingSequence	= 0;
	incomingAcknowledged	= 0;
	droppedPackets		= 0;

	init			= false;

	serverPort		= 0;

	pingSent		= 0;
	ping			= 0;

	lastMessageTime		= 0;

	next 			= NULL;
}

//-----------------------------------------------------------------------------
// Name: Deconstructor()
// Desc: 
//-----------------------------------------------------------------------------
DreamClient::~DreamClient()
{
	dreamSock->dreamSock_CloseSocket(socket);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int DreamClient::Initialise(const char *localIP, const char *remoteIP, int port)
{
	// Initialise DreamSock if it is not already initialised
	dreamSock->dreamSock_Initialize();

	// Save server's address information for later use
	serverPort = port;
#ifdef WIN32	
	strncpy_s(serverIP, remoteIP, 32);
#else
	strncpy(serverIP, remoteIP, 32);
#endif
	LogString("Server's information: IP address: %s, port: %d", serverIP, serverPort);

	// Create client socket
	socket = dreamSock->dreamSock_OpenUDPSocket(localIP, 0);

	// Check that the address is not empty
	u_long inetAddr = inet_addr(serverIP);

	if(inetAddr == INADDR_NONE)
	{
		return DREAMSOCK_CLIENT_ERROR;
	}

	if(socket == DreamSock_INVALID_SOCKET)
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
void DreamClient::Uninitialise(void)
{
	dreamSock->dreamSock_CloseSocket(socket);

	Reset();

	init = false;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamClient::Reset(void)
{
	connectionState = DREAMSOCK_DISCONNECTED;

	outgoingSequence	= 1;
	incomingSequence	= 0;
	incomingAcknowledged	= 0;
	droppedPackets		= 0;

	pingSent		= 0;
	ping			= 0;

	lastMessageTime		= 0;

	next 			= NULL;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamClient::DumpBuffer(void)
{
	char data[1400];
	int ret;

	while((ret = dreamSock->dreamSock_GetPacket(socket, data, NULL)) > 0)
	{
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamClient::SendConnect(const char *name)
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
void DreamClient::SendDisconnect(void)
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
void DreamClient::SendPing(void)
{
	pingSent = dreamSock->dreamSock_GetCurrentSystemTime();

	message.Init(message.outgoingData, sizeof(message.outgoingData));
	message.WriteByte(DREAMSOCK_MES_PING);

	SendPacket(&message);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamClient::ParsePacket(DreamMessage *mes)
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
int DreamClient::GetPacket(char *data, struct sockaddr *from)
{
	// Check if the client is set up or if it is disconnecting
	if(!socket)
		return 0;

	int ret;

	DreamMessage mes;
	mes.Init(data, sizeof(data));

	ret = dreamSock->dreamSock_GetPacket(socket, mes.data, from);

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
void DreamClient::SendPacket(void)
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

		dreamSock->dreamSock_SendPacket(socket, message.GetSize(), message.data,
			*(struct sockaddr *) &sendToAddress);
	}
	else
	{
		dreamSock->dreamSock_SendPacket(socket, message.GetSize(), message.data, myaddress);
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
void DreamClient::SendPacket(DreamMessage *theMes)
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

		dreamSock->dreamSock_SendPacket(socket, theMes->GetSize(), theMes->data,
			*(struct sockaddr *) &sendToAddress);
	}
	else
	{
		dreamSock->dreamSock_SendPacket(socket, theMes->GetSize(), theMes->data, myaddress);
	}

	// Check if the packet is sequenced
	theMes->BeginReading();
	int type = theMes->ReadByte();

	if(type > 0)
	{
		outgoingSequence++;
	}
}
