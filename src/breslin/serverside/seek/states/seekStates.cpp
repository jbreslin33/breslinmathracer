//parent
#include "seekStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//seek
#include "../seek.h"

//server
#include "../../server/server.h"

//game
#include "../../game/game.h"

//shape
#include "../../shape/shape.h"

//vector3D
#include "../../../math/vector3D.h"

//move
#include "../../move/move.h"

/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_SEEK* GLOBAL_SEEK::Instance()
{
  static GLOBAL_SEEK instance;
  return &instance;
}
void GLOBAL_SEEK::enter(Seek* seek)
{
}
void GLOBAL_SEEK::execute(Seek* seek)
{
}
void GLOBAL_SEEK::exit(Seek* seek)
{
}
bool GLOBAL_SEEK::onLetter(Seek* seek, Letter* letter)
{
        return true;
}

/*****************************************
	NORMAL_SEEK
****************************************/
NORMAL_SEEK* NORMAL_SEEK::Instance()
{
  static NORMAL_SEEK instance;
  return &instance;
}
void NORMAL_SEEK::enter(Seek* seek)
{
	//LogString("NORMAL_SEEK");
}
void NORMAL_SEEK::execute(Seek* seek)
{
	if (seek->mSeekShape || seek->mSeekPoint)
        {
               	//current position 
		Vector3D* currentPosition = new Vector3D();
		currentPosition->convertFromVector3(seek->mShape->mSceneNode->getPosition());

		//seek velocity and length
                seek->mSeekVelocity->subtract(seek->mSeekPoint,currentPosition);
		seek->mSeekLength = seek->mSeekVelocity->length(); 			
		
		if (seek->mSeekLength <= 2) //close enough goto reachdestination
		{
                	seek->mStateMachine->changeState(REACHED_DESTINATION::Instance());
		}
		else //still not close enough seek on
		{
			seek->mSeekVelocity->normalise();

			//set to shape velocity
			seek->mShape->mMove->mVelocity->copyValuesFrom(seek->mSeekVelocity);
		}
        }
        else
        {
                seek->mStateMachine->changeState(NO_SEEK::Instance());
        }
}
void NORMAL_SEEK::exit(Seek* seek)
{
}
bool NORMAL_SEEK::onLetter(Seek* seek, Letter* letter)
{
        return true;
}

/*****************************************
        REACHED_DESTINATION
****************************************/
REACHED_DESTINATION* REACHED_DESTINATION::Instance()
{
        static REACHED_DESTINATION instance;
        return &instance;
}
void REACHED_DESTINATION::enter(Seek* seek)
{
        //LogString("REACHED_DESTINATION");
}
void REACHED_DESTINATION::execute(Seek* seek)
{
        if (seek->mSeekShape == NULL && seek->mSeekPoint == NULL)
	{
                seek->mStateMachine->changeState(NO_SEEK::Instance());
	}
	else
	{
   		//current position
                Vector3D* currentPosition = new Vector3D();
                currentPosition->convertFromVector3(seek->mShape->mSceneNode->getPosition());

                //seek velocity and length
                seek->mSeekVelocity->subtract(seek->mSeekPoint,currentPosition);
                seek->mSeekLength = seek->mSeekVelocity->length();

		if (seek->mSeekLength > 2) //go to normal seek and seek on!
		{
                	seek->mStateMachine->changeState(NORMAL_SEEK::Instance());
		}
		else
		{
                	//set to shape velocity to zero as you have reached destination
                	seek->mShape->mMove->mVelocity->zero();
		}
	}
}
void REACHED_DESTINATION::exit(Seek* seek)
{
}
bool REACHED_DESTINATION::onLetter(Seek* seek, Letter* letter)
{
        return true;
}



/*****************************************
	NO_SEEK
****************************************/
NO_SEEK* NO_SEEK::Instance()
{
	static NO_SEEK instance;
	return &instance;
}
void NO_SEEK::enter(Seek* seek)
{
	//LogString("NO_SEEK");
}
void NO_SEEK::execute(Seek* seek)
{
	if (seek->mSeekShape == NULL && seek->mSeekPoint == NULL)
	{
		//LogString("Not seeking");
	}
	else
	{
		seek->mStateMachine->changeState(NORMAL_SEEK::Instance());
	}
}
void NO_SEEK::exit(Seek* seek)
{
}
bool NO_SEEK::onLetter(Seek* seek, Letter* letter)
{
        return true;
}

