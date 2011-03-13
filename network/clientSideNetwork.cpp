#include "clientSideNetwork.h"

#include "../basegame/clientSideBaseGame.h"

#include "../dreamsock/dreamMessage.h"
#include "../dreamsock/dreamClient.h"
#include "../game/clientSideGame.h"

ClientSideNetwork::ClientSideNetwork(ClientSideGame* clientSideGame)
{

	mClientSideGame = clientSideGame;
	ready = false;
	networkClient	= new DreamClient();

	init = false;
	ready = true;

#if OGRE_PLATFORM == OGRE_PLATFORM_WIN32
	StartConnection(mClientSideGame->mClientSideBaseGame->mServerIP);
#else
	StartConnection(mClientSideGame->mClientSideBaseGame->mServerIP);
#endif
}

ClientSideNetwork::~ClientSideNetwork()
{
		delete networkClient;
}

void ClientSideNetwork::ReadPackets(void)
{
	char data[1400];
	struct sockaddr address;

	ClientSideClient *clList;

	int type;
	int ind;
	int local;
	int ret;

	char name[50];

	DreamMessage mes;
	mes.Init(data, sizeof(data));

	while(ret = networkClient->GetPacket(mes.data, &address))
	{
		mes.SetSize(ret);
		mes.BeginReading();

		type = mes.ReadByte();

		switch(type)
		{
		case DREAMSOCK_MES_ADDCLIENT:
			local	= mes.ReadByte();
			ind		= mes.ReadByte();
			strcpy(name, mes.ReadString());

			mClientSideGame->AddClient(local, ind, name);
			break;

		case DREAMSOCK_MES_REMOVECLIENT:
			ind = mes.ReadByte();

			LogString("Got removeclient %d message", ind);

			mClientSideGame->RemoveClient(ind);

			break;

		case USER_MES_FRAME:
			// Skip sequences
			mes.ReadShort();
			mes.ReadShort();

			for(clList = mClientSideGame->clientList; clList != NULL; clList = clList->next)
			{
//				LogString("Reading DELTAFRAME for client %d", clList->index);
				ReadDeltaMoveCommand(&mes, clList);
			}

			break;

		case USER_MES_NONDELTAFRAME:
			// Skip sequences
			mes.ReadShort();
			mes.ReadShort();

			clList = mClientSideGame->clientList;

			for(clList = mClientSideGame->clientList; clList != NULL; clList = clList->next)
			{
				LogString("Reading NONDELTAFRAME for client %d", clList->index);
				ReadMoveCommand(&mes, clList);
			}

			break;

		case USER_MES_SERVEREXIT:
			//MessageBox(NULL, "Server disconnected", "Info", MB_OK);
			Disconnect();
			break;
		}
	}
}

void ClientSideNetwork::StartConnection(const char serverIP[32])

{
	int ret = networkClient->Initialise("", serverIP, 30004);

	if(ret == DREAMSOCK_CLIENT_ERROR)
	{
		char text[64];
		sprintf(text, "Could not open client socket");
	}
	Connect();
}


void ClientSideNetwork::SendCommand(void)
{
	if(networkClient->GetConnectionState() != DREAMSOCK_CONNECTED)
		return;

	DreamMessage message;
	char data[1400];

	int i = networkClient->GetOutgoingSequence() & (COMMAND_HISTORY_SIZE-1);

	message.Init(data, sizeof(data));
	message.WriteByte(USER_MES_FRAME);						// type
	message.AddSequences(networkClient);					// sequences

	// Build delta-compressed move command
	BuildDeltaMoveCommand(&message, &mClientSideGame->inputClient);

	// Send the packet
	networkClient->SendPacket(&message);

	// Store the command to the input client's history
	memcpy(&mClientSideGame->inputClient.frame[i], &mClientSideGame->inputClient.command, sizeof(ClientSideCommand));

	ClientSideClient *clList = mClientSideGame->clientList;

	// Store the commands to the clients' history
	for( ; clList != NULL; clList = clList->next)
	{
		memcpy(&clList->frame[i], &clList->command, sizeof(ClientSideCommand));
	}
}

