#ifndef SOLOGAME_H
#define SOLOGAME_H

#include "game.h"

class SoloGame : public Game
{
public:

SoloGame();
~SoloGame();

    virtual void createScene(void);
	virtual void StartConnection(char* serverIP);
	//virtual void go(void);
	virtual void gameLoop();
};
#endif
