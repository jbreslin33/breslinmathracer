//#include "Tutorial4.h"
#include "client.h"
CArmyWar* game;
bool keys[256];


void CArmyWar::createPlayer(int index)
{
	Ogre::Entity* NinjaEntity = mSceneMgr->createEntity("ninja.mesh");
	//Ogre::Entity* ogreHead = mSceneMgr->createEntity("Head", "ogrehead.mesh");
	Ogre::SceneNode* node = mSceneMgr->getRootSceneNode()->createChildSceneNode();
    node->attachObject(NinjaEntity);
    //node->setPosition(Ogre::Vector3(10, 10, 10));

    clientData *client = game->GetClientPointer(index);

	client->myNode = node;
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
 
    if (mKeyboard->isKeyDown(OIS::KC_I)) // Forward
    {
		keys[VK_UP] = true;
    }
	else
	{
        keys[VK_UP] = false;
	}
    if (mKeyboard->isKeyDown(OIS::KC_K)) // Backward
    {
		keys[VK_DOWN] = true;
    }
	else
	{
        keys[VK_DOWN] = false;
	}

    if (mKeyboard->isKeyDown(OIS::KC_J)) // Left - yaw or strafe
    {
		keys[VK_LEFT] = true;
    }
	else
	{
        keys[VK_LEFT] = false;
	}
    if (mKeyboard->isKeyDown(OIS::KC_L)) // Right - yaw or strafe
    {
		keys[VK_RIGHT] = true;
    }
	else
	{
        keys[VK_RIGHT] = false;
	}
         
    return true;
}
//-------------------------------------------------------------------------------------
bool CArmyWar::frameRenderingQueued(const Ogre::FrameEvent& evt)
{
    bool ret = BaseApplication::frameRenderingQueued(evt);
 
    if(!processUnbufferedInput(evt)) return false;

	if(game != NULL)
	{
		game->RunNetwork(evt.timeSinceLastFrame * 1000);
		game->CheckKeys();
		//game->Frame();
	}
 
    return ret;
}
//-------------------------------------------------------------------------------------
bool CArmyWar::keyPressed( const OIS::KeyEvent &arg )
{
    Ogre::LogManager::getSingletonPtr()->logMessage("*** keyPressed CArmyWar n***");
	return true;
} 
 
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
