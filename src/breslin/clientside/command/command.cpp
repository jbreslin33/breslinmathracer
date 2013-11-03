#include "command.h"

Command::Command()
{
	mPosition = new Vector3D();
	mRotation = new Vector3D();
	mVelocity = new Vector3D();
	mFrameTime = 0;

	mRotationSpeed = 0.0f;	
	mScore = 0;
	mDeltaCode = 0;
}

Command::~Command()
{
}
