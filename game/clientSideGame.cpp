#include "../game/clientSideGame.h"

#include "../basegame/clientSideBaseGame.h"
#include "../dreamsock/dreamClient.h"

#include "../network/clientSideNetwork.h"
#include <OISKeyboard.h>
#include "../baseapplication/baseApplication.h"
#include "../shape/clientSideShape.h"

ClientSideGame::ClientSideGame(ClientSideBaseGame* clientSideBaseGame)
{
	mClientSideBaseGame = clientSideBaseGame;
	
	clientList		= NULL;
	localClient		= NULL;

	memset(&inputClient, 0, sizeof(ClientSideClient));

	frametime		= 0.0f;

	next			= NULL;

	mClientSideNetwork = new ClientSideNetwork(this);
}


ClientSideGame::~ClientSideGame()
{
}


//scene
void ClientSideGame::createScene(void)
{
        mClientSideBaseGame->getSceneManager()->setAmbientLight(Ogre::ColourValue(0.75, 0.75, 0.75));

        Ogre::Light* pointLight = mClientSideBaseGame->getSceneManager()->createLight("pointLight");
        pointLight->setType(Ogre::Light::LT_POINT);
        pointLight->setPosition(Ogre::Vector3(250, 150, 250));
        pointLight->setDiffuseColour(Ogre::ColourValue::White);
        pointLight->setSpecularColour(Ogre::ColourValue::White);

        // create a floor mesh resource
        MeshManager::getSingleton().createPlane("floor", ResourceGroupManager::DEFAULT_RESOURCE_GROUP_NAME,
        Plane(Vector3::UNIT_Y, 0), 100, 100, 10, 10, true, 1, 10, 10, Vector3::UNIT_Z);

        // create a floor entity, give it a material, and place it at the origin
        Entity* floor = mClientSideBaseGame->getSceneManager()->createEntity("Floor", "floor");
        floor->setMaterialName("Examples/Rockwall");
        floor->setCastShadows(false);
        mClientSideBaseGame->getSceneManager()->getRootSceneNode()->attachObject(floor);

        localGuy = new ClientSideShape(mClientSideBaseGame->getSceneManager(),"localGuy",0,0,0,"ninja.mesh");
}

//Movement
void ClientSideGame::CheckPredictionError(int a)
{
	if(a < 0 && a > COMMAND_HISTORY_SIZE)
		return;

	float errorX =
		localClient->serverFrame.origin.x - localClient->frame[a].predictedOrigin.x;

	float errorY =
		localClient->serverFrame.origin.y - localClient->frame[a].predictedOrigin.y;

	// Fix the prediction error
	if( (errorX != 0.0f) || (errorY != 0.0f) )
	{
		localClient->frame[a].predictedOrigin.x = localClient->serverFrame.origin.x;
		localClient->frame[a].predictedOrigin.y = localClient->serverFrame.origin.y;

		localClient->frame[a].vel.x = localClient->serverFrame.vel.x;
		localClient->frame[a].vel.y = localClient->serverFrame.vel.y;

		LogString("Prediction error for frame %d:     %f, %f\n", a,
			errorX, errorY);
	}
}

void ClientSideGame::CalculateVelocity(ClientSideCommand *command, float frametime)
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

void ClientSideGame::PredictMovement(int prevFrame, int curFrame)
{
	if(!localClient)
		return;

	float frametime = inputClient.frame[curFrame].msec / 1000.0f;

	localClient->frame[curFrame].key = inputClient.frame[curFrame].key;

	//
	// Player ->
	//

	// Process commands
	CalculateVelocity(&localClient->frame[curFrame], frametime);

	// Calculate new predicted origin
	localClient->frame[curFrame].predictedOrigin.x =
		localClient->frame[prevFrame].predictedOrigin.x + localClient->frame[curFrame].vel.x;

	localClient->frame[curFrame].predictedOrigin.y =
		localClient->frame[prevFrame].predictedOrigin.y + localClient->frame[curFrame].vel.y;

	// Copy values to "current" values
	localClient->command.predictedOrigin.x	= localClient->frame[curFrame].predictedOrigin.x;
	localClient->command.predictedOrigin.y	= localClient->frame[curFrame].predictedOrigin.y;
	localClient->command.vel.x				= localClient->frame[curFrame].vel.x;
	localClient->command.vel.y				= localClient->frame[curFrame].vel.y;
}

