#include "move.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//shape
#include "../shape/shape.h"

//command
#include "../command/command.h"

//states
#include "states/moveStates.h"


//std lib
#include <math.h>

Move::Move(Shape* shapeDynamic) 
{
	mShape = shapeDynamic;

	//move processTick states
	mProcessTickStateMachine = new StateMachine<Move>(this);    //setup the state machine
	mProcessTickStateMachine->setCurrentState      (NORMAL_PROCESSTICK_MOVE::Instance());
	mProcessTickStateMachine->setPreviousState     (NORMAL_PROCESSTICK_MOVE::Instance());
	mProcessTickStateMachine->setGlobalState       (GLOBAL_PROCESSTICK_MOVE::Instance());

	//move interpolateTick states
	mInterpolateTickStateMachine = new StateMachine<Move>(this);    //setup the state machine
	mInterpolateTickStateMachine->setCurrentState      (NORMAL_INTERPOLATETICK_MOVE::Instance());
	mInterpolateTickStateMachine->setPreviousState     (NORMAL_INTERPOLATETICK_MOVE::Instance());
	//mInterpolateTickStateMachine->setGlobalState     (GLOBAL_INTERPOLATETICK_MOVE::Instance());
	mInterpolateTickStateMachine->setGlobalState       (NULL);

    	//thresholds
    	mPosInterpLimitHigh = .066f; //how far away from server till we try to catch up
    	mPosInterpFactor    = 4.0f;
	mMaximunVelocity    = .009083f; //do not let velocity go above this in any direction.

	//deltas
	mDeltaX        = 0.0f; 
	mDeltaY	       = 0.0f;
	mDeltaZ        = 0.0f;
	mDeltaPosition = 0.0f;
}

Move::~Move()
{
}

/******************************************************
*				UPDATING
********************************************************/
void Move::processTick()
{
	mProcessTickStateMachine->update();
}
void Move::interpolateTick(float renderTime)
{
	mInterpolateTickStateMachine->update();
}

/******************************************************
*				MOVE
********************************************************/

void Move::calculateDeltaPosition()  //mov
{

	mDeltaX = mShape->mServerCommandCurrent->mPosition->x - mShape->getPosition()->x;
    	mDeltaY = mShape->mServerCommandCurrent->mPosition->y - mShape->getPosition()->y;
    	mDeltaZ = mShape->mServerCommandCurrent->mPosition->z - mShape->getPosition()->z;

    	//distance we are off from server
    	mDeltaPosition = sqrt(pow(mDeltaX, 2) + pow(mDeltaY, 2) +  pow(mDeltaZ, 2));
}

float Move::calculateSpeed(Vector3D* velocity, int frameTime)
{
	float speed = sqrt(
	pow(velocity->x, 2) + 
    	pow(velocity->y, 2) +
	pow(velocity->z, 2)) /
	frameTime;

	return speed;
}

void Move::regulate(Vector3D* velocityToRegulate)
{
	//x
	if (velocityToRegulate->x > mMaximunVelocity)
	{
		velocityToRegulate->x = mMaximunVelocity;
		LogString("x>");

	}
	
	if (velocityToRegulate->x < mMaximunVelocity * -1)
	{
		velocityToRegulate->x = mMaximunVelocity * -1;
		LogString("x<");
	}
	

	//z
	if (velocityToRegulate->z > mMaximunVelocity)
	{
		velocityToRegulate->z = mMaximunVelocity;
		LogString("z>");
	}

	if (velocityToRegulate->z < mMaximunVelocity * -1)
	{
		velocityToRegulate->z = mMaximunVelocity * -1;
		LogString("z<");
	}
}
