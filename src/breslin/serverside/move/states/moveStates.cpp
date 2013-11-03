//parent
#include "moveStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//ability
#include "../move.h"

//server
#include "../../server/server.h"

//game
#include "../../game/game.h"

//shape
#include "../../shape/shape.h"

//vector3d
#include "../../../math/vector3D.h"

//client
#include "../../client/robust/clientRobust.h"

/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_MOVE* GLOBAL_MOVE::Instance()
{
  static GLOBAL_MOVE instance;
  return &instance;
}
void GLOBAL_MOVE::enter(Move* move)
{
}
void GLOBAL_MOVE::execute(Move* move)
{
}
void GLOBAL_MOVE::exit(Move* move)
{
}
bool GLOBAL_MOVE::onLetter(Move* move, Letter* letter)
{
        return true;
}


/*****************************************
	NORMAL_MOVE
****************************************/
NORMAL_MOVE* NORMAL_MOVE::Instance()
{
  static NORMAL_MOVE instance;
  return &instance;
}
void NORMAL_MOVE::enter(Move* move)
{
	//LogString("Normal");
}
void NORMAL_MOVE::execute(Move* move)
{
	//check for No_move and DECELERATE and ACCELARATE states..
    	if (move->mVelocity->isZero()) 
	{
		if(move->mRunSpeed > 0.0) //DECELERATE_MOVE
		{
			move->mStateMachine->changeState(DECELERATE_MOVE::Instance());
			return;
		}
        	else //NO_MOVE
		{
			move->mStateMachine->changeState(NO_MOVE::Instance());
			return;
		}
    	}
	else 
	{
        	if(move->mRunSpeed < move->mSpeedMax) //ACCELERATE_MOVE
		{
			move->mStateMachine->changeState(ACCELERATE_MOVE::Instance());
			return;
		}
	}


	//actual move
	move->mShape->mSceneNode->translate(move->mVelocity->x * move->mShape->mGame->mServer->mFrameTime / 1000.0f * move->mRunSpeed,
		0,
		move->mVelocity->z  * move->mShape->mGame->mServer->mFrameTime / 1000.0f * move->mRunSpeed,
		Node::TS_WORLD);
}
void NORMAL_MOVE::exit(Move* move)
{
}
bool NORMAL_MOVE::onLetter(Move* move, Letter* letter)
{
        return true;
}

/*****************************************
	NO_MOVE
****************************************/
NO_MOVE* NO_MOVE::Instance()
{
	static NO_MOVE instance;
	return &instance;
}
void NO_MOVE::enter(Move* move)
{
	//LogString("No");
}
void NO_MOVE::execute(Move* move)
{
	if (move->mVelocity->isZero()) 
	{
		if(move->mRunSpeed > 0.0) //DECELERATE_MOVE
		{
			move->mStateMachine->changeState(DECELERATE_MOVE::Instance());
			return;
		}
        	else //NO_MOVE
		{
           		move->mRunSpeed = 0.0;
		}
    	}
	else 
	{
        	if(move->mRunSpeed < move->mSpeedMax) //ACCELERATE_MOVE
		{
			move->mStateMachine->changeState(ACCELERATE_MOVE::Instance());
			return;
		}
		else //NORMAL_MOVE 
		{
			move->mStateMachine->changeState(NORMAL_MOVE::Instance());
			return;
		}
	}
}
void NO_MOVE::exit(Move* move)
{
}
bool NO_MOVE::onLetter(Move* move, Letter* letter)
{
        return true;
}

/*****************************************
	ACCELERATE_MOVE
****************************************/
ACCELERATE_MOVE* ACCELERATE_MOVE::Instance()
{
	static ACCELERATE_MOVE instance;
	return &instance;
}
void ACCELERATE_MOVE::enter(Move* move)
{
	//LogString("ACCELARATE");
}
void ACCELERATE_MOVE::execute(Move* move)
{
	if (move->mVelocity->isZero()) 
	{
		if(move->mRunSpeed > 0.0) //DECELERATE_MOVE
		{
			move->mStateMachine->changeState(DECELERATE_MOVE::Instance());
			return;
		}
        	else //NO_MOVE
		{
			move->mStateMachine->changeState(NO_MOVE::Instance());
			return;
		}
    	}
	else 
	{
        	if(move->mRunSpeed < move->mSpeedMax) //ACCELERATE_MOVE
		{
			move->mRunSpeed += move->mRunAccel;
		}
		else //NORMAL_MOVE 
		{
			move->mStateMachine->changeState(NORMAL_MOVE::Instance());
			return;
		}
	}

	//actual move
	move->mShape->mSceneNode->translate(move->mVelocity->x * move->mShape->mGame->mServer->mFrameTime / 1000.0f * move->mRunSpeed,
		0,
		move->mVelocity->z  * move->mShape->mGame->mServer->mFrameTime / 1000.0f * move->mRunSpeed,
		Node::TS_WORLD);
}
void ACCELERATE_MOVE::exit(Move* move)
{
}
bool ACCELERATE_MOVE::onLetter(Move* move, Letter* letter)
{
        return true;
}

/*****************************************
	DECELERATE_MOVE
****************************************/
DECELERATE_MOVE* DECELERATE_MOVE::Instance()
{
	static DECELERATE_MOVE instance;
	return &instance;
}
void DECELERATE_MOVE::enter(Move* move)
{
	//LogString("DECELERATE");
}
void DECELERATE_MOVE::execute(Move* move)
{
    	if (move->mVelocity->isZero()) 
	{
		if(move->mRunSpeed > 0.0) //DECELERATE_MOVE
		{
			move->mRunSpeed -= move->mRunDecel;
		}
        	else //NO_MOVE
		{
			move->mStateMachine->changeState(NO_MOVE::Instance());
			return;
		}
    	}
	else 
	{
        	if(move->mRunSpeed < move->mSpeedMax) //ACCELERATE_MOVE
		{
			move->mStateMachine->changeState(ACCELERATE_MOVE::Instance());
			return;
		}
		else //NORMAL_MOVE 
		{
			move->mStateMachine->changeState(NORMAL_MOVE::Instance());
			return;
		}
	}

	//actual move
	move->mShape->mSceneNode->translate(move->mVelocity->x * move->mShape->mGame->mServer->mFrameTime / 1000.0f * move->mRunSpeed,
		0,
		move->mVelocity->z  * move->mShape->mGame->mServer->mFrameTime / 1000.0f * move->mRunSpeed,
		Node::TS_WORLD);
}
void DECELERATE_MOVE::exit(Move* move)
{
}
bool DECELERATE_MOVE::onLetter(Move* move, Letter* letter)
{
        return true;
}
