//header
#include "game.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//applicationBreslin
#include "../application/applicationBreslin.h"

//network
#include "../network/network.h"

//shape
#include "../shape/shape.h"

//bytebuffer
#include "../bytebuffer/byteBuffer.h"

//ObjectTitle
#include "../billboard/objectTitle.h"

#include "../../fsm/stateMachine.h"

template <class entity_type> class State;

#include "states/gameStates.h"

//rotation
#include "../rotation/rotation.h"

//move
#include "../move/move.h"

/***************************************
*			          CONSTRUCTORS
***************************************/
Game::Game(ApplicationBreslin* application)
{
	mApplication = application;

	mShapeVector = new std::vector<Shape*>();
	mShapeGhostVector = new std::vector<Shape*>();

	//keys
	mKeyUp = 1;
	mKeyDown = 2;
	mKeyLeft = 4;
	mKeyRight = 8;
	mKeyCounterClockwise = 16;
	mKeyClockwise = 32;

	//input
	mKeyCurrent = 0;
	mKeyLast = 0;
	
	mControlObject = NULL;

	//time
    	mRunNetworkTime = 0.0f;
	mFrameTimeServer = 0.0f;

	//set Camera
	// Position it at 500 in Z direction
    	mApplication->getCamera()->setPosition(Ogre::Vector3(0,20,20));
    	// Look back along -Z
    	mApplication->getCamera()->lookAt(Ogre::Vector3(0,0,0));
    	mApplication->getCamera()->setNearClipDistance(5);

	createScene();

	// states
        mStateMachine =  new StateMachine<Game>(this);
        mStateMachine->setCurrentState      (PLAY_GAME::Instance());
        mStateMachine->setPreviousState     (PLAY_GAME::Instance());
        mStateMachine->setGlobalState       (NULL);
}

Game::~Game()
{
}

void Game::reset()
{
	//set mKeyArray to false
        for (int i = 0; i < 128; i++)
        {
                mApplication->mKeyArray[i] = false;
        }
        mKeyCurrent = 0;
}
void Game::processMoveControls()
{
       	//process input
        mKeyCurrent = 0;

        //UP
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_W))
        {
                mApplication->mKeyArray[119] = true;
                mKeyCurrent |= mKeyUp;
        }
        else
        {
                mApplication->mKeyArray[119] = false;
        }

        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_UP))
        {
                mApplication->mKeyArray[119] = true;
                mKeyCurrent |= mKeyUp;
        }
        else
        {
                mApplication->mKeyArray[119] = false;
        }

        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_NUMPAD8))
        {
                mApplication->mKeyArray[119] = true;
                mKeyCurrent |= mKeyUp;
        }
        else
        {
                mApplication->mKeyArray[119] = false;
        }
        
	//DOWN
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_S))
        {
                mApplication->mKeyArray[115] = true;
                mKeyCurrent |= mKeyDown;
        }
        else
        {
                mApplication->mKeyArray[115] = false;
        }
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_DOWN))
        {
                mApplication->mKeyArray[115] = true;
                mKeyCurrent |= mKeyDown;
        }
        else
        {
                mApplication->mKeyArray[115] = false;
        }
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_NUMPAD2))
        {
                mApplication->mKeyArray[115] = true;
                mKeyCurrent |= mKeyDown;
        }
        else
        {
                mApplication->mKeyArray[115] = false;
        }
 	
	//LEFT
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_A))
        {
                mApplication->mKeyArray[97] = true;
                mKeyCurrent |= mKeyLeft;
        }
        else
        {
                mApplication->mKeyArray[97] = false;
        }
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_LEFT))
        {
                mApplication->mKeyArray[97] = true;
                mKeyCurrent |= mKeyLeft;
        }
        else
        {
                mApplication->mKeyArray[97] = false;
        }
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_NUMPAD4))
        {
                mApplication->mKeyArray[97] = true;
                mKeyCurrent |= mKeyLeft;
        }
        else
        {
                mApplication->mKeyArray[97] = false;
        }

        //RIGHT
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_D))
        {
                mApplication->mKeyArray[100] = true;
                mKeyCurrent |= mKeyRight;
        }
        else
        {
                mApplication->mKeyArray[100] = false;
        }
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_RIGHT))
        {
                mApplication->mKeyArray[100] = true;
                mKeyCurrent |= mKeyRight;
        }
        else
        {
                mApplication->mKeyArray[100] = false;
        }
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_NUMPAD6))
        {
                mApplication->mKeyArray[100] = true;
                mKeyCurrent |= mKeyRight;
        }
        else
        {
                mApplication->mKeyArray[100] = false;
        }
   	
	//COUNTERCLOCKWISE
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_Z))
        {
                mApplication->mKeyArray[122] = true;
                mKeyCurrent |= mKeyCounterClockwise;
        }
        else
        {
                mApplication->mKeyArray[122] = false;
        }

        //CLOCKWISE
        if (mApplication->getKeyboard()->isKeyDown(OIS::KC_X))
        {
                mApplication->mKeyArray[120] = true;
                mKeyCurrent |= mKeyClockwise;
        }
        else
        {
                mApplication->mKeyArray[120] = false;
        }

        //network outgoing
        sendByteBuffer();


}

