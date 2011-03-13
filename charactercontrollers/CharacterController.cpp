#include "CharacterController.h"
/*
CharacterController::CharacterController(Camera* cam) 
{
    mCamera = cam;
    setupCamera(cam);
	setupAnimations();
}
*/ 
       CharacterController::CharacterController(Ogre::SceneManager* sceneMgr, Camera* cam, std::string playerName,std::string meshName, std::string animationName, int x, int y, int z) : Character(sceneMgr,playerName,meshName,animationName,x,y,z)
        {
       
	mCamera = cam;
//	setupCamera(cam);
	setupAnimations();

/* 
        //character trait


		mCamera = cam;
		setupCamera(cam);
		setupAnimations();

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
*/       
 }

	void CharacterController::addTime(Real deltaTime)
	{

        updateBody(deltaTime);

		//updateAnimations(deltaTime);
		//updateCamera(deltaTime);
	}

	void CharacterController::injectKeyDown(const OIS::KeyEvent& evt)
	{

		// keep track of the player's intended direction
		if (evt.key == OIS::KC_W) mKeyDirection.z = -1;
		else if (evt.key == OIS::KC_A) mKeyDirection.x = -1;
		else if (evt.key == OIS::KC_S) mKeyDirection.z = 1;
		else if (evt.key == OIS::KC_D) mKeyDirection.x = 1;

		else if (evt.key == OIS::KC_SPACE && (mTopAnimID == ANIM_IDLE_TOP || mTopAnimID == ANIM_RUN_TOP))
		{
			// jump if on ground
			setBaseAnimation(ANIM_JUMP_START, true);
			setTopAnimation(ANIM_NONE,false);
			mTimer = 0;
		}

		if (!mKeyDirection.isZeroLength() && mBaseAnimID == ANIM_IDLE_BASE)
		{
			// start running if not already moving and the player wants to move
			setBaseAnimation(ANIM_RUN_BASE, true);
			if (mTopAnimID == ANIM_IDLE_TOP) setTopAnimation(ANIM_RUN_TOP, true);
		}
	}

	void CharacterController::injectKeyUp(const OIS::KeyEvent& evt)
	{
		// keep track of the player's intended direction
		if (evt.key == OIS::KC_W && mKeyDirection.z == -1) mKeyDirection.z = 0;
		else if (evt.key == OIS::KC_A && mKeyDirection.x == -1) mKeyDirection.x = 0;
		else if (evt.key == OIS::KC_S && mKeyDirection.z == 1) mKeyDirection.z = 0;
		else if (evt.key == OIS::KC_D && mKeyDirection.x == 1) mKeyDirection.x = 0;

		if (mKeyDirection.isZeroLength() && mBaseAnimID == ANIM_RUN_BASE)
		{
			// stop running if already moving and the player doesn't want to move
			setBaseAnimation(ANIM_IDLE_BASE,false);
			if (mTopAnimID == ANIM_RUN_TOP) setTopAnimation(ANIM_IDLE_TOP,false);
		}
	}

	void CharacterController::setBaseAnimation(AnimID id, bool reset)
	{
		if (mBaseAnimID >= 0 && mBaseAnimID < NUM_ANIMS)
		{
			// if we have an old animation, fade it out
			mFadingIn[mBaseAnimID] = false;
			mFadingOut[mBaseAnimID] = true;
		}

		mBaseAnimID = id;

		if (id != ANIM_NONE)
		{
			// if we have a new animation, enable it and fade it in
			mAnims[id]->setEnabled(true);
			mAnims[id]->setWeight(0);
			mFadingOut[id] = false;
			mFadingIn[id] = true;
			if (reset) mAnims[id]->setTimePosition(0);
		}
	}

	void CharacterController::setTopAnimation(AnimID id, bool reset)	{

		if (mTopAnimID >= 0 && mTopAnimID < NUM_ANIMS)
		{
			// if we have an old animation, fade it out
			mFadingIn[mTopAnimID] = false;
			mFadingOut[mTopAnimID] = true;
		}

		mTopAnimID = id;

		if (id != ANIM_NONE)
		{
			// if we have a new animation, enable it and fade it in
			mAnims[id]->setEnabled(true);
			mAnims[id]->setWeight(0);
			mFadingOut[id] = false;
			mFadingIn[id] = true;
			if (reset) mAnims[id]->setTimePosition(0);
		}
	}

	void CharacterController::setupCamera(Camera* cam)
	{
		// create a pivot at roughly the character's shoulder
		mCameraPivot = cam->getSceneManager()->getRootSceneNode()->createChildSceneNode();
		// this is where the camera should be soon, and it spins around the pivot
		mCameraGoal = mCameraPivot->createChildSceneNode(Vector3(0, 0, 15));
		// this is where the camera actually is
		mCameraNode = cam->getSceneManager()->getRootSceneNode()->createChildSceneNode();
		mCameraNode->setPosition(mCameraPivot->getPosition() + mCameraGoal->getPosition());

		mCameraPivot->setFixedYawAxis(true);
		mCameraGoal->setFixedYawAxis(true);
		mCameraNode->setFixedYawAxis(true);

		// our model is quite small, so reduce the clipping planes
		cam->setNearClipDistance(0.1);
		cam->setFarClipDistance(100);
		mCameraNode->attachObject(cam);

		mPivotPitch = 0;
	}

	void CharacterController::setupAnimations()
	{
        
/*
for (int i = 0; i < mNumberOfBodys; i++)
        {
            // this is very important due to the nature of the exported animations
            mBodyEnts.at(i)->getSkeleton()->setBlendMode(ANIMBLEND_CUMULATIVE);

            String animNames[] =
            {"IdleBase", "IdleTop", "RunBase", "RunTop", "HandsClosed", "HandsRelaxed", "DrawSwords",
            "SliceVertical", "SliceHorizontal", "Dance", "JumpStart", "JumpLoop", "JumpEnd"};

            // populate our animation list
            for (int i = 0; i < NUM_ANIMS; i++)
            {
                mAnims[i] = mBodyEnts.at(i)->getAnimationState(animNames[i]);
                mAnims[i]->setLoop(true);
                mFadingIn[i] = false;
                mFadingOut[i] = false;
            }

            // start off in the idle state (top and bottom together)
            setBaseAnimation(ANIM_IDLE_BASE,false);
            setTopAnimation(ANIM_IDLE_TOP,false);

            // relax the hands since we're not holding anything
            mAnims[ANIM_HANDS_RELAXED]->setEnabled(true);
        }
*/
	}

	void CharacterController::updateBody(Real deltaTime)
	{
/*
        for (int i = 0; i < 1; i++)
        {
            mGoalDirection = Vector3::ZERO;   // we will calculate this

            if (mKeyDirection != Vector3::ZERO && mBaseAnimID != ANIM_DANCE)
            {
                // calculate actually goal direction in world based on player's key directions
                mGoalDirection += mKeyDirection.z * mCameraNode->getOrientation().zAxis();

                mGoalDirection += mKeyDirection.x * mCameraNode->getOrientation().xAxis();
                mGoalDirection.y = 0;
                mGoalDirection.normalise();

                Quaternion toGoal = mBodyNodes.at(i)->getOrientation().zAxis().getRotationTo(mGoalDirection);

                // calculate how much the character has to turn to face goal direction
                Real yawToGoal = toGoal.getYaw().valueDegrees();
                // this is how much the character CAN turn this frame
                Real yawAtSpeed = yawToGoal / Math::Abs(yawToGoal) * deltaTime * TURN_SPEED;
                // reduce "turnability" if we're in midair
                if (mBaseAnimID == ANIM_JUMP_LOOP) yawAtSpeed *= 0.2f;

                // turn as much as we can, but not more than we need to
                if (yawToGoal < 0) yawToGoal = std::min<Real>(0, std::max<Real>(yawToGoal, yawAtSpeed)); //yawToGoal = Math::Clamp<Real>(yawToGoal, yawAtSpeed, 0);
                else if (yawToGoal > 0) yawToGoal = std::max<Real>(0, std::min<Real>(yawToGoal, yawAtSpeed)); //yawToGoal = Math::Clamp<Real>(yawToGoal, 0, yawAtSpeed);

                mBodyNodes.at(i)->yaw(Degree(yawToGoal));

                // move in current body direction (not the goal direction)
                mBodyNodes.at(i)->translate(0, 0, deltaTime * RUN_SPEED * mAnims[mBaseAnimID]->getWeight(),
				Node::TS_LOCAL);

            }
	}
*/
}

