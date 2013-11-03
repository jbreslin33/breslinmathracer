#ifndef SHAPETAGALL_H
#define SHAPETAGALL_H
/******************************************
*            INCLUDES
****************************************/

#include "shapeTag.h"

/******************************************
*            FORWARD DECLARATIONS
****************************************/
class GameTagAll;
class ClientTagAll;
/******************************************
*            CLASS
****************************************/
class ShapeTagAll : public	ShapeTag
{

public:
ShapeTagAll(unsigned int index, GameTagAll* gameTagAll, ClientTagAll* client, Vector3D* position, Vector3D* velocity, Vector3D* rotation, Ogre::Root* root,
	  bool animated, bool collidable, float collisionRadius, int meshCode, bool ai);
~ShapeTagAll();

/******************************************
*            VARIABLES
****************************************/

GameTagAll* mGameTagAll;
static const char mCommandIt   = 128;

/******************************************
*            METHODS
****************************************/
virtual int setFlag();

};

#endif