#include "shapeTagAll.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//game
#include "../game/gameTagAll.h"

//client
#include "../client/clientTagAll.h"

//math
#include "../../math/vector3D.h"

ShapeTagAll::ShapeTagAll(unsigned int index, GameTagAll* gameTagAll, ClientTagAll* clientTagAll, Vector3D* position, Vector3D* velocity, Vector3D* rotation, Ogre::Root* root,
			 bool animated ,bool collidable, float collisionRadius, int meshCode, bool ai)
	:
		ShapeTag(index, gameTagAll,clientTagAll,position,velocity,rotation,root,animated,collidable,collisionRadius,meshCode,ai)
{
	mGameTagAll = gameTagAll;
}
	
ShapeTagAll::~ShapeTagAll()
{
}

int ShapeTagAll::setFlag()
{
	int flags = Shape::setFlag();
	
	for (unsigned int i = 0; i < mGameTagAll->mShapeItVector.size(); i++)
	{
		if (mGameTagAll->mShapeItVector.at(i) == this)
		{
			flags |= mCommandIt;
		}

	}
	return flags;
}




