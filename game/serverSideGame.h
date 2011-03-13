#ifndef SERVERSIDEGAME_H
#define SERVERSIDEGAME_H

#include "game.h"

#include <string.h>
#include <vector>

class ServerSideCommand;
class ServerSideClient;
class DreamServer;
class ServerSideNetwork;
class ServerSideShape;
class ServerSideBaseGame;

class ServerSideGame : public Game
{
public:
ServerSideGame(ServerSideBaseGame* serverSideBaseGame);
~ServerSideGame();

//Scene
void              createScene(void);

//network
int               InitNetwork();

//power up down
void    	  ShutdownNetwork  (void);

//movement
void    	  CalculateVelocity(ServerSideCommand *command, float frametime);
void              MovePlayers      (void);
void    	  MovePlayer       (ServerSideClient *client);

//clients
void    	  AddClient        (void);
void    	  RemoveClient	   (struct sockaddr *address);
void   		  RemoveClients    (void);
ServerSideClient* GetClientList	   (void)   { return clientList; }

//frame ticks
void    	  Frame            (int msec);

//players
void createPlayer(int index);


void    	 SetIndex          (int ind)       { index = ind; }
int              GetIndex          (void)          { return index; }

ServerSideNetwork* network;
DreamServer*       networkServer;
ServerSideGame*    next;
ServerSideClient*  clientList;            // Client list

std::vector<ServerSideShape*> mServerSideShapeVector;

int                clients;                                // Number of clients
int                realtime;                               // Real server up-time in ms
int                servertime;                             // ServerSideGame frame * 100 ms
float              frametime;                              // Frame time in seconds
int                index;
long               framenum;

ServerSideBaseGame* mServerSideBaseGame;

};
#endif
