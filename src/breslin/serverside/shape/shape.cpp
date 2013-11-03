//parent
#include "shape.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//network
#include "../network/network.h"

//game
#include "../game/game.h"

//client
#include "../../serverside/client/robust/clientRobust.h"

//server
#include "../../serverside/server/server.h"

//rotation
#include "../rotation/rotation.h"

//move
#include "../move/move.h"

//steering
#include "../steering/steering.h"

//seek
#include "../seek/seek.h"

//avoid
#include "../avoid/avoid.h"

//ai
#include "../computer/computer.h"

//math
#include "../../math/vector3D.h"

#include <iostream>

#include <string>

Shape::Shape(unsigned int index, Game* game, ClientRobust* client, Vector3D* position, Vector3D* velocity, Vector3D* rotation, Ogre::Root* root,
			 bool animated ,bool collidable, float collisionRadius, int meshCode, bool computer)  : BaseEntity(BaseEntity::getNextValidID())
{
 	//mPosition = position;
	mIndex  = index;

	//game
	mGame = game;

	//client -- if this shape has associated with it
	mClient = client;

	//mesh
	mMeshCode = meshCode;

	//collision
	mCollisionRadius = collisionRadius;
	mCollisionRadiusSpawn = collisionRadius * 2;
	mCollidable = collidable;
	mCollisionTimeout = 0;
	mCollisionTimeoutCounter = 0;

	//animated
	mAnimated = animated;

	//ai -- bool
	mIsComputer = computer;

	createShape(root,position);

	//add abilitys
	
	mComputer = new Computer(this);
	addComputerAbility(mComputer);	

	mSteering = new Steering(this);

	mSeek = new Seek(this);
	addSteeringAbility(mSeek);	
	
	mAvoid = new Avoid(this);
	addSteeringAbility(mAvoid);	
	
	mRotation = new Rotation(this);
	addAbility(mRotation);	
	
	mMove = new Move(this);
	addAbility(mMove);	

	//register with shape vector
	mGame->mShapeVector.push_back(this);

	//timeout shape
	mTimeoutShape = NULL;
}

Shape::~Shape()
{
	delete mComputer;
	delete mSeek;
	delete mAvoid;
	delete mRotation;
	delete mMove;
	delete mSceneNode;
}

void Shape::createShape(Ogre::Root* root, Vector3D* position)
{
	//create ogre shape
	Ogre::SceneManager* mSceneManager = root->createSceneManager(Ogre::ST_GENERIC);

	//create node to represent shape on server and pass in spawnPoint
	mSceneNode = mSceneManager->getRootSceneNode()->createChildSceneNode(position->convertToVector3());
}

void Shape::collision(Shape* shape)
{
  	float x = mMove->mPositionBeforeCollision->x;
        float z = mMove->mPositionBeforeCollision->z;
        mSceneNode->setPosition(x,0.0,z);
}

void Shape::setValues()
{
	
}

void Shape::addAbility(BaseEntity* ability)
{
	mAbilityVector.push_back(ability);	
}

void Shape::addSteeringAbility(BaseEntity* ability)
{
        mSteeringAbilityVector.push_back(ability);      
}

void Shape::addComputerAbility(BaseEntity* ability)
{
        mComputerAbilityVector.push_back(ability);      
}

bool Shape::handleLetter(Letter* letter)
{
        //return mStateMachine->handleLetter(letter);
	return false;
}

void Shape::update()
{
	mMove->mPositionBeforeCollision->x = mSceneNode->getPosition().x;
    	mMove->mPositionBeforeCollision->y = mSceneNode->getPosition().y;
    	mMove->mPositionBeforeCollision->z = mSceneNode->getPosition().z;
        
	for (unsigned int i = 0; i < mComputerAbilityVector.size(); i++)
        {
                mComputerAbilityVector.at(i)->update();
        }
	
        for (unsigned int i = 0; i < mSteeringAbilityVector.size(); i++)
        {
                mSteeringAbilityVector.at(i)->update();
        }

	//process ticks on abilitys
	for (unsigned int i = 0; i < mAbilityVector.size(); i++)
	{
		mAbilityVector.at(i)->update();
	}
    
   
	if (mText.compare(mTextLast) != 0)
	{
		sendText();				
		mTextLast = mText;
	}
}

int Shape::setFlags()
{
	int flags = 0;

	//Origin
	if(mSceneNode->getPosition().x != mMove->mPositionLast->x)
	{
		flags |= mCommandOriginX;
	}
	if(mSceneNode->getPosition().y != mMove->mPositionLast->y)
	{
		flags |= mCommandOriginY;
	}
	if(mSceneNode->getPosition().z != mMove->mPositionLast->z)
	{
		flags |= mCommandOriginZ;
	}

	//Rotation
	if(mRotation->mRotation->x != mRotation->mRotationLast->x)
	{
		flags |= mCommandRotationX;
	}
	if(mRotation->mRotation->z != mRotation->mRotationLast->z)
	{
		flags |= mCommandRotationZ;
	}

	//score
	if (mClient->mScore != mClient->mScoreLast)
	{
		flags |= mCommandScore;
	}
        
	if (mClient->mDeltaCode != mClient->mDeltaCodeLast)
        {
		if (mClient->mDeltaCode == mGame->mServer->mMessageGameStart)
		{
			LogString("GAME START FOUND!!!!");
		}
                flags |= mCommandDeltaCode;
        }

	return flags;
}

void Shape::addToMoveMessage(Message* message)
{
	int flags = setFlags();
	message->WriteByte(mIndex);

	// Flags
	message->WriteByte(flags);  

	//Origin
	if(flags & mCommandOriginX)
	{
		message->WriteFloat(mSceneNode->getPosition().x);
	}
	if(flags & mCommandOriginY)
	{
		message->WriteFloat(mSceneNode->getPosition().y);
	}
	if(flags & mCommandOriginZ)
	{
		message->WriteFloat(mSceneNode->getPosition().z);
	}

	//Rotation
	if(flags & mCommandRotationX)
	{
		message->WriteFloat(mRotation->mRotation->x);
	}
	if(flags & mCommandRotationZ)
	{
		message->WriteFloat(mRotation->mRotation->z);
	}

	//score
	if(flags & mCommandScore)
	{
		message->WriteByte(mClient->mScore);
	}	
        
	if(flags & mCommandDeltaCode)
        {
                message->WriteByte(mClient->mDeltaCode);
        }
}

//to everyone
void Shape::setText(std::string text)
{
	mText.clear();
	mText.append(text);
}

void Shape::sendText()
{
	if (!mGame)
	{
		return;
	}

 	mMessage.Init(mMessage.outgoingData, sizeof(mMessage.outgoingData));
       	mMessage.WriteByte(mMessageSetText); // add type
	
	//index id
	mMessage.WriteShort(mIndex);

	//text
       	int length = mText.length();  
       	mMessage.WriteByte(length); //send length

       	//loop thru length and write it
	LogString("length:%d",length);
       	for (int b=0; b < length; b++)
       	{
	//	LogString("loop:%d",b);
	//	LogString("mText:%c" + mText.at(b));
              	mMessage.WriteByte(mText.at(b));
       	}

	//LogString("Shape::sendText");	
       	mGame->mServer->mNetwork->broadcast(&mMessage);
}
