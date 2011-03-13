#include "serverSideGame.h"

#include "../network/serverSideNetwork.h"
#include "../dreamsock/dreamServer.h"
#include "../dreamsock/dreamClient.h"
#include "../client/serverSideClient.h"
#include "../basegame/serverSideBaseGame.h"

#include <fstream>
#include <math.h>
#include <malloc.h>
#include <stdlib.h>

#include "Ogre.h"

using namespace Ogre;

ServerSideGame::ServerSideGame(ServerSideBaseGame* serverSideBaseGame)
{
	mServerSideBaseGame = serverSideBaseGame;

	network       = new ServerSideNetwork(this);
	networkServer = new DreamServer();

	clientList	= NULL;
	clients		= 0;

	realtime	= 0;
	servertime	= 0;

	index		= 0;
	next		= NULL;

	framenum	= 0;
}



ServerSideGame::~ServerSideGame()
{
	delete networkServer;
}

//scene
/*
void ServerSideGame::createScene(void)
{
        mServerSideBaseGame->getSceneManager()->setAmbientLight(Ogre::ColourValue(0.75, 0.75, 0.75));

        Ogre::Light* pointLight = mServerSideBaseGame->getSceneManager()->createLight("pointLight");
        pointLight->setType(Ogre::Light::LT_POINT);
        pointLight->setPosition(Ogre::Vector3(250, 150, 250));
        pointLight->setDiffuseColour(Ogre::ColourValue::White);
        pointLight->setSpecularColour(Ogre::ColourValue::White);

        // create a floor mesh resource
        MeshManager::getSingleton().createPlane("floor", ResourceGroupManager::DEFAULT_RESOURCE_GROUP_NAME,
        Plane(Vector3::UNIT_Y, 0), 100, 100, 10, 10, true, 1, 10, 10, Vector3::UNIT_Z);

        // create a floor entity, give it a material, and place it at the origin
        Entity* floor = mServerSideBaseGame->getSceneManager()->createEntity("Floor", "floor");
        floor->setMaterialName("Examples/Rockwall");
        floor->setCastShadows(false);
        mServerSideBaseGame->getSceneManager()->getRootSceneNode()->attachObject(floor);
}
*/


//Math
float VectorLength(Vector3D *vec)
{
	return (float) sqrt(vec->x*vec->x + vec->y*vec->y);
}

Vector3D VectorSubstract(Vector3D *vec1, Vector3D *vec2)
{
	Vector3D vec;

	vec.x = vec1->x - vec2->x;
	vec.y = vec1->y - vec2->y;

	return vec;
}

//Network
int ServerSideGame::InitNetwork()
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
		sprintf_s(text, "Could not open server on port %d", networkServer->GetPort());

		MessageBox(NULL, text, "Error", MB_OK);
#else
		LogString("Could not open server on port %d", networkServer->GetPort());
#endif
		return 1;
	}

	return 0;
}

//Movement
void ServerSideGame::CalculateVelocity(ServerSideCommand *command, float frametime)
{

	float multiplier = 17.0f;
	

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

void ServerSideGame::MovePlayer(ServerSideClient *client)
{
	float clientFrametime;

	clientFrametime = client->command.msec / 1000.0f;;

	CalculateVelocity(&client->command, clientFrametime);

	// Move the client based on the commands
	client->command.origin.x += client->command.vel.x;
	client->command.origin.y += client->command.vel.y;

	int f = client->netClient->GetIncomingSequence() & (COMMAND_HISTORY_SIZE-1);
	client->processedFrame = f;
}

//Clients
void ServerSideGame::AddClient(void)
{
	// First get a pointer to the beginning of client list
	ServerSideClient *list = clientList;
	ServerSideClient *prev;
	DreamClient *netList = networkServer->GetClientList();

	// No clients yet, adding the first one
	if(clientList == NULL)
	{
		LogString("App: Server: Adding first client");

		clientList = (ServerSideClient *) calloc(1, sizeof(ServerSideClient));

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

		list = (ServerSideClient *) calloc(1, sizeof(ServerSideClient));

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

void ServerSideGame::RemoveClient(struct sockaddr *address)
{
	ServerSideClient *list = clientList;
	ServerSideClient *prev = NULL;
	ServerSideClient *next = NULL;

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

void ServerSideGame::RemoveClients(void)
{
	ServerSideClient *list = clientList;
	ServerSideClient *next;

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

//Ticks frame
void ServerSideGame::Frame(int msec)
{
	realtime += msec;
	frametime = msec / 1000.0f;

	// Read packets from clients
	network->ReadPackets();

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

	network->SendCommand();
}

//power up and down
void ServerSideGame::ShutdownNetwork(void)
{
	LogString("Shutting down game server...");

	RemoveClients();

	networkServer->Uninitialise();
}


