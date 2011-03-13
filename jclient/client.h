#ifndef CLIENT_H
#define CLIENT_H

#include "../baseapplication/BaseApplication.h"
//#include "Tutorial4.h"
class DreamMessage;
class DreamClient;

extern bool keys[256];


#ifdef WIN32
        //do nothing
#else

#define VK_ESCAPE 0     
#define VK_DOWN 1
#define VK_UP 2
#define VK_LEFT 3
#define VK_RIGHT 4
#define VK_SPACE 5
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

	Ogre::SceneNode *myNode;

	clientData	*next;
} clientData;

// The main application class interface
class CArmyWar : public BaseApplication
{
private:
	// Methods

	// Client.cpp
	void	DrawMap(void);
	
	void	CheckPredictionError(int a);
	void	CalculateVelocity(command_t *command, float frametime);
	void	PredictMovement(int prevFrame, int curFrame);
	void	MoveObjects(void);

	void	AddClient(int local, int index, char *name);
	void	RemoveClient(int index);
	void	RemoveClients(void);

	// Network.cpp
	void	ReadPackets(void);
	void	SendCommand(void);
	void	SendRequestNonDeltaFrame(void);
	void	ReadMoveCommand(DreamMessage *mes, clientData *client);
	void	ReadDeltaMoveCommand(DreamMessage *mes, clientData *client);
	void	BuildDeltaMoveCommand(DreamMessage *mes, clientData *theClient);

	bool processUnbufferedInput(const Ogre::FrameEvent& evt);


	// Variables

	// Network variables
	DreamClient *networkClient;

	clientData *clientList;			// Client list
	clientData *localClient;		// Pointer to the local client in the client list
	int clients;

	clientData inputClient;			// Handles all keyboard input

	float frametime;

	char gamename[32];
	bool init;

	//bool mapdata[100][100];
	int gameIndex;


public:
	CArmyWar();
	~CArmyWar();

    void createPlayer(int index);
    virtual void createScene(void);
    virtual bool frameRenderingQueued(const Ogre::FrameEvent& evt);
    virtual bool keyPressed( const OIS::KeyEvent &arg );

	// Client.cpp
	void	Shutdown(void);
	void	CheckKeys(void);
	void	Frame(void);
	void	RunNetwork(int msec);
	
	// Network.cpp
	void	StartConnection();
	void	Connect(void);
	void	Disconnect(void);
	void	SendStartGame(void);

	void	SetName(char *n)		{ strcpy(gamename, n); }
	char	*GetName(void)			{ return gamename; }

	void	SetGameIndex(int index)	{ gameIndex = index; }
	int		GetGameIndex(void)		{ return gameIndex; }

	clientData *GetClientList(void) { return clientList; }

	clientData *GetClientPointer(int index);


	CArmyWar *next;
};

#endif
