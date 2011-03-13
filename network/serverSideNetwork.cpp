#include "serverSideNetwork.h"



#include "../game/serverSideGame.h"
#include "../dreamsock/dreamMessage.h"
#include "../dreamsock/dreamServer.h"
#include "../dreamsock/dreamClient.h"

#include "../client/serverSideClient.h"

#include <math.h>

#ifdef WIN32
#include <windows.h>
#include <mmsystem.h>
#include <assert.h>
#endif



ServerSideNetwork::ServerSideNetwork(ServerSideGame* server)
{
	mServer = server;
}

ServerSideNetwork::~ServerSideNetwork()
{

}

void ServerSideNetwork::ReadPackets(void)
{
	char data[1400];

	int type;
	int ret;

	struct sockaddr address;

	ServerSideClient *clList;

	DreamMessage mes;
	mes.Init(data, sizeof(data));

	// Get the packet from the socket
	try
	{
		while(ret = mServer->networkServer->GetPacket(mes.data, &address))
		{
			mes.SetSize(ret);
			mes.BeginReading();

			type = mes.ReadByte();

			// Check the type of the message
			switch(type)
			{
			case DREAMSOCK_MES_CONNECT:
				mServer->AddClient();
				break;

			case DREAMSOCK_MES_DISCONNECT:
				mServer->RemoveClient(&address);
				break;

			case USER_MES_FRAME:
//			LogString("Got frame (size: %d bytes)", ret);

				// Skip sequences
				mes.ReadShort();
				mes.ReadShort();

				// Find the correct client by comparing addresses
				clList = mServer->clientList;

				for( ; clList != NULL; clList = clList->next)
				{
					if(memcmp(&clList->address, &address, sizeof(address)) == 0)
					{
						ReadDeltaMoveCommand(&mes, clList);
						mServer->MovePlayer(clList);

						break;
					}
				}

				break;

			case USER_MES_NONDELTAFRAME:
				clList = mServer->clientList;
				ServerSideClient *dataClient;

				for( ; clList != NULL; clList = clList->next)
				{
					clList->netClient->message.Init(clList->netClient->message.outgoingData,
						sizeof(clList->netClient->message.outgoingData));

					clList->netClient->message.WriteByte(USER_MES_NONDELTAFRAME);
					clList->netClient->message.WriteShort(clList->netClient->GetOutgoingSequence());
					clList->netClient->message.WriteShort(clList->netClient->GetIncomingSequence());

					for(dataClient = mServer->clientList; dataClient != NULL; dataClient = dataClient->next)
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

void ServerSideNetwork::SendCommand(void)
{
	ServerSideClient *toClient;
	ServerSideClient *dataClient;

	// Fill messages
	for(toClient = mServer->clientList; toClient != NULL; toClient = toClient->next)
	{
		toClient->netClient->message.Init(toClient->netClient->message.outgoingData,
			sizeof(toClient->netClient->message.outgoingData));

		toClient->netClient->message.WriteByte(USER_MES_FRAME);			// type
		toClient->netClient->message.AddSequences(toClient->netClient);	// sequences

		for(dataClient = mServer->clientList; dataClient != NULL; dataClient = dataClient->next)
		{
			BuildDeltaMoveCommand(&toClient->netClient->message, dataClient);
		}
	}

	// Send messages to all clients
	mServer->networkServer->SendPackets();

	// Store the sent command in history
	for(toClient = mServer->clientList; toClient != NULL; toClient = toClient->next)
	{
		int i = (toClient->netClient->GetOutgoingSequence() - 1) & (COMMAND_HISTORY_SIZE-1);

		memcpy(&toClient->frame[i], &toClient->command, sizeof(Command));
	}
}

void ServerSideNetwork::SendExitNotification(void)
{
	ServerSideClient *toClient = mServer->clientList;

	for( ; toClient != NULL; toClient = toClient->next)
	{
		toClient->netClient->message.Init(toClient->netClient->message.outgoingData,
			sizeof(toClient->netClient->message.outgoingData));

		toClient->netClient->message.WriteByte(USER_MES_SERVEREXIT);	// type
		toClient->netClient->message.AddSequences(toClient->netClient);	// sequences
	}

	mServer->networkServer->SendPackets();
}

void ServerSideNetwork::ReadDeltaMoveCommand(DreamMessage *mes, ServerSideClient *client)
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

void ServerSideNetwork::BuildMoveCommand(DreamMessage *mes, ServerSideClient *client)
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

void ServerSideNetwork::BuildDeltaMoveCommand(DreamMessage *mes, ServerSideClient *client)
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
