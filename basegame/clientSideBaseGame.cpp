#include "clientSideBaseGame.h"

#include "../client/clientSideClient.h"
#include "../game/clientSideGame.h"
#include "../network/clientSideNetwork.h"
#include "../shape/clientSideShape.h"

ClientSideBaseGame::ClientSideBaseGame(const char* serverIP)
{
	mServerIP = serverIP;
	rendertime		= 0.0f;
	mClientSideGame    = new ClientSideGame(this);
}

ClientSideBaseGame::~ClientSideBaseGame()
{
}

void ClientSideBaseGame::createScene(void)
{
	mClientSideGame->createScene();
}

//this is where i believe ogre wants keys to be processed...
bool ClientSideBaseGame::frameRenderingQueued(const Ogre::FrameEvent& evt)
{
   	bool ret = BaseApplication::frameRenderingQueued(evt);
	
	mClientSideGame->localGuy->updatePosition(evt.timeSinceLastFrame);

	if(mClientSideGame->mClientSideNetwork != NULL)
	{
		mClientSideGame->RunNetwork(evt.timeSinceLastFrame * 1000);
		rendertime = evt.timeSinceLastFrame;
	}
	
	mClientSideGame->CheckKeys();
	mClientSideGame->CheckKeys(1);
	mClientSideGame->RunLocalPredictions();
	mClientSideGame->MoveObjects();

    	
	return ret;
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
#define UNIX
int main(int argc, char *argv[])
#endif
{
	ClientSideBaseGame* mClientSideBaseGame;
#if OGRE_PLATFORM == OGRE_PLATFORM_WIN32
	mClientSideBaseGame = new ClientSideBaseGame(strCmdLine);
#else
	mClientSideBaseGame = new ClientSideBaseGame(argv[1]);
#endif
	try
	{
		mClientSideBaseGame->go();
        }
	catch( Ogre::Exception& e )
	{
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
