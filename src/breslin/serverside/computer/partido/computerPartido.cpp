#include "computerPartido.h"
#include "../../tdreamsock/dreamSockLog.h"

#include "../../shape/partido/shapePartido.h"

#include <string>

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

//computer states
#include "states/computerPartidoStates.h"

ComputerPartido::ComputerPartido(ShapePartido* shape) : Computer(shape)
{
	mShapePartido = shape;

 	//computer states
   	mComputerPartidoStateMachine = new StateMachine<ComputerPartido>(this);
	mComputerPartidoStateMachine->setCurrentState      (HUMAN_CONTROLLED_PARTIDO::Instance());
	mComputerPartidoStateMachine->setPreviousState     (HUMAN_CONTROLLED_PARTIDO::Instance());
	mComputerPartidoStateMachine->setGlobalState       (GLOBAL_COMPUTER_PARTIDO::Instance());

	mCounter   = 59000;
        mThreshold = 60000;
}

ComputerPartido::~ComputerPartido()
{
   	delete mComputerPartidoStateMachine;
}

void ComputerPartido::update()
{
	mComputerPartidoStateMachine->update();
}

bool ComputerPartido::handleLetter(Letter* letter)
{
	return Computer::handleLetter(letter);
}


