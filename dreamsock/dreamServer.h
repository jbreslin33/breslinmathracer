#ifndef __DREAMSERVER_H
#define __DREAMSERVER_H

#include "dreamConsole.h"

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

#define DreamSock_MES_PING			-105

// Introduce classes
class DreamClient;
class DreamSock;
class DreamMessage;

class DreamServer
{
private:
	void	SendAddClient   (DreamClient *newClient);
	void	SendRemoveClient(DreamClient *client);
	void	AddClient       (struct sockaddr *address, char *name);
	void	RemoveClient    (DreamClient *client);
	void	ParsePacket     (DreamMessage *mes, struct sockaddr *address);
	int	CheckForTimeout (char *data, struct sockaddr *from);

	DreamClient		*clientList;

	int			port;					// Port
	SOCKET			socket;					// Socket
	int			runningIndex;			// Running index numbers for new clients

	bool			init;

public:
	DreamServer();
	~DreamServer();

	int		Initialise    (const char *localIP, int serverPort);
	void		Uninitialise  (void);
	void		SendPing      (void);
	int		GetPacket     (char *data, struct sockaddr *from);
	void		SendPackets   (void);

	bool		GetInit       (void)		                	{ return init; }
	DreamClient	*GetClientList(void)					{ return clientList; }

	int		GetPort       (void)					{ return port; }

	DreamSock*      dreamSock;

};

#endif
