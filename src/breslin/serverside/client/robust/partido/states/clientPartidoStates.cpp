/***
these states are always on...as their is always a gamePartido..and these clients are in it. it really should handle the mechanics of quiz... 

*/
//parent
#include "clientPartidoStates.h"

//log
#include "../../../../tdreamsock/dreamSockLog.h"

//states
#include "../../../../../fsm/stateMachine.h"

//ability
#include "../clientPartido.h"

//server
#include "../../../../server/partido/serverPartido.h"

//shapePartido
#include "../../../../shape/partido/shapePartido.h"

//question
#include "../../../../question/question.h"

//test
#include "../../../../test/test.h"

/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_CLIENT_PARTIDO* GLOBAL_CLIENT_PARTIDO::Instance()
{
  static GLOBAL_CLIENT_PARTIDO instance;
  return &instance;
}
void GLOBAL_CLIENT_PARTIDO::enter(ClientPartido* clientPartido)
{
}
void GLOBAL_CLIENT_PARTIDO::execute(ClientPartido* clientPartido)
{

}
void GLOBAL_CLIENT_PARTIDO::exit(ClientPartido* clientPartido)
{
}
bool GLOBAL_CLIENT_PARTIDO::onLetter(ClientPartido* clientPartido, Letter* letter)
{
        return false;
}


/*****************************************
*******       CLIENT PARTIDO STATES    ******************       
****************************************/

/*****************************************
                GAME_PARTIDO_MODE               
****************************************/
GAME_PARTIDO_MODE* GAME_PARTIDO_MODE::Instance()
{
  static GAME_PARTIDO_MODE instance;
  return &instance;
}
void GAME_PARTIDO_MODE::enter(ClientPartido* clientPartido)
{
}
void GAME_PARTIDO_MODE::execute(ClientPartido* clientPartido)
{
	if (clientPartido->mTest->mQuiz)
	{
		clientPartido->mClientPartidoStateMachine->changeState(CLIENT_PARTIDO_BATTLE::Instance());
	}
}
void GAME_PARTIDO_MODE::exit(ClientPartido* clientPartido)
{
}
bool GAME_PARTIDO_MODE::onLetter(ClientPartido* clientPartido, Letter* letter)
{
        return false; 
}
/***************************************
       	Battle
****************************************/
CLIENT_PARTIDO_BATTLE* CLIENT_PARTIDO_BATTLE::Instance()
{
  static CLIENT_PARTIDO_BATTLE instance;
  return &instance;
}
void CLIENT_PARTIDO_BATTLE::enter(ClientPartido* clientPartido)
{
	clientPartido->mKey = 0;
}
void CLIENT_PARTIDO_BATTLE::execute(ClientPartido* clientPartido)
{
	if (!clientPartido->mTest->mQuiz)
	{
		clientPartido->mClientPartidoStateMachine->changeState(GAME_PARTIDO_MODE::Instance());
	}
}
void CLIENT_PARTIDO_BATTLE::exit(ClientPartido* clientPartido)
{
}
bool CLIENT_PARTIDO_BATTLE::onLetter(ClientPartido* clientPartido, Letter* letter)
{
        return false;
}


