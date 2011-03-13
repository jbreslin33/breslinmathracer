/******************************************/
/* MMOG programmer's guide                */
/* Tutorial game server                   */
/* Programming:						      */
/* Teijo Hakala						      */
/******************************************/
#include "serverSideGame.h"

ServerSideGame::ServerSideGame()
{
	clientList	= NULL;
	clients		= 0;

	realtime	= 0;
	servertime	= 0;

	index		= 0;

	framenum	= 0;
}

ServerSideGame::~ServerSideGame()
{

}


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

void ServerSideGame::RemoveClients(void)
{
	ServerSideNetworkedClient *list = clientList;
	ServerSideNetworkedClient *next;

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