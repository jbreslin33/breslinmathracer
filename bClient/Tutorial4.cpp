//#include "Tutorial4.h"
#include "common.h"
#include "ClientSinbadCharacterController.h"

CArmyWar* game;
bool keys[256];


void CArmyWar::createPlayer(int index)
{
	/*
	Ogre::Entity* NinjaEntity = mSceneMgr->createEntity("ninja.mesh");
	//Ogre::Entity* ogreHead = mSceneMgr->createEntity("Head", "ogrehead.mesh");
	Ogre::SceneNode* node = mSceneMgr->getRootSceneNode()->createChildSceneNode();
    node->attachObject(NinjaEntity);
    //node->setPosition(Ogre::Vector3(10, 10, 10));
*/
    clientData *client = game->GetClientPointer(index);

	//client->character->mSceneMgr->getCamera();
	client->character = new SinbadCharacterController(mSceneMgr->getCamera("PlayerCam"), "Sinbad" + index);

	//client->myNode = node;
}
//-------------------------------------------------------------------------------------
void CArmyWar::createScene(void)
{
    mSceneMgr->setAmbientLight(Ogre::ColourValue(0.75, 0.75, 0.75));
 
    Ogre::Light* pointLight = mSceneMgr->createLight("pointLight");
    pointLight->setType(Ogre::Light::LT_POINT);
    pointLight->setPosition(Ogre::Vector3(250, 150, 250));
    pointLight->setDiffuseColour(Ogre::ColourValue::White);
    pointLight->setSpecularColour(Ogre::ColourValue::White);
}
//-------------------------------------------------------------------------------------
bool CArmyWar::processUnbufferedInput(const Ogre::FrameEvent& evt)
{
	//LogString("processUnbufferedInput");
 
    if (mKeyboard->isKeyDown(OIS::KC_I)) // Forward
    {
		//LogString("isKeyDown");
		keys[VK_UP] = TRUE;
		//localClient->character->simulateKeyDown(OIS::KC_I);
    }
	else
	{
        keys[VK_UP] = FALSE;
	}
    if (mKeyboard->isKeyDown(OIS::KC_K)) // Backward
    {
		keys[VK_DOWN] = TRUE;
    }
	else
	{
        keys[VK_DOWN] = FALSE;
	}

    if (mKeyboard->isKeyDown(OIS::KC_J)) // Left - yaw or strafe
    {
		keys[VK_LEFT] = TRUE;
    }
	else
	{
        keys[VK_LEFT] = FALSE;
	}
    if (mKeyboard->isKeyDown(OIS::KC_L)) // Right - yaw or strafe
    {
		keys[VK_RIGHT] = TRUE;
    }
	else
	{
        keys[VK_RIGHT] = FALSE;
	}
         
    return true;
}
//-------------------------------------------------------------------------------------
bool CArmyWar::frameRenderingQueued(const Ogre::FrameEvent& evt)
{

	//LogString("frameRenderingQueued");
    bool ret = BaseApplication::frameRenderingQueued(evt);

	if (localClient)
		localClient->character->addTime(evt.timeSinceLastFrame);
 
    //if(!processUnbufferedInput(evt)) return false;

	if(game != NULL)
	{
		game->RunNetwork(evt.timeSinceLastFrame * 1000);
		game->CheckKeys();
		//game->Frame();
	}

	
 
    return ret;
}

bool CArmyWar::keyPressed(const OIS::KeyEvent& evt)
{

	LogString("keyPressed");

	//BaseApplication::keyPressed(evt);       
    // relay input events to character controller
    //if (!mTrayMgr->isDialogVisible()) 
	//mChara->injectKeyDown(evt);
	localClient->character->injectKeyDown(evt);
    //return BaseApplication::keyPressed(evt);
	return 1;
}

bool CArmyWar::keyReleased(const OIS::KeyEvent& evt)
{
	// relay input events to character controller
    //if (!mTrayMgr->isDialogVisible()) 
	//mChara->injectKeyUp(evt);
	localClient->character->injectKeyUp(evt);
    //return BaseApplication::keyReleased(evt);
	return 1;
}
//-------------------------------------------------------------------------------------
 
 
#if OGRE_PLATFORM == OGRE_PLATFORM_WIN32
#define WIN32_LEAN_AND_MEAN
#include "windows.h"
#endif
 
#ifdef __cplusplus
extern "C" {
#endif
 
#if OGRE_PLATFORM == OGRE_PLATFORM_WIN32
    INT WINAPI WinMain( HINSTANCE hInst, HINSTANCE, LPSTR strCmdLine, INT )
#else
    int main(int argc, char *argv[])
#endif
    {
        // Create application object
         game = new CArmyWar;

		//game = new CArmyWar;
	    game->StartConnection();

		StartLogConsole();

 
        try {
            game->go();
        } catch( Ogre::Exception& e ) {
#if OGRE_PLATFORM == OGRE_PLATFORM_WIN32
            MessageBox( NULL, e.getFullDescription().c_str(), "An exception has occured!", MB_OK | MB_ICONERROR | MB_TASKMODAL);
#else
            std::cerr << "An exception has occured: " <<
                e.getFullDescription().c_str() << std::endl;
#endif
        }
 
        return 0;
    }
 
#ifdef __cplusplus
}
#endif