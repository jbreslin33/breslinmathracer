#include "clientSideGame.h"
#include "../shape/sinbad.h"
//#ifdef WIN32
#include "../tdreamsock/dreamSockLog.h"
//#endif

bool keys[256];

ClientSideGame::ClientSideGame()
{

	clientList		= NULL;
	localClient		= NULL;
	clients			= 0;

	memset(&inputClient, 0, sizeof(clientData));

	frametime		= 0.0f;

	rendertime		= 0.0f;

	init			= false;

	gameIndex		= 0;

	next			= NULL;
	keepRunning = true;
}
ClientSideGame::~ClientSideGame()
{
}

void ClientSideGame::createScene(void)
{

    mSceneMgr->setAmbientLight(Ogre::ColourValue(0.75, 0.75, 0.75));

    Ogre::Light* pointLight = mSceneMgr->createLight("pointLight");
    pointLight->setType(Ogre::Light::LT_POINT);
    pointLight->setPosition(Ogre::Vector3(250, 150, 250));
    pointLight->setDiffuseColour(Ogre::ColourValue::White);
    pointLight->setSpecularColour(Ogre::ColourValue::White);
	        Ogre::Light* light = mSceneMgr->getLight("pointLight");
        light->setVisible(true);

}

void ClientSideGame::go(void)
{
#ifdef _DEBUG
    mResourcesCfg = "resources_d.cfg";
    mPluginsCfg = "plugins_d.cfg";
#else
    mResourcesCfg = "resources.cfg";
    mPluginsCfg = "plugins.cfg";
#endif

    if (!setup())
        return;

	while(keepRunning)
	{
		gameLoop();
	}

    // clean up
    destroyScene();
}

void ClientSideGame::AddClient(int local, int ind, char *name)
{
	// First get a pointer to the beginning of client list
	clientData *list = clientList;
	clientData *prev;

	LogString("App: Client: Adding client with index %d", ind);

	// No clients yet, adding the first one
	if(clientList == NULL)
	{
		LogString("App: Client: Adding first client");

		clientList = (clientData *) calloc(1, sizeof(clientData));

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

		list = (clientData *) calloc(1, sizeof(clientData));

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

	clients++;
}

clientData *ClientSideGame::GetClientPointer(int index)
{
	for(clientData *clList = clientList; clList != NULL; clList = clList->next)
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
    Sinbad* jay = new Sinbad(mSceneMgr,"jay" + index,0,0,0,"sinbad.mesh");

    clientData *client = GetClientPointer(index);
    client->mClientSideShape = jay;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc:
//-----------------------------------------------------------------------------
void ClientSideGame::RemoveClients(void)
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

void ClientSideGame::RemoveClient(int ind)
{
	clientData *list = clientList;
	clientData *prev = NULL;
	clientData *next = NULL;

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

	clients--;

}

void ClientSideGame::MovePlayer(void)
{
	if(localClient)
	{
		localClient->mClientSideShape->addTime(rendertime);
	}

	/*
	static Ogre::Real mMove = 17.0;
	Ogre::Vector3 transVector = Ogre::Vector3::ZERO;

	if(keys[VK_DOWN])
	{
		transVector.z -= mMove;
	}

	if(keys[VK_UP])
	{
		transVector.z += mMove;
	}

	if(keys[VK_LEFT])
	{
		transVector.x += mMove;
	}

	if(keys[VK_RIGHT])
	{
		transVector.x -= mMove;
	}

	if(localClient)
	{
		localClient->mClientSideShape->updateAnimations(rendertime);
		localClient->mClientSideShape->getSceneNode()->translate(transVector * rendertime, Ogre::Node::TS_WORLD);
	}
*/
}


Ogre::Vector3 ClientSideGame::getLocalClientMoveVector()
{
	static Ogre::Real mMove = 17.0;
	Ogre::Vector3 transVector = Ogre::Vector3::ZERO;

	if(keys[VK_DOWN])
	{
		transVector.z -= mMove;
	}

	if(keys[VK_UP])
	{
		transVector.z += mMove;
	}

	if(keys[VK_LEFT])
	{
		transVector.x += mMove;
	}

	if(keys[VK_RIGHT])
	{
		transVector.x -= mMove;
	}
	return transVector;
}
void ClientSideGame::MoveInWorldSpaceRelativeToCamera(void)
{
	static Ogre::Real mMove = 17.0;
	Ogre::Vector3 transVector = Ogre::Vector3::ZERO;

	if(keys[VK_DOWN])
	{
		transVector.z -= mMove;
	}

	if(keys[VK_UP])
	{
		transVector.z += mMove;
	}

	if(keys[VK_LEFT])
	{
		transVector.x += mMove;
	}

	if(keys[VK_RIGHT])
	{
		transVector.x -= mMove;
	}

	if(localClient)
	{
		localClient->mClientSideShape->getSceneNode()->translate(transVector * rendertime, Ogre::Node::TS_WORLD);
	}
}

bool ClientSideGame::keyPressed( const OIS::KeyEvent &arg )
{
	localClient->mClientSideShape->injectKeyDown(arg);
	BaseApplication::keyPressed(arg);
    return true;
}

bool ClientSideGame::keyReleased( const OIS::KeyEvent &arg )
{
	localClient->mClientSideShape->injectKeyUp(arg);
	BaseApplication::keyReleased(arg);

    return true;
}

void ClientSideGame::MoveObjects(void)
{
	if(!localClient)
		return;

	clientData *client = clientList;

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
            transVector.z = client->command.origin.y;

			client->mClientSideShape->getSceneNode()->setPosition(transVector);
		}

		//Local player
		/*
		else
		{
			client->command.origin.x = client->command.predictedOrigin.x;
			client->command.origin.y = client->command.predictedOrigin.y;

            transVector.x = client->command.predictedOrigin.x;
            transVector.z = client->command.predictedOrigin.y;

            client->mClientSideShape->getSceneNode()->setPosition(transVector);
		}
		*/
	}
}

