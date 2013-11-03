#include "battle.h"
#include "../tdreamsock/dreamSockLog.h"
#include "../combatant/combatant.h"

#include <string>

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

//states
#include "states/battleStates.h"

//utility
#include "../../utility/utility.h"

//gamePartido
#include "../game/partido/gamePartido.h"

//serverPartido
#include "../server/partido/serverPartido.h"

//network
#include "../network/network.h"

//shapes
#include "../client/robust/partido/clientPartido.h"

Battle::Battle(GamePartido* gamePartido, ClientPartido* homeClient, ClientPartido* awayClient)
{
	mGamePartido = gamePartido;

	//make 2 Combatants a home and away
	mHomeCombatant = new Combatant(this,homeClient);
	mAwayCombatant = new Combatant(this,awayClient);

	//set pointers to foes for combatants
	mHomeCombatant->mFoe = mAwayCombatant;
	mAwayCombatant->mFoe = mHomeCombatant;

	mBattleTime       = 0;
	mBattleStartTime  = mGamePartido->mServerPartido->mNetwork->getCurrentSystemTime();
	mBattleEndTime    = mGamePartido->mServerPartido->mNetwork->getCurrentSystemTime();
	mBattleLengthTime = 20000;

 	//battle states
	mStateMachine =  new StateMachine<Battle>(this);
	mStateMachine->setCurrentState      (INIT_BATTLE::Instance());
	mStateMachine->setPreviousState     (INIT_BATTLE::Instance());
	mStateMachine->setGlobalState       (GLOBAL_BATTLE::Instance());

	mUtility = new Utility();

	mWrittenToDisk = false;
}

Battle::~Battle()
{
	delete mHomeCombatant;
	delete mAwayCombatant;
	delete mStateMachine;
	delete mUtility;
}
void Battle::update()
{
	mStateMachine->update();
	mHomeCombatant->update();
	mAwayCombatant->update();
}

