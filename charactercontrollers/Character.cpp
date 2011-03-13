#include "Character.h"

	Character::Character(Ogre::SceneManager* sceneMgr, std::string playerName,std::string meshName, std::string animationName, int x, int y, int z)
	{
		//character traits
	    	mPlayerName    = playerName;
	    	mMeshName      = meshName;
	    	mAnimationName = animationName;

	    	//starting position
	    	xPos = x;
	    	yPos = y;
	    	zPos = z;

      		//the all powerful SceneManager
	    	mSceneManager = sceneMgr;

        	//actually create and show the model on screen...assuming you put it somewhere visible etc.
        	setupModel();
	}
Character::~Character()
{
}
    void Character::addTime(Real deltaTime)
    {
        mAnimationState->addTime(mAnimationSpeed * deltaTime);
    }

	void Character::setupModel()
	{

		//SceneNode* sn = NULL;
		Entity* entity = NULL;

		// create scene nodes for the models at regular angular intervals
		mSceneNode = mSceneManager->getRootSceneNode()->createChildSceneNode();
		
		// put character in starting spawn spot
		mSceneNode->translate(xPos, yPos, zPos, Node::TS_LOCAL);

		// create entity and attach mesh to it
	        entity = mSceneManager->createEntity(mPlayerName, mMeshName);
		mSceneNode->attachObject(entity);

		// enable the entity's sneaking animation at a random speed and loop it manually since translation is involved
		mAnimationState = entity->getAnimationState(mAnimationName);
       		mAnimationState->setEnabled(true);
        	mAnimationState->setLoop(true);
		mAnimationSpeed = Math::RangeRandom(0.5, 1.5);
	}

    void Character::updateBody      (Real deltaTime)
    {

    }
    void Character::updateAnimations(Real deltaTime)
    {

    }
    void Character::updateCamera    (Real deltaTime)
    {

    }

	void Character::cleanupContent()
	{
		mSceneNode      = NULL;
		mAnimationState = NULL;
		mAnimationSpeed = NULL;
	}









