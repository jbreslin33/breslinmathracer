#ifndef SERVERTAG_H
#define SERVERTAG_H

/************************
         INCLUDES
**********************/

//parent
#include "server.h"

/************************
         FORWARD DECLARATIONS
**********************/
class GameTag;

/************************
         CLASS
**********************/
class ServerTag : public Server
{
public:
	ServerTag(GameTag* serverSideGame,const char *localIP, int serverPort);
	~ServerTag();

/************************
         VARIABLES
**********************/
public:
	GameTag* mGameTag;

/************************
         METHODS
**********************/
public:
	//client
	virtual void createClient(struct sockaddr *address);
};

#endif
