#ifndef __CHARACTERCONTROLLER_H__
#define __CHARACTERCONTROLLER_H__

#include "Character.h"

#define NUM_ANIMS 13           // number of animations the character has
#define CHAR_HEIGHT 5          // height of character's center of mass above ground
#define CAM_HEIGHT 2           // height of camera above character's center of mass
#define RUN_SPEED 17           // character running speed in units per second
#define TURN_SPEED 500.0f      // character turning in degrees per second
#define ANIM_FADE_SPEED 7.5f   // animation crossfade speed in % of full weight per second
#define JUMP_ACCEL 30.0f       // character jump acceleration in upward units per squared second
#define GRAVITY 90.0f          // gravity in downward units per squared second

class CharacterController : public Character
{
public:

//    CharacterController(Camera* cam);
	CharacterController(Ogre::SceneManager* mSceneMgr, Camera* cam, std::string name, std::string mesh, std::string animation, int xPos, int yPos, int zPos); 
    ~CharacterController();

	// all the animations our character has, and a null ID
	// some of these affect separate body parts and will be blended together
	enum AnimID
	{
		ANIM_IDLE_BASE,
		ANIM_IDLE_TOP,
		ANIM_RUN_BASE,
		ANIM_RUN_TOP,
		ANIM_HANDS_CLOSED,
		ANIM_HANDS_RELAXED,
		ANIM_DRAW_SWORDS,
		ANIM_SLICE_VERTICAL,
		ANIM_SLICE_HORIZONTAL,
		ANIM_DANCE,
		ANIM_JUMP_START,
		ANIM_JUMP_LOOP,
		ANIM_JUMP_END,
		ANIM_NONE
	};

    //movement variables
	Vector3 mKeyDirection;      // player's local intended direction based on WASD keys
	Vector3 mGoalDirection;     // actual intended direction in world-space

    //animation variables
	AnimID mBaseAnimID;                   // current base (full- or lower-body) animation
	AnimID mTopAnimID;                    // current top (upper-body) animation
	Real mTimer;                // general timer to see how long animations have been playing
	bool mFadingIn[NUM_ANIMS];            // which animations are fading in
	bool mFadingOut[NUM_ANIMS];           // which animations are fading out
	AnimationState* mAnims[NUM_ANIMS];    // master animation list

    //setup camera variables
Camera* mCamera; 
   SceneNode* mCameraPivot;
	SceneNode* mCameraGoal;
	SceneNode* mCameraNode;
	Real mPivotPitch;

	void addTime(Real deltaTime);
	void injectKeyDown(const OIS::KeyEvent& evt);
    void injectKeyUp(const OIS::KeyEvent& evt);
	void setBaseAnimation(AnimID id, bool reset);
	void setTopAnimation(AnimID id, bool reset);

	void setupCamera(Camera* cam);
	void setupAnimations();

	void updateBody(Real deltaTime);

};

#endif
