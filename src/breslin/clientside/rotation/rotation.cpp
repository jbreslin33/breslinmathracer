//header
#include "rotation.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//shape
#include "../shape/shape.h"

//command
#include "../command/command.h"

//states
#include "states/rotationStates.h"

#ifdef WIN32
//do nothing
#else
#include <stdlib.h>
#endif

Rotation::Rotation(Shape* shape) 
{
	mShape = shape;

  	//move processTick states
        mProcessTickStateMachine = new StateMachine<Rotation>(this);    //setup the state machine
        mProcessTickStateMachine->setCurrentState      (NORMAL_PROCESSTICK_ROTATION::Instance());
        mProcessTickStateMachine->setPreviousState     (NORMAL_PROCESSTICK_ROTATION::Instance());
        mProcessTickStateMachine->setGlobalState       (GLOBAL_PROCESSTICK_ROTATION::Instance());

        //move interpolateTick states
        mInterpolateTickStateMachine = new StateMachine<Rotation>(this);    //setup the state machine
        mInterpolateTickStateMachine->setCurrentState      (NORMAL_INTERPOLATETICK_ROTATION::Instance());
        mInterpolateTickStateMachine->setPreviousState     (NORMAL_INTERPOLATETICK_ROTATION::Instance());
        //mInterpolateTickStateMachine->setGlobalState     (GLOBAL_INTERPOLATETICK_ROTATION::Instance());
        mInterpolateTickStateMachine->setGlobalState       (NULL);

	//////rotation
    	mTurnSpeed = 250.0;

	mServerRotSpeed = 0.0f;
	mServerRotSpeedOld = 0.0f;
	mGhostSpeed        = 0.0f;

    	mRotInterpLimitHigh = 6.0; //how far away from server till we try to catch up
    	mRotInterpLimitLow  = 4.0; //how close to server till we are in sync
    	mRotInterpIncrease  = 1.20f; //rot factor used to catchup to server
    	mRotInterpDecrease  = 0.80f; //rot factor used to allow server to catchup to client

	//rotation
	mServerRotOld = new Vector3D();
	mServerRotNew = new Vector3D();
	mDegreesToServer = 0.0;

	mRotationSpeed = 0.0f;
}

Rotation::~Rotation()
{
}

/******************************************************
*				UPDATING
********************************************************/
void Rotation::processTick()
{
//	LogString("rb:%f",mRotationSpeed);
		mProcessTickStateMachine->update();
//	LogString("ra:%f",mRotationSpeed);
}
void Rotation::interpolateTick(float renderTime)
{
	mInterpolateTickStateMachine->update();
}

/******************************************************
*				Rotation
********************************************************/

float Rotation::getDegreesToServer()  //rot
{
    Vector3D* serverRotNew = new Vector3D();

    serverRotNew->x = mShape->mServerCommandCurrent->mRotation->x;
	serverRotNew->y = 0;
    serverRotNew->z = mShape->mServerCommandCurrent->mRotation->z;

    serverRotNew->normalise();

    //calculate how far off we are from server
	float degreesToServer = mShape->getRotation()->getDegreesToSomething(serverRotNew);

	return degreesToServer;
}

void Rotation::calculateServerRotationSpeed()  //rot
{
    mServerRotOld->zero();
    mServerRotNew->zero();

	mServerRotOld->x = mShape->mServerCommandLast->mRotation->x;
	mServerRotOld->y = 0;
    mServerRotOld->z = mShape->mServerCommandLast->mRotation->z;

    mServerRotNew->x = mShape->mServerCommandCurrent->mRotation->x;
	mServerRotNew->y = 0;
    mServerRotNew->z = mShape->mServerCommandCurrent->mRotation->z;

    mServerRotNew->normalise();
    mServerRotOld->normalise();

    //calculate how far off we are from server
	mDegreesToServer = 	mShape->getRotation()->getDegreesToSomething(mServerRotNew);
	
    //calculate server rotation from last tick to new one
	mServerRotSpeedOld = mServerRotSpeed;
	
	float serverRotSpeed = mShape->mGhost->getRotation()->getDegreesToSomething(mServerRotNew);
	mGhostSpeed = serverRotSpeed;
	//if it's a tiny value we have an anomoly which I have not solved yet so use mServerRotSpeedOld...
	if (serverRotSpeed < 1.0f || serverRotSpeed > -1.0f)
	{
		mServerRotSpeed = mServerRotSpeedOld;
	}
	else
	{
		mServerRotSpeed = serverRotSpeed;
	}
}
