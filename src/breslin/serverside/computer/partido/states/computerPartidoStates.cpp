#include "computerPartidoStates.h"

//computer states
#include "../../states/computerStates.h"

//log
#include "../../../tdreamsock/dreamSockLog.h"

//computerPartido
#include "../computerPartido.h"

#include "../../../shape/shape.h"
#include "../../../client/robust/clientRobust.h"
#include "../../../game/game.h"
#include "../../../seek/seek.h"
#include "../../../bounds/bounds.h"
#include "../../../../math/vector3D.h"



//rand
#include <stdlib.h>
#include <time.h>

#define MAX_RUN_SPEED 1.66           // character running speed in units per second


/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_COMPUTER_PARTIDO* GLOBAL_COMPUTER_PARTIDO::Instance()
{
  static GLOBAL_COMPUTER_PARTIDO instance;
  return &instance;
}
void GLOBAL_COMPUTER_PARTIDO::enter(ComputerPartido* computerPartido)
{
}
void GLOBAL_COMPUTER_PARTIDO::execute(ComputerPartido* computerPartido)
{

}
void GLOBAL_COMPUTER_PARTIDO::exit(ComputerPartido* computerPartido)
{
}
bool GLOBAL_COMPUTER_PARTIDO::onLetter(ComputerPartido* computerPartido, Letter* letter)
{
        return true;
}


/*****************************************
*******       COMPUTER    ******************
****************************************/

/*****************************************
*******      RANDOM COMPUTER    ******************
****************************************/
/*   COMPUTER_CONTROLLED_PARTIDO   */

COMPUTER_CONTROLLED_PARTIDO* COMPUTER_CONTROLLED_PARTIDO::Instance()
{
  static COMPUTER_CONTROLLED_PARTIDO instance;
  return &instance;
}

void COMPUTER_CONTROLLED_PARTIDO::enter(ComputerPartido* computerPartido)
{
	//LogString("COMPUTER_CONTROLLED_PARTIDO");
}

void COMPUTER_CONTROLLED_PARTIDO::execute(ComputerPartido* computer)
{
	if (computer->mShape->mComputer->mStateMachine->currentState() == HUMAN_CONTROLLED::Instance())
	{
		computer->mComputerPartidoStateMachine->changeState(HUMAN_CONTROLLED_PARTIDO::Instance());
	} 
/*
	if (computer->mCounter > computer->mThreshold)
	{
		
		int dieroll = 0;
		dieroll = rand() % 10;
		if (dieroll == 0)
		{
			int dieroll = rand() % 4;
			dieroll = dieroll + 2;
			for (int i = 0; i < computer->mShape->mGame->mShapeVector.size(); i++)
			{
				if (computer->mShape->mGame->mShapeVector.at(i)->mClient->id == dieroll)	
				{
					computer->mShape->mSeek->setSeekShape(computer->mShape->mGame->mShapeVector.at(i));
				}
			}
		}
		else
		{
			int dierollX = rand() % (int)computer->mShape->mGame->mBounds->c->x + (int)computer->mShape->mGame->mBounds->c->x;
			dierollX = dierollX - computer->mShape->mGame->mBounds->c->x;
			int dierollZ = rand() % (int)computer->mShape->mGame->mBounds->c->x + (int)computer->mShape->mGame->mBounds->c->x; 
			dierollZ = dierollZ - computer->mShape->mGame->mBounds->c->x;
			Vector3D* vector3D = new Vector3D(dierollX,0.0f,dierollZ);
			computer->mShape->mSeek->setSeekPoint(vector3D);
			delete vector3D;
		}
		computer->mCounter = 0;
	}
	computer->mCounter++;
*/
}

void COMPUTER_CONTROLLED_PARTIDO::exit(ComputerPartido* computerPartido)
{
}
bool COMPUTER_CONTROLLED_PARTIDO::onLetter(ComputerPartido* computerPartido, Letter* letter)
{
        return true;
}

/*****************************************
*******      HUMAN     ******************
****************************************/
HUMAN_CONTROLLED_PARTIDO* HUMAN_CONTROLLED_PARTIDO::Instance()
{
	static HUMAN_CONTROLLED_PARTIDO instance;
	return &instance;
}

void HUMAN_CONTROLLED_PARTIDO::enter(ComputerPartido* computerPartido)
{
	//LogString("HUMAN_CONTROLLED_PARTIDO");
}

void HUMAN_CONTROLLED_PARTIDO::execute(ComputerPartido* computerPartido)
{
	if (computerPartido->mShape->mComputer->mStateMachine->currentState() != HUMAN_CONTROLLED::Instance())
	{
		computerPartido->mComputerPartidoStateMachine->changeState(COMPUTER_CONTROLLED_PARTIDO::Instance());
	} 
}

void HUMAN_CONTROLLED_PARTIDO::exit(ComputerPartido* computerPartido)
{
}
bool HUMAN_CONTROLLED_PARTIDO::onLetter(ComputerPartido* computerPartido, Letter* letter)
{
        return true;
}

