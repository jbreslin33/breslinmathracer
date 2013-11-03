//header
#include "gamePartidoStates.h"

//log
#include "../../../tdreamsock/dreamSockLog.h"

//applicationPartido
#include "../../../application/partido/applicationPartido.h"

//gamePartido
#include "../gamePartido.h"
#include "../../../game/states/gameStates.h"

//shape
#include "../../../shape/shape.h"

//shape
#include "../../../command/command.h"

//utility
#include <math.h>

/**************************************************
*************** BATTLE STATES ***********************
***************************************************/

/******************** BATTLE_OFF *****************/

BATTLE_OFF* BATTLE_OFF::Instance()
{
  static BATTLE_OFF instance;
  return &instance;
}
void BATTLE_OFF::enter(GamePartido* gamePartido)
{
	LogString("BATTLE_OFF::enter");
	for (unsigned int i = 0; i < gamePartido->mShapeVector->size(); i++)
	{	
		gamePartido->mShapeVector->at(i)->setVisible(true);
	}
}

void BATTLE_OFF::execute(GamePartido* gamePartido)
{
	if (gamePartido->mControlObject)
	{
		if (gamePartido->mControlObject->mCommandToRunOnShape->mDeltaCode == gamePartido->mMessageBattleStart)
		{
       			gamePartido->mPartidoStateMachine->changeState(ANSWER_QUESTION::Instance());
		}
	}
}

void BATTLE_OFF::exit(GamePartido* gamePartido)
{
	for (unsigned int i = 0; i < gamePartido->mShapeVector->size(); i++)
	{	
		gamePartido->mShapeVector->at(i)->setVisible(false);
	}
}
bool BATTLE_OFF::onLetter(GamePartido* gamePartido, Letter* letter)
{
        return true;
}

/******************** ANSWER_QUESTION *****************/

ANSWER_QUESTION* ANSWER_QUESTION::Instance()
{
  static ANSWER_QUESTION instance;
  return &instance;
}
void ANSWER_QUESTION::enter(GamePartido* gamePartido)
{
	LogString("ANSWER_QUESTION::enter");
	ApplicationPartido* app = gamePartido->mApplicationPartido;
        app->createBattleScreen();
        app->showBattleScreen();

        app->mAnswerTime = 0;

        //set mKeyArray to false
        for (int i = 0; i < 128; i++)
        {
                gamePartido->mApplicationPartido->mKeyArray[i] = false;
        }
}
void ANSWER_QUESTION::execute(GamePartido* gamePartido)
{
        ApplicationPartido* app = gamePartido->mApplicationPartido;

	//if game end message?
	if (gamePartido->mControlObject)
        {
                if (gamePartido->mControlObject->mCommandToRunOnShape->mDeltaCode == gamePartido->mApplication->mMessageGameEnd)
                {
                        gamePartido->mPartidoStateMachine->changeState(BATTLE_OFF::Instance());
                }
        }

	//or if RESET_GAME State?
	if (gamePartido->mStateMachine->currentState() == RESET_GAME::Instance())
	{
        	gamePartido->mPartidoStateMachine->changeState(BATTLE_OFF::Instance());
	}

	//if message battle end?
	if (gamePartido->mControlObject)
	{
		if (gamePartido->mControlObject->mCommandToRunOnShape->mDeltaCode == gamePartido->mMessageBattleEnd)
		{
                	gamePartido->mPartidoStateMachine->changeState(BATTLE_OFF::Instance());
		}
	}

	//show correct?
        if (gamePartido->mCorrectAnswerStart)
        {
                gamePartido->mPartidoStateMachine->changeState(SHOWCORRECTANSWER_PARTIDO_GAME::Instance());
        }

	if (app->mLabelFocus == app->mLabelAnswer)
        {
                if (app->mKeyArray[8]) //backspace
                {
                        app->mKeyArray[8] = false;
                        int size = app->mStringAnswer.size();
                        if (size > 0)
                        {
                                app->mStringAnswer.resize(size - 1);
                        }
                        app->mLabelAnswer->setCaption(app->mStringAnswer);
                }

                for (int i = 47; i < 123; i++)
                {
                        if (app->mKeyArray[i])
                        {
                                app->mKeyArray[i] = false;
                                char ascii = (char)i;
                                app->mStringAnswer.append(1,ascii);
                                app->mLabelAnswer->setCaption(app->mStringAnswer);
                        }
                }

                if (app->mKeyArray[13]) //enter
                {
                        app->mKeyArray[13] = false;
                        app->sendAnswer();
                        app->mStringQuestion.clear();
                        app->mStringAnswer.clear();
                        app->mLabelQuestion->setCaption("");
                        app->mLabelAnswer->setCaption("");
                }

                //set mKeyArray to false
                for (int i = 0; i < 128; i++)
                {
                        gamePartido->mApplicationPartido->mKeyArray[i] = false;
                }
        }
        
	for (int i = 0; i < 128; i++)
        {
                gamePartido->mApplicationPartido->mKeyArray[i] = false;
       	}
      
        if (app->mAnswerTime > 2000) //overtime....
        {
                app->mStringAnswer = "oot";
                LogString("sendAnswer via time");
                app->sendAnswer();
                app->mAnswerTime = 0;
        }
}

