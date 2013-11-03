#ifndef GAME_H
#define GAME_H

//Ogre
#include <OgreEntity.h>

//standard library
#include <vector>

#include "../../fsm/stateMachine.h"

template <class entity_type> class State;

/***************************************
*   		FORWARD DECLARATIONS
***************************************/
class ApplicationBreslin;
class ByteBuffer;
class Shape;

class Game 
{
public:
	
	Game(ApplicationBreslin* application);
	~Game();

/***************************************
*   		MEMBER VARIABLES
***************************************/
public:

//states
StateMachine<Game>* mStateMachine;

// constants
static const char mMessageKey       = 1;
static const char mMessageFrameTime = 2;

static const char mMessageFrame = 1;

static const char mMessageAddShape    = -103;
static const char mMessageRemoveShape = -104;
static const char mMessageSetText     = -66;

static const char mMessageQuitGame = -108;
static const char mMessageReportStandings = -94;


//applicationBreslin
ApplicationBreslin* mApplication;

//reset
virtual void reset();

//Shapes
std::vector<Shape*>* mShapeVector;	 //all shapes in the client world
std::vector<Shape*>* mShapeGhostVector;	 //all shapes in the client world's ghost 

//keys
int mKeyUp;
int mKeyDown;
int mKeyLeft;
int mKeyRight;
int mKeyCounterClockwise;
int mKeyClockwise;

//key input
int mKeyCurrent;   
int mKeyLast;

//sequences
signed short	mOutgoingSequence;

//time
float mRunNetworkTime;

public:
float mFrameTimeServer;

//scene
Ogre::Light* mPointLight;

Ogre::Entity* mFloor;
Ogre::SceneNode* mFloorNode;

Ogre::Entity* mNorthWall;
Ogre::SceneNode* mNorthWallNode;

Ogre::Entity* mEastWall;
Ogre::SceneNode* mEastWallNode;

Ogre::Entity* mSouthWall;
Ogre::SceneNode* mSouthWallNode;

Ogre::Entity* mWestWall;
Ogre::SceneNode* mWestWallNode;

Shape* mControlObject;

/***************************************
*			          METHODS
***************************************/
public:

void remove();

//update
virtual void processUpdate();

//keys
virtual void processMoveControls();

//network
virtual void sendByteBuffer();
virtual void checkByteBuffer(ByteBuffer* byteBuffer);

private:

//shape
virtual void addShape       (ByteBuffer* byteBuffer);
void removeShape    (ByteBuffer* byteBuffer);
Shape* getShape(int id);

//scene
void createScene();

//network
void readServerTick(ByteBuffer* byteBuffer);
void sendCommand();

void setStandings(ByteBuffer* byteBuffer);

};

#endif
