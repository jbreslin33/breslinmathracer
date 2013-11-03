//parent
#include "avoidStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//avoid
#include "../avoid.h"

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

//seek
#include "../../seek/seek.h"

/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_AVOID* GLOBAL_AVOID::Instance()
{
  static GLOBAL_AVOID instance;
  return &instance;
}
void GLOBAL_AVOID::enter(Avoid* avoid)
{
}
void GLOBAL_AVOID::execute(Avoid* avoid)
{
        if (avoid->mAvoidVector.size() == 0)
        {
		if (avoid->mStateMachine->currentState() != NO_AVOID::Instance())
		{	
                	avoid->mStateMachine->changeState(NO_AVOID::Instance());
		}
        }
	avoid->calculateClosestAvoidee();
	avoid->calculateCurrentPosition();
	avoid->calculateDot();
	avoid->setEvasiveVelocityToSeek();
}
void GLOBAL_AVOID::exit(Avoid* avoid)
{
}
bool GLOBAL_AVOID::onLetter(Avoid* avoid, Letter* letter)
{
        return true;
}


/*****************************************
	NORMAL_AVOID
****************************************/
NORMAL_AVOID* NORMAL_AVOID::Instance()
{
  static NORMAL_AVOID instance;
  return &instance;
}
void NORMAL_AVOID::enter(Avoid* avoid)
{
	//LogString("NORMAL_AVOID");
}
void NORMAL_AVOID::execute(Avoid* avoid)
{
	if (avoid->mAvoidee)
	{
		if (avoid->mAvoidDot < .50) 
		{
			//just seek
			avoid->mStateMachine->changeState(NO_AVOID::Instance());	
		} 
		else //dot lines up, take evasive action.. 
		{
			Vector3D newVelocity;

			if (avoid->mShape->mSeek->mSeekPoint || avoid->mShape->mSeek->mSeekPoint)
			{ 
                		avoid->mStateMachine->changeState(Seek_Avoid::Instance());
			}
			else
			{
				newVelocity = avoid->mAvoidVelocity->getVectorOffset(90.0f,true);
			}

       			avoid->mShape->mMove->mVelocity->copyValuesFrom(&newVelocity);
       			avoid->mShape->mMove->mVelocity->normalise();
		}
	}
}
void NORMAL_AVOID::exit(Avoid* avoid)
{
}
bool NORMAL_AVOID::onLetter(Avoid* avoid, Letter* letter)
{
        return true;
}

/*****************************************
        Seek_Avoid
****************************************/
Seek_Avoid* Seek_Avoid::Instance()
{
  static Seek_Avoid instance;
  return &instance;
}
void Seek_Avoid::enter(Avoid* avoid)
{
        //LogString("Seek_Avoid");
}
void Seek_Avoid::execute(Avoid* avoid)
{
        if (avoid->mAvoidee)
        {
                if (avoid->mAvoidDot < .50)
                {
                        //just seek
                        avoid->mStateMachine->changeState(NO_AVOID::Instance());
                }
                else //dot lines up, take evasive action..
                {
                        Vector3D newVelocity;

                        if (avoid->mShape->mSeek->mSeekPoint || avoid->mShape->mSeek->mSeekPoint)
                        {
                                newVelocity = avoid->mAvoidVelocity->getVectorOffset(45.0f,true);
                        }
                        else
                        {
                		avoid->mStateMachine->changeState(NORMAL_AVOID::Instance());
                        }

                        avoid->mShape->mMove->mVelocity->copyValuesFrom(&newVelocity);
                        avoid->mShape->mMove->mVelocity->normalise();
                }
        }
}
void Seek_Avoid::exit(Avoid* avoid)
{
}
bool Seek_Avoid::onLetter(Avoid* avoid, Letter* letter)
{
        return true;
}


/*****************************************
	NO_AVOID
****************************************/
NO_AVOID* NO_AVOID::Instance()
{
	static NO_AVOID instance;
	return &instance;
}
void NO_AVOID::enter(Avoid* avoid)
{
	//LogString("NO_AVOID");
}
void NO_AVOID::execute(Avoid* avoid)
{
	if (avoid->mAvoidVector.size() > 0)	
	{
		if (avoid->mAvoidDot >= .50)
		{
			avoid->mStateMachine->changeState(NORMAL_AVOID::Instance());
		}
	}
}
void NO_AVOID::exit(Avoid* avoid)
{
}
bool NO_AVOID::onLetter(Avoid* avoid, Letter* letter)
{
        return true;
}

