#include "computer.h"
#include "../tdreamsock/dreamSockLog.h"

#include "../client/client.h"

#include <string>

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

//computer states
#include "states/computerStates.h"

Computer::Computer(Shape* shape) : BaseEntity(BaseEntity::getNextValidID())
{
	mShape = shape;

 	//computer states
   	mStateMachine = new StateMachine<Computer>(this);
	mStateMachine->setCurrentState      (HUMAN_CONTROLLED::Instance());
	mStateMachine->setPreviousState     (HUMAN_CONTROLLED::Instance());
	mStateMachine->setGlobalState       (GLOBAL_COMPUTER::Instance());

	mCounter   = 0;
        mThreshold = 1000;
	mRandomMove = 0;
}

Computer::~Computer()
{
   	delete mStateMachine;
}

void Computer::update()
{
	mStateMachine->update();
}

bool Computer::handleLetter(Letter* letter)
{
        return mStateMachine->handleLetter(letter);
}


