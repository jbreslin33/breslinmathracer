#include "SkeletalAnimation.h"

	SkeletalAnimation::SkeletalAnimation(Ogre::SceneManager* mSceneMgr) : NUM_MODELS(6), ANIM_CHOP(8)
	{
	    mSceneManager = mSceneMgr;
        setupModels();
	}

    void SkeletalAnimation::addTime(Real deltaTime)
    {
        mAnimStates[1]->addTime(mAnimSpeeds[1] * deltaTime);
        /*
        for (unsigned int i = 0; i < NUM_MODELS; i++)
        {
			// update sneaking animation based on speed
			mAnimStates[i]->addTime(mAnimSpeeds[i] * deltaTime);

			if (mAnimStates[i]->getTimePosition() >= ANIM_CHOP)   // when it's time to loop...
			{

				Quaternion rot(Degree(-60), Vector3::UNIT_Y);   // how much the animation turns the character

				// find current end position and the offset
				Vector3 currEnd = mModelNodes[i]->getOrientation() * mSneakEndPos + mModelNodes[i]->getPosition();
				Vector3 offset = rot * mModelNodes[i]->getOrientation() * -mSneakStartPos;

				mModelNodes[i]->setPosition(currEnd + offset);
				mModelNodes[i]->rotate(rot);

				mAnimStates[i]->setTimePosition(0);   // reset animation time
			}
        }
        */
    }

	void SkeletalAnimation::setupModels()
	{

		SceneNode* sn = NULL;
		Entity* ent = NULL;
		AnimationState* as = NULL;

        for (unsigned int i = 0; i < NUM_MODELS; i++)
        {
			// create scene nodes for the models at regular angular intervals
			sn = mSceneManager->getRootSceneNode()->createChildSceneNode();
			sn->yaw(Radian(Math::TWO_PI * (float)i / (float)NUM_MODELS));
			sn->translate(0, 0, -20, Node::TS_LOCAL);
			mModelNodes.push_back(sn);

			// create and attach a jaiqua entity
            ent = mSceneManager->createEntity("Sinbad" + StringConverter::toString(i + 1), "Sinbad.mesh");
			sn->attachObject(ent);

			// enable the entity's sneaking animation at a random speed and loop it manually since translation is involved
			as = ent->getAnimationState("Dance");
            as->setEnabled(true);
			as->setLoop(true);
			mAnimSpeeds.push_back(Math::RangeRandom(0.5, 1.5));
			mAnimStates.push_back(as);
        }

		// create name and value for skinning mode
		StringVector names;
		names.push_back("Skinning");
		String value = "Software";

		// change the value if hardware skinning is enabled
        Pass* pass = ent->getSubEntity(0)->getMaterial()->getBestTechnique()->getPass(0);
		if (pass->hasVertexProgram() && pass->getVertexProgram()->isSkeletalAnimationIncluded()) value = "Hardware";

	}

	void SkeletalAnimation::cleanupContent()
	{
		mModelNodes.clear();
		mAnimStates.clear();
		mAnimSpeeds.clear();
	}