//i am guessing i am not clearing the shape arrray???
void Game::remove()
{
/*
        if (mShapeVector)
        {
                for (unsigned int i = 0; i < mShapeVector->size(); i++)
                {
			Shape* shape = mShapeVector->at(i);

        		//delete objectTitles
			if (shape)
			{
        			delete shape->mGhost->mObjectTitle;
        			delete shape->mObjectTitle;
        			delete shape->mGhost;
        			delete shape;
			}
                }
        }
	
	mApplication->getSceneManager()->destroyAllEntities();
        mApplication->mSceneMgr->destroyLight(mPointLight);

	//clear the vectors....	
	mShapeVector->clear();
	mShapeGhostVector->clear();
*/
}

/*********************************
		Update
**********************************/
void Game::processUpdate()
{
	mStateMachine->update();

	for (unsigned int i = 0; i < mShapeVector->size(); i++)
	{
		mShapeVector->at(i)->interpolateTick(mApplication->getRenderTime());
	}
}

/*********************************
*		SHAPE
**********************************/
void Game::addShape(ByteBuffer* byteBuffer)
{
	byteBuffer->BeginReading();
        byteBuffer->ReadByte(); //should read -103 to add a shape..
        int local  =    byteBuffer->ReadByte();
        int index  =    byteBuffer->ReadShort();

	bool exists = false;	
	for (unsigned int i = 0; i < mShapeVector->size(); i++)
	{
		if (mShapeVector->at(i)->mIndex == index)
		{
			exists = true;
			if (local)
			{
				mShapeVector->at(i)->mLocal = true;
			}
			else
			{
				mShapeVector->at(i)->mLocal = false;
			}
		}
	}
	
	if (!exists)
	{
		Shape* shape = new Shape(mApplication,byteBuffer,false);  //you should just need to call this...
		shape->mRotation = new Rotation(shape);
		shape->mMove = new Move(shape);

		//put shape and ghost in game vectors so they can be looped and game now knows of them.
		mShapeVector->push_back(shape);
		mShapeGhostVector->push_back(shape->mGhost);
	}
}

void Game::removeShape(ByteBuffer* byteBuffer)
{
	//get the index which is the mIndex...
	int index = byteBuffer->ReadByte();
	
	//let's loop so we can also get index of vector where shape resides so we can erase it as well as deleting other parts of shape.
	for (unsigned int i = 0; i < mShapeVector->size(); i++)
	{
		if (mShapeVector->at(i)->mIndex == index)
		{
			Shape* shape = mShapeVector->at(i);
			
			//delete objectTitles
 			delete shape->mGhost->mObjectTitle;
 			delete shape->mObjectTitle;

			//delete entities by name
 			mApplication->getSceneManager()->destroyEntity(shape->mGhost->mName);
 			mApplication->getSceneManager()->destroyEntity(shape->mName);

			//erase shapes from vectors
			mShapeVector->erase(mShapeVector->begin()+i);
			mShapeGhostVector->erase(mShapeGhostVector->begin()+i);
		}
	}
}

/*
        if (mShapeVector)
        {
                for (unsigned int i = 0; i < mShapeVector->size(); i++)
                {
                        delete mShapeVector->at(i);
                        delete mShapeGhostVector->at(i);
                }
        }
*/

Shape* Game::getShape(int id)
{
	Shape* shape = NULL;

	for (unsigned int i = 0; i < mShapeVector->size(); i++)
	{
		Shape* curShape = mShapeVector->at(i);
		if (curShape->mIndex == id)
		{
			shape = curShape;
		}
	}

	if(!shape)
	{
		return NULL;
	}
	else
	{
		return shape;
	}
}

