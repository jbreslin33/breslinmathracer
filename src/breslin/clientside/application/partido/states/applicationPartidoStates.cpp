//header
#include "applicationPartidoStates.h"

//log
#include "../../../tdreamsock/dreamSockLog.h"

//game
#include "../../../application/partido/applicationPartido.h"

//game
#include "../../../game/partido/gamePartido.h"

//shape
#include "../../../shape/shape.h"

//utility
#include <math.h>

//command
#include "../../../command/command.h"

#include "../../../game/partido/states/gamePartidoStates.h"

/******************** GLOBAL_PARTIDO_APPLICATION *****************/

GLOBAL_PARTIDO_APPLICATION* GLOBAL_PARTIDO_APPLICATION::Instance()
{
  static GLOBAL_PARTIDO_APPLICATION instance;
  return &instance;
}
void GLOBAL_PARTIDO_APPLICATION::enter(ApplicationPartido* application)
{
}
void GLOBAL_PARTIDO_APPLICATION::execute(ApplicationPartido* application)
{
}
void GLOBAL_PARTIDO_APPLICATION::exit(ApplicationPartido* application)
{
}
bool GLOBAL_PARTIDO_APPLICATION::onLetter(ApplicationPartido* application, Letter* letter)
{
        return true;
}

/******************** INIT_PARTIDO_APPLICATION *****************/

INIT_PARTIDO_APPLICATION* INIT_PARTIDO_APPLICATION::Instance()
{
  static INIT_PARTIDO_APPLICATION instance;
  return &instance;
}
void INIT_PARTIDO_APPLICATION::enter(ApplicationPartido* application)
{
}
void INIT_PARTIDO_APPLICATION::execute(ApplicationPartido* applicationPartido)
{
	if (applicationPartido->mPlayingGame)
	{
                applicationPartido->mPartidoStateMachine->changeState(PLAY_PARTIDO_APPLICATION::Instance());
	}
}
void INIT_PARTIDO_APPLICATION::exit(ApplicationPartido* application)
{
}
bool INIT_PARTIDO_APPLICATION::onLetter(ApplicationPartido* application, Letter* letter)
{
        return true;
}

/******************** PLAY_PARTIDO_APPLICATION *****************/

PLAY_PARTIDO_APPLICATION* PLAY_PARTIDO_APPLICATION::Instance()
{
        static PLAY_PARTIDO_APPLICATION instance;
        return &instance;
}
void PLAY_PARTIDO_APPLICATION::enter(ApplicationPartido* application)
{
}
void PLAY_PARTIDO_APPLICATION::execute(ApplicationPartido* applicationPartido)
{
	//Should this be in game states...
/*
        if (applicationPartido->mKeyArray[27]) //esc
        {
                //check to see if in battle....
                if ( applicationPartido->getGame()->mPartidoStateMachine->currentState() == BATTLE_GAME::Instance() )
                {
                        applicationPartido->mAnswerTime = 2001;
                        applicationPartido->mStringAnswer = "esc";
                        LogString("sendAnswer via esc");
                        applicationPartido->sendAnswer();
                }
	}
*/
}
void PLAY_PARTIDO_APPLICATION::exit(ApplicationPartido* applicationPartido)
{
}
bool PLAY_PARTIDO_APPLICATION::onLetter(ApplicationPartido* application, Letter* letter)
{
        return true;
}


