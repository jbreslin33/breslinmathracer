#ifndef __Sinbad_H__
#define __Sinbad_H__

#include "Ogre.h"
//#include "OIS.h"

//#include "../dreamsock/DreamSock.h"

using namespace Ogre;

#define NUM_ANIMS 13           // number of animations the character has
#define CHAR_HEIGHT 5          // height of character's center of mass above ground
#define CAM_HEIGHT 2           // height of camera above character's center of mass
#define RUN_SPEED 17           // character running speed in units per second
#define TURN_SPEED 500.0f      // character turning in degrees per second
#define ANIM_FADE_SPEED 7.5f   // animation crossfade speed in % of full weight per second
#define JUMP_ACCEL 30.0f       // character jump acceleration in upward units per squared second
#define GRAVITY 90.0f          // gravity in downward units per squared second

class ServerSinbadCharacterController
{
public:

	SceneNode* mBodyNode;
	
	

protected:



public:
	
	ServerSinbadCharacterController()
		//:mRoot(0),
		//mSceneMgr(0)
	{
		mRoot = new Ogre::Root("plugins_d.cfg");
		mSceneMgr = mRoot->createSceneManager(Ogre::ST_GENERIC);
		setupBody(mSceneMgr);
	}

	void addTime(Real deltaTime)
	{
		updateBody(deltaTime);
	}

	Vector3* getKeyDirection()
	{
		return &mKeyDirection;
	}



private:

	void setupBody(SceneManager* sceneMgr)
	{
		// create main model
		mBodyNode = sceneMgr->getRootSceneNode()->createChildSceneNode(Vector3::UNIT_Y * CHAR_HEIGHT);

		//mKeyDirection = Vector3::ZERO;

		
		mKeyDirection = Vector3::ZERO;
        mGoalDirection = Vector3::ZERO;
		//mVerticalVelocity = 0;
	}


	void updateBody(Real deltaTime)
	{
		mGoalDirection = Vector3::ZERO;   // we will calculate this

		//if (!mKeyDirection.isZeroLength())
		//{
			// calculate actually goal direction in world based on player's key directions
			//mGoalDirection += mKeyDirection.z * mCameraNode->getOrientation().zAxis();
			//mGoalDirection += mKeyDirection.x * mCameraNode->getOrientation().xAxis();
        
            mGoalDirection += mKeyDirection.z * Vector3::UNIT_Z;
			mGoalDirection += mKeyDirection.x * Vector3::UNIT_X;

            //LogString("xAxis.x %f", mCameraNode->getOrientation().xAxis().x);
			//LogString("xAxis.y %f", mCameraNode->getOrientation().xAxis().y);
			//LogString("xAxis.z %f", mCameraNode->getOrientation().xAxis().z);

			mGoalDirection.y = 0;
			mGoalDirection.normalise();

			Quaternion toGoal = mBodyNode->getOrientation().zAxis().getRotationTo(mGoalDirection);

			// calculate how much the character has to turn to face goal direction
			Real yawToGoal = toGoal.getYaw().valueDegrees();
			// this is how much the character CAN turn this frame
			Real yawAtSpeed = yawToGoal / Math::Abs(yawToGoal) * deltaTime * TURN_SPEED;
			// reduce "turnability" if we're in midair
			//if (mBaseAnimID == ANIM_JUMP_LOOP) yawAtSpeed *= 0.2f;

			// turn as much as we can, but not more than we need to
			if (yawToGoal < 0) yawToGoal = std::min<Real>(0, std::max<Real>(yawToGoal, yawAtSpeed)); //yawToGoal = Math::Clamp<Real>(yawToGoal, yawAtSpeed, 0);
			else if (yawToGoal > 0) yawToGoal = std::max<Real>(0, std::min<Real>(yawToGoal, yawAtSpeed)); //yawToGoal = Math::Clamp<Real>(yawToGoal, 0, yawAtSpeed);
			
			mBodyNode->yaw(Degree(yawToGoal));

			// move in current body direction (not the goal direction)
			mBodyNode->translate(0, 0, deltaTime * RUN_SPEED,
				Node::TS_LOCAL);
		//}
	}

	
	Ogre::SceneManager* mSceneMgr;
	Ogre::Root *mRoot;
	Vector3 mGoalDirection;
	Vector3 mKeyDirection;

	                             // player's local intended direction based on WASD keys
	     // actual intended direction in world-space
};

#endif
