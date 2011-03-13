#include "networkedGame.h"

NetworkedGame* game;

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
         game = new NetworkedGame;

#if OGRE_PLATFORM == OGRE_PLATFORM_WIN32
	//mClientSideNetworkedGame = new ClientSideNetworkedGame(strCmdLine);
		 game->StartConnection(strCmdLine);
#else
	//mClientSideNetworkedGame = new ClientSideNetworkedGame(argv[1]);
		 game->StartConnection(argv[1]);
#endif

		//game = new NetworkedGame;
	    //game->StartConnection();

#if OGRE_PLATFORM == OGRE_PLATFORM_WIN32
		StartLogConsole();
#endif


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