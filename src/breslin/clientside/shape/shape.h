#ifndef SHAPE_H
#define SHAPE_H

/**********************************
*          INCLUDES
**********************************/
//standard library
#include <string>
#include <vector>

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

/**********************************
*          FORWARD DECLARATIONS
**********************************/
class ApplicationBreslin;
class Vector3D;
class Game;
class Command;
class ByteBuffer;
class ObjectTitle;
class Rotation;
class Move;
class AbilityAnimationOgre;

class Shape
{
public:

Shape(ApplicationBreslin* application, ByteBuffer* byteBuffer, bool isGhost);
~Shape();

/**************************************************
*			VARIABLES
**************************************************/
public:

//applicationBreslin
ApplicationBreslin* mApplication;

//id
int   mIndex;
std::string mStringUsername;
std::string mText;
std::string mTextLast;

//speed
float mSpeed;
float mSpeedMax; 

Vector3D* mVelocity;

//this is used to rotate to and for debugging. it goes right to lates serverFrame from net.
Shape* mGhost;

//commands
Command* mServerCommandLast;
Command* mServerCommandCurrent;					// the latest frame from server
Command* mCommandToRunOnShape;

//ogre scene stuff
Entity*             mEntity;

//billboard
ObjectTitle* mObjectTitle;
std::string  mObjectTitleString;


int mLocal;

private:

//constants
static const char mCommandOriginX      = 1;
static const char mCommandOriginY      = 2;
static const char mCommandOriginZ      = 4;
static const char mCommandRotationX    = 8;
static const char mCommandRotationZ    = 16;
static const char mCommandScore        = 32;
static const char mCommandDeltaCode    = 64;

//spawn orientation
Vector3D* mSpawnPosition;
Vector3D* mSpawnRotation;

//mesh
int         mMeshCode;
std::string mMeshName;
public:

//name
std::string mName;

//rotation
Rotation* mRotation;

//move
Move* mMove;

//anim
AbilityAnimationOgre* mAbilityAnimationOgre;

private:
//animate
bool mAnimate;

//ghost
bool mIsGhost;

//scale
float mScale;

//this is your pointer to move shape, really all you need.
SceneNode*          mSceneNode;

/**************************************************
*			METHODS
**************************************************/

public:

void setText(ByteBuffer* byteBuffer);
void setText(std::string string);

//ogre scene node
SceneNode*  getSceneNode() { return mSceneNode; }

//process ByteBuffers
virtual void processDeltaByteBuffer(ByteBuffer* byteBuffer);

//setting position
void     setPosition          (Vector3D                  );
void     setPosition          (float x, float y, float z );

//setting rotation
void    setRotation(Vector3D* vector3D) ;

//getting position
Vector3D* getPosition          (                          ) ;
Vector3D* getRotation          (                          ) ;

//title
void     appendToTitle        (std::string appendage     ) ;
void     appendToTitle        (int appendage             ) ;
void     setTitle (std::string title);

//interpolation
void interpolateTick(float renderTime);

//ghost
void moveGhostShape();

//movement
void yaw        (float amountToYaw, bool converToDegree   );

//title
void setupTitle();
void clearTitle() ;

protected:

//shape
void spawnShape(Vector3D* position);

//debugging
void checkExtents(Vector3D min);

// Parse ByteBuffers
virtual int parseDeltaByteBuffer(ByteBuffer *byteBuffer);


//size
void     scale                (Vector3D                  ) ;

public:
//visibility
void     setVisible           (bool b                    ) ;

private:

//title
void     drawTitle            (                          ) ;

//mesh
std::string getMeshString(int meshCode);

//translate
void        translate            (Vector3D* translateVector, int perspective) ;

//process ByteBuffers
void processSpawnByteBuffer(ByteBuffer* byteBuffer);

// Parse ByteBuffers
void parseSpawnByteBuffer(ByteBuffer* byteBuffer);

void createColourCube();
};

#endif
