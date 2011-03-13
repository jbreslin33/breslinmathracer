#include "serverSideShape.h"

ServerSideShape::ServerSideShape(Ogre::SceneManager* sceneMgr, std::string shapeName,int x, int y, int z) : Shape(sceneMgr,shapeName,x,y,z)
{

	Shape::setupModel();
}

ServerSideShape::~ServerSideShape()
{
}


