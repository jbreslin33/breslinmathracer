//header
#include "moveStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//game
#include "../../application/applicationBreslin.h"

//game
#include "../../game/game.h"

//shape
#include "../../shape/shape.h"

//ability
#include "../move.h"

//utility
#include <math.h>

//command
#include "../../command/command.h"


/******************** GLOBAL_PROCESSTICK_MOVE *****************/

GLOBAL_PROCESSTICK_MOVE* GLOBAL_PROCESSTICK_MOVE::Instance()
{
  static GLOBAL_PROCESSTICK_MOVE instance;
  return &instance;
}
void GLOBAL_PROCESSTICK_MOVE::enter(Move* move)
{

}
void GLOBAL_PROCESSTICK_MOVE::execute(Move* move)
{
        move->mShape->moveGhostShape();
        move->calculateDeltaPosition();
}
void GLOBAL_PROCESSTICK_MOVE::exit(Move* move)
{
}

bool GLOBAL_PROCESSTICK_MOVE::onLetter(Move* move, Letter* letter)
{
        return true;
}


/******************** NORMAL_PROCESSTICK_MOVE *****************/

NORMAL_PROCESSTICK_MOVE* NORMAL_PROCESSTICK_MOVE::Instance()
{
  static NORMAL_PROCESSTICK_MOVE instance;
  return &instance;
}
void NORMAL_PROCESSTICK_MOVE::enter(Move* move)
{
	//LogString("NORMAL_PROCESSTICK_MOVE::enter");
}
void NORMAL_PROCESSTICK_MOVE::execute(Move* move)
{
        //move->mShape->appendToTitle("M:Normal");

        // if distance exceeds threshold && server velocity is zero
        if(move->mDeltaPosition > move->mPosInterpLimitHigh && !move->mShape->mServerCommandCurrent->mVelocity->isZero())
        {
                move->mProcessTickStateMachine->changeState(CATCHUP_PROCESSTICK_MOVE::Instance());
	}                

	Vector3D serverVelocity;
       	serverVelocity.copyValuesFrom(move->mShape->mServerCommandCurrent->mVelocity);
        serverVelocity.normalise();

        if(move->mShape->mCommandToRunOnShape->mFrameTime != 0)
        {
        	move->mShape->mSpeed = move->calculateSpeed(
                move->mShape->mServerCommandCurrent->mVelocity,
                move->mShape->mCommandToRunOnShape->mFrameTime);
        }

       	serverVelocity.multiply(move->mShape->mSpeed);
	move->regulate(&serverVelocity);
        move->mShape->mCommandToRunOnShape->mVelocity->copyValuesFrom(&serverVelocity);
}
void NORMAL_PROCESSTICK_MOVE::exit(Move* move)
{
}

bool NORMAL_PROCESSTICK_MOVE::onLetter(Move* move, Letter* letter)
{
        return true;
}

/******************** CATCHUP_PROCESSTICK_MOVE *****************/

