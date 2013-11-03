#ifndef SHAPETAG_H
#define SHAPETAG_H
/******************************************
*            INCLUDES
****************************************/

#include "shape.h"

/******************************************
*            FORWARD DECLARATIONS
****************************************/
class GameTag;
/******************************************
*            CLASS
****************************************/
class ShapeTag : public	Shape
{

public:
ShapeTag(unsigned int index, GameTag* gameTag, Client* client, Vector3D* position, Vector3D* velocity, Vector3D* rotation, Ogre::Root* root,
	  bool animated, bool collidable, float collisionRadius, int meshCode, bool ai);
~ShapeTag();

/******************************************
*            VARIABLES
****************************************/

GameTag* mGameTag;
static const char mCommandIt   = 128;

/******************************************
*            METHODS
****************************************/
virtual int setFlag();

};

#endif
