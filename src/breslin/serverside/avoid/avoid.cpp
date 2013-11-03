#include "avoid.h"
#include "../tdreamsock/dreamSockLog.h"

#include "../client/client.h"
#include "../shape/shape.h"
#include "../seek/seek.h"

#include "../../math/vector3D.h"


#include <string>

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

//avoid states
#include "states/avoidStates.h"

Avoid::Avoid(Shape* shape) : BaseEntity(BaseEntity::getNextValidID())
{
	mShape = shape;
	mAvoidee = NULL;

	mAvoidLength = 0.0f;
	mAvoidLengthLast = 0.0f;

	mAvoidDot = 0.0f;
	mAvoidDotLast = 0.0f;

	mAvoidVelocity = new Vector3D();
	mEvasiveVelocity = new Vector3D();

	mCurrentPosition = new Vector3D();
	mAvoideePosition = new Vector3D();

	//evade
	mEvadeWithXPositive = false;
	mEvadeWithZPositive = false;
	mEvadeWithXNegative = false;
	mEvadeWithZNegative = false;

 	//avoid states
	mStateMachine =  new StateMachine<Avoid>(this);
	mStateMachine->setCurrentState      (NORMAL_AVOID::Instance());
	mStateMachine->setPreviousState     (NORMAL_AVOID::Instance());
	mStateMachine->setGlobalState       (GLOBAL_AVOID::Instance());
}

Avoid::~Avoid()
{
	delete mAvoidVelocity;
	delete mEvasiveVelocity;

	delete mCurrentPosition;
	delete mAvoideePosition;
	delete mStateMachine;
}
void Avoid::update()
{
	mStateMachine->update();
}

bool Avoid::handleLetter(Letter* letter)
{
        return mStateMachine->handleLetter(letter);
}

void Avoid::addAvoidShape(Shape* avoidShape)
{
	mAvoidVector.push_back(avoidShape);
}

bool Avoid::removeAvoidShape(Shape* avoidShape)
{
	for (unsigned int i = 0; i < mAvoidVector.size(); i++)
	{
		if (mAvoidVector.at(i) == avoidShape)
		{
			mAvoidVector.erase(mAvoidVector.begin()+i);
			return true;
		}	
	}
	return false;
}

void  Avoid::calculateClosestAvoidee()
{
	Shape* closestShapeSoFar = NULL;
	float closestDistanceSoFar = 3000.0f;

	for (unsigned int i = 0; i < mAvoidVector.size(); i++)
	{
		Shape* avoidee = mAvoidVector.at(i);

 		Vector3D* newKeyDirection         = new Vector3D();
                Vector3D* currentPosition         = new Vector3D();
                Vector3D* currentAvoideePosition  = new Vector3D();
                Vector3D* differenceVector        = new Vector3D();

                currentPosition->x = mShape->mSceneNode->getPosition().x;
                currentPosition->y = mShape->mSceneNode->getPosition().y;
                currentPosition->z = mShape->mSceneNode->getPosition().z;

                currentAvoideePosition->x = avoidee->mSceneNode->getPosition().x;
                currentAvoideePosition->y = avoidee->mSceneNode->getPosition().y;
                currentAvoideePosition->z = avoidee->mSceneNode->getPosition().z;

		differenceVector->subtract(currentPosition,currentAvoideePosition);

		float length = differenceVector->length();

		if (length < closestDistanceSoFar)
		{
			closestShapeSoFar = avoidee;
			closestDistanceSoFar = length;
		}
 		delete newKeyDirection;
                delete currentPosition;
                delete currentAvoideePosition;
                delete differenceVector;
	}
	mAvoidee = closestShapeSoFar;
	if (mAvoidee)
	{
        	mAvoideePosition->convertFromVector3(mAvoidee->mSceneNode->getPosition());

                //avoid velocity and length(this is actually to hit the avoidee)
                mAvoidVelocity->subtract(mAvoideePosition,mCurrentPosition);
                mAvoidLengthLast = mAvoidLength;
                mAvoidLength     = mAvoidVelocity->length();
                mAvoidVelocity->normalise();
	}
}

void Avoid::calculateCurrentPosition()
{
	//current position
        mCurrentPosition->convertFromVector3(mShape->mSceneNode->getPosition());
}

void Avoid::calculateDot()
{
	//the dot between seekVelocity and avoidVelocity
        mAvoidDotLast = mAvoidDot;
        mAvoidDot     = mAvoidVelocity->dot(mShape->mSeek->mSeekVelocity);
}
void Avoid::setEvasiveVelocityToSeek()
{
        mEvasiveVelocity->copyValuesFrom(mShape->mSeek->mSeekVelocity);
}