CATCHUP_PROCESSTICK_MOVE* CATCHUP_PROCESSTICK_MOVE::Instance()
{
        static CATCHUP_PROCESSTICK_MOVE instance;
        return &instance;
}
void CATCHUP_PROCESSTICK_MOVE::enter(Move* move)
{
	//LogString("CATCHUP_PROCESSTICK_MOVE::enter");
}
void CATCHUP_PROCESSTICK_MOVE::execute(Move* move)
{

	//move->mShape->appendToTitle("M:Catchup");

        //if we are back in sync
    	if(move->mDeltaPosition <= move->mPosInterpLimitHigh || move->mShape->mServerCommandCurrent->mVelocity->isZero())
    	{
                move->mProcessTickStateMachine->changeState(NORMAL_PROCESSTICK_MOVE::Instance());
    	}
      	
	//this is what we will set mCommandToRunOnShape->mVelocity to
        Vector3D velocity; //vector to future server pos

        //first set velocity to most recent velocity from server.
        velocity.copyValuesFrom(move->mShape->mServerCommandCurrent->mVelocity);

        //normalise it now we know what direction to head in.
        velocity.normalise();

        //le'ts find out how fast
        //change in position times our interp factor
        float multiplier = move->mDeltaPosition * move->mPosInterpFactor;
                
        //multiply our normalized velocity by multiplier(change * interpfactor)
        velocity.multiply(multiplier);
                
        //add the latest server position to our velocity
        velocity.add(move->mShape->mServerCommandCurrent->mPosition);

        //now subtract our current position from our velocity
        velocity.subtract(move->mShape->getPosition());

        //dist from client pos to future server pos
        float predictDist = pow(velocity.x, 2) + pow(velocity.y, 2) + pow(velocity.z, 2);
        predictDist = sqrt(predictDist);

        //server velocity
        if(move->mShape->mCommandToRunOnShape->mFrameTime != 0)
        {
        	move->mShape->mSpeed = move->calculateSpeed(
move->mShape->mServerCommandCurrent->mVelocity,
               move->mShape->mCommandToRunOnShape->mFrameTime);
        }

        if(move->mShape->mSpeed != 0.0)
        {
        	//time needed to get to future server pos
                float time = move->mDeltaPosition * move->mPosInterpFactor/move->mShape->mSpeed;

                velocity.normalise();  //?????what the hell why i am normalizing this after all that work above?

                //client vel needed to get to future server pos in time
                float distTime = predictDist/time;
                velocity.multiply(distTime);

                //set velocity to mCommandToRunOnShape->mVelocity which is what interpolateTick uses
		move->regulate(&velocity);
                move->mShape->mCommandToRunOnShape->mVelocity->copyValuesFrom(&velocity);
	}
        else
        {
               	//why would catchup ever need to set velocity to zero, wouldn't we simply leave catchup state??
                move->mShape->mCommandToRunOnShape->mVelocity->zero();
        }
}
void CATCHUP_PROCESSTICK_MOVE::exit(Move* move)
{
}

bool CATCHUP_PROCESSTICK_MOVE::onLetter(Move* move, Letter* letter)
{
        return true;
}

/******************** NORMAL_INTERPOLATETICK_MOVE *****************/

NORMAL_INTERPOLATETICK_MOVE* NORMAL_INTERPOLATETICK_MOVE::Instance()
{
  static NORMAL_INTERPOLATETICK_MOVE instance;
  return &instance;
}
void NORMAL_INTERPOLATETICK_MOVE::enter(Move* move)
{
	//LogString("NORMAL_INTERPOLATETICK_MOVE::enter");
}
void NORMAL_INTERPOLATETICK_MOVE::execute(Move* move)
{
        //to be used to setPosition
        Vector3D transVector;

        //copy values from mVelocity so we don't make changes to original
        transVector.copyValuesFrom(move->mShape->mCommandToRunOnShape->mVelocity);
        
	//get the mulitplier
        float multipliedRenderTime = move->mShape->mApplication->getRenderTime() * 1000;

        //multiply our vector using render values
        transVector.multiply(multipliedRenderTime); 

        //add our velocity to current position
        transVector.add(move->mShape->getPosition());
        
	//set position
	if (transVector.x < 250.0f && transVector.x > -250.0f && transVector.z < 250.0f && transVector.z > -250.0f)
	{
		move->mShape->setPosition(transVector);
	}

	if (move->mShape->mLocal == 1)
	{
		move->mShape->mApplication->getCamera()->setPosition(Ogre::Vector3(transVector.x,transVector.y + 100,transVector.z + 150));

		move->mShape->mApplication->getCamera()->lookAt(Ogre::Vector3(transVector.x,transVector.y,transVector.z - 30.0f));
	
	}
}
void NORMAL_INTERPOLATETICK_MOVE::exit(Move* move)
{
}

bool NORMAL_INTERPOLATETICK_MOVE::onLetter(Move* move, Letter* letter)
{
        return true;
}
