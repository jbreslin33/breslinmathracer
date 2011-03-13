#ifndef CLIENTSIDEBASEGAME_H
#define CLIENTSIDEBASEGAME_H

#include "baseGame.h"

class ClientSideGame;

class ClientSideBaseGame : public BaseGame
{
public:

ClientSideBaseGame(const char* serverIP);
~ClientSideBaseGame();

virtual void createScene	 (void);
virtual bool frameRenderingQueued(const Ogre::FrameEvent& evt);

ClientSideGame* mClientSideGame;

const char* mServerIP;

	float rendertime;

};

#endif
