#ifndef __SkeletalAnimation_H__
#define __SkeletalAnimation_H__


#include "Ogre.h"
#include "OIS.h"

using namespace Ogre;
//using namespace OgreBites;

class SkeletalAnimation
{
public:

	SkeletalAnimation(Ogre::SceneManager* mSceneMgr); // : NUM_MODELS(6), ANIM_CHOP(8)
	~SkeletalAnimation();
    void addTime(Real deltaTime);

protected:

	void setupContent();
	void setupModels();
	void cleanupContent();



	const unsigned int NUM_MODELS;
	const Real ANIM_CHOP;

	std::vector<SceneNode*> mModelNodes;
	std::vector<AnimationState*> mAnimStates;
	std::vector<Real> mAnimSpeeds;

	Vector3 mSneakStartPos;
	Vector3 mSneakEndPos;


    Ogre::SceneManager* mSceneManager;
};

#endif
