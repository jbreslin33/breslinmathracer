#include "network.h"

#include "../../message/message.h"
#include "../server/server.h"
#include "../tdreamsock/dreamSockLog.h"

#include <stdio.h>
#include <memory.h>
#include <malloc.h>
#include <errno.h>
#include <unistd.h>
#include <netinet/in.h>
#include <sys/socket.h>
#include <sys/time.h>
#include <sys/ioctl.h>
#include <sys/types.h>
#include <sys/wait.h>
#include <arpa/inet.h>
#include <pthread.h>
#include <signal.h>
#include "../tdreamsock/dreamLinuxSock.h"

#include "../client/robust/clientRobust.h"

//for string
#include <string>
using namespace std;

Network::Network(Server* server, const char netInterface[32], int port)
{
	mServer = server;	
	mDreamLinuxSock = new DreamLinuxSock();

	mSocket = openUDPSocket(netInterface, port);

	if(mSocket == DREAMSOCK_INVALID_SOCKET)
	{
		//return DREAMSOCK_SERVER_ERROR;
		LogString("ERROR IN CONSTRUCTOR OF SERVER, INVALID SOCKET");
	}
}

Network::~Network()
{
	delete mDreamLinuxSock;
}

void Network::shutdown(void)
{
	LogString("Shutting down dreamSock");
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
SOCKET Network::createSocket(int protocol)
{
	int type;
	int proto;
	SOCKET sock;

	// Check which protocol to use
	if(protocol == DREAMSOCK_TCP)
	{
		type = SOCK_STREAM;
		proto = IPPROTO_TCP;
	}
	else
	{
		type = SOCK_DGRAM;
		proto = IPPROTO_UDP;
	}

	// Create the socket
	if((sock = socket(AF_INET, type, proto)) == -1)
	{
		LogString("dreamSock_Socket - socket() failed");
		LogString("Error: socket() : %s", strerror(errno));
		return DREAMSOCK_INVALID_SOCKET;
	}

	return sock;
}

int Network::setNonBlocking(SOCKET sock, u_long setMode)
{
	u_long set = setMode;

	// Set the socket option
	return ioctl(sock, FIONBIO, &set);
}

int Network::stringToSockaddr(const char *addressString, struct sockaddr *sadr)
{
	char copy[128];

	memset(sadr, 0, sizeof(struct sockaddr));

	struct sockaddr_in *addressPtr = (struct sockaddr_in *) sadr;

	addressPtr->sin_family = AF_INET;
	addressPtr->sin_port = htons(0);
	strcpy(copy,addressString);
	
	// If the address string begins with a number, assume an IP address
	if(copy[0] >= '0' && copy[0] <= '9')
	{
		*(int *) &addressPtr->sin_addr = inet_addr(copy);
		return 0;
	}
	else return 1;
}

SOCKET Network::openUDPSocket(const char *netInterface, int port)
{
	SOCKET sock;

	struct sockaddr_in address;

	sock = createSocket(DREAMSOCK_UDP);

	if(sock == DREAMSOCK_INVALID_SOCKET)
		return sock;

	setNonBlocking(sock, 1);
	setBroadcasting(sock, 1);

	// If no address string provided, use any interface available
	if(!netInterface || !netInterface[0] || !strcmp(netInterface, "localhost"))
	{
		LogString("No net interface given, using any interface available");
		address.sin_addr.s_addr = htonl(INADDR_ANY);
	}
	else
	{
		LogString("Using net interface = '%s'", netInterface);
		stringToSockaddr(netInterface, (struct sockaddr *) &address);
	}

	// If no port number provided, use any port number available
	if(port == 0)
	{
		LogString("No port defined, picking one for you");
		address.sin_port = 0;
	}
	else
	{
		address.sin_port = htons((short) port);
	}

	address.sin_family = AF_INET;

	// Bind the address to the socket
	if(bind(sock, (struct sockaddr *) &address, sizeof(address)) == -1)
	{
		LogString("Error code %d: bind() : %s", errno, strerror(errno));
		return DREAMSOCK_INVALID_SOCKET;
	}

	// Get the port number (if we did not define one, we get the assigned port number here)
	socklen_t len = sizeof(address);
	getsockname(sock, (struct sockaddr *) &address, &len);

	LogString("Opening UDP port = %d", ntohs(address.sin_port));

	return sock;
}
int Network::setBroadcasting(SOCKET sock, int mode)
{
	// make it broadcast capable
	if(setsockopt(sock, SOL_SOCKET, SO_BROADCAST, (char *) &mode, sizeof(int)) == -1)
	{
		LogString("DreamSock_SetBroadcasting failed");
		LogString("Error code %d: setsockopt() : %s", errno, strerror(errno));
		return DREAMSOCK_INVALID_SOCKET;
	}
	return 0;
}

void Network::closeSocket(SOCKET sock)
{
#ifdef WIN32
		closesocket(sock);
#else
		close(sock);
#endif
}

int Network::getPacket(SOCKET sock, char *data, struct sockaddr *from)
{
	int ret;
	struct sockaddr tempFrom;
	socklen_t fromlen;

	fromlen = sizeof(tempFrom);

	ret = recvfrom(sock, data, 1400, 0, (struct sockaddr *) &tempFrom, &fromlen);
	// Copy the address to the from pointer
	if(from != NULL)
	{
		*(struct sockaddr *) from = tempFrom;
	}
	else
	{
		LogString("from is NULL");
	}
	if(ret == -1)
	{
		// Silently handle wouldblock
		if(errno == EWOULDBLOCK || errno == ECONNREFUSED)
			return ret;

		LogString("Error code %d: recvfrom() : %s", errno, strerror(errno));
		return ret;
	}
	return ret;
}
void Network::broadcast(Message* message)
{
 	if(!mSocket)
	{
                return;
	}

        for (unsigned int i = 0; i < mServer->mClientVector.size(); i++)
        {
                if(message->GetSize() == 0)
		{
                        continue;
		}

                //is the a browser client but not THE browser client which is -1 normal c++ clients are 0 if so skip

                if(mServer->mClientVector.at(i)->mClientID > 0)
		{
                        continue;
		}
                sendPacketTo(mServer->mClientVector.at(i),message);
        }
}

void Network::sendPacketTo(Client* client, Message* message)
{
	// Check that everything is set up
        if(!mSocket || client->mConnectionState == DREAMSOCK_DISCONNECTED)
        {
                //LogString("SendPacket error: Could not send because the client is disconnected");
                return;
        }

        // If the message overflowed do not send it
        if(message->GetOverFlow())
        {
                LogString("SendPacket error: Could not send because the buffer overflowed");
                return;
        }

	int	ret;
	
	ret = sendto(mSocket, message->data, message->GetSize(), 0, &client->mSocketAddress, sizeof(client->mSocketAddress));
	
	if(ret == -1)
	{
		// Silently handle wouldblock
		if(errno == EWOULDBLOCK)
			return;

		LogString("Error code %d: sendto() : %s", errno, strerror(errno));
	}
 	
	// Check if the packet is sequenced
        message->BeginReading();
        int type = message->ReadByte();

        if(type > 0)
        {
                mServer->mOutgoingSequence++;
		//LogString("mOutgoingSequence:%d",mServer->mOutgoingSequence);
        }
}

int Network::getCurrentSystemTime()
{
	return mDreamLinuxSock->getCurrentSystemTime();
}
