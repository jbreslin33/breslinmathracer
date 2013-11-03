//header
#include "rotationStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//shape
#include "../../shape/shape.h"

//title
#include "../../billboard/objectTitle.h"

//rotation
#include "../rotation.h"

//game
#include "../../game/game.h"

//applicationBreslin
#include "../../application/applicationBreslin.h"

//command
#include "../../command/command.h"

/******************************************************
*				INTERPOLATE
*
*				   STATES
*
********************************************************/


/******************************************************
*				GLOBAL
********************************************************/
GLOBAL_PROCESSTICK_ROTATION* GLOBAL_PROCESSTICK_ROTATION::Instance()
{
  static GLOBAL_PROCESSTICK_ROTATION instance;
  return &instance;
}
void GLOBAL_PROCESSTICK_ROTATION::enter(Rotation* rotation)
{
}
void GLOBAL_PROCESSTICK_ROTATION::execute(Rotation* rotation)
{
	rotation->calculateServerRotationSpeed();
	rotation->mShape->mGhost->yaw(rotation->mGhostSpeed,true);
	
}
void GLOBAL_PROCESSTICK_ROTATION::exit(Rotation* rotation)
{
}

bool GLOBAL_PROCESSTICK_ROTATION::onLetter(Rotation* rotation, Letter* letter)
{
        return true;
}

/******************************************************
*				NORMAL
********************************************************/

NORMAL_PROCESSTICK_ROTATION* NORMAL_PROCESSTICK_ROTATION::Instance()
{
  static NORMAL_PROCESSTICK_ROTATION instance;
  return &instance;
}
void NORMAL_PROCESSTICK_ROTATION::enter(Rotation* rotation)
{
}
void NORMAL_PROCESSTICK_ROTATION::execute(Rotation* rotation)
{
	//->mObjectTitleString.append("R:Normal");
	// rotation->mShape->appendToTitle("R:Normal");
	
	// are we too far off you need to change to catchup state
    	if(abs(rotation->mDegreesToServer) > rotation->mRotInterpLimitHigh)
    	{
		rotation->mProcessTickStateMachine->changeState(CATCHUP_PROCESSTICK_ROTATION::Instance());
    	}
	if (rotation->mServerRotSpeed == 0.0)
        {
		rotation->mRotationSpeed = 0.0;
        }
        else
        {
		// if server rot counter-clockwise hardcode server rot to +mTurnSpeed
            	if(rotation->mServerRotSpeed > 0.0)
            	{
			rotation->mRotationSpeed = rotation->mTurnSpeed;
            	}
		else //clockwise - set to -mTurnSpeed
            	{
			rotation->mRotationSpeed = -rotation->mTurnSpeed;
            	}
	}
}
void NORMAL_PROCESSTICK_ROTATION::exit(Rotation* rotation)
{
}

bool NORMAL_PROCESSTICK_ROTATION::onLetter(Rotation* rotation, Letter* letter)
{
        return true;
}
/******************************************************
*				CATCHUP
********************************************************/

