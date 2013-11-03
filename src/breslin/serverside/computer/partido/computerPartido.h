#ifndef COMPUTERPARTIDO_H
#define COMPUTERPARTIDO_H

#include "../computer.h"

#include "../../../baseentity/baseEntity.h"

#include "../../../fsm/stateMachine.h"

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

class ShapePartido;

class ComputerPartido : public Computer 
{

public:

ComputerPartido(ShapePartido* shape);
~ComputerPartido();

//update
virtual void update();

//handle letter 
virtual bool  handleLetter(Letter* letter);

ShapePartido* mShapePartido;

StateMachine<ComputerPartido>* mComputerPartidoStateMachine;


};

#endif

