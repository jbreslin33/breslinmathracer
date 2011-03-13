#include "clientSideNonNetworkedGame.h"
#include "../tdreamsock/dreamSock.h"

ClientSideNonNetworkedGame::ClientSideNonNetworkedGame()
{
}
ClientSideNonNetworkedGame::~ClientSideNonNetworkedGame()
{
}

void ClientSideNonNetworkedGame::createScene(void)
{
    mSceneMgr->setAmbientLight(Ogre::ColourValue(0.25, 0.25, 0.25));

    Ogre::Light* pointLight = mSceneMgr->createLight("pointLight");
    pointLight->setType(Ogre::Light::LT_POINT);
    pointLight->setPosition(Ogre::Vector3(250, 150, 250));
    pointLight->setDiffuseColour(Ogre::ColourValue::White);
    pointLight->setSpecularColour(Ogre::ColourValue::White);

	AddClient(1,1,"hello");
}

//**************************************************************
//BEGIN NETWORK CODE FUNCTIONS
//************************************************
void ClientSideNonNetworkedGame::StartConnection(char* serverIP)
{
}

void ClientSideNonNetworkedGame::gameLoop()
{
	CheckKeys();
	MovePlayer();
	Ogre::WindowEventUtilities::messagePump();
	keepRunning = mRoot->renderOneFrame();
}