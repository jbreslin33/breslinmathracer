#ifndef SERVERSIDESHAPE_H
#define SERVERSIDESHAPE_H

#include "shape.h"

#include "Ogre.h"

using namespace Ogre;

class ServerSideShape : public Shape
{

public:

ServerSideShape(Ogre::SceneManager* mSceneMgr, std::string name, int xPos, int yPos, int zPos); 
~ServerSideShape();

protected:

void setupModel();

};

#endif

