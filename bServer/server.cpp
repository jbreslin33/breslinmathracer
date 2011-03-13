/******************************************/
/* MMOG programmer's guide                */
/* Tutorial game server                   */
/* Programming:						      */
/* Teijo Hakala						      */
/******************************************/

#include "common.h"
#include <fstream>
#include <math.h>
#include <malloc.h>
#include <stdlib.h>

#include "../dreamsock/DreamSock.h"
#include "../dreamsock/DreamServer.h"
#include "../dreamsock/DreamClient.h"
#include "../dreamsock/DreamConsole.h"

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
float VectorLength(VECTOR2D *vec)
{
	return (float) sqrt(vec->x*vec->x + vec->y*vec->y);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
VECTOR2D VectorSubstract(VECTOR2D *vec1, VECTOR2D *vec2)
{
	VECTOR2D vec;

	vec.x = vec1->x - vec2->x;
	vec.y = vec1->y - vec2->y;

	return vec;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
CArmyWarServer::CArmyWarServer()
{
	networkServer = new DreamServer();

	clientList	= NULL;
	clients		= 0;

	realtime	= 0;
	servertime	= 0;

	index		= 0;
	next		= NULL;

	framenum	= 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
CArmyWarServer::~CArmyWarServer()
{
	delete networkServer;
}

//-----------------------------------------------------------------------------
// Name: InitNetwork()
// Desc: Initialize network
//-----------------------------------------------------------------------------
int CArmyWarServer::InitNetwork()
{
	if(networkServer->dreamSock->dreamSock_Initialize() != 0)
	{
		LogString("Error initialising Communication Library!");
		return 1;
	}

	LogString("Initialising game");

	// Create the game servers on new ports, starting from 30004
	int ret = networkServer->Initialise("", 30004);

	if(ret == DREAMSOCK_SERVER_ERROR)
	{
#ifdef WIN32
		char text[64];
		sprintf(text, "Could not open server on port %d", networkServer->GetPort());

		MessageBox(NULL, text, "Error", MB_OK);
#else
		LogString("Could not open server on port %d", networkServer->GetPort());
#endif
		return 1;
	}

	return 0;
}

//-----------------------------------------------------------------------------
// Name: ShutdownNetwork()
// Desc: Shutdown network
//-----------------------------------------------------------------------------
void CArmyWarServer::ShutdownNetwork(void)
{
	LogString("Shutting down game server...");

	RemoveClients();

	networkServer->Uninitialise();
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWarServer::CalculateVelocity(command_t *command, float frametime)
{

	float multiplier = 100.0f;

	command->vel.x = 0.0f;
	command->vel.y = 0.0f;

	if(command->key & KEY_UP)
	{

		command->vel.y += multiplier * frametime;
	}

	if(command->key & KEY_DOWN)
	{
		command->vel.y += -multiplier * frametime;
	}

	if(command->key & KEY_LEFT)
	{
		command->vel.x += -multiplier * frametime;
	}

	if(command->key & KEY_RIGHT)
	{
		command->vel.x += multiplier * frametime;
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWarServer::MovePlayer(clientData *client)
{
	float clientFrametime;

	float multiplier = 100.0f;

	clientFrametime = client->command.msec / 1000.0f;;

	CalculateVelocity(&client->command, clientFrametime);

	// Move the client based on the commands
	client->command.origin.x += client->command.vel.x;
	client->command.origin.y += client->command.vel.y;

	int f = client->netClient->GetIncomingSequence() & (COMMAND_HISTORY_SIZE-1);
	client->processedFrame = f;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWarServer::AddClient(void)
{
	// First get a pointer to the beginning of client list
	clientData *list = clientList;
	clientData *prev;
	DreamClient *netList = networkServer->GetClientList();

	// No clients yet, adding the first one
	if(clientList == NULL)
	{
		LogString("App: Server: Adding first client");

		clientList = (clientData *) calloc(1, sizeof(clientData));

		clientList->netClient = netList;

		memcpy(&clientList->address,
			clientList->netClient->GetSocketAddress(), sizeof(struct sockaddr));

		if(clients % 2 == 0)
		{
			//clientList->startPos.x = 46.0f * 32.0f + ((clients/2) * 32.0f);
			//clientList->startPos.y = 96.0f * 32.0f;
			clientList->startPos.x = 00.0f;
			clientList->startPos.y = 00.0f;;
		}
		else
		{
			//clientList->startPos.x = 46.0f * 32.0f + ((clients/2) * 32.0f);
			//clientList->startPos.y = 4.0f * 32.0f;
			clientList->startPos.x = 00.0f;
			clientList->startPos.y = 00.0f;;
		}

		clientList->command.origin.x = clientList->startPos.x;
		clientList->command.origin.y = clientList->startPos.y;

		clientList->next = NULL;
	}
	else
	{
		LogString("App: Server: Adding another client");

		prev = list;
		list = clientList->next;
		netList = netList->next;

		while(list != NULL)
		{
			prev = list;
			list = list->next;
			netList = netList->next;
		}

		list = (clientData *) calloc(1, sizeof(clientData));

		list->netClient = netList;

		memcpy(&list->address,
			list->netClient->GetSocketAddress(), sizeof(struct sockaddr));

		if(clients % 2 == 0)
		{
			//list->startPos.x = 46.0f * 32.0f + ((clients/2) * 32.0f);
			//list->startPos.y = 96.0f * 32.0f;
			list->startPos.x = 00.0f;
			list->startPos.y = 00.0f;;
		}
		else
		{

			//list->startPos.x = 46.0f * 32.0f + ((clients/2) * 32.0f);
			//list->startPos.y = 4.0f * 32.0f;
			list->startPos.x = 00.0f;
			list->startPos.y = 00.0f;;
		}

		list->command.origin.x = list->startPos.x;
		list->command.origin.y = list->startPos.y;

		list->next = NULL;

		prev->next = list;
	}

	clients++;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWarServer::RemoveClient(struct sockaddr *address)
{
	clientData *list = clientList;
	clientData *prev = NULL;
	clientData *next = NULL;

	for( ; list != NULL; list = list->next)
	{
		if(memcmp(&list->address, address, sizeof(address)) == 0)
		{
			if(prev != NULL)
			{
				prev->next = list->next;
			}

			break;
		}

		prev = list;
	}

	if(list == clientList)
	{
		if(list)
		{
			next = list->next;
			free(list);
		}

		list = NULL;
		clientList = next;
	}
	else
	{
		if(list)
		{
			next = list->next;
			free(list);
		}

		list = next;
	}

	clients--;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWarServer::RemoveClients(void)
{
	clientData *list = clientList;
	clientData *next;

	while(list != NULL)
	{
		if(list)
		{
			next = list->next;
			free(list);
		}

		list = next;
	}

	clientList = NULL;
	clients = 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWarServer::Frame(int msec)
{
	realtime += msec;
	frametime = msec / 1000.0f;

	// Read packets from clients
	ReadPackets();

	// Wait full 100 ms before allowing to send
	if(realtime < servertime)
	{
		// never let the time get too far off
		if(servertime - realtime > 100)
		{
			realtime = servertime - 100;
		}

		return;
	}

	// Bump frame number, and calculate new servertime
	framenum++;
	servertime = framenum * 100;

	if(servertime < realtime)
		realtime = servertime;

	SendCommand();
}