void ANSWER_QUESTION::exit(GamePartido* gamePartido)
{
	gamePartido->mApplicationPartido->hideBattleScreen();

        //reset text box
        gamePartido->mApplicationPartido->mStringQuestion.clear();
        gamePartido->mApplicationPartido->mStringAnswer.clear();
        gamePartido->mApplicationPartido->mLabelQuestion->setCaption("");
        gamePartido->mApplicationPartido->mLabelAnswer->setCaption("");

}
bool ANSWER_QUESTION::onLetter(GamePartido* gamePartido, Letter* letter)
{
        return true;
}

/******************** SHOWCORRECTANSWER_PARTIDO_GAME *****************/

SHOWCORRECTANSWER_PARTIDO_GAME* SHOWCORRECTANSWER_PARTIDO_GAME::Instance()
{
  static SHOWCORRECTANSWER_PARTIDO_GAME instance;
  return &instance;
}
void SHOWCORRECTANSWER_PARTIDO_GAME::enter(GamePartido* gamePartido)
{
	LogString("SHOWCORRECTANSWER_PARTIDO_GAME::enter");
        ApplicationPartido* app = gamePartido->mApplicationPartido;
        app->createCorrectAnswerScreen();
        app->showCorrectAnswerScreen();
        gamePartido->mCorrectAnswerStart = false;
}
void SHOWCORRECTANSWER_PARTIDO_GAME::execute(GamePartido* gamePartido)
{
	//if game end message?
        if (gamePartido->mControlObject)
        {
                if (gamePartido->mControlObject->mCommandToRunOnShape->mDeltaCode == gamePartido->mApplication->mMessageGameEnd)
                {
                        gamePartido->mPartidoStateMachine->changeState(BATTLE_OFF::Instance());
                }
        }

        //or if RESET_GAME State?
        if (gamePartido->mStateMachine->currentState() == RESET_GAME::Instance())
        {
                gamePartido->mPartidoStateMachine->changeState(BATTLE_OFF::Instance());
        }
        
        //if message battle end?
        if (gamePartido->mControlObject)
        {
                if (gamePartido->mControlObject->mCommandToRunOnShape->mDeltaCode == gamePartido->mMessageBattleEnd)
                {
                        gamePartido->mPartidoStateMachine->changeState(BATTLE_OFF::Instance());
                }
        }
	
	//if correctAnswer end?
        if (gamePartido->mCorrectAnswerEnd)
        {
                gamePartido->mPartidoStateMachine->changeState(ANSWER_QUESTION::Instance());
        }
}
void SHOWCORRECTANSWER_PARTIDO_GAME::exit(GamePartido* gamePartido)
{
	gamePartido->mApplicationPartido->hideCorrectAnswerScreen();
        gamePartido->mCorrectAnswerStart = false;
        gamePartido->mCorrectAnswerEnd   = false;

        //reset text box
        gamePartido->mApplicationPartido->mStringCorrectAnswer.clear();
        gamePartido->mApplicationPartido->mLabelCorrectAnswer->setCaption("");

}
bool SHOWCORRECTANSWER_PARTIDO_GAME::onLetter(GamePartido* gamePartido, Letter* letter)
{
        return true;
}



