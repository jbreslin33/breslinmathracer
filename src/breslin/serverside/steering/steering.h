#ifndef STEERING_H
#define STEERING_H

#include "../../baseentity/baseEntity.h"

#include "../../fsm/stateMachine.h"
#include "../../math/vector3D.h"

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

class Shape;
class Vector3D;
class Letter;

class Steering : public BaseEntity 
{

public:

Steering(Shape* shape);
~Steering();

//update
virtual void update();

//handle letter 
virtual bool  handleLetter(Letter* letter);

Shape* mShape;
Shape* mSteeringShape;
Vector3D* mSteeringPoint;
void setSteeringPoint(Vector3D* steeringPoint);
void setSteeringShape(Shape* steeringShape);
void updateSteeringPoint();

StateMachine<Steering>* mStateMachine;

Vector3D* mSteeringForce;
Vector3D* mTarget;
Vector3D* mDesiredVelocity;
double mMultSeperation;
double mViewDistance;
bool         mTagged;

enum deceleration{slow = 3, normal = 2, fast = 1};
Vector3D* seek(Vector3D* target);

Vector3D* separation();

void      findNeighbours();

bool accumulateForce(Vector3D* sf, Vector3D* forceToAdd);
  
Vector3D*  sumForces();
std::vector<Vector3D*> mAntenna;
Vector3D* calculate();

double forwardComponent();

double    sideComponent();

Vector3D* getForce(){ return mSteeringForce; }

Vector3D*  getTarget() { return mTarget; }
void       setTarget(Vector3D* target){ mTarget = target; }

bool mSeekOn;  
bool mSeperationOn;

};

#endif

