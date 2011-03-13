#ifndef Character_H
#define Character_H

#include "Ogre.h"
#include "OIS.h"

using namespace Ogre;

class Character
{
public:

	Character(Ogre::SceneManager* mSceneMgr, std::string name, std::string mesh, std::string animation, int xPos, int yPos, int zPos); // : NUM_MODELS(6), ANIM_CHOP(8)
	~Character();

    void addTime         (Real deltaTime);
    void updateBody      (Real deltaTime);
    void updateAnimations(Real deltaTime);
    void updateCamera    (Real deltaTime);

	SceneNode* getSceneNode() { return mSceneNode; }

protected:

	void setupModel();
	void cleanupContent();

    //objects
    Ogre::SceneManager* mSceneManager;
	SceneNode*          mSceneNode;

    //Animation
	AnimationState* mAnimationState;
	Real            mAnimationSpeed;

    //stats
    std::string mPlayerName;
    std::string mMeshName;
    std::string mAnimationName;
    int xPos;
    int yPos;
    int zPos;
};

#endif

