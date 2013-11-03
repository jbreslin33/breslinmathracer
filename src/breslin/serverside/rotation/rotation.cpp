#include "rotation.h"
#include "../tdreamsock/dreamSockLog.h"

#include "../shape/shape.h"

#include <string>

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

//rotation states
#include "states/rotationStates.h"

Rotation::Rotation(Shape* shape) : BaseEntity(BaseEntity::getNextValidID())
{
	mRotation = new Vector3D();
	mRotationLast = new Vector3D();

	mShape = shape;

	mRotationSpeed  = 0.0;

	mDegrees = 0.0f;

    	//run acceleration
    	mRotationAccel    = .04166f * 100.0f;
    	mRotationDecel    = .04166f * 100.0f;

	//rotation states
	mStateMachine = new StateMachine<Rotation>(this);    //setup the state machine
	mStateMachine->setCurrentState      (NORMAL_ROTATION::Instance());
	mStateMachine->setPreviousState     (NORMAL_ROTATION::Instance());
	mStateMachine->setGlobalState       (GLOBAL_ROTATION::Instance());
}

Rotation::~Rotation()
{
	delete mRotation;
	delete mRotationLast;
	delete mStateMachine;    //setup the state machine
}

void Rotation::update()
{
        mRotation->x = mShape->mSceneNode->_getDerivedOrientation().zAxis().x;

        mRotation->z = mShape->mSceneNode->_getDerivedOrientation().zAxis().z;

	mStateMachine->update();
}

bool Rotation::handleLetter(Letter* letter)
{
        return mStateMachine->handleLetter(letter);
}