void ClientSideNetwork::SendRequestNonDeltaFrame(void)
{
	char data[1400];
	DreamMessage message;
	message.Init(data, sizeof(data));

	message.WriteByte(USER_MES_NONDELTAFRAME);
	message.AddSequences(networkClient);

	networkClient->SendPacket(&message);
}


void ClientSideNetwork::ReadMoveCommand(DreamMessage *mes, ClientSideClient *client)
{
	// Key
	client->serverFrame.key				= mes->ReadByte();

	// Heading
	//client->serverFrame.heading			= mes->ReadShort();

	// Origin
	client->serverFrame.origin.x		= mes->ReadFloat();
	client->serverFrame.origin.y		= mes->ReadFloat();
	client->serverFrame.vel.x			= mes->ReadFloat();
	client->serverFrame.vel.y			= mes->ReadFloat();

	// Read time to run command
	client->serverFrame.msec = mes->ReadByte();

	memcpy(&client->command, &client->serverFrame, sizeof(ClientSideCommand));

	// Fill the history array with the position we got
	for(int f = 0; f < COMMAND_HISTORY_SIZE; f++)
	{
		client->frame[f].predictedOrigin.x = client->command.origin.x;
		client->frame[f].predictedOrigin.y = client->command.origin.y;
	}
}


void ClientSideNetwork::ReadDeltaMoveCommand(DreamMessage *mes, ClientSideClient *client)
{
	int processedFrame;
	int flags = 0;

	// Flags
	flags = mes->ReadByte();

	// Key
	if(flags & CMD_KEY)
	{
		client->serverFrame.key = mes->ReadByte();

		client->command.key = client->serverFrame.key;
		LogString("Client %d: Read key %d", client->index, client->command.key);
	}

	if(flags & CMD_ORIGIN)
	{
		processedFrame = mes->ReadByte();
	}

	// Origin
	if(flags & CMD_ORIGIN)
	{
		client->serverFrame.origin.x = mes->ReadFloat();
		client->serverFrame.origin.y = mes->ReadFloat();

		client->serverFrame.vel.x = mes->ReadFloat();
		client->serverFrame.vel.y = mes->ReadFloat();

		if(client == mClientSideGame->localClient)
		{
			mClientSideGame->CheckPredictionError(processedFrame);
		}

		else
		{
			client->command.origin.x = client->serverFrame.origin.x;
			client->command.origin.y = client->serverFrame.origin.y;

			client->command.vel.x = client->serverFrame.vel.x;
			client->command.vel.y = client->serverFrame.vel.y;
		}
	}

	// Read time to run command
	client->command.msec = mes->ReadByte();
}

void ClientSideNetwork::BuildDeltaMoveCommand(DreamMessage *mes, ClientSideClient *theClient)
{
	int flags = 0;
	int last = (networkClient->GetOutgoingSequence() - 1) & (COMMAND_HISTORY_SIZE-1);

	// Check what needs to be updated
	if(theClient->frame[last].key != theClient->command.key)
		flags |= CMD_KEY;

	// Add to the message
	// Flags
	mes->WriteByte(flags);

	// Key
	if(flags & CMD_KEY)
	{
		mes->WriteByte(theClient->command.key);
	}

	mes->WriteByte(theClient->command.msec);
}

void ClientSideNetwork::Connect(void)
{
	if(init)
	{
		LogString("ArmyWar already initialised");
		return;
	}

	LogString("BaseGame::Connect");

	init = true;

	networkClient->SendConnect("myname");
}

void ClientSideNetwork::Disconnect(void)
{
	if(!init)
		return;

	LogString("BaseGame::Disconnect");

	init = false;
	mClientSideGame->localClient = NULL;
	memset(&mClientSideGame->inputClient, 0, sizeof(ClientSideClient));

	networkClient->SendDisconnect();
}

