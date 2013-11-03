#ifndef MOVE_H
#define MOVE_H

//parent
#include "../../baseentity/baseEntity.h"

#include "../../fsm/stateMachine.h"

template <class entity_type> class State;

/******************************************************
*				FORWARD DECLARATIONS
********************************************************/
class Shape;
class Vector3D;

/******************************************************
*				CLASS
********************************************************/
class Move 
{
public:

	Move(Shape* shape);
	~Move();

/******************************************************
*				VARIABLES
********************************************************/
//shapeDynamic
Shape* mShape;

//state machines
StateMachine<Move>* mProcessTickStateMachine;
StateMachine<Move>* mInterpolateTickStateMachine;

//thresholds
float mPosInterpLimitHigh; 
float mPosInterpFactor; 
float mMaximunVelocity;

float mDeltaPosition; 

private:

//deltas
float mDeltaX;  
float mDeltaZ;  
float mDeltaY; 


/******************************************************
*				METHODS
********************************************************/
public:
//updating
void processTick();
void interpolateTick(float renderTime);

//update
virtual void update() { }

//move
void calculateDeltaPosition();  
float calculateSpeed(Vector3D* velocity, int frameTime);
void regulate(Vector3D* velocityToRegulate);
};

#endif
