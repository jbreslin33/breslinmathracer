//
#include "gameTag.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//server
#include "../server/serverTag.h"

//shape
#include "../shape/shapeTag.h"

//client
#include "../client/client.h"

//abilitys
#include "../ability/rotation/rotation.h"
#include "../ability/move/move.h"
#include "../ability/ai/ai.h"

//math
#include "../../math/vector3D.h"

//bounds
#include "../bounds/bounds.h"

GameTag::GameTag()
{
	mBounds->a = new Vector3D(-50.0,0.0f,-43.0f);
	mBounds->c = new Vector3D(50.0,0.0f,57.0f);
}

GameTag::~GameTag()
{
}

void GameTag::createServer()
{
	mServerTag = new ServerTag(this,"", 30004);
	mServer = mServerTag;
}

void GameTag::createWorld()
{
	//ai guys, let's make them sinbads
	for(int i = 0; i < 24; i++)
	{                 
		Vector3D* position = new Vector3D();
		position->x = 1.5f * i;
		position->y = 0.0f;
		position->z = 1.5f * i;

		Shape* shape = new ShapeTag(getOpenIndex(),this,0,position,new Vector3D(),new Vector3D(),
			mRoot,true,true,.66f,1,true); 

		mShapeIt = shape;
		mShapeNoTagBack = shape;
	}
}
void GameTag::collision(Shape* shape1, Shape* shape2)
{
	//run standard collision code from parent, we don't want players passing thru each other!		
	Game::collision(shape1,shape2);
	
	//let's make someone it
	if (shape1 == mShapeIt && shape2 != mShapeNoTagBack)
	{
		mShapeIt = shape2;
		mShapeNoTagBack = shape1;
	}
	else if (shape2 == mShapeIt && shape1 != mShapeNoTagBack)
	{
		mShapeIt = shape1;
		mShapeNoTagBack = shape2;
	}
}

void GameTag::checkBounds(Shape* shape)
{
	if (shape->mSceneNode->getPosition().x < mBounds->a->x)
	{
		shape->mSceneNode->setPosition(mBounds->a->x, shape->mSceneNode->getPosition().y, shape->mSceneNode->getPosition().z); 
	}

	if (shape->mSceneNode->getPosition().x > mBounds->c->x)
	{
		shape->mSceneNode->setPosition(mBounds->c->x, shape->mSceneNode->getPosition().y, shape->mSceneNode->getPosition().z); 
	}


	if (shape->mSceneNode->getPosition().z < mBounds->a->z)
	{
		shape->mSceneNode->setPosition(shape->mSceneNode->getPosition().x, shape->mSceneNode->getPosition().y, mBounds->a->z); 
	}

	if (shape->mSceneNode->getPosition().z > mBounds->c->z)
	{
		shape->mSceneNode->setPosition(shape->mSceneNode->getPosition().x, shape->mSceneNode->getPosition().y, mBounds->c->z); 
	}
}
void GameTag::storeCommands(Shape* shape)
{
	Game::storeCommands(shape);
}
