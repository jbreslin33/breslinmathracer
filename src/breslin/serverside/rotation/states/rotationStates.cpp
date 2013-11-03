#include "rotationStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//states
#include "../../../fsm/stateMachine.h"

//rotation
#include "../rotation.h"

//server
#include "../../server/server.h"

//game
#include "../../game/game.h"

//shape
#include "../../shape/shape.h"

#define MAX_TURN_SPEED 100     // character turning in degrees per second


/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_ROTATION* GLOBAL_ROTATION::Instance()
{
  static GLOBAL_ROTATION instance;
  return &instance;
}
void GLOBAL_ROTATION::enter(Rotation* rotation)
{
}
void GLOBAL_ROTATION::execute(Rotation* rotation)
{

}
void GLOBAL_ROTATION::exit(Rotation* rotation)
{
}
bool GLOBAL_ROTATION::onLetter(Rotation* rotation, Letter* letter)
{
        return true;
}


NORMAL_ROTATION* NORMAL_ROTATION::Instance()
{
  static NORMAL_ROTATION instance;
  return &instance;
}
void NORMAL_ROTATION::enter(Rotation* rotation)
{
}
void NORMAL_ROTATION::execute(Rotation* rotation)
{
	
	if (rotation->mDegrees == 0)
	{
		if(rotation->mRotationSpeed > 0.0) //DECELERATE_ROTATION
		{
			rotation->mStateMachine->changeState(DECELERATE_ROTATION::Instance());
			return;
		}
        else //NO_ROTATION
		{
			rotation->mStateMachine->changeState(NO_ROTATION::Instance());
			return;
		}
	}
	else
	{
		if(rotation->mRotationSpeed < MAX_TURN_SPEED) //ACCELERATE_ROTATION
		{
			rotation->mStateMachine->changeState(ACCELERATE_ROTATION::Instance());
			return;
		}
	}

	//actual rotate
//	LogString("N:%f",rotation->mRotationSpeed);
	rotation->mShape->mSceneNode->yaw(Degree(rotation->mDegrees * rotation->mShape->mGame->mServer->mFrameTime / 1000.0f * rotation->mRotationSpeed), Node::TS_WORLD);

//rotation->mShape->mSceneNode->yaw(Degree(rotation->mDegrees * rotation->mShape->mClientFrametime * MAX_TURN_SPEED), Node::TS_WORLD);
}
void NORMAL_ROTATION::exit(Rotation* rotation)
{
}
bool NORMAL_ROTATION::onLetter(Rotation* rotation, Letter* letter)
{
        return true;
}

ACCELERATE_ROTATION* ACCELERATE_ROTATION::Instance()
{
  static ACCELERATE_ROTATION instance;
  return &instance;
}
void ACCELERATE_ROTATION::enter(Rotation* rotation)
{
}
void ACCELERATE_ROTATION::execute(Rotation* rotation)
{
	/*
	if (rotation->mShape->mKey != 0)
	{
		rotation->mStateMachine->changeState(NORMAL_ROTATION::Instance());
		return;
	}
	*/
	if (rotation->mDegrees == 0)
	{
		if(rotation->mRotationSpeed > 0.0) //DECELERATE_ROTATION
		{
			rotation->mStateMachine->changeState(DECELERATE_ROTATION::Instance());
			return;
		}
        else //NO_ROTATION
		{
			rotation->mStateMachine->changeState(NO_ROTATION::Instance());
			return;
		}
    }
	else 
	{
        if(rotation->mRotationSpeed < MAX_TURN_SPEED) //ACCELERATE_ROTATION
		{
			rotation->mRotationSpeed += rotation->mRotationAccel;
		}
		else //NORMAL_ROTATION 
		{
			rotation->mStateMachine->changeState(NORMAL_ROTATION::Instance());
			return;
		}
	}

	//actual rotate
//	LogString("A:%f",rotation->mRotationSpeed);
	rotation->mShape->mSceneNode->yaw(Degree(rotation->mDegrees * rotation->mShape->mGame->mServer->mFrameTime / 1000.0f * rotation->mRotationSpeed), Node::TS_WORLD);
}
void ACCELERATE_ROTATION::exit(Rotation* rotation)
{
}
bool ACCELERATE_ROTATION::onLetter(Rotation* rotation, Letter* letter)
{
        return true;
}

DECELERATE_ROTATION* DECELERATE_ROTATION::Instance()
{
  static DECELERATE_ROTATION instance;
  return &instance;
}
void DECELERATE_ROTATION::enter(Rotation* rotation)
{
}
void DECELERATE_ROTATION::execute(Rotation* rotation)
{
	/*
	if (rotation->mShape->mKey != 0)
	{
		rotation->mStateMachine->changeState(NORMAL_ROTATION::Instance());
		return;
	}
	*/
	if (rotation->mDegrees == 0)
	{
		if(rotation->mRotationSpeed > 0.0) //DECELERATE_ROTATION
		{
			rotation->mRotationSpeed -= rotation->mRotationDecel;
		}
        else //NO_ROTATION
		{
			rotation->mStateMachine->changeState(NO_ROTATION::Instance());
			return;
		}
    }
	else 
	{
        if(rotation->mRotationSpeed < MAX_TURN_SPEED) //ACCELERATE_ROTATION
		{
			rotation->mStateMachine->changeState(ACCELERATE_ROTATION::Instance());
			return;
		}
		else //NORMAL_ROTATION 
		{
			rotation->mStateMachine->changeState(NORMAL_ROTATION::Instance());
			return;
		}
	}

//	LogString("D:%f",rotation->mRotationSpeed);
	//actual rotate
	rotation->mShape->mSceneNode->yaw(Degree(rotation->mDegrees * rotation->mShape->mGame->mServer->mFrameTime / 1000.0f * rotation->mRotationSpeed), Node::TS_WORLD);

}
void DECELERATE_ROTATION::exit(Rotation* rotation)
{
}
bool DECELERATE_ROTATION::onLetter(Rotation* rotation, Letter* letter)
{
        return true;
}


NO_ROTATION* NO_ROTATION::Instance()
{
  static NO_ROTATION instance;
  return &instance;
}
void NO_ROTATION::enter(Rotation* rotation)
{
}
void NO_ROTATION::execute(Rotation* rotation)
{
	if (rotation->mDegrees == 0)
	{
		if(rotation->mRotationSpeed > 0.0) //DECELERATE_ROTATION
		{
			rotation->mStateMachine->changeState(DECELERATE_ROTATION::Instance());
			return;
		}
        else //NO_ROTATION
		{
           rotation->mRotationSpeed = 0.0;
		}
    }
	else 
	{
        if(rotation->mRotationSpeed < MAX_TURN_SPEED) //ACCELERATE_ROTATION
		{
			rotation->mStateMachine->changeState(ACCELERATE_ROTATION::Instance());
			return;
		}
		else //NORMAL_ROTATION
		{
			rotation->mStateMachine->changeState(NORMAL_ROTATION::Instance());
			return;
		}
	}
}
void NO_ROTATION::exit(Rotation* rotation)
{
}
bool NO_ROTATION::onLetter(Rotation* rotation, Letter* letter)
{
        return true;
}

