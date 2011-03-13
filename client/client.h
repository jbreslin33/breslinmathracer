#ifndef CLIENT_H
#define CLIENT_H

#define COMMAND_HISTORY_SIZE		64 //this should go somewher else....

#include "../math/vector3D.h"

class Command;

class Client
{

public:

Client();
~Client();

	Vector3D startPos;

	int index;

	char nickname[30];

	bool team;
};
#endif
