#include "dreamSock.h"

#ifdef WIN32
// Windows specific headers
	#ifndef _WINSOCKAPI_
	#define _WINSOCKAPI_
	#endif
	#include <windows.h>
	#include <winsock2.h>
#else
// UNIX specific headers
	#include <memory.h>
	#include <errno.h>
	#include <unistd.h>
	#include <sys/ioctl.h>
	#include <sys/socket.h>
	#include <sys/time.h>
	#include <netinet/in.h>
	#include <arpa/inet.h>
	#include <netdb.h>
#endif

#include <stdlib.h>
#include <stdio.h>

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
SOCKET dreamSock_Socket(int protocol)
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

#ifdef WIN32
		errno = WSAGetLastError();
		LogString("Error: socket() code %d : %s", errno, strerror(errno));
#else
		LogString("Error: socket() : %s", strerror(errno));
#endif

		return DREAMSOCK_INVALID_SOCKET;
	}

	return sock;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamSock_SetNonBlocking(SOCKET sock, u_long setMode)
{
	u_long set = setMode;

	// Set the socket option
#ifdef WIN32
	return ioctlsocket(sock, FIONBIO, &set);
#else
	return ioctl(sock, FIONBIO, &set);
#endif
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamSock_SetBroadcasting(SOCKET sock, int mode)
{
	// make it broadcast capable
	if(setsockopt(sock, SOL_SOCKET, SO_BROADCAST, (char *) &mode, sizeof(int)) == -1)
	{
		LogString("DreamSock_SetBroadcasting failed");

#ifdef WIN32
		int err = WSAGetLastError();
		LogString("Error code %d: setsockopt() : %s", err, strerror(err));
#else
		LogString("Error code %d: setsockopt() : %s", errno, strerror(errno));
#endif

		return DREAMSOCK_INVALID_SOCKET;
	}

	return 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamSock_StringToSockaddr(char *addressString, struct sockaddr *sadr)
{
	char copy[128];

	memset(sadr, 0, sizeof(struct sockaddr));

	struct sockaddr_in *addressPtr = (struct sockaddr_in *) sadr;

	addressPtr->sin_family = AF_INET;
	addressPtr->sin_port = htons(0);

	strcpy(copy, addressString);

	// If the address string begins with a number, assume an IP address
	if(copy[0] >= '0' && copy[0] <= '9')
	{
		*(int *) &addressPtr->sin_addr = inet_addr(copy);
		return 0;
	}
	else return 1;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
SOCKET dreamSock_OpenUDPSocket(char *netInterface, int port)
{
	SOCKET sock;

	struct sockaddr_in address;

	sock = dreamSock_Socket(DREAMSOCK_UDP);

	if(sock == DREAMSOCK_INVALID_SOCKET)
		return sock;

	dreamSock_SetNonBlocking(sock, 1);
	dreamSock_SetBroadcasting(sock, 1);

	// If no address string provided, use any interface available
	if(!netInterface || !netInterface[0] || !strcmp(netInterface, "localhost"))
	{
		LogString("No net interface given, using any interface available");
		address.sin_addr.s_addr = htonl(INADDR_ANY);
	}
	else
	{
		LogString("Using net interface = '%s'", netInterface);
		dreamSock_StringToSockaddr(netInterface, (struct sockaddr *) &address);
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
#ifdef WIN32
		errno = WSAGetLastError();
		LogString("Error code %d: bind() : %s", errno, strerror(errno));
#else
		LogString("Error code %d: bind() : %s", errno, strerror(errno));
#endif

		return DREAMSOCK_INVALID_SOCKET;
	}

	// Get the port number (if we did not define one, we get the assigned port number here)
	socklen_t len = sizeof(address);
	getsockname(sock, (struct sockaddr *) &address, &len);

	LogString("Opening UDP port = %d", ntohs(address.sin_port));

	return sock;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamSock_CloseSocket(SOCKET sock)
{
#ifdef WIN32
		closesocket(sock);
#else
		close(sock);
#endif
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamSock_GetPacket(SOCKET sock, char *data, struct sockaddr *from)
{
	int ret;
	struct sockaddr tempFrom;
	socklen_t fromlen;

	fromlen = sizeof(tempFrom);

	ret = recvfrom(sock, data, 1400, 0, (struct sockaddr *) &tempFrom, &fromlen);

	// Copy the address to the from pointer
	if(from != NULL)
		*(struct sockaddr *) from = tempFrom;

	if(ret == -1)
	{
#ifdef WIN32
		errno = WSAGetLastError();

		// Silently handle wouldblock
		if(errno == WSAEWOULDBLOCK)
			return ret;

		if(errno == WSAEMSGSIZE)
		{
			// ERROR: Oversize packet

			return ret;
		}

		LogString("Error code %d: recvfrom() : %s", errno, strerror(errno));
#else
		// Silently handle wouldblock
		if(errno == EWOULDBLOCK || errno == ECONNREFUSED)
			return ret;

		LogString("Error code %d: recvfrom() : %s", errno, strerror(errno));
#endif

		return ret;
	}

	return ret;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamSock_SendPacket(SOCKET sock, int length, char *data, struct sockaddr addr)
{
	int	ret;

	ret = sendto(sock, data, length, 0, &addr, sizeof(addr));

	if(ret == -1)
	{
#ifdef WIN32
		errno = WSAGetLastError();

		// Silently handle wouldblock
		if(errno == WSAEWOULDBLOCK)
			return;

		LogString("Error code %d: sendto() : %s", errno, strerror(errno));
#else
		// Silently handle wouldblock
		if(errno == EWOULDBLOCK)
			return;

		LogString("Error code %d: sendto() : %s", errno, strerror(errno));
#endif
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void dreamSock_Broadcast(SOCKET sock, int length, char *data, int port)
{
	struct sockaddr_in servaddr;
	socklen_t len;

	// Use broadcast address
	u_long inetAddr = inet_addr("255.255.255.255");

	// Fill address information structure
	memset(&servaddr, 0, sizeof(struct sockaddr_in));
	servaddr.sin_family		= AF_INET;
	servaddr.sin_port		= htons(port);	
	servaddr.sin_addr.s_addr = inetAddr;

	len = sizeof(servaddr);

	// Broadcast!
	int ret = sendto(sock, data, length, 0, (struct sockaddr *) &servaddr, len);

	if(ret == -1)
	{
#ifdef WIN32
		errno = WSAGetLastError();

		// Silently handle wouldblock
		if(errno == WSAEWOULDBLOCK)
			return;

		LogString("Error code %d: sendto() : %s", errno, strerror(errno));
#else
		// Silently handle wouldblock
		if(errno == EWOULDBLOCK)
			return;

		LogString("Error code %d: sendto() : %s", errno, strerror(errno));
#endif
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
int dreamSock_GetCurrentSystemTime(void)
{
#ifndef WIN32
	return dreamSock_Linux_GetCurrentSystemTime();
#else
	return dreamSock_Win_GetCurrentSystemTime();
#endif
}
