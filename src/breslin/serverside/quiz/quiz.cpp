#include "quiz.h"
#include "states/quizStates.h"
#include "../client/robust/partido/clientPartido.h"
#include "../server/partido/serverPartido.h"
#include "../question/question.h"
#include "../network/network.h"
#include "../../utility/utility.h"
#include "../question/questionAttempts.h"
#include "../combatant/combatant.h"
#include "../test/test.h"

Quiz::Quiz(Combatant* combatant)
{
	mCombatant = combatant;

	mTest = mCombatant->mClientPartido->mTest;

	//quiz states
        mStateMachine =  new StateMachine<Quiz>(this);
        mStateMachine->setCurrentState      (INIT_QUIZ::Instance());
        mStateMachine->setPreviousState     (INIT_QUIZ::Instance());
        mStateMachine->setGlobalState       (GLOBAL_QUIZ::Instance());

       	//question 
	mComputerAskedTime = 0;
        
	//answer	
	mComputerAnswerTime = 0;

	//correctAnswer
	mCorrectAnswerTime = 5000;
	mCorrectAnswerStartTime = 0;
}

Quiz::~Quiz()
{
	//delete mTest;
	delete mStateMachine;
}

void Quiz::update()
{
	mStateMachine->update();
}

