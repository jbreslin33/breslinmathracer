//parent
#include "abilityAnimationStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//shape
#include "../../shape/shape.h"

//billboard
#include "../../billboard/objectTitle.h"

//animation
#include "../abilityAnimationOgre.h"

//command
#include "../../command/command.h"

/******************************************************
*				INTERPOLATE
*
*				   STATES
*
********************************************************/


/******************************************************
*				IDLE
********************************************************/

Idle_InterpolateTick_Animation* Idle_InterpolateTick_Animation::Instance()
{
  static Idle_InterpolateTick_Animation instance;
  return &instance;
}
void Idle_InterpolateTick_Animation::enter(AbilityAnimationOgre* abilityAnimation)
{
        // start off in the idle state (top and bottom together)
	abilityAnimation->setBaseAnimation(abilityAnimation->ANIM_IDLE_BASE,false);
        abilityAnimation->setTopAnimation(abilityAnimation->ANIM_IDLE_TOP,false);

        // relax the hands since we're not holding anything
        abilityAnimation->mAnims[abilityAnimation->ANIM_HANDS_RELAXED]->setEnabled(true);
}

void Idle_InterpolateTick_Animation::execute(AbilityAnimationOgre* abilityAnimation)
{
	{
	Vector3D* positionDiff = new Vector3D();
	positionDiff->subtract(abilityAnimation->mShape->mServerCommandCurrent->mPosition, abilityAnimation->mShape->mServerCommandLast->mPosition);
 	
	if (!positionDiff->isZero())
		abilityAnimation->mAnimationInterpolateTickStateMachine->changeState(Run_InterpolateTick_Animation::Instance());
	}

	abilityAnimation->runAnimations();
}
void Idle_InterpolateTick_Animation::exit(AbilityAnimationOgre* abilityAnimation)
{
}
bool Idle_InterpolateTick_Animation::onLetter(AbilityAnimationOgre* abilityAnimationOgre, Letter* letter)
{
        return true;
}

/******************************************************
*				RUN
********************************************************/

Run_InterpolateTick_Animation* Run_InterpolateTick_Animation::Instance()
{
  static Run_InterpolateTick_Animation instance;
  return &instance;
}
void Run_InterpolateTick_Animation::enter(AbilityAnimationOgre* abilityAnimation)
{
	abilityAnimation->setBaseAnimation(abilityAnimation->ANIM_RUN_BASE, true);
        abilityAnimation->setTopAnimation(abilityAnimation->ANIM_RUN_TOP, true);

        // relax the hands since we're not holding anything
        if (!abilityAnimation->mAnims[abilityAnimation->ANIM_HANDS_RELAXED]->getEnabled())
        {
                abilityAnimation->mAnims[abilityAnimation->ANIM_HANDS_RELAXED]->setEnabled(true);
        }
}
void Run_InterpolateTick_Animation::execute(AbilityAnimationOgre* abilityAnimation)
{
		
	Vector3D* positionDiff = new Vector3D();
	positionDiff->subtract(abilityAnimation->mShape->mServerCommandCurrent->mPosition, abilityAnimation->mShape->mServerCommandLast->mPosition);
 	
	if (positionDiff->isZero())
	{
		abilityAnimation->mAnimationInterpolateTickStateMachine->changeState(Idle_InterpolateTick_Animation::Instance());
	}
	
	abilityAnimation->runAnimations();
}

void Run_InterpolateTick_Animation::exit(AbilityAnimationOgre* abilityAnimation)
{
}

bool Run_InterpolateTick_Animation::onLetter(AbilityAnimationOgre* abilityAnimationOgre, Letter* letter)
{
        return true;
}

