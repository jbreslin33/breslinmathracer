#include "clientPartido.h"
//log
#include "../../../tdreamsock/dreamSockLog.h"

#include "../../../server/partido/serverPartido.h"
#include "../../../network/network.h"
#include "../../../game/partido/gamePartido.h"
#include "../../../shape/partido/shapePartido.h"

//utility
#include "../../../../utility/utility.h"

//states
#include "states/clientPartidoStates.h"

//test
#include "../../../test/test.h"

ClientPartido::ClientPartido(ServerPartido* serverPartido, struct sockaddr *address, int clientID, bool permanence,int i, std::string u, std::string p, std::string f, std::string m1, std::string m2, std::string m3, std::string l,int s) : ClientRobust(serverPartido, address, clientID, permanence,i, u,p,f,m1,m2,m3,l,s) 
{
	//server
	mServerPartido = serverPartido;

	//game
	mGamePartido = NULL;

	//test
	mTest = new Test(this);

        //states
        mClientPartidoStateMachine =  new StateMachine<ClientPartido>(this);
	if (clientID == -1)
	{
        	mClientPartidoStateMachine->setCurrentState      (NULL);
	}
	else
	{
        	mClientPartidoStateMachine->setCurrentState      (GAME_PARTIDO_MODE::Instance());
	}
        mClientPartidoStateMachine->setPreviousState     (NULL);
        mClientPartidoStateMachine->setGlobalState       (GLOBAL_CLIENT_PARTIDO::Instance());

}

ClientPartido::~ClientPartido()
{
	delete mClientPartidoStateMachine;
}

void ClientPartido::reset()
{
	mTest->reset();
}

void ClientPartido::update()
{
	ClientRobust::update();
	mClientPartidoStateMachine->update();
}

bool ClientPartido::handleLetter(Letter* letter)
{
	return ClientRobust::handleLetter(letter);
}


void ClientPartido::setShape(ShapePartido* shapePartido)
{
	ClientRobust::setShape(shapePartido);
	mShapePartido = shapePartido;
}

