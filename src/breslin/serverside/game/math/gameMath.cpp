#include "gameMath.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//server
#include "../server/server.h"

//shape
#include "../shape/shape.h"



#include <stdio.h>

GameMath::GameMath(Server* server, int id) : Game(server,id)
{

}

GameMath::~GameMath()
{
}

//you should call this from server processUpdate
void GameMath::processUpdate()
{
	Game::processUpdate();	
/*
	//this is where they want to move
	for (unsigned int i = 0; i < mShapeVector.size(); i++)
	{
		mShapeVector.at(i)->processTick();
		checkBounds(mShapeVector.at(i));
	}
	
	//this is where they can move..	
	checkCollisions();
*/
}


