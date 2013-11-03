//parent
#include "jugadorStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//jugador
#include "../jugador.h"

//client
#include "../../client/robust/partido/clientPartido.h"

//server
#include "../../server/partido/serverPartido.h"

//battle
#include "../../battle/battle.h"
#include "../../battle/states/battleStates.h"

//shape
#include "../../shape/partido/shapePartido.h"

/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_JUGADOR* GLOBAL_JUGADOR::Instance()
{
  static GLOBAL_JUGADOR instance;
  return &instance;
}
void GLOBAL_JUGADOR::enter(Jugador* jugador)
{
}
void GLOBAL_JUGADOR::execute(Jugador* jugador)
{

}
void GLOBAL_JUGADOR::exit(Jugador* jugador)
{
}
bool GLOBAL_JUGADOR::onLetter(Jugador* jugador, Letter* letter)
{
        return true;
}

/*****************************************
	INIT_JUGADOR
****************************************/
INIT_JUGADOR* INIT_JUGADOR::Instance()
{
	static INIT_JUGADOR instance;
	return &instance;
}
void INIT_JUGADOR::enter(Jugador* jugador)
{
	//LogString("INIT_COMBAT:%d:",jugador->mClientPartido->id);
}
void INIT_JUGADOR::execute(Jugador* jugador)
{
	//send right to game
        jugador->mStateMachine->changeState(GAME_JUGADOR::Instance());
}
void INIT_JUGADOR::exit(Jugador* jugador)
{
}
bool INIT_JUGADOR::onLetter(Jugador* jugador, Letter* letter)
{
        return true;
}


/*****************************************
	BATTLE_JUGADOR
****************************************/
BATTLE_JUGADOR* BATTLE_JUGADOR::Instance()
{
  static BATTLE_JUGADOR instance;
  return &instance;
}
void BATTLE_JUGADOR::enter(Jugador* jugador)
{
	//LogString("BATTLE_JUGADOR:%d:",jugador->mClientPartido->id);
}
void BATTLE_JUGADOR::execute(Jugador* jugador)
{
	if (!jugador->mBattle)
	{
                jugador->mStateMachine->changeState(GAME_JUGADOR::Instance());
	}
}
void BATTLE_JUGADOR::exit(Jugador* jugador)
{
}
bool BATTLE_JUGADOR::onLetter(Jugador* jugador, Letter* letter)
{
        return true;
}

/*****************************************
             GAME_JUGADOR 
****************************************/
GAME_JUGADOR* GAME_JUGADOR::Instance()
{
        static GAME_JUGADOR instance;
        return &instance;
}
void GAME_JUGADOR::enter(Jugador* jugador)
{
	//LogString("GAME_JUGADOR:%d:",jugador->mClientPartido->id);
	if (jugador->mBattle)
	{
                jugador->mStateMachine->changeState(BATTLE_JUGADOR::Instance());
	}
}
void GAME_JUGADOR::execute(Jugador* jugador)
{
	//stand down and do nothing or change cleanup
}
void GAME_JUGADOR::exit(Jugador* jugador)
{
}
bool GAME_JUGADOR::onLetter(Jugador* jugador, Letter* letter)
{
        return true;
}

