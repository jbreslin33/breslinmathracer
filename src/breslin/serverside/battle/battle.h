#ifndef BATTLE_H
#define BATTLE_H

#include "../../fsm/stateMachine.h"

class ClientPartido;
class Combatant;
class GamePartido;
class Utility;

class Battle 
{

public:

Battle(GamePartido* gamePartido, ClientPartido* homeClient, ClientPartido* awayClient);
virtual ~Battle();

//update
void update();

StateMachine<Battle>* mStateMachine;

GamePartido* mGamePartido;

Combatant* mHomeCombatant;
Combatant* mAwayCombatant;

// battle time
long mBattleTime;
long mBattleStartTime;
long mBattleEndTime;
long mBattleLengthTime;


//utility
Utility* mUtility;

bool mWrittenToDisk;
};

#endif

