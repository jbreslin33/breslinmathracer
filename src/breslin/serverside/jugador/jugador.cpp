#include "jugador.h"
#include "../tdreamsock/dreamSockLog.h"

#include <string>

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

//states
#include "states/jugadorStates.h"

//battle
#include "../battle/battle.h"

//shapes
#include "../client/robust/partido/clientPartido.h"

//test
#include "../test/test.h"

//quiz
#include "../quiz/quiz.h"

Jugador::Jugador(ClientPartido* clientPartido)
{
	mClientPartido = clientPartido;

	mTest = new Test(mClientPartido);
	
	mBattle = NULL;
	mQuiz   = NULL;
	mFoe    = NULL;

	//score
	mScore = 0;

 	//combatant states
	mStateMachine =  new StateMachine<Jugador>(this);
	mStateMachine->setCurrentState      (INIT_JUGADOR::Instance());
	mStateMachine->setPreviousState     (INIT_JUGADOR::Instance());
	mStateMachine->setGlobalState       (GLOBAL_JUGADOR::Instance());
}

Jugador::~Jugador()
{
	delete mStateMachine;
	delete test;
	mBattle = NULL;
	mQuiz   = NULL;
	mFoe    = NULL;
}

void Jugador::update()
{
	mStateMachine->update();
}

