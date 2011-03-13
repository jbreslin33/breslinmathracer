#include "clientSideShape.h"
#include "../tdreamsock/dreamSock.h"

#define RUN_SPEED 300

ClientSideShape::ClientSideShape(Ogre::SceneManager* sceneMgr, std::string shapeName,int x, int y, int z,std::string meshName) : Shape(sceneMgr,shapeName,x,y,z)
{
	//character traits
    	mMeshName  = meshName;

	setupModel();
}

ClientSideShape::~ClientSideShape()
{
}

void ClientSideShape::setupModel()
{
	//LogString("settingUPModel");
	Ogre::LogManager::getSingletonPtr()->logMessage("*** ClientSideShape::setUpModel() ***");
	Shape::setupModel();
	Ogre::LogManager::getSingletonPtr()->logMessage("*** ClientSideShape::setUpModel() ***");

	//SceneNode* sn = NULL;
	Entity* entity = NULL;
	
	// create entity and attach mesh to it
	entity = mSceneManager->createEntity(mShapeName, mMeshName);
	mSceneNode->attachObject(entity);

}

void ClientSideShape::updatePosition(Real deltaTime)
{
 mGoalDirection = Vector3::ZERO;

        if (mKeyDirection != Vector3::ZERO)
        {

        	// calculate actually goal direction in world based on player's key directions
                mGoalDirection += mKeyDirection.z;
                mGoalDirection += mKeyDirection.x;
                mGoalDirection.y = 0;
                mGoalDirection.normalise();

                Quaternion toGoal = getSceneNode()->getOrientation().zAxis().getRotationTo(mGoalDirection);


                // move in current body direction (not the goal direction)
                getSceneNode()->translate(deltaTime * RUN_SPEED * mKeyDirection.z, 0, deltaTime * RUN_SPEED * mKeyDirection.x, Node::TS_WORLD);
	
		//lets also face him in direction he is moving.
		getSceneNode()->yaw(Degree(.2),Node::TS_WORLD);
	}
	mKeyDirection = Vector3::ZERO;
}