CATCHUP_PROCESSTICK_ROTATION* CATCHUP_PROCESSTICK_ROTATION::Instance()
{
  static CATCHUP_PROCESSTICK_ROTATION instance;
  return &instance;
}
void CATCHUP_PROCESSTICK_ROTATION::enter(Rotation* rotation)
{
}
void CATCHUP_PROCESSTICK_ROTATION::execute(Rotation* rotation)
{
	// rotation->mShape->appendToTitle("R:Catchup");
	// are we back on track
    	if(abs(rotation->mDegreesToServer) < rotation->mRotInterpLimitLow)
    	{
       		rotation->mProcessTickStateMachine->changeState(NORMAL_PROCESSTICK_ROTATION::Instance());
    	}
	
	if(rotation->mServerRotSpeed != 0.0)
        {
			// if server rot counter-clockwise hardcode server rot to +mTurnSpeed
        	if(rotation->mServerRotSpeed > 0.0)
            	{
			rotation->mShape->mCommandToRunOnShape->mRotationSpeed = rotation->mTurnSpeed;
            	}
            	else //clockwise - set to -mTurnSpeed
            	{
			rotation->mShape->mCommandToRunOnShape->mRotationSpeed = -rotation->mTurnSpeed;
            	}
		
		if(rotation->mDegreesToServer / rotation->mServerRotSpeed > 0.0)
            	{
			rotation->mShape->mCommandToRunOnShape->mRotationSpeed = rotation->mShape->mCommandToRunOnShape->mRotationSpeed * rotation->mRotInterpIncrease;
            	}
            	else
            	{
			rotation->mShape->mCommandToRunOnShape->mRotationSpeed = rotation->mShape->mCommandToRunOnShape->mRotationSpeed * rotation->mRotInterpDecrease;
       	     	}
	}
        else if (rotation->mServerRotSpeed == 0.0)
        {
		if (rotation->mDegreesToServer > 0.0)
            	{
			rotation->mShape->mCommandToRunOnShape->mRotationSpeed = rotation->mTurnSpeed;
            	}
            	else //clockwise - set to -mTurnSpeed
            	{
			rotation->mShape->mCommandToRunOnShape->mRotationSpeed = -rotation->mTurnSpeed;
            	}
	}
}
void CATCHUP_PROCESSTICK_ROTATION::exit(Rotation* rotation)
{
}
bool CATCHUP_PROCESSTICK_ROTATION::onLetter(Rotation* rotation, Letter* letter)
{
        return true;
}

/******************************************************
*				INTERPOLATE
*
*				   STATES
*
********************************************************/


/******************************************************
*				Normal
********************************************************/
NORMAL_INTERPOLATETICK_ROTATION* NORMAL_INTERPOLATETICK_ROTATION::Instance()
{
  static NORMAL_INTERPOLATETICK_ROTATION instance;
  return &instance;
}
void NORMAL_INTERPOLATETICK_ROTATION::enter(Rotation* rotation)
{
}
void NORMAL_INTERPOLATETICK_ROTATION::execute(Rotation* rotation)
{
	//->mObjectTitleString.append("R:Normal");
	float rotSpeed = rotation->mShape->mCommandToRunOnShape->mRotationSpeed * rotation->mShape->mApplication->getRenderTime();
	rotation->mShape->yaw(rotSpeed, true);

	if (rotation->mServerRotSpeed == 0.0 && abs(rotation->getDegreesToServer()) < rotation->mRotInterpLimitLow)
    	{
		rotation->mInterpolateTickStateMachine->changeState(OFF_INTERPOLATETICK_ROTATION::Instance());
    	}
}
void NORMAL_INTERPOLATETICK_ROTATION::exit(Rotation* rotation)
{
}

bool NORMAL_INTERPOLATETICK_ROTATION::onLetter(Rotation* rotation, Letter* letter)
{
        return true;
}
/******************************************************
*				OFF
********************************************************/

OFF_INTERPOLATETICK_ROTATION* OFF_INTERPOLATETICK_ROTATION::Instance()
{
  static OFF_INTERPOLATETICK_ROTATION instance;
  return &instance;
}
void OFF_INTERPOLATETICK_ROTATION::enter(Rotation* rotation)
{
	rotation->mRotationSpeed = 0.0;
}
void OFF_INTERPOLATETICK_ROTATION::execute(Rotation* rotation)
{		
	//->mObjectTitleString.append("R:Off");
	if (abs(rotation->getDegreesToServer()) > rotation->mRotInterpLimitLow)
    	{
		rotation->mInterpolateTickStateMachine->changeState(NORMAL_INTERPOLATETICK_ROTATION::Instance());
    	}
}
void OFF_INTERPOLATETICK_ROTATION::exit(Rotation* rotation)
{
}
bool OFF_INTERPOLATETICK_ROTATION::onLetter(Rotation* rotation, Letter* letter)
{
        return true;
}

