#ifndef SERVERTAGALL_H
#define SERVERTAGALL_H

/************************
         INCLUDES
**********************/

//parent
#include "serverTag.h"

/************************
         FORWARD DECLARATIONS
**********************/
class GameTagAll;

/************************
         CLASS
**********************/
class ServerTagAll : public ServerTag
{
public:
	ServerTagAll(GameTagAll* gameTagAll,const char *localIP, int serverPort);
	~ServerTagAll();

/************************
         VARIABLES
**********************/
public:
	GameTagAll* mGameTagAll;

/************************
         METHODS
**********************/
public:
	//client
	virtual void createClient(struct sockaddr *address);
};

#endif
