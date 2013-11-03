//parent
#include "quizStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//quiz
#include "../quiz.h"

//client
#include "../../client/robust/partido/clientPartido.h"

//combatant
#include "../../combatant/combatant.h"
#include "../../combatant/states/combatantStates.h"

//test
#include "../../test/test.h"

//server
#include "../../server/partido/serverPartido.h"

//question
#include "../../question/question.h"

//shape
#include "../../shape/shape.h"

//battle
#include "../../battle/battle.h"

//game
#include "../../game/partido/gamePartido.h"

/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_QUIZ* GLOBAL_QUIZ::Instance()
{
  static GLOBAL_QUIZ instance;
  return &instance;
}
void GLOBAL_QUIZ::enter(Quiz* quiz)
{
}
void GLOBAL_QUIZ::execute(Quiz* quiz)
{

}
void GLOBAL_QUIZ::exit(Quiz* quiz)
{
}
bool GLOBAL_QUIZ::onLetter(Quiz* quiz, Letter* letter)
{
        return true;
}

/*****************************************
	INIT_QUIZ
****************************************/
INIT_QUIZ* INIT_QUIZ::Instance()
{
	static INIT_QUIZ instance;
	return &instance;
}
void INIT_QUIZ::enter(Quiz* quiz)
{
	if (quiz->mCombatant->mClientPartido->id == 2)
	{
		LogString("INIT_QUIZ::enter");
	}
}
void INIT_QUIZ::execute(Quiz* quiz)
{
	if (quiz->mCombatant->mClientPartido->mShape->mIndex == 1)
	{
	}
	if (quiz->mCombatant->mStateMachine->currentState() == NORMAL_COMBATANT::Instance())
	{
        	quiz->mStateMachine->changeState(SENDING_QUESTION::Instance());
		
		//set quiz pointer on test
		quiz->mCombatant->mClientPartido->mTest->mQuiz = quiz;

	}
}
void INIT_QUIZ::exit(Quiz* quiz)
{
}
bool INIT_QUIZ::onLetter(Quiz* quiz, Letter* letter)
{
        return true;
}


/*****************************************
	SENDING_QUESTING
****************************************/
SENDING_QUESTION* SENDING_QUESTION::Instance()
{
  static SENDING_QUESTION instance;
  return &instance;
}
void SENDING_QUESTION::enter(Quiz* quiz)
{
	if (quiz->mCombatant->mClientPartido->id == 2)
	{
		LogString("SENDING_QUESTION::enter");
	}
}
void SENDING_QUESTION::execute(Quiz* quiz)
{
	if (quiz->mCombatant->mClientPartido->mLoggedIn)
        {
                if (quiz->mTest->mWaitingForAnswer == false)
                {
			quiz->mTest->mQuestionID = quiz->mCombatant->mClientPartido->mTest->getNewQuestionID();
                        quiz->mTest->sendQuestion(quiz->mTest->mQuestionID);
			
                        quiz->mStateMachine->changeState(WAITING_FOR_ANSWER::Instance());
                }
        }
        else //computer so just go right to wating...
        {
                quiz->mStateMachine->changeState(WAITING_FOR_ANSWER::Instance());
        }

}
void SENDING_QUESTION::exit(Quiz* quiz)
{
}
bool SENDING_QUESTION::onLetter(Quiz* quiz, Letter* letter)
{
        return true;
}

/*****************************************
        WAITING_FOR_ANSWER
****************************************/
WAITING_FOR_ANSWER* WAITING_FOR_ANSWER::Instance()
{
        static WAITING_FOR_ANSWER instance;
        return &instance;
}
void WAITING_FOR_ANSWER::enter(Quiz* quiz)
{
	if (quiz->mCombatant->mClientPartido->id == 2)
	{
		LogString("WAITING_FOR_ANSWER::enter");
	}
        
	quiz->mComputerAskedTime  = quiz->mCombatant->mBattle->mGamePartido->mGameTime;
        int randomAnswerTime      = rand() % 3000;
        quiz->mComputerAnswerTime = randomAnswerTime;
        quiz->mTest->mWaitingForAnswer   = true;
}

