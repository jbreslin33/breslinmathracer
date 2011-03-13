#include "soloGame.h"
#include "networkedGame.h"
#include "polyNetworkedGame.h"

#include <iostream>
#include <string>
using namespace std;

Game* game;


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

#if OGRE_PLATFORM == OGRE_PLATFORM_WIN32
		//jim's crazy ass way to change game types while dealing with c++'s annoying way of dealing with chars.
		char *ip;
		char strIP[15];
		ip = strIP;
		
		//NetworkedGame
		if (strCmdLine[0] == '1')
		{
		StartLog();
			game = new SoloGame();

		}

		//NetworkedGame
		if (strCmdLine[0] == '2')
		{
			game = new NetworkedGame;
			int i = 0;
			while(strCmdLine[i] != 'E')
			{
				ip[i] = strCmdLine[i + 2];
				i++;

			}
			game->StartConnection(ip);
		}

		//NetworkedGame
		if (strCmdLine[0] == '3')
		{
			game = new PolyNetworkedGame;
			int i = 0;
			while(strCmdLine[i] != 'E')
			{
				ip[i] = strCmdLine[i + 2];
				i++;

			}
			game->StartConnection(ip);
		}
		


		
#else
		//jim's crazy ass way to change game types while dealing with c++'s annoying way of dealing with chars.
		string gameMode;
		gameMode = argv[1];
		//SoloGame
		if (gameMode == "1")
		{
			std::cout << "heredfddfdf";
			game = new SoloGame;
		}

		//NetworkedGame
		if (gameMode == "2")
		{
			//game = new NetworkedGame;
		}

		//PolyNetworkedGame
		if (gameMode == "3")
		{
			game = new PolyNetworkedGame;
			game->StartConnection(argv[2]);

		}

#endif


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
