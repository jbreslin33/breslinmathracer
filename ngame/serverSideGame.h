#ifndef SERVER_H
#define SERVER_H

#include <string.h>

#include "../tdreamsock/dreamSock.h"

#define COMMAND_HISTORY_SIZE		64

#define KEY_UP						1
#define KEY_DOWN					2
#define KEY_LEFT					4
#define KEY_RIGHT					8

#define CMD_KEY						1
#define CMD_ORIGIN					4

#define USER_MES_FRAME				1
#define USER_MES_NONDELTAFRAME		2
#define USER_MES_SERVEREXIT			3


typedef struct clientLoginData
{
	struct sockaddr		address;
	dreamClient			*netClient;
	clientLoginData		*next;
} clientLoginData;

typedef struct
{
	float x;
	float y;
} VECTOR2D;

typedef struct
{
	int key;								// Pressed keys

	VECTOR2D vel;							// Velocity
	VECTOR2D origin;						// Position

	int msec;								// How long to run command (in ms)

} command_t;

typedef struct clientData
{
	command_t frame[COMMAND_HISTORY_SIZE];
	command_t serverFrame;
	command_t command;

	long processedFrame;

	struct sockaddr address;
	dreamClient *netClient;

	VECTOR2D startPos;
	bool team;

	clientData *next;
} clientData;


class ServerSideGame
{
private:
	dreamServer	*networkServer;

	clientData	*clientList;		// Client list
	int		clients;				// Number of clients

	int		realtime;				// Real server up-time in ms
	int		servertime;				// Server frame * 100 ms
	float	frametime;				// Frame time in seconds

	char	gamename[32];
	int		index;

	clientData *playerWithFlag;

	long	framenum;

public:
	ServerSideGame();
	~ServerSideGame();

	// Network.cpp
	void	ReadPackets(void);
	void	SendCommand(void);
	void	SendExitNotification(void);
	void	ReadDeltaMoveCommand(dreamMessage *mes, clientData *client);
	void	BuildMoveCommand(dreamMessage *mes, clientData *client);
	void	BuildDeltaMoveCommand(dreamMessage *mes, clientData *client);

	// Server.cpp
	int		InitNetwork();
	void	ShutdownNetwork(void);
	void	CalculateVelocity(command_t *command, float frametime);
	void	MovePlayers(void);
	void	MovePlayer(clientData *client);
	void	AddClient(void);
	void	RemoveClient(struct sockaddr *address);
	void	RemoveClients(void);
	void	Frame(int msec);

	clientData *GetClientList(void)	{ return clientList; }

	void	SetName(char *n)		{ strcpy(gamename, n); }
	char	*GetName(void)			{ return gamename; }

	void	SetIndex(int ind)	{ index = ind; }
	int		GetIndex(void)		{ return index; }

	ServerSideGame *next;
};

#endif
