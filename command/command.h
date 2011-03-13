#ifndef COMMAND_H
#define COMMAND_H

#include "../math/vector3D.h"

class Command
{
public:
Command();
~Command();
	
	int key;
	int msec;

	Vector3D origin;
	Vector3D vel;	

};
#endif
