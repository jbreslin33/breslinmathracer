#ifndef SHAPEPARTIDO_H
#define SHAPEPARTIDO_H

#include "../shape.h"
#include "../../../fsm/stateMachine.h"
template <class entity_type> class State;

class GamePartido;
class ClientPartido;
class ComputerPartido;

class ShapePartido : public Shape
{

public:
ShapePartido(unsigned int index, GamePartido* gamePartido, ClientPartido* clientPartido, Vector3D* position, Vector3D* velocity, Vector3D* rotation, Ogre::Root* root,
	  bool animated, bool collidable, float collisionRadius, int meshCode, bool ai);
~ShapePartido();

StateMachine<ShapePartido>* mShapePartidoStateMachine;

GamePartido*   mGamePartido;
ClientPartido* mClientPartido;
ShapePartido*  mOpponent;
ShapePartido*  mOpponentLast;

ComputerPartido* mComputerPartido;

virtual void update();
virtual bool handleLetter(Letter* letter);
virtual void collision(Shape* shape);


};

#endif
