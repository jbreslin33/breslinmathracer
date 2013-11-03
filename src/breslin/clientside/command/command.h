#ifndef COMMAND_H
#define COMMAND_H

#include "../../math/vector3D.h"

class Command
{
public:
Command();
~Command();
	
Vector3D* mPosition;      //finish origin of frame/tick
Vector3D* mRotation;         //rotation during frame/tick
float mRotationSpeed;
Vector3D* mVelocity; //this is calculated on the client side and not passed across the network. 

int mFrameTime;      //server frame time i.e time it took for shape to move from point to point.
int mScore;
int mDeltaCode;
};
#endif
