#ifndef CLIENTSIDEGAME_H
#define CLIENTSIDEGAME_H

#include "../baseapplication/baseApplication.h"
extern bool keys[256];
class ClientSideShape;

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

#ifdef WIN32

#else


	#ifndef TRUE
	#define TRUE 1
	#endif
	#ifndef FALSE
	#define FALSE 0
	#endif
#endif

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

	ClientSideShape *mClientSideShape;

	clientData	*next;
} clientData;


class ClientSideGame : public BaseApplication
{
public:

ClientSideGame();
~ClientSideGame();

virtual void go(void);
virtual void createScene(void);

virtual void gameLoop() { bool doNothing = true; }
virtual	void StartConnection(char* serverIP) { bool doNothing = true; }
virtual void AddClient(int local, int ind, char *name);
virtual void createPlayer(int index);
clientData *GetClientPointer(int index);
	void	PredictMovement(int prevFrame, int curFrame);

    virtual bool frameRenderingQueued(const Ogre::FrameEvent& evt);

	void	Shutdown(void);
	void	MoveObjects(void);
	void    MovePlayer(void);

	void	RemoveClient(int index);
	void	RemoveClients(void);

	void	CalculateVelocity(command_t *command, float frametime);
	bool processUnbufferedInput(const Ogre::FrameEvent& evt);
	bool	CheckKeys(void);


	void RunNetwork(int msec);
	clientData *clientList;			// Client list
	clientData *localClient;		// Pointer to the local client in the client list
	int clients;

	clientData inputClient;			// Handles all keyboard input
	float frametime;
	float rendertime;
	bool init;
	int gameIndex;
	bool keepRunning;
	ClientSideGame *next;

};
#endif
