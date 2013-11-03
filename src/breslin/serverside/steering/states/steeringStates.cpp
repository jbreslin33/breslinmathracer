//parent
#include "steeringStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//steering
#include "../steering.h"

//server
#include "../../server/server.h"

//game
#include "../../game/game.h"

//shape
#include "../../shape/shape.h"

//vector3D
#include "../../../math/vector3D.h"

//move
#include "../../move/move.h"

/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_STEERING* GLOBAL_STEERING::Instance()
{
  static GLOBAL_STEERING instance;
  return &instance;
}
void GLOBAL_STEERING::enter(Steering* steering)
{
}
void GLOBAL_STEERING::execute(Steering* steering)
{

}
void GLOBAL_STEERING::exit(Steering* steering)
{
}
bool GLOBAL_STEERING::onLetter(Steering* steering, Letter* letter)
{
        return true;
}


/*****************************************
	NORMAL_STEERING
****************************************/
NORMAL_STEERING* NORMAL_STEERING::Instance()
{
  static NORMAL_STEERING instance;
  return &instance;
}
void NORMAL_STEERING::enter(Steering* steering)
{
	//LogString("Normal");
}
void NORMAL_STEERING::execute(Steering* steering)
{
}
void NORMAL_STEERING::exit(Steering* steering)
{
}
bool NORMAL_STEERING::onLetter(Steering* steering, Letter* letter)
{
        return true;
}

/*****************************************
	NO_STEERING
****************************************/
NO_STEERING* NO_STEERING::Instance()
{
	static NO_STEERING instance;
	return &instance;
}
void NO_STEERING::enter(Steering* steering)
{
	//LogString("No");
}
void NO_STEERING::execute(Steering* steering)
{
}
void NO_STEERING::exit(Steering* steering)
{
}
bool NO_STEERING::onLetter(Steering* steering, Letter* letter)
{
        return true;
}

