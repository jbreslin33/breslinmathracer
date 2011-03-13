#ifndef SERVERSIDECLIENT_H
#define SERVERSIDECLIENT_H

#include "client.h"

#include "../dreamsock/dreamSock.h"
#include "../command/serverSideCommand.h"

class DreamClient;

class ServerSideClient : public Client
{

public:
ServerSideClient();
~ServerSideClient();


	ServerSideCommand  frame[COMMAND_HISTORY_SIZE];
        ServerSideCommand  serverFrame;
        ServerSideCommand  command;

	long 		processedFrame;
	struct sockaddr address;
	DreamClient* 	netClient;
	
	ServerSideClient* next;
};

#endif
