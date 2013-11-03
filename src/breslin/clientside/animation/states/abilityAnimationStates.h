#ifndef ABILITYANIMATIONSTATES_H
#define ABILITYANIMATIONSTATES_H

/******************************************************
*				INCLUDES
********************************************************/
#include "../../../fsm/state.h"

/******************************************************
*				FORWARD DECLARATIONS
********************************************************/

class AbilityAnimationOgre;

/******************************************************
*				INTERPOLATE
*
*				   STATES
*
********************************************************/

/******************************************************
*				IDLE
********************************************************/

class Idle_InterpolateTick_Animation : public State<AbilityAnimationOgre> 
{
private:
  Idle_InterpolateTick_Animation(){}
public:
  static Idle_InterpolateTick_Animation* Instance();
  void enter  (AbilityAnimationOgre* abilityAnimation);
  void execute(AbilityAnimationOgre* abilityAnimation);
  void exit   (AbilityAnimationOgre* abilityAnimation);
 bool onLetter(AbilityAnimationOgre* abilityAnimation, Letter* letter);

};


/******************************************************
*				RUN
********************************************************/
class Run_InterpolateTick_Animation : public State<AbilityAnimationOgre>
{
private:
  Run_InterpolateTick_Animation(){}
public:
  static Run_InterpolateTick_Animation* Instance();
  void enter  (AbilityAnimationOgre* abilityAnimation);
  void execute(AbilityAnimationOgre* abilityAnimation);
  void exit   (AbilityAnimationOgre* abilityAnimation);
 bool onLetter(AbilityAnimationOgre* abilityAnimation, Letter* letter);
};

#endif
