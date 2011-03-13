/******************************************/
/* MMOG programmer's guide                */
/* Tutorial game client                   */
/* Programming:						      */
/* Teijo Hakala						      */
/******************************************/


#include "client.h"
#include "network.h"

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
CArmyWar::CArmyWar()
{
	networkClient	= new dreamClient;
	clientList		= NULL;
	localClient		= NULL;
	clients			= 0;

	memset(&inputClient, 0, sizeof(clientData));

	frametime		= 0.0f;

	rendertime		= 0.0f;

	init			= false;

	gameIndex		= 0;

	next			= NULL;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
CArmyWar::~CArmyWar()
{
	delete networkClient;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWar::Shutdown(void)
{
	Disconnect();
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
clientData *CArmyWar::GetClientPointer(int index)
{
	for(clientData *clList = clientList; clList != NULL; clList = clList->next)
	{
		if(clList->index == index)
			return clList;
	}

	return NULL;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWar::CheckKeys(void)
{
	inputClient.command.key = 0;

	if (getKeyboard()->isKeyDown(OIS::KC_I)) // Forward
    	{
		inputClient.command.key |= KEY_UP;
	 	//localGuy->mKeyDirection.x = 1;
   	}
	
	if (getKeyboard()->isKeyDown(OIS::KC_K)) // Backward
	{
        	inputClient.command.key |= KEY_DOWN;
	 	//localGuy->mKeyDirection.x = -1;
	}

    	if (getKeyboard()->isKeyDown(OIS::KC_J)) // Left - yaw or strafe
	{
		inputClient.command.key |= KEY_LEFT;
	 	//localGuy->mKeyDirection.z = -1;
	}

	if (getKeyboard()->isKeyDown(OIS::KC_L)) // Right - yaw or strafe
	{
        	inputClient.command.key |= KEY_RIGHT;
		//localGuy->mKeyDirection.z = 1;
	}
/*
	if(keys[VK_ESCAPE])
	{
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
*/
	inputClient.command.msec = (int) (frametime * 1000);
	
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWar::CheckPredictionError(int a)
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
	/*
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
*/
	}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWar::CalculateVelocity(command_t *command, float frametime)
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

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWar::PredictMovement(int prevFrame, int curFrame)
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
	localClient->command.vel.y		
		= localClient->frame[curFrame].vel.y;
}

void CArmyWar::MovePlayer(void)
{

	static Ogre::Real mMove = 17.0;
	Ogre::Vector3 transVector = Ogre::Vector3::ZERO;

/*
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
*/
	if(localClient)
	   localClient->myNode->translate(transVector * rendertime, Ogre::Node::TS_LOCAL);

}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void CArmyWar::MoveObjects(void)
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
            transVector.y = client->command.origin.y;

			client->myNode->setPosition(transVector);


		}

		//Local player
		else
		{
			client->command.origin.x = client->command.predictedOrigin.x;
			client->command.origin.y = client->command.predictedOrigin.y;

			//memcpy(&client->command, &inputClient.command, sizeof(command_t));
			//CalculateVelocity(&inputClient.command, frametime);

			//client->command.origin.x += client->command.vel.x;
			//client->command.origin.y += client->command.vel.y;

            transVector.x = client->command.predictedOrigin.x;
            transVector.y = client->command.predictedOrigin.y;

			//transVector.x = client->command.vel.x;
            //transVector.y = client->command.vel.y;

			//client->myNode->translate(transVector, Ogre::Node::TS_LOCAL);
            client->myNode->setPosition(transVector);

/*
            LogString("transVector.x %f: ", transVector.x);
			LogString("transVector.y %f: ", transVector.y);
			LogString("predictedOrigin.x %f: ", client->command.predictedOrigin.x);
			LogString("predictedOrigin.y %f: ", client->command.predictedOrigin.y);
*/
		}
	}
}

