#include "shape.h"
#include "../tdreamsock/dreamSock.h"

Shape::Shape(Ogre::SceneManager* sceneMgr, std::string shapeName, int x, int y, int z)
{
	//character traits
LogString("shape Constructor");

    	mShapeName = shapeName;
LogString("set mSHapeName");
    	//starting position
    	xPos = x;
    	yPos = y;
    	zPos = z;

	//the all powerful SceneManager
	mSceneManager = sceneMgr;
}

Shape::~Shape()
{
}

void Shape::setupModel()
{
LogString("entering setupModel in shape");	
	// create scene nodes for the models at regular angular intervals
	mSceneNode = mSceneManager->getRootSceneNode()->createChildSceneNode();
		
	// put character in starting spawn spot
	mSceneNode->translate(xPos, yPos, zPos, Node::TS_LOCAL);
LogString("exiting setupMOdel in shape");
}

void Shape::cleanupContent()
{
	mSceneNode      = NULL;
}









