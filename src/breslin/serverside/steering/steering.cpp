#include "steering.h"
#include "../tdreamsock/dreamSockLog.h"

#include "../client/robust/clientRobust.h"
#include "../shape/shape.h"
#include "../move/move.h"

#include "../../math/vector3D.h"


#include <string>

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

//steering states
#include "states/steeringStates.h"

Steering::Steering(Shape* shape) : BaseEntity(BaseEntity::getNextValidID())
{
	mShape = shape;

	mSteeringShape = NULL;
	mSteeringPoint = NULL;

	mDesiredVelocity = new Vector3D(); 
	

 	//steering states
	mStateMachine =  new StateMachine<Steering>(this);
	mStateMachine->setCurrentState      (NORMAL_STEERING::Instance());
	mStateMachine->setPreviousState     (NORMAL_STEERING::Instance());
	mStateMachine->setGlobalState       (GLOBAL_STEERING::Instance());

	mSteeringForce = new Vector3D();
	mTarget = new Vector3D();

	mMultSeperation  = 0.0;
	mViewDistance  = 0.0;
	mTagged = false;

	mSeekOn = false;
	mSeperationOn  = false;
}

Steering::~Steering()
{
	delete mStateMachine;
	delete mSteeringForce;
	delete mTarget;
        delete mSteeringPoint;
}
void Steering::update()
{
//	mStateMachine->update();

	calculate();
	
/*
	if (mSteeringShape)
	{
		updateSteeringPoint();
	}
*/
}

bool Steering::handleLetter(Letter* letter)
{
        return mStateMachine->handleLetter(letter);
}

void Steering::updateSteeringPoint()
{
	//update steering point if steering shape
 	if (mSteeringShape)
        {
                //set steering point as that is what we will really use...
                mSteeringPoint = new Vector3D();
                mSteeringPoint->x = mSteeringShape->mSceneNode->getPosition().x;             
                mSteeringPoint->y = mSteeringShape->mSceneNode->getPosition().y;             
                mSteeringPoint->z = mSteeringShape->mSceneNode->getPosition().z;             
        }
}

void Steering::setSteeringPoint(Vector3D* steeringPoint)
{
	if (steeringPoint)
	{
		mSteeringPoint = new Vector3D();
		mSteeringPoint->copyValuesFrom(steeringPoint); 
	}
	else
	{
		mSteeringPoint = NULL;
		mSteeringShape = NULL;
	}
}

void Steering::setSteeringShape(Shape* steeringShape)
{
	if (steeringShape)
	{
		//set shape
		mSteeringShape = steeringShape;

		updateSteeringPoint();
	}
	else
	{
		mSteeringShape = NULL;
		mSteeringPoint = NULL;
	}
}
/*
	Buckland
*/

Vector3D* Steering::calculate()
{                                                                         
	//reset the force
  	mSteeringForce->zero();

  	//this will hold the value of each individual steering force
  	mSteeringForce = sumForces();

  	//make sure the force doesn't exceed the vehicles maximum allowable
  	mSteeringForce->truncate(mShape->mMove->mMaxForce);
	
	mShape->mMove->mVelocity->copyValuesFrom(mSteeringForce); 
	mShape->mMove->mVelocity->normalise(); 

  	return mSteeringForce;
}

Vector3D* Steering::sumForces()
{
	Vector3D* force = new Vector3D();
  
  	//the soccer players must always tag their neighbors
   	findNeighbours();
/*
  	if (mSeperationOn)
  	{
    		Vector3D* v = separation();
		v->multiply(mMultSeperation);
    		force->add(v);

    		if (!accumulateForce(mSteeringForce, force)) 
		{
			return mSteeringForce;
		}

  	}    
*/
  	if (mSeekOn)
  	{
		Vector3D* seekForce = seek(mTarget);

    		force->add(seekForce);

    		if (!accumulateForce(mSteeringForce, force))
		{
			return mSteeringForce;
		}
  	}
	delete force;
  	return mSteeringForce;
}

Vector3D* Steering::seek(Vector3D* target)
{
	Vector3D* currentPosition = new Vector3D();
	Vector3D* mDesiredVelocity = new Vector3D();

	currentPosition->convertFromVector3(mShape->mSceneNode->getPosition());

  	currentPosition->multiply(mShape->mMove->mSpeedMax);

  	mDesiredVelocity->copyValuesFrom(target);
  	mDesiredVelocity->subtract(currentPosition);

  	mDesiredVelocity->normalise();
	delete currentPosition;

  	return mDesiredVelocity;
}

bool Steering::accumulateForce(Vector3D* sf, Vector3D* forceToAdd)
{
	//first calculate how much steering force we have left to use
  	double magnitudeSoFar = sf->length();

  	double magnitudeRemaining = mShape->mMove->mMaxForce - magnitudeSoFar;

  	//return false if there is no more force left to use
  	if (magnitudeRemaining <= 0.0) 
	{
		return false;
	}

  	//calculate the magnitude of the force we want to add
  	double magnitudeToAdd = forceToAdd->length();
  
  	//now calculate how much of the force we can really add  
  	if (magnitudeToAdd > magnitudeRemaining)
  	{
    		magnitudeToAdd = magnitudeRemaining;
  	}

  	//add it to the steering force
	forceToAdd->normalise();
  	forceToAdd->multiply(magnitudeToAdd); 
  	sf->add(forceToAdd); 
  
  	return true;
}



double Steering::forwardComponent()
{
  	return mShape->mMove->mVelocity->dot(mSteeringForce);
}

double Steering::sideComponent()
{
  	//return mShape->side().dot(mSteeringForce) * mShape->mMaxTurnRate;
	return 0.0f;
}


void Steering::findNeighbours()
{
	/*
  	std::list<PlayerBase*>& AllPlayers = AutoList<PlayerBase>::GetAllMembers();
  	std::list<PlayerBase*>::iterator curPlyr;
  	for (curPlyr = AllPlayers.begin(); curPlyr!=AllPlayers.end(); ++curPlyr)
  	{
    		//first clear any current tag
    		(*curPlyr)->Steering()->UnTag();

    		//work in distance squared to avoid sqrts
    		Vector3D* to = (*curPlyr)->Pos() - m_pPlayer->Pos();

    		if (to.LengthSq() < (m_dViewDistance * m_dViewDistance))
    		{
      			(*curPlyr)->Steering()->Tag();
    		}
  	}//next
*/
}

Vector3D* Steering::separation()
{  
	//iterate through all the neighbors and calculate the vector from the
  	Vector3D* steeringForce = new Vector3D();

/*
  	std::list<Shape*>& allPlayers = AutoList<Shape>::GetAllMembers();
  	std::list<PlayerBase*>::iterator curPlyr;
  	for (curPlyr = AllPlayers.begin(); curPlyr!=AllPlayers.end(); ++curPlyr)
  	{
    		//make sure this agent isn't included in the calculations and that
    		//the agent is close enough
    		if((*curPlyr != m_pPlayer) && (*curPlyr)->Steering()->Tagged())
    		{
      			Vector3D* ToAgent = m_pPlayer->Pos() - (*curPlyr)->Pos();

      			//scale the force inversely proportional to the agents distance  
      			//from its neighbor.
      			SteeringForce += Vec2DNormalize(ToAgent)/ToAgent.Length();
    		}
  	}
*/
  	return steeringForce;
}

