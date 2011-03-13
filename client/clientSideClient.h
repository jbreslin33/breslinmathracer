#ifndef CLIENTSIDECLIENT_H
#define CLIENTSIDECLIENT_H

#include "client.h"

#include "Ogre.h"

#include "../dreamsock/dreamSock.h"
#include "../command/clientSideCommand.h"

using namespace Ogre;

class DreamClient;
class Shape;

class ClientSideClient : public Client
{

public:
ClientSideClient();
~ClientSideClient();

        ClientSideCommand  frame[64];
        ClientSideCommand  serverFrame;
        ClientSideCommand  command;

	char password[30];
	int index;
	
	Shape* mShape;
	ClientSideClient* next;
};

#endif