void ClientSideGame::MoveObjects(void)
{
	if(!localClient)
		return;

	ClientSideClient *client = clientList;

	Ogre::Vector3 transVector = Ogre::Vector3::ZERO;

	for( ; client != NULL; client = client->next)
	{
		// Remote players
		if(client != localClient)
		{
			CalculateVelocity(&client->command, frametime);

			client->command.origin.x += client->command.vel.x;
			client->command.origin.y += client->command.vel.y;

           		transVector.x = client->command.origin.x;
            		transVector.y = client->command.origin.y;

			client->mShape->getSceneNode()->setPosition(transVector);

		}

		//Local player
		else
		{
			client->command.origin.x = client->command.predictedOrigin.x;
			client->command.origin.y = client->command.predictedOrigin.y;

			transVector.x = client->command.origin.x;
        		transVector.y = client->command.origin.y;

			client->mShape->getSceneNode()->setPosition(transVector);


		}
	}
}


//Clients
void ClientSideGame::AddClient(int local, int ind, char *name)
{
	// First get a pointer to the beginning of client list
	ClientSideClient *list = clientList;
	ClientSideClient *prev;

	LogString("App: Client: Adding client with index %d", ind);

	// No clients yet, adding the first one
	if(clientList == NULL)
	{
		LogString("App: Client: Adding first client");

		clientList = (ClientSideClient *) calloc(1, sizeof(ClientSideClient));

		if(local)
		{
			LogString("App: Client: This one is local");
			localClient = clientList;
		}

		clientList->index = ind;
		strcpy(clientList->nickname, name);

		createPlayer(ind);

		clientList->next = NULL;
	}
	else
	{
		LogString("App: Client: Adding another client");

		prev = list;
		list = clientList->next;

		while(list != NULL)
		{
			prev = list;
			list = list->next;
		}

		list = (ClientSideClient *) calloc(1, sizeof(ClientSideClient));

		if(local)
		{
			LogString("App: Client: This one is local");
			localClient = list;
		}

		list->index = ind;
		strcpy(list->nickname, name);

		clientList->next = NULL;

		list->next = NULL;
		prev->next = list;

		createPlayer(ind);
	}

	// If we just joined the game, request a non-delta compressed frame
	if(local)
		mClientSideNetwork->SendRequestNonDeltaFrame();

}

void ClientSideGame::RemoveClient(int ind)
{
	ClientSideClient *list = clientList;
	ClientSideClient *prev = NULL;
	ClientSideClient *next = NULL;

	// Look for correct client and update list
	for( ; list != NULL; list = list->next)
	{
		if(list->index == ind)
		{
			if(prev != NULL)
			{
				prev->next = list->next;
			}

			break;
		}

		prev = list;
	}

	// First entry
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

	// Other
	else
	{
		if(list)
		{
			next = list->next;
			free(list);
		}

		list = next;
	}
}

void ClientSideGame::RemoveClients(void)
{
	ClientSideClient *list = clientList;
	ClientSideClient *next;

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
}


ClientSideClient *ClientSideGame::GetClientPointer(int index)
{
	for(ClientSideClient *clList = clientList; clList != NULL; clList = clList->next)
	{
		if(clList->index == index)
			return clList;
	}

	return NULL;
}


//Player stuff
void ClientSideGame::createPlayer(int index)
{
        //create a human player and or ghost player 
        ClientSideShape* jay = new ClientSideShape(mClientSideBaseGame->getSceneManager(),"jay" + index,0,0,0,"sinbad.mesh");
        mClientSideShapeVector.push_back(jay);

        ClientSideClient *client = GetClientPointer(index);
        client->mShape = jay;

	
}

