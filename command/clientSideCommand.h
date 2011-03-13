#ifndef CLIENTSIDECOMMAND_H
#define CLIENTSIDECOMMAND_H

#include "command.h"

#include "../math/vector3D.h"

class ClientSideCommand : public Command
{
public:
ClientSideCommand();
~ClientSideCommand();
	
	Vector3D predictedOrigin;
};
#endif
