#include "clientSideNetworkedGame.h"

ClientSideNetworkedGame::ClientSideNetworkedGame()
{
	networkClient	= new dreamClient;
}
ClientSideNetworkedGame::~ClientSideNetworkedGame()
{
	delete networkClient;
}

void ClientSideNetworkedGame::ReadPackets(void)
{
	char data[1400];
	struct sockaddr address;

	clientData *clList;

	int type;
	int ind;
	int local;
	int ret;

	char name[50];

	dreamMessage mes;
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

			AddClient(local, ind, name);
			break;

		case DREAMSOCK_MES_REMOVECLIENT:
			ind = mes.ReadByte();

			LogString("Got removeclient %d message", ind);

			RemoveClient(ind);

			break;

		case USER_MES_FRAME:
			// Skip sequences
			mes.ReadShort();
			mes.ReadShort();

			for(clList = clientList; clList != NULL; clList = clList->next)
			{
//				LogString("Reading DELTAFRAME for client %d", clList->index);
				ReadDeltaMoveCommand(&mes, clList);
			}

			break;

		case USER_MES_NONDELTAFRAME:
			// Skip sequences
			mes.ReadShort();
			mes.ReadShort();

			clList = clientList;

			for(clList = clientList; clList != NULL; clList = clList->next)
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


void ClientSideNetworkedGame::ReadDeltaMoveCommand(dreamMessage *mes, clientData *client)
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

		if(client == localClient)
		{
			CheckPredictionError(processedFrame);
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

void ClientSideNetworkedGame::ReadMoveCommand(dreamMessage *mes, clientData *client)
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

	memcpy(&client->command, &client->serverFrame, sizeof(command_t));

	// Fill the history array with the position we got
	for(int f = 0; f < COMMAND_HISTORY_SIZE; f++)
	{
		client->frame[f].predictedOrigin.x = client->command.origin.x;
		client->frame[f].predictedOrigin.y = client->command.origin.y;
	}
}

void ClientSideNetworkedGame::BuildDeltaMoveCommand(dreamMessage *mes, clientData *theClient)
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

void ClientSideNetworkedGame::SendCommand(void)
{
	if(networkClient->GetConnectionState() != DREAMSOCK_CONNECTED)
		return;

	dreamMessage message;
	char data[1400];

	int i = networkClient->GetOutgoingSequence() & (COMMAND_HISTORY_SIZE-1);

	message.Init(data, sizeof(data));
	message.WriteByte(USER_MES_FRAME);						// type
	message.AddSequences(networkClient);					// sequences

	// Build delta-compressed move command
	BuildDeltaMoveCommand(&message, &inputClient);

	// Send the packet
	networkClient->SendPacket(&message);

	// Store the command to the input client's history
	memcpy(&inputClient.frame[i], &inputClient.command, sizeof(command_t));

	clientData *clList = clientList;

	// Store the commands to the clients' history
	for( ; clList != NULL; clList = clList->next)
	{
		memcpy(&clList->frame[i], &clList->command, sizeof(command_t));
	}
}


void ClientSideNetworkedGame::SendRequestNonDeltaFrame(void)
{
	char data[1400];
	dreamMessage message;
	message.Init(data, sizeof(data));

	message.WriteByte(USER_MES_NONDELTAFRAME);
	message.AddSequences(networkClient);

	networkClient->SendPacket(&message);
}

void ClientSideNetworkedGame::Connect(void)
{
	if(init)
	{
		LogString("ArmyWar already initialised");
		return;
	}

	LogString("PolyClientSideNetworkedGame::Connect");

	init = true;

	networkClient->SendConnect("myname");
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc:
//-----------------------------------------------------------------------------
void ClientSideNetworkedGame::Disconnect(void)
{
	if(!init)
		return;

	LogString("PolyClientSideNetworkedGame::Disconnect");

	init = false;
	localClient = NULL;
	memset(&inputClient, 0, sizeof(clientData));

	networkClient->SendDisconnect();
}

void ClientSideNetworkedGame::CheckPredictionError(int a)
{
	if(a < 0 && a > COMMAND_HISTORY_SIZE)
		return;

	float errorX =
		localClient->serverFrame.origin.x - localClient->frame[a].predictedOrigin.x;

	float errorY =
		localClient->serverFrame.origin.y - localClient->frame[a].predictedOrigin.y;

	// Fix the prediction error
	if ( (errorX > 0.001f) || (errorX < -0.001) ||(errorX > 0.001f) || (errorX < -0.001) )
	{
		localClient->frame[a].predictedOrigin.x = localClient->serverFrame.origin.x;
		localClient->frame[a].predictedOrigin.y = localClient->serverFrame.origin.y;

		localClient->frame[a].vel.x = localClient->serverFrame.vel.x;
		localClient->frame[a].vel.y = localClient->serverFrame.vel.y;

		LogString("Prediction error for frame %d:     %f, %f\n", a,
			errorX, errorY);
	}
}

void ClientSideNetworkedGame::Shutdown(void)
{
	Disconnect();
}

void ClientSideNetworkedGame::RunNetwork(int msec)
{
	static int time = 0;
	time += msec;

	// Framerate is too high
	if(time < (1000 / 60)) {
        MovePlayer();
		return;
	}

	frametime = time / 1000.0f;
	time = 0;

	// Read packets from server, and send new commands
	ReadPackets();
	SendCommand();

	int ack = networkClient->GetIncomingAcknowledged();
	int current = networkClient->GetOutgoingSequence();

//iam going to put the following in Game.cpp's game loop...

	// Check that we haven't gone too far
	if(current - ack > COMMAND_HISTORY_SIZE)
		return;

	// Predict the frames that we are waiting from the server
	for(int a = ack + 1; a < current; a++)
	{
		int prevframe = (a-1) & (COMMAND_HISTORY_SIZE-1);
		int frame = a & (COMMAND_HISTORY_SIZE-1);

		PredictMovement(prevframe, frame);
	}
	MoveObjects();
}

void ClientSideNetworkedGame::StartConnection(char* serverIP)
{
	int ret = networkClient->Initialise("", serverIP, 30004);

	if(ret == DREAMSOCK_CLIENT_ERROR)
	{
		char text[64];
		sprintf(text, "Could not open client socket");
	}

	Connect();
}

void ClientSideNetworkedGame::AddClient(int local, int ind, char *name)
{
	ClientSideGame::AddClient(local,ind,name);

	// If we just joined the game, request a non-delta compressed frame
	if(local)
		SendRequestNonDeltaFrame();
}

void ClientSideNetworkedGame::gameLoop()
{
	CheckKeys();
	RunNetwork(rendertime * 1000);
	Ogre::WindowEventUtilities::messagePump();
	keepRunning = mRoot->renderOneFrame();
}