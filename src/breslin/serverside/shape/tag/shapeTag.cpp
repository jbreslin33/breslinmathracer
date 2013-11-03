#include "shapeTag.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//game
#include "../game/gameTag.h"

//math
#include "../../math/vector3D.h"

ShapeTag::ShapeTag(unsigned int index, GameTag* gameTag, Client* client, Vector3D* position, Vector3D* velocity, Vector3D* rotation, Ogre::Root* root,
			 bool animated ,bool collidable, float collisionRadius, int meshCode, bool ai)
	:
		Shape(index, gameTag,client,position,velocity,rotation,root,animated,collidable,collisionRadius,meshCode,ai)

{
	mGameTag = gameTag;
}
	
ShapeTag::~ShapeTag()
{
}

int ShapeTag::setFlag()
{
	int flags = Shape::setFlag();
	
	if (mGameTag->mShapeIt == this)
	{
		flags |= mCommandIt;
	}
	
	return flags;
}




