#ifndef SHAPE_H
#define SHAPE_H

#include "../../baseentity/baseEntity.h"

#include "../../fsm/stateMachine.h"

template <class entity_type> class State;

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

//message
#include "../../message/message.h"

#include <string>

//forward declarations
class Game;
class ClientRobust;
class Steering;
class Seek;
class Avoid;
class Rotation;
class Move;
class Computer;
class Vector3D;
class Letter;

class Shape : BaseEntity
{

public:
Shape(unsigned int index, Game* game, ClientRobust* client, Vector3D* position, Vector3D* velocity, Vector3D* rotation, Ogre::Root* root,
	  bool animated, bool collidable, float collisionRadius, int meshCode, bool ai);
~Shape();

// ByteBufferes
static const char mCommandFrameTime = 2;

static const char mMessageRemoveShape = -104;
static const char mMessageSetText     = -66;

static const char mMessageNonDeltaFrame = 2;
static const char mMessageServerExit = 3;
static const char mMessageKeepAlive = 12;

//network flags
static const char mCommandOriginX      = 1;
static const char mCommandOriginY      = 2;
static const char mCommandOriginZ      = 4;
static const char mCommandRotationX    = 8;
static const char mCommandRotationZ    = 16;
static const char mCommandScore        = 32;
static const char mCommandDeltaCode    = 64;


//ogre scene stuff
SceneNode*          mSceneNode;

int			mIndex;

//message
Message	mMessage; //is this all i need to get information over the internets?

//game
Game* mGame;

//abilitys
std::vector<BaseEntity*> mAbilityVector;	 //all abilitys for this shape
std::vector<BaseEntity*> mSteeringAbilityVector;         //all steering abilitys for this shape
std::vector<BaseEntity*> mComputerAbilityVector;         //all steering abilitys for this shape

Rotation* mRotation;
Move* 	  mMove;
Steering* mSteering;
Seek*     mSeek;
Avoid*    mAvoid;
Computer* mComputer;

//associated client if any
ClientRobust* mClient;

//mesh
int mMeshCode;

//collision
float mCollisionRadius;
float mCollisionRadiusSpawn;
bool  mCollidable;
int   mCollisionTimeout;
int   mCollisionTimeoutCounter;

//animation
bool mAnimated;

//ai
bool mIsComputer;

/******************************************************
*				METHODS
********************************************************/

//abilitys
void     addAbility(BaseEntity* ability);
void     addSteeringAbility(BaseEntity* ability);
void     addComputerAbility(BaseEntity* ability);

//create
void createShape(Ogre::Root* root, Vector3D* position);

//update
virtual void update();

//handle letter
virtual bool  handleLetter(Letter* letter);

void setValues();

void setText(std::string text);
void sendText();
std::string mText;
std::string mTextLast;

void insertIntoDB();

//collision
virtual void collision(Shape* shape);
Shape* mTimeoutShape;

	//delta move command
virtual int  setFlags();
virtual void addToMoveMessage(Message* message);
};

#endif