//input
void ClientSideGame::CheckKeys(void)
{
	inputClient.command.key = 0;
    	
	if (mClientSideBaseGame->getKeyboard()->isKeyDown(OIS::KC_I)) // Forward
    	{
		inputClient.command.key |= KEY_UP;
	 	//localGuy->mKeyDirection.x = 1;
   	}
	
	if (mClientSideBaseGame->getKeyboard()->isKeyDown(OIS::KC_K)) // Backward
	{
        	inputClient.command.key |= KEY_DOWN;
	 	//localGuy->mKeyDirection.x = -1;
	}

    	if (mClientSideBaseGame->getKeyboard()->isKeyDown(OIS::KC_J)) // Left - yaw or strafe
	{
		inputClient.command.key |= KEY_LEFT;
	 	//localGuy->mKeyDirection.z = -1;
	}

	if (mClientSideBaseGame->getKeyboard()->isKeyDown(OIS::KC_L)) // Right - yaw or strafe
	{
        	inputClient.command.key |= KEY_RIGHT;
		//localGuy->mKeyDirection.z = 1;
	}

	inputClient.command.msec = (int) (frametime * 1000);
}


void ClientSideGame::CheckKeys(int i)
{
	if (mClientSideBaseGame->getKeyboard()->isKeyDown(OIS::KC_T)) // Forward
    {
		 localGuy->mKeyDirection.x = 1;
   	}
	
	if (mClientSideBaseGame->getKeyboard()->isKeyDown(OIS::KC_G)) // Backward
	{
	 	localGuy->mKeyDirection.x = -1;
	}

    if (mClientSideBaseGame->getKeyboard()->isKeyDown(OIS::KC_F)) // Left - yaw or strafe
	{
	 	localGuy->mKeyDirection.z = -1;
	}

	if (mClientSideBaseGame->getKeyboard()->isKeyDown(OIS::KC_H)) // Right - yaw or strafe
	{
		localGuy->mKeyDirection.z = 1;
	}
}
//power up and down
void ClientSideGame::Shutdown(void)
{
	mClientSideNetwork->Disconnect();
}

//network
void ClientSideGame::RunNetwork(int msec)
{
	static int time = 0;
	//LogString("time static:%d",time);
	time += msec;
	//LogString("time in RunNetwork: %d",time);
	// Framerate is too high
	
	if(time < (1000 / 60))
	{
//		LogString("FRAMRATE TOO HIGH!!!!");
		        MovePlayer();
		return;
	}

//	LogString("<<<<<<<<<<<<<<<Running Network>>>>>>>>>>>>>>>>");
	frametime = time / 1000.0f;
	time = 0;

	// Read packets from server, and send new commands
	mClientSideNetwork->ReadPackets();
	mClientSideNetwork->SendCommand();
}

void ClientSideGame::RunLocalPredictions()
{
	int ack = mClientSideNetwork->networkClient->GetIncomingAcknowledged();
	int current = mClientSideNetwork->networkClient->GetOutgoingSequence();

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

	//MoveObjects();
}


void ClientSideGame::MovePlayer(void)
{

	static Ogre::Real mMove = 17;
	Ogre::Vector3 transVector = Ogre::Vector3::ZERO;


	if(keys[VK_DOWN])
	{
		transVector.y -= mMove;

	}

	if(keys[VK_UP])
	{
		transVector.y += mMove;
	}

	if(keys[VK_LEFT])
	{
		transVector.x -= mMove;
	}

	if(keys[VK_RIGHT])
	{
		transVector.x += mMove;
	}

	if(localClient)
		localClient->mShape->getSceneNode()->translate(transVector * mClientSideBaseGame->rendertime, Ogre::Node::TS_LOCAL);
	   //localClient->myNode->translate(transVector * rendertime, Ogre::Node::TS_LOCAL);

}