void Game::createScene()
{
        mApplication->mSceneMgr->setAmbientLight(Ogre::ColourValue(0.75, 0.75, 0.75));

        mPointLight = mApplication->mSceneMgr->createLight("pointLight");
        mPointLight->setType(Ogre::Light::LT_POINT);
        mPointLight->setPosition(Ogre::Vector3(250, 150, 250));
        mPointLight->setDiffuseColour(Ogre::ColourValue::White);
        mPointLight->setSpecularColour(Ogre::ColourValue::White);

	// create a floor mesh resource
        MeshManager::getSingleton().createPlane("floor", ResourceGroupManager::DEFAULT_RESOURCE_GROUP_NAME,
               Plane(Vector3::UNIT_Y, 0), 500, 500, 10, 10, true, 1, 10, 10, Vector3::UNIT_Z);

        mFloor = mApplication->mSceneMgr->createEntity("Floor", "floor");
        mFloor->setMaterialName("Examples/Rockwall");
        mFloor->setCastShadows(false);
	mFloorNode = mApplication->mSceneMgr->getRootSceneNode()->createChildSceneNode();
	mFloorNode->attachObject(mFloor);
	mFloorNode->setPosition(0,-13.0f,0);


	// create a northwall mesh resource
        MeshManager::getSingleton().createPlane("northwall", ResourceGroupManager::DEFAULT_RESOURCE_GROUP_NAME,
               Plane(Vector3::UNIT_Z, 0), 500, 50, 10, 10, true, 1, 10, 10, Vector3::UNIT_Y);

        mNorthWall = mApplication->mSceneMgr->createEntity("Northwall", "northwall");
        mNorthWall->setMaterialName("Examples/Rockwall");
        mNorthWall->setCastShadows(false);
	mNorthWallNode = mApplication->mSceneMgr->getRootSceneNode()->createChildSceneNode();
	mNorthWallNode->attachObject(mNorthWall);
	mNorthWallNode->setPosition(250,0,0);

	// create a eastwall mesh resource
        MeshManager::getSingleton().createPlane("eastwall", ResourceGroupManager::DEFAULT_RESOURCE_GROUP_NAME,
               Plane(Vector3::UNIT_X, 0), 500, 50, 10, 10, true, 1, 10, 10, Vector3::UNIT_Y);

        mEastWall = mApplication->mSceneMgr->createEntity("Eastwall", "eastwall");
        mEastWall->setMaterialName("Examples/Rockwall");
        mEastWall->setCastShadows(false);
	mEastWallNode = mApplication->mSceneMgr->getRootSceneNode()->createChildSceneNode();
	mEastWallNode->attachObject(mEastWall);
	mEastWallNode->setPosition(500,0,250);



}

/*********************************
		Network
**********************************/

void Game::checkByteBuffer(ByteBuffer* byteBuffer)
{
	byteBuffer->BeginReading();

        int type = byteBuffer->ReadByte();

        switch(type)
        {
        	case mMessageAddShape:
                	addShape(byteBuffer);
                        break;

                case mMessageRemoveShape:
                 	removeShape(byteBuffer);
                        break;

                case mMessageFrame:
                       	if (!mApplication->mNetwork->mIgnorePacket)
			{
                        	readServerTick(byteBuffer);
                        }
                        break;
		case mMessageReportStandings:
 			setStandings(byteBuffer);
                        break;
		case mMessageSetText:
        		int index = byteBuffer->ReadShort();
   			for (unsigned int i = 0; i < mShapeVector->size(); i++)
                	{
                        	Shape* shape = mShapeVector->at(i);
				if (shape->mIndex == index)
				{
					shape->setText(byteBuffer);	
				}
			}
			break;
	}
}

void Game::readServerTick(ByteBuffer* byteBuffer)
{
        // Skip sequences
        byteBuffer->ReadShort();
        mFrameTimeServer = byteBuffer->ReadByte();

        while (byteBuffer->getReadCount() <= byteBuffer->GetSize())
        {
                mApplication->mDetailsPanel->setParamValue(11, Ogre::StringConverter::toString(byteBuffer->GetSize()));

                int id = byteBuffer->ReadByte();

                Shape* shape = NULL;
                shape = getShape(id);

		if (shape)
                {
                        shape->processDeltaByteBuffer(byteBuffer);
                }
                else
                {
                        //LogString("INVALID SHAPE ID");
                }
        }
}

void Game::sendByteBuffer()
{
	mRunNetworkTime += mApplication->getRenderTime() * 1000.0f;

    	// Framerate is too high
    	if(mRunNetworkTime > (1000 / 60))
    	{
        	// Build delta-compressed move command
        	int flags = 0;

        	//if key has not been changed return having done nothing 
        	if(mKeyLast != mKeyCurrent)
        	{
                	flags |= mMessageKey;
        	}
		else
		{
			return;
		}

		//create byteBuffer
		ByteBuffer* byteBuffer = new ByteBuffer();

		//WRITE: type
		byteBuffer->WriteByte(mMessageFrame);

                //WRITE: key
               	byteBuffer->WriteByte(mKeyCurrent);

        	//set 'last' commands for diff
        	mKeyLast = mKeyCurrent;

        	// Send the packet
        	mApplication->mNetwork->send(byteBuffer);

		mRunNetworkTime = 0.0f;
    	}
}

void Game::setStandings(ByteBuffer* byteBuffer)
{
        mApplication->mStringReset.clear();

        int length = byteBuffer->ReadByte();
        for (int i = 0; i < length; i++)
        {
                char c =  byteBuffer->ReadByte();
                mApplication->mStringReset.append(1,c);
        }
        if (mApplication->mLabelReset && mApplication->mStringReset.size() > 0)
        {
                mApplication->mLabelReset->setCaption(mApplication->mStringReset);
		LogString("got someting for standings");
        }
        else
        {
                LogString("no label or no string for standings");
        }
}

