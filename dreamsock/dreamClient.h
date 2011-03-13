#ifndef __DREAMCLIENT_H
#define __DREAMCLIENT_H

#include "dreamConsole.h"
#include "dreamMessage.h"


#ifdef WIN32
	#pragma comment (lib,"ws2_32.lib")
	#pragma message ("Auto linking WinSock2 library")

	#include <winsock2.h>
#else
	#include <string.h>
	#include <netinet/in.h>
#endif

#include <stdio.h>
#include <stddef.h>

// Define SOCKET data type for UNIX (defined in WinSock for Win32)
// And socklen_t for Win32
#ifdef WIN32
	typedef int socklen_t;
#else
	typedef int SOCKET;

	#ifndef TRUE
	#define TRUE 1
	#endif
	#ifndef FALSE
	#define FALSE 0
	#endif
#endif


#ifdef WIN32
	#define DreamSock_INVALID_SOCKET	INVALID_SOCKET
#else
	#define DreamSock_INVALID_SOCKET	-1
#endif

// Introduce classes
class DreamSock;

class DreamClient
{
private:
	void		DumpBuffer(void);
	void		ParsePacket(DreamMessage *mes);

	int		connectionState;		// Connecting, connected, disconnecting, disconnected

	unsigned short	outgoingSequence;		// Outgoing packet sequence
	unsigned short	incomingSequence;		// Incoming packet sequence
	unsigned short	incomingAcknowledged;	// Last packet acknowledged by other end
	unsigned short	droppedPackets;			// Dropped packets

	int		serverPort;				// Port
	char		serverIP[32];			// IP address
	int		index;					// Client index (starts from 1, running number)
	char	        name[32];				// Client name

	SOCKET		socket;					// Socket
	struct sockaddr	myaddress;				// Socket address

	int		pingSent;				// When did we send ping?
	int		ping;					// Network latency

	int		lastMessageTime;

	bool		init;

public:
	DreamClient();
	~DreamClient();

	int		Initialise(const char *localIP, const char *remoteIP, int port);
	void		Uninitialise(void);
	void		Reset(void);
	void		SendConnect(const char *name);
	void		SendDisconnect(void);
	void		SendPing(void);

	void		SetConnectionState(int con)		{ connectionState = con; }
	int		GetConnectionState(void)		{ return connectionState; }

	int		GetPacket(char *data, struct sockaddr *from);
	void		SendPacket(void);
	void		SendPacket(DreamMessage *message);

	unsigned short	GetOutgoingSequence(void)				{ return outgoingSequence; }
	void		SetOutgoingSequence(unsigned short seq)	{ outgoingSequence = seq; }
	void		IncreaseOutgoingSequence(void)			{ outgoingSequence++; }
	unsigned short	GetIncomingSequence(void)				{ return incomingSequence; }
	void		SetIncomingSequence(unsigned short seq)	{ incomingSequence = seq; }
	unsigned short	GetIncomingAcknowledged(void)			{ return incomingAcknowledged; }
	void		SetIncomingAcknowledged(unsigned short seq) { incomingAcknowledged = seq; } 
	unsigned short	GetDroppedPackets(void)					{ return droppedPackets; }
	void		SetDroppedPackets(unsigned short drop)	{ droppedPackets = drop; }

	bool		GetInit(void)			{ return init; }

	int		GetIndex(void)			{ return index; }
	void		SetIndex(int ind)		{ index = ind; }

	const char*	GetName(void)			{ return name; }

#ifdef WIN32
	void		SetName(char *n)		{ strncpy_s(name, n, 32); }
#else
	void		SetName(char *n)		{ strncpy(name, n, 32); }
#endif

	SOCKET		GetSocket(void)			{ return socket; }
	void		SetSocket(SOCKET sock)	{ socket = sock; }

	struct sockaddr *GetSocketAddress(void) { return &myaddress; }
	void		SetSocketAddress(struct sockaddr *address) { memcpy(&myaddress, address, sizeof(struct sockaddr)); }

	int		GetPingSent(void)		{ return pingSent; }
	void		SetPing(int p)			{ ping = p; }

	int		GetLastMessageTime(void) { return lastMessageTime; }
	void		SetLastMessageTime(int t) { lastMessageTime = t; }

	DreamMessage	message;
	DreamClient	*next;
	DreamSock*      dreamSock;
};

#endif
