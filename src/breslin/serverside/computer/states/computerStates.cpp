//parent
#include "computerStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//ability
#include "../computer.h"

//game
#include "../../game/game.h"

//shapes
#include "../../shape/shape.h"

//client
#include "../../client/robust/clientRobust.h"

//steering
#include "../../steering/steering.h"

//seek
#include "../../seek/seek.h"

//avoid
#include "../../avoid/avoid.h"

//move
#include "../../move/move.h"

//rotation
#include "../../rotation/rotation.h"

//vector3D
#include "../../../math/vector3D.h"

//rand
#include <stdlib.h>
#include <time.h>

#define MAX_RUN_SPEED 1.66           // character running speed in units per second


/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_COMPUTER* GLOBAL_COMPUTER::Instance()
{
  static GLOBAL_COMPUTER instance;
  return &instance;
}
void GLOBAL_COMPUTER::enter(Computer* computer)
{
}
void GLOBAL_COMPUTER::execute(Computer* computer)
{

}
void GLOBAL_COMPUTER::exit(Computer* computer)
{
}
bool GLOBAL_COMPUTER::onLetter(Computer* computer, Letter* letter)
{
        return true;
}


/*****************************************
*******       COMPUTER    ******************
****************************************/

/*****************************************
*******      RANDOM COMPUTER    ******************
****************************************/
/*   COMPUTER_CONTROLLED   */
COMPUTER_CONTROLLED* COMPUTER_CONTROLLED::Instance()
{
  static COMPUTER_CONTROLLED instance;
  return &instance;
}

void COMPUTER_CONTROLLED::enter(Computer* computer)
{
}

void COMPUTER_CONTROLLED::execute(Computer* computer)
{
	//is this human controlled?
	if (computer->mShape->mClient->mLoggedIn)
	{
		computer->mStateMachine->changeState(HUMAN_CONTROLLED::Instance());
	}

	if (computer->mCounter > computer->mThreshold)
	{
		computer->mRandomMove = rand() % 6;
		computer->mCounter = 0;
	}
	computer->mCounter++;

	
	computer->mShape->mMove->mVelocity->x = 0;
        computer->mShape->mMove->mVelocity->y = 0;
        computer->mShape->mMove->mVelocity->z = 0;

        // keep track of the player's intended direction
        if(computer->mRandomMove == 0)
        {
                computer->mShape->mMove->mVelocity->z += -1;
        }

        if(computer->mRandomMove == 1)
        {
                computer->mShape->mMove->mVelocity->x += -1;
        }

        if(computer->mRandomMove == 2)
        {
                computer->mShape->mMove->mVelocity->z += 1;
        }
 
        if(computer->mRandomMove == 3)
        {
                computer->mShape->mMove->mVelocity->x += 1;
        }

        computer->mShape->mMove->mVelocity->normalise();

	//Rotation
        computer->mShape->mRotation->mDegrees = 0.0f;
        // keep track of the player's intended rotation
        if(computer->mRandomMove == 4)
        {
                computer->mShape->mRotation->mDegrees += -1;
        }
        if(computer->mRandomMove == 5)
        {
                computer->mShape->mRotation->mDegrees += 1;
        }

}

void COMPUTER_CONTROLLED::exit(Computer* computer)
{
}
bool COMPUTER_CONTROLLED::onLetter(Computer* computer, Letter* letter)
{
        return true;
}



/*****************************************
*******      RANDOM COMPUTER    ******************
****************************************/
HUMAN_CONTROLLED* HUMAN_CONTROLLED::Instance()
{
	static HUMAN_CONTROLLED instance;
	return &instance;
}

void HUMAN_CONTROLLED::enter(Computer* computer)
{
	if (computer->mShape->mSeek)
	{
		computer->mShape->mSeek->setSeekShape(NULL);     
	}
}

void HUMAN_CONTROLLED::execute(Computer* computer)
{
	if (!computer->mShape->mClient->mLoggedIn)
	{
		computer->mStateMachine->changeState(COMPUTER_CONTROLLED::Instance());
	}

 	computer->mShape->mMove->mVelocity->x = 0;
        computer->mShape->mMove->mVelocity->y = 0;
        computer->mShape->mMove->mVelocity->z = 0;

        // keep track of the player's intended direction
        if(computer->mShape->mClient->mKey & computer->mShape->mClient->mKeyUp)
        {
                computer->mShape->mMove->mVelocity->z += -1;
        }

        if(computer->mShape->mClient->mKey & computer->mShape->mClient->mKeyLeft)
        {
                computer->mShape->mMove->mVelocity->x += -1;
        }

        if(computer->mShape->mClient->mKey & computer->mShape->mClient->mKeyDown)
        {
                computer->mShape->mMove->mVelocity->z += 1;
        }
  
        if(computer->mShape->mClient->mKey & computer->mShape->mClient->mKeyRight)
        {
                computer->mShape->mMove->mVelocity->x += 1;
        }

        computer->mShape->mMove->mVelocity->normalise();

	//Rotation
        computer->mShape->mRotation->mDegrees = 0.0f;
        // keep track of the player's intended rotation
        if(computer->mShape->mClient->mKey & computer->mShape->mClient->mKeyCounterClockwise)
        {
                computer->mShape->mRotation->mDegrees += -1;
        }
        if(computer->mShape->mClient->mKey & computer->mShape->mClient->mKeyClockwise)
        {
                computer->mShape->mRotation->mDegrees += 1;
        }

}

void HUMAN_CONTROLLED::exit(Computer* computer)
{
}
bool HUMAN_CONTROLLED::onLetter(Computer* computer, Letter* letter)
{
        return true;
}

