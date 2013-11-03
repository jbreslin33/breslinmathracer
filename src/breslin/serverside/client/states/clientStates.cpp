//parent
#include "clientStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//states
#include "../../../fsm/stateMachine.h"

//ability
#include "../client.h"

//server
#include "../../server/server.h"

/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_CLIENT* GLOBAL_CLIENT::Instance()
{
  static GLOBAL_CLIENT instance;
  return &instance;
}
void GLOBAL_CLIENT::enter(Client* client)
{
}
void GLOBAL_CLIENT::execute(Client* client)
{
}
void GLOBAL_CLIENT::exit(Client* client)
{
}
bool GLOBAL_CLIENT::onLetter(Client* client, Letter* letter)
{
	return false;
}