void ClientSideGame::CalculateVelocity(command_t *command, float frametime)
{
	float multiplier = 17.0f;

	command->vel.x = 0.0f;
	command->vel.y = 0.0f;
	//localClient->command.vel.x = 0.0f;
	//localClient->command.vel.y = 0.0f;


	if(command->key & KEY_UP)
	{
		command->vel.y += multiplier * frametime;
		//localClient->command.vel.y += multiplier * frametime;
	}

	if(command->key & KEY_DOWN)
	{
		command->vel.y += -multiplier * frametime;
		//localClient->command.vel.y += -multiplier * frametime;
	}

	if(command->key & KEY_LEFT)
	{
		command->vel.x += -multiplier * frametime;
		//localClient->command.vel.x += -multiplier * frametime;
	}

	if(command->key & KEY_RIGHT)
	{
		command->vel.x += multiplier * frametime;
		//localClient->command.vel.x += multiplier * frametime;
	}
}


//eventually modify this to allow for more than one player on one machine. i.e 2 joysticks etc even 2 people on 1 keyboard
bool ClientSideGame::CheckKeys(void)
{
	inputClient.command.key = 0;

	if(keys[VK_ESCAPE])
	{
		return false;
		Shutdown();

		keys[VK_ESCAPE] = false;
	}

	if(keys[VK_DOWN])
	{
		inputClient.command.key |= KEY_DOWN;
	}

	if(keys[VK_UP])
	{
		inputClient.command.key |= KEY_UP;
	}

	if(keys[VK_LEFT])
	{
		inputClient.command.key |= KEY_LEFT;
	}

	if(keys[VK_RIGHT])
	{
		inputClient.command.key |= KEY_RIGHT;
	}

	inputClient.command.msec = (int) (frametime * 1000);
	return true;
}

bool ClientSideGame::processUnbufferedInput(const Ogre::FrameEvent& evt)
{
    if (mKeyboard->isKeyDown(OIS::KC_I)) // Forward
    {
		keys[VK_UP] = TRUE;
    }
	else
	{
        keys[VK_UP] = FALSE;
	}
    if (mKeyboard->isKeyDown(OIS::KC_K)) // Backward
    {
		keys[VK_DOWN] = TRUE;
    }
	else
	{
        keys[VK_DOWN] = FALSE;
	}

    if (mKeyboard->isKeyDown(OIS::KC_J)) // Left - yaw or strafe
    {
		keys[VK_LEFT] = TRUE;
    }
	else
	{
        keys[VK_LEFT] = FALSE;
	}
    if (mKeyboard->isKeyDown(OIS::KC_L)) // Right - yaw or strafe
    {
		keys[VK_RIGHT] = TRUE;
    }
	else
	{
        keys[VK_RIGHT] = FALSE;
	}

    return true;
}

void ClientSideGame::Shutdown(void)
{
	//Disconnect();
}


bool ClientSideGame::frameRenderingQueued(const Ogre::FrameEvent& evt)
{
    bool ret = BaseApplication::frameRenderingQueued(evt);

    if(!processUnbufferedInput(evt))
		return false;
	rendertime = evt.timeSinceLastFrame;

	return ret;
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
	localClient->command.vel.y      		= localClient->frame[curFrame].vel.y;
}
