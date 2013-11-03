#ifndef MOVE_H
#define MOVE_H

//parent
#include "../../baseentity/baseEntity.h"

#include "../../fsm/stateMachine.h"

template <class entity_type> class State;

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

class Shape;
class Vector3D;
class Letter;

class Move : public BaseEntity 
{

public:

Move(Shape* shape);
virtual ~Move();

//update
virtual void update();

//handle letter 
virtual bool  handleLetter(Letter* letter);

Shape* mShape;

//position
Vector3D* mPositionLast;
Vector3D* mPositionBeforeCollision;

StateMachine<Move>* mStateMachine;

//keys
Vector3D* mVelocity;

//run speed
float mRunSpeed;

float mSpeedMax;

float mMaxForce;

//run acceleration
float mRunDecel;
float mRunAccel;

};

#endif

