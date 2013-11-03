#include "combatant.h"
#include "../tdreamsock/dreamSockLog.h"

#include <string>

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

//states
#include "states/combatantStates.h"

//battle
#include "../battle/battle.h"

//shapes
#include "../client/robust/partido/clientPartido.h"

//quiz
#include "../quiz/quiz.h"

Combatant::Combatant(Battle* battle, ClientPartido* clientPartido)
{
	mBattle = battle;
	mClientPartido = clientPartido;
	mQuiz = new Quiz(this);
	mFoe = NULL;

	//score
	mScore = 0;

 	//combatant states
	mStateMachine =  new StateMachine<Combatant>(this);
	mStateMachine->setCurrentState      (INIT_COMBATANT::Instance());
	mStateMachine->setPreviousState     (INIT_COMBATANT::Instance());
	mStateMachine->setGlobalState       (GLOBAL_COMBATANT::Instance());

	mWrittenToDisk = false;
}

Combatant::~Combatant()
{
	delete mQuiz;
	delete mStateMachine;
}

void Combatant::update()
{
	mStateMachine->update();
	mQuiz->update();
}

