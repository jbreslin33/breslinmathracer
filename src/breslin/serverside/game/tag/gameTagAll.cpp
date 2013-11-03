//
#include "gameTagAll.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//server
#include "../server/serverTagAll.h"

//shape
#include "../shape/shapeTagAll.h"

//math
#include "../../math/vector3D.h"

//bounds
#include "../bounds/bounds.h"

GameTagAll::GameTagAll()
{
	mBounds->a = new Vector3D(-50.0,0.0f,-43.0f);
	mBounds->c = new Vector3D(50.0,0.0f,57.0f);
}

GameTagAll::~GameTagAll()
{
}

void GameTagAll::createServer()
{
	mServerTagAll = new ServerTagAll(this,"", 30004);
	mServerTag = mServerTagAll;
	mServer = mServerTag;
}

void GameTagAll::createWorld()
{
	//ai guys, let's make them sinbads
	Shape* shapeIt;

	for(int i = 0; i < 24; i++)
	{                 
		Vector3D* position = new Vector3D();
		position->x = 1.5f * i;
		position->y = 0.0f;
		position->z = 1.5f * i;

		Shape* shape = new ShapeTagAll(getOpenIndex(),this,0,position,new Vector3D(),new Vector3D(),
			mRoot,true,true,.66f,1,true); 

		shapeIt = shape;
	}
	mShapeItVector.push_back(shapeIt);
}
void GameTagAll::collision(Shape* shape1, Shape* shape2)
{
	//run standard collision code from parent, we don't want players passing thru each other!		
	Game::collision(shape1,shape2);
		
	bool shape1It = false;
	bool shape2It = false;
	for (unsigned int i = 0; i < mShapeItVector.size(); i++)
	{
		if (shape1 == mShapeItVector.at(i))
		{
			shape1It = true;
		}
		if (shape2 == mShapeItVector.at(i))
		{
			shape2It = true;
		}
	}

	if (shape1It && !shape2It)
	{
		mShapeItVector.push_back(shape2);
	}
	else if (!shape1It && shape2It)
	{
		mShapeItVector.push_back(shape1);
	}

	//check for game end
	if (mShapeItVector.size() == mShapeVector.size())
	{
		LogString("Game over");
		mShapeItVector.clear();	
		Shape* shapeIt;	
		for (unsigned int i = 0; i < mShapeVector.size(); i++)
		{
			shapeIt = mShapeVector.at(i);	
		}
		
		mShapeItVector.push_back(shapeIt);
	}

}

void GameTagAll::checkBounds(Shape* shape)
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
void GameTagAll::storeCommands(Shape* shape)
{
	Game::storeCommands(shape);
}
