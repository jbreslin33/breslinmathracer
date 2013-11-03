#ifndef ROTATION_H
#define ROTATION_H

//parent
#include "../../baseentity/baseEntity.h"

#include "../../fsm/stateMachine.h"

template <class entity_type> class State;

#include "../../math/vector3D.h"

class AbilityRotationStateMachine;
class AbilityRotationState;
class Shape;

class Rotation
{
public:

	Rotation(Shape* shapeDynamic);
	~Rotation();

/******************************************************
*				VARIABLES
********************************************************/
//state machines
StateMachine<Rotation>* mProcessTickStateMachine;
StateMachine<Rotation>* mInterpolateTickStateMachine;

//shape
Shape* mShape;

//rotation
float mTurnSpeed; 
float mServerRotSpeed;  
float mGhostSpeed;

float mRotInterpLimitHigh;  
float mRotInterpLimitLow;  
float mRotInterpIncrease;   
float mRotInterpDecrease;  

float    mDegreesToServer;  

float mRotationSpeed;

private:

//rotation
Vector3D* mServerRotOld;  
Vector3D* mServerRotNew;  

float mServerRotSpeedOld;
/******************************************************
*				METHODS
********************************************************/
public:

//updating
void processTick();
void interpolateTick(float renderTime);

//rotation
float getDegreesToServer();  
void  calculateServerRotationSpeed(); 

//update
virtual void update() { }

};

#endif
