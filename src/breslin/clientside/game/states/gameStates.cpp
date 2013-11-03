//header
#include "gameStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//game
#include "../../application/applicationBreslin.h"

//game
#include "../../game/game.h"

//shape
#include "../../shape/shape.h"

//ability
#include "../game.h"

//utility
#include <math.h>

//command
#include "../../command/command.h"

/******************** PLAY_GAME *****************/

PLAY_GAME* PLAY_GAME::Instance()
{
  static PLAY_GAME instance;
  return &instance;
}
void PLAY_GAME::enter(Game* game)
{
	LogString("PLAY_GAME::enter");
}
void PLAY_GAME::execute(Game* game)
{
	if (game->mControlObject)
	{
		if (game->mControlObject->mCommandToRunOnShape->mDeltaCode == game->mApplication->mMessageGameEnd)
		{
			game->mStateMachine->changeState(RESET_GAME::Instance());
		}
	}
	game->processMoveControls();
}
void PLAY_GAME::exit(Game* game)
{
}
bool PLAY_GAME::onLetter(Game* game, Letter* letter)
{
        return true;
}

/******************** RESET_GAME *****************/

RESET_GAME* RESET_GAME::Instance()
{
  static RESET_GAME instance;
  return &instance;
}
void RESET_GAME::enter(Game* game)
{
	LogString("RESET_GAME::enter");
	ApplicationBreslin* app = game->mApplication;
        app->createResetScreen();
        app->showResetScreen();

	//set shapes visible and reset scores  	
	for (unsigned int i = 0; i < game->mShapeVector->size(); i++)
        {
                game->mShapeVector->at(i)->setVisible(false);
        }
}
void RESET_GAME::execute(Game* game)
{
	if (game->mControlObject)
	{
		if (game->mControlObject->mCommandToRunOnShape->mDeltaCode == game->mApplication->mMessageGameStart)
		{
			game->mStateMachine->changeState(PLAY_GAME::Instance());
		}
	}

}
void RESET_GAME::exit(Game* game)
{
	ApplicationBreslin* app = game->mApplication;
        app->hideResetScreen();
	

	for (unsigned int i = 0; i < game->mShapeVector->size(); i++)
        {
                game->mShapeVector->at(i)->setVisible(true);
		//set name and score in title back to zero
        	std::string s;
        	s.append(game->mShapeVector->at(i)->mStringUsername);
        	s.append(": 0");
        	game->mShapeVector->at(i)->setText(s);
        }
}
bool RESET_GAME::onLetter(Game* game, Letter* letter)
{
        return true;
}

