#ifndef GAME_H
#define GAME_H

#include "../../fsm/stateMachine.h"

template <class entity_type> class State;

#include "../../message/message.h"

#include <string.h>
#include <vector>

//postgres
#include <postgresql/libpq-fe.h>

using namespace std;

#define COMMAND_HISTORY_SIZE		64

class Server;
class Client;
class ClientRobust;
class Shape;
class Vector3D;
class Bounds;

class Game
{
public:

//statics
static const char mMessageKey        = 1;
static const char mMessageFrameTime  = 2;
static const char mMessageServerExit = 3;

	int mID;

	Server	*mServer;  //go between for game(contains game logic) and Network(handles sending message across internets)

	//bounds
	Bounds* mBounds;	

        //Message
        Message mMessage;

	//shapes
	std::vector<Shape*> mShapeVector;	//every tangible item in game world..

	//db
     	PGconn* mDBConnection;

public:
	Game(Server* server, int id);
	~Game();

	StateMachine<Game>* mStateMachine;

	//index
	unsigned int getOpenIndex ();
	Vector3D* getOpenPoint    ();
	Vector3D* mOpenPoint;

	//reset
	virtual void resetEnter();	
	virtual void resetExecute();	
	virtual void resetExit();	
	virtual void resetClients();	
	virtual void massiveInserts();

	// Network
	void	sendExitNotification();
	void	readDeltaMoveCommand(Message *mes, ClientRobust *client);
	
	//time
	virtual void	update(int msec);
	int mGameTime;
	int mGameTimeEnd;

	int mResetTime;
	
	//collision detection
	virtual void checkCollisions();
	virtual void checkBounds(Shape* shape);
		
	//scope
 	bool    checkScope(ClientRobust* client, Shape* shape);


	//join
	void join(ClientRobust* client);
	void leave(ClientRobust* client);
	
	//shapes
	virtual void createShapes();
	void sendShapes(ClientRobust* client);

	//standings
	int mNumberOfClientsThatPlayed; 
	void setStandings();
	std::vector<ClientRobust*> mClientStandingsVector;
	void reportStandings(std::string first_name);
};

#endif
