#ifndef BASEGAME_H
#define BASEGAME_H

extern bool keys[256];

#include "../baseapplication/baseApplication.h"

class BaseGame : public BaseApplication
{
public:

BaseGame();
~BaseGame();

OIS::Keyboard* 	    getKeyboard    () { return mKeyboard; }
Ogre::SceneManager* getSceneManager() { return mSceneMgr; }

};

#endif
