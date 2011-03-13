#ifndef NETWORKEDGAME_H
#define NETWORKEDGAME_H

#include "game.h"
#include "../tdreamsock/dreamSock.h"

extern bool keys[256];

#define VK_ESCAPE 0x1B
#define VK_UP 0x26
#define VK_DOWN 0x28
#define VK_LEFT 0x25
#define VK_RIGHT 0x27

//network
#define COMMAND_HISTORY_SIZE	64

#define KEY_UP					1
#define KEY_DOWN				2
#define KEY_LEFT				4
#define KEY_RIGHT				8

#define CMD_KEY					1
#define CMD_ORIGIN				4

#define USER_MES_FRAME			1
#define USER_MES_NONDELTAFRAME	2
#define USER_MES_SERVEREXIT		3

#define USER_MES_KEEPALIVE		12

//network
typedef struct clientLoginData
{
	int					index;
	char				nickname[30];
	clientLoginData	*next;
} clientLoginData;

extern char serverIP[32];

typedef struct
{
	float x;
	float y;
} VECTOR2D;

typedef struct
{
	int			key;

	VECTOR2D	vel;
	VECTOR2D	origin;
	VECTOR2D	predictedOrigin;

	int			msec;
} command_t;

typedef struct clientData
{
	command_t	frame[64];	// frame history
	command_t	serverFrame;					// the latest frame from server
	command_t	command;						// current frame's commands

	int			index;

	VECTOR2D	startPos;
	bool		team;
	char		nickname[30];
	char		password[30];

	Ogre::SceneNode *myNode;

	clientData	*next;
} clientData;

// The main application class interface
class NetworkedGame : public Game
{

public:
	    virtual void go(void);
private:
	// Methods

	// Client.cpp
	void	DrawMap(void);

	void	CheckPredictionError(int a);
	void	CalculateVelocity(command_t *command, float frametime);
	void	PredictMovement(int prevFrame, int curFrame);
	void	MoveObjects(void);
	void    MovePlayer(void);

	void	AddClient(int local, int index, char *name);
	void	RemoveClient(int index);
	void	RemoveClients(void);

	// Network.cpp
	void	ReadPackets(void);
	void	SendCommand(void);
	void	SendRequestNonDeltaFrame(void);
	void	ReadMoveCommand(dreamMessage *mes, clientData *client);
	void	ReadDeltaMoveCommand(dreamMessage *mes, clientData *client);
	void	BuildDeltaMoveCommand(dreamMessage *mes, clientData *theClient);

	bool processUnbufferedInput(const Ogre::FrameEvent& evt);


	// Variables

	// Network variables
	dreamClient *networkClient;

	clientData *clientList;			// Client list
	clientData *localClient;		// Pointer to the local client in the client list
	int clients;

	clientData inputClient;			// Handles all keyboard input

	float frametime;
	float rendertime;

	char gamename[32];
	bool init;

	//bool mapdata[100][100];
	int gameIndex;


public:
	NetworkedGame();
	~NetworkedGame();

    void createPlayer(int index);
    virtual void createScene(void);
    virtual bool frameRenderingQueued(const Ogre::FrameEvent& evt);

	// Client.cpp
	void	Shutdown(void);
	bool	CheckKeys(void);
	void	Frame(void);
	void	RunNetwork(int msec);

	// Network.cpp
	void	StartConnection(char* serverIP);
	void	Connect(void);
	void	Disconnect(void);
	void	SendStartGame(void);

	void	SetName(char *n)		{ strcpy(gamename, n); }
	char	*GetName(void)			{ return gamename; }

	void	SetGameIndex(int index)	{ gameIndex = index; }
	int		GetGameIndex(void)		{ return gameIndex; }

	clientData *GetClientList(void) { return clientList; }

	clientData *GetClientPointer(int index);

	bool keepRunning;
	NetworkedGame *next;
};

#endif
