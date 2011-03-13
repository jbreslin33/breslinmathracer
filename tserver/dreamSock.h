#ifndef __DREAMSOCK_H
#define __DREAMSOCK_H

#include "dreamSockLog.h"

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

// Host types
#define DREAMSERVER						-1
#define DREAMCLIENT						0

// Connection protocols
#define DREAMSOCK_TCP					0
#define DREAMSOCK_UDP					1

// Connection states
#define DREAMSOCK_CONNECTING			0
#define DREAMSOCK_CONNECTED				1
#define DREAMSOCK_DISCONNECTING			2
#define DREAMSOCK_DISCONNECTED			4

// Error codes
#define DREAMSOCK_SERVER_ERROR			1
#define DREAMSOCK_CLIENT_ERROR			2

#ifdef WIN32
	#define DREAMSOCK_INVALID_SOCKET	INVALID_SOCKET
#else
	#define DREAMSOCK_INVALID_SOCKET	-1
#endif

// System messages
// Note (for all messages - system and user):
// positive = sequenced message
// negative = un-sequenced message
#define DREAMSOCK_MES_CONNECT		-101
#define DREAMSOCK_MES_DISCONNECT	-102
#define DREAMSOCK_MES_ADDCLIENT		-103
#define DREAMSOCK_MES_REMOVECLIENT	-104
#define DREAMSOCK_MES_PING			-105

// Introduce classes
class dreamMessage;
class dreamClient;
class dreamServer;
class dreamSock;

class dreamMessage
{
private:
	bool			overFlow;
	int				maxSize;
	int				size;
	int				readCount;

	char			*GetNewPoint(int length);

public:
	void			Init(char *d, int length);
	void			Clear(void);
	void			Write(void *d, int length);
	void			AddSequences(dreamClient *client);

	void			WriteByte(char c);
	void			WriteShort(short c);
	void			WriteLong(long c);
	void			WriteFloat(float c);
	void			WriteString(char *s);
	void			BeginReading(void);
	void			BeginReading(int s);
	char			*Read(int s);
	char			ReadByte(void);
	short			ReadShort(void);
	long			ReadLong(void);
	float			ReadFloat(void);
	char			*ReadString(void);

	bool			GetOverFlow(void)	{ return overFlow; }
	int				GetSize(void)		{ return size; }
	void			SetSize(int s)		{ size = s; }

	char			*data;
	char			outgoingData[1400];
};

class dreamClient
{
private:
	void			DumpBuffer(void);
	void			ParsePacket(dreamMessage *mes);

	int				connectionState;		// Connecting, connected, disconnecting, disconnected

	unsigned short	outgoingSequence;		// Outgoing packet sequence
	unsigned short	incomingSequence;		// Incoming packet sequence
	unsigned short	incomingAcknowledged;	// Last packet acknowledged by other end
	unsigned short	droppedPackets;			// Dropped packets

	int				serverPort;				// Port
	char			serverIP[32];			// IP address
	int				index;					// Client index (starts from 1, running number)
	char			name[32];				// Client name

	SOCKET			socket;					// Socket
	struct sockaddr	myaddress;				// Socket address

	int				pingSent;				// When did we send ping?
	int				ping;					// Network latency

	int				lastMessageTime;

	bool			init;

public:
					dreamClient();
					~dreamClient();

	int				Initialise(char *localIP, char *remoteIP, int port);
	void			Uninitialise(void);
	void			Reset(void);
	void			SendConnect(char *name);
	void			SendDisconnect(void);
	void			SendPing(void);

	void			SetConnectionState(int con)		{ connectionState = con; }
	int				GetConnectionState(void)		{ return connectionState; }

	int				GetPacket(char *data, struct sockaddr *from);
	void			SendPacket(void);
	void			SendPacket(dreamMessage *message);

	unsigned short	GetOutgoingSequence(void)				{ return outgoingSequence; }
	void			SetOutgoingSequence(unsigned short seq)	{ outgoingSequence = seq; }
	void			IncreaseOutgoingSequence(void)			{ outgoingSequence++; }
	unsigned short	GetIncomingSequence(void)				{ return incomingSequence; }
	void			SetIncomingSequence(unsigned short seq)	{ incomingSequence = seq; }
	unsigned short	GetIncomingAcknowledged(void)			{ return incomingAcknowledged; }
	void			SetIncomingAcknowledged(unsigned short seq) { incomingAcknowledged = seq; }
	unsigned short	GetDroppedPackets(void)					{ return droppedPackets; }
	void			SetDroppedPackets(unsigned short drop)	{ droppedPackets = drop; }

	bool			GetInit(void)			{ return init; }

	int				GetIndex(void)			{ return index; }
	void			SetIndex(int ind)		{ index = ind; }

	char			*GetName(void)			{ return name; }
	void			SetName(char *n)		{ strcpy(name, n); }

	SOCKET			GetSocket(void)			{ return socket; }
	void			SetSocket(SOCKET sock)	{ socket = sock; }

	struct sockaddr *GetSocketAddress(void) { return &myaddress; }
	void			SetSocketAddress(struct sockaddr *address) { memcpy(&myaddress, address, sizeof(struct sockaddr)); }

	int				GetPingSent(void)		{ return pingSent; }
	void			SetPing(int p)			{ ping = p; }

	int				GetLastMessageTime(void) { return lastMessageTime; }
	void			SetLastMessageTime(int t) { lastMessageTime = t; }

	dreamMessage	message;
	dreamClient		*next;
};

class dreamServer
{
private:
	void			SendAddClient(dreamClient *newClient);
	void			SendRemoveClient(dreamClient *client);
	void			AddClient(struct sockaddr *address, char *name);
	void			RemoveClient(dreamClient *client);
	void			ParsePacket(dreamMessage *mes, struct sockaddr *address);
	int				CheckForTimeout(char *data, struct sockaddr *from);

	dreamClient		*clientList;

	int				port;					// Port
	SOCKET			socket;					// Socket
	int				runningIndex;			// Running index numbers for new clients

	bool			init;

public:
					dreamServer();
					~dreamServer();

	int				Initialise(char *localIP, int serverPort);
	void			Uninitialise(void);
	void			SendPing(void);
	int				GetPacket(char *data, struct sockaddr *from);
	void			SendPackets(void);

	bool			GetInit(void)			{ return init; }
	dreamClient		*GetClientList(void)	{ return clientList; }

	int				GetPort(void)			{ return port; }
};

/***************************************

  dreamSock global functions

***************************************/

// Function prototypes
int	dreamSock_Initialize(void);
int	dreamSock_InitializeWinSock(void);
void dreamSock_Shutdown(void);

SOCKET dreamSock_Socket(int protocol);
int dreamSock_SetNonBlocking(SOCKET sock, u_long setMode);
int dreamSock_SetBroadcasting(SOCKET sock, int mode);
int dreamSock_StringToSockaddr(char *addressString, struct sockaddr *sadr);
SOCKET dreamSock_OpenUDPSocket(char netInterface[32], int port);
void dreamSock_CloseSocket(SOCKET sock);

int dreamSock_GetPacket(SOCKET sock, char *data, struct sockaddr *from);
void dreamSock_SendPacket(SOCKET sock, int length, char *data, struct sockaddr addr);
void dreamSock_Broadcast(SOCKET sock, int length, char *data, int port);

#ifndef WIN32
int dreamSock_Linux_GetCurrentSystemTime(void);
#else
int dreamSock_Win_GetCurrentSystemTime(void);
#endif

int dreamSock_GetCurrentSystemTime(void);

#endif
