//parent
#include "combatantStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//combatant
#include "../combatant.h"

//client
#include "../../client/robust/partido/clientPartido.h"

//server
#include "../../server/partido/serverPartido.h"

//battle
#include "../../battle/battle.h"
#include "../../battle/states/battleStates.h"

//shape
#include "../../shape/partido/shapePartido.h"

//utility
#include "../../../utility/utility.h"

//game
#include "../../game/game.h"
#include "../../game/states/gameStates.h"

/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_COMBATANT* GLOBAL_COMBATANT::Instance()
{
  static GLOBAL_COMBATANT instance;
  return &instance;
}
void GLOBAL_COMBATANT::enter(Combatant* combatant)
{
}
void GLOBAL_COMBATANT::execute(Combatant* combatant)
{

}
void GLOBAL_COMBATANT::exit(Combatant* combatant)
{
}
bool GLOBAL_COMBATANT::onLetter(Combatant* combatant, Letter* letter)
{
        return true;
}

/*****************************************
	INIT_COMBATANT
****************************************/
INIT_COMBATANT* INIT_COMBATANT::Instance()
{
	static INIT_COMBATANT instance;
	return &instance;
}
void INIT_COMBATANT::enter(Combatant* combatant)
{
}
void INIT_COMBATANT::execute(Combatant* combatant)
{
	if (combatant->mClientPartido->mShape->mIndex)
	{
	}
	//we are ready to go if we have a foe
	if (combatant->mBattle->mStateMachine->currentState() == NORMAL_BATTLE::Instance())
	{
		//let internet client know to start a battle
		combatant->mClientPartido->mDeltaCode = combatant->mClientPartido->mServerPartido->mMessageBattleStart; 
                combatant->mStateMachine->changeState(NORMAL_COMBATANT::Instance());
	}               
}
void INIT_COMBATANT::exit(Combatant* combatant)
{
}
bool INIT_COMBATANT::onLetter(Combatant* combatant, Letter* letter)
{
        return true;
}


/*****************************************
	NORMAL_COMBATANT
****************************************/
NORMAL_COMBATANT* NORMAL_COMBATANT::Instance()
{
  static NORMAL_COMBATANT instance;
  return &instance;
}
void NORMAL_COMBATANT::enter(Combatant* combatant)
{
	if (combatant->mClientPartido->mShape->mIndex)
	{
	}
}
void NORMAL_COMBATANT::execute(Combatant* combatant)
{
	if (combatant->mBattle)
	{
		if (combatant->mBattle->mStateMachine->currentState() == OVER_BATTLE::Instance())
		{
                	combatant->mStateMachine->changeState(YIELD::Instance());
		}
	}
}
void NORMAL_COMBATANT::exit(Combatant* combatant)
{
}
bool NORMAL_COMBATANT::onLetter(Combatant* combatant, Letter* letter)
{
        return true;
}

/*****************************************
             YIELD 
****************************************/
YIELD* YIELD::Instance()
{
        static YIELD instance;
        return &instance;
}
void YIELD::enter(Combatant* combatant)
{
	if (combatant->mClientPartido->mGame->mStateMachine->currentState() != RESET_GAME::Instance())
	{
		combatant->mClientPartido->mDeltaCode = combatant->mClientPartido->mServerPartido->mMessageBattleEnd;
	}

        if (combatant->mScore > combatant->mFoe->mScore)
	{
               	combatant->mClientPartido->mScore++;
	}
}
void YIELD::execute(Combatant* combatant)
{
	//if (combatant->mQuiz->mStateMachine->currentState() != SHOW_CORRECT_ANSWER::Instance())
//	{ 
//	}
}
void YIELD::exit(Combatant* combatant)
{
}
bool YIELD::onLetter(Combatant* combatant, Letter* letter)
{
        return true;
}

