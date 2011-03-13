#ifndef SHAPE_H
#define SHAPE_H

#include "Ogre.h"

using namespace Ogre;

class Shape
{

public:

Shape(Ogre::SceneManager* mSceneMgr, std::string name, int xPos, int yPos, int zPos); 
~Shape();

SceneNode* getSceneNode() { return mSceneNode; }


void setupModel();
void cleanupContent();

//objects
Ogre::SceneManager* mSceneManager;
SceneNode*          mSceneNode;

//stats
std::string mShapeName;
int xPos;
int yPos;
int zPos;

};

#endif

