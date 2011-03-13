/******************************************/
/* MMOG programmer's guide                */
/* Tutorial game server                   */
/* Programming:						      */
/* Teijo Hakala						      */
/******************************************/
#include "serverSideGame.h"

#include <math.h>

#ifdef WIN32
#include <windows.h>
#include <mmsystem.h>
#include <assert.h>
#endif

#include <fstream>
#include <math.h>
#include <malloc.h>
#include <stdlib.h>

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
ServerSideGame::ServerSideGame()
{
	networkServer = new dreamServer;

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
ServerSideGame::~ServerSideGame()
{
	delete networkServer;
}

//-----------------------------------------------------------------------------
// Name: InitNetwork()
// Desc: Initialize network
//-----------------------------------------------------------------------------
int ServerSideGame::InitNetwork()
{
	if(dreamSock_Initialize() != 0)
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
void ServerSideGame::ShutdownNetwork(void)
{
	LogString("Shutting down game server...");

	RemoveClients();

	networkServer->Uninitialise();
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc:
//-----------------------------------------------------------------------------
void ServerSideGame::CalculateVelocity(command_t *command, float frametime)
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

//-----------------------------------------------------------------------------
// Name: empty()
// Desc:
//-----------------------------------------------------------------------------
void ServerSideGame::MovePlayer(clientData *client)
{
	float clientFrametime;

	float multiplier = 17.0f;

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
void ServerSideGame::AddClient(void)
{
	// First get a pointer to the beginning of client list
	clientData *list = clientList;
	clientData *prev;
	dreamClient *netList = networkServer->GetClientList();

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
void ServerSideGame::RemoveClient(struct sockaddr *address)
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
void ServerSideGame::RemoveClients(void)
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
void ServerSideGame::Frame(int msec)
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


//-----------------------------------------------------------------------------
// Name: empty()
// Desc:
//-----------------------------------------------------------------------------
void ServerSideGame::ReadPackets(void)
{
	char data[1400];

	int type;
	int ret;

	struct sockaddr address;

	clientData *clList;

	dreamMessage mes;
	mes.Init(data, sizeof(data));

	// Get the packet from the socket
	try
	{
		while(ret = networkServer->GetPacket(mes.data, &address))
		{
			mes.SetSize(ret);
			mes.BeginReading();

			type = mes.ReadByte();

			// Check the type of the message
			switch(type)
			{
			case DREAMSOCK_MES_CONNECT:
				AddClient();
				break;

			case DREAMSOCK_MES_DISCONNECT:
				RemoveClient(&address);
				break;

			case USER_MES_FRAME:
//			LogString("Got frame (size: %d bytes)", ret);

				// Skip sequences
				mes.ReadShort();
				mes.ReadShort();

				// Find the correct client by comparing addresses
				clList = clientList;

				for( ; clList != NULL; clList = clList->next)
				{
					if(memcmp(&clList->address, &address, sizeof(address)) == 0)
					{
						ReadDeltaMoveCommand(&mes, clList);
						MovePlayer(clList);

						break;
					}
				}

				break;

			case USER_MES_NONDELTAFRAME:
				clList = clientList;
				clientData *dataClient;

				for( ; clList != NULL; clList = clList->next)
				{
					clList->netClient->message.Init(clList->netClient->message.outgoingData,
						sizeof(clList->netClient->message.outgoingData));

					clList->netClient->message.WriteByte(USER_MES_NONDELTAFRAME);
					clList->netClient->message.WriteShort(clList->netClient->GetOutgoingSequence());
					clList->netClient->message.WriteShort(clList->netClient->GetIncomingSequence());

					for(dataClient = clientList; dataClient != NULL; dataClient = dataClient->next)
					{
						BuildMoveCommand(&clList->netClient->message, dataClient);
					}

					clList->netClient->SendPacket();
				}

				break;

			}
		}
	}
	catch(...)
	{
		LogString("Unknown Exception caught in Lobby ReadPackets loop");

#ifdef WIN32
		MessageBox(NULL, "Unknown Exception caught in Lobby ReadPackets loop", "Error", MB_OK | MB_TASKMODAL);
#endif
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc:
//-----------------------------------------------------------------------------
void ServerSideGame::SendCommand(void)
{
	clientData *toClient;
	clientData *dataClient;

	// Fill messages
	for(toClient = clientList; toClient != NULL; toClient = toClient->next)
	{
		toClient->netClient->message.Init(toClient->netClient->message.outgoingData,
			sizeof(toClient->netClient->message.outgoingData));

		toClient->netClient->message.WriteByte(USER_MES_FRAME);			// type
		toClient->netClient->message.AddSequences(toClient->netClient);	// sequences

		for(dataClient = clientList; dataClient != NULL; dataClient = dataClient->next)
		{
			BuildDeltaMoveCommand(&toClient->netClient->message, dataClient);
		}
	}

	// Send messages to all clients
	networkServer->SendPackets();

	// Store the sent command in history
	for(toClient = clientList; toClient != NULL; toClient = toClient->next)
	{
		int i = (toClient->netClient->GetOutgoingSequence() - 1) & (COMMAND_HISTORY_SIZE-1);

		memcpy(&toClient->frame[i], &toClient->command, sizeof(command_t));
	}
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc:
//-----------------------------------------------------------------------------
void ServerSideGame::SendExitNotification(void)
{
	clientData *toClient = clientList;

	for( ; toClient != NULL; toClient = toClient->next)
	{
		toClient->netClient->message.Init(toClient->netClient->message.outgoingData,
			sizeof(toClient->netClient->message.outgoingData));

		toClient->netClient->message.WriteByte(USER_MES_SERVEREXIT);	// type
		toClient->netClient->message.AddSequences(toClient->netClient);	// sequences
	}

	networkServer->SendPackets();
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc:
//-----------------------------------------------------------------------------
void ServerSideGame::ReadDeltaMoveCommand(dreamMessage *mes, clientData *client)
{
	int flags = 0;

	// Flags
	flags = mes->ReadByte();

	// Key
	if(flags & CMD_KEY)
	{
		client->command.key = mes->ReadByte();

		LogString("Client %d: read CMD_KEY (%d)", client->netClient->GetIndex(), client->command.key);
	}

	// Read time to run command
	client->command.msec = mes->ReadByte();
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc:
//-----------------------------------------------------------------------------
void ServerSideGame::BuildMoveCommand(dreamMessage *mes, clientData *client)
{
	// Add to the message
	// Key
	mes->WriteByte(client->command.key);

	// Origin
	mes->WriteFloat(client->command.origin.x);
	mes->WriteFloat(client->command.origin.y);
	mes->WriteFloat(client->command.vel.x);
	mes->WriteFloat(client->command.vel.y);

	mes->WriteByte(client->command.msec);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc:
//-----------------------------------------------------------------------------
void ServerSideGame::BuildDeltaMoveCommand(dreamMessage *mes, clientData *client)
{
	int flags = 0;

	int last = (client->netClient->GetOutgoingSequence() - 1) & (COMMAND_HISTORY_SIZE-1);

	// Check what needs to be updated
	if(client->frame[last].key != client->command.key)
	{
		flags |= CMD_KEY;
	}

	if(client->frame[last].origin.x != client->command.origin.x ||
		client->frame[last].origin.y != client->command.origin.y)
	{
		flags |= CMD_ORIGIN;
	}

	// Add to the message
	// Flags
	mes->WriteByte(flags);

	// Key
	if(flags & CMD_KEY)
	{
		mes->WriteByte(client->command.key);
	}

	if(flags & CMD_ORIGIN)
	{
		mes->WriteByte(client->processedFrame & (COMMAND_HISTORY_SIZE-1));
	}

	// Origin
	if(flags & CMD_ORIGIN)
	{
		mes->WriteFloat(client->command.origin.x);
		mes->WriteFloat(client->command.origin.y);

		mes->WriteFloat(client->command.vel.x);
		mes->WriteFloat(client->command.vel.y);
	}

	mes->WriteByte(client->command.msec);
}