void WAITING_FOR_ANSWER::execute(Quiz* quiz)
{
	if (quiz->mCombatant->mStateMachine->currentState() == YIELD::Instance())
        {
                quiz->mStateMachine->changeState(OVER_QUIZ::Instance());
        }
        else if (quiz->mTest->mShowCorrectAnswer)
        {
                quiz->mStateMachine->changeState(SHOW_CORRECT_ANSWER::Instance());
        }
        else if (!quiz->mTest->mWaitingForAnswer)
        {
                quiz->mStateMachine->changeState(SENDING_QUESTION::Instance());
        }

	else if (!quiz->mCombatant->mClientPartido->mLoggedIn)
        {
                if (quiz->mComputerAskedTime + quiz->mComputerAnswerTime < quiz->mCombatant->mBattle->mGamePartido->mGameTime)
                {
                        quiz->mTest->readAnswer(quiz->mComputerAnswerTime,quiz->mCombatant->mClientPartido->mServerPartido->mQuestionVector.at(quiz->mTest->mQuestionID)->answer);
                }
        }
}
void WAITING_FOR_ANSWER::exit(Quiz* quiz)
{
}
bool WAITING_FOR_ANSWER::onLetter(Quiz* quiz, Letter* letter)
{
        return true;
}

/*****************************************
        SHOW_CORRECT_ANSWER
****************************************/
SHOW_CORRECT_ANSWER* SHOW_CORRECT_ANSWER::Instance()
{
  static SHOW_CORRECT_ANSWER instance;
  return &instance;
}

void SHOW_CORRECT_ANSWER::enter(Quiz* quiz)
{
	if (quiz->mCombatant->mClientPartido->id == 2)
	{
		LogString("SHOW_CORRECT_ANSWER::enter");
	}
        
	quiz->mCorrectAnswerStartTime = quiz->mCombatant->mBattle->mGamePartido->mGameTime;
	quiz->mTest->sendCorrectAnswer(quiz->mTest->mQuestionID);
}

void SHOW_CORRECT_ANSWER::execute(Quiz* quiz)
{
 	if (quiz->mCorrectAnswerStartTime + quiz->mCorrectAnswerTime < quiz->mCombatant->mBattle->mGamePartido->mGameTime)
	{
		quiz->mTest->mClientPartido->sendSimpleMessage(quiz->mTest->mClientPartido->mServerPartido->mMessageCorrectAnswerEnd);
                quiz->mStateMachine->changeState(SENDING_QUESTION::Instance());
	}

  	if (quiz->mCombatant->mStateMachine->currentState() == YIELD::Instance())
        {
                quiz->mStateMachine->changeState(OVER_QUIZ::Instance());
        }

}

void SHOW_CORRECT_ANSWER::exit(Quiz* quiz)
{
        quiz->mTest->mShowCorrectAnswer = false;
}

bool SHOW_CORRECT_ANSWER::onLetter(Quiz* quiz, Letter* letter)
{
        return true;
}



/*****************************************
	OVER_QUIZ
****************************************/
OVER_QUIZ* OVER_QUIZ::Instance()
{
	static OVER_QUIZ instance;
	return &instance;
}
void OVER_QUIZ::enter(Quiz* quiz)
{
	if (quiz->mCombatant->mClientPartido->id == 2)
	{
		LogString("OVER_QUIZ::enter");
	}
	quiz->mCombatant->mClientPartido->mTest->mQuizLast = quiz;
	quiz->mCombatant->mClientPartido->mTest->mQuiz = NULL;
        quiz->mComputerAnswerTime = 0;
        quiz->mComputerAskedTime  = 0;
        quiz->mTest->mWaitingForAnswer   = false;
}
void OVER_QUIZ::execute(Quiz* quiz)
{
}
void OVER_QUIZ::exit(Quiz* quiz)
{
}
bool OVER_QUIZ::onLetter(Quiz* quiz, Letter* letter)
{
        return true;
}
