
//log
#include "../clientside/tdreamsock/dreamSockLog.h"

//app
#include "../clientside/application/partido/applicationPartido.h"


/******************** MAIN ***********************/
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
       
	StartLogConsole();
       
	ApplicationPartido* application = new ApplicationPartido(strCmdLine,30001);
#else
        ApplicationPartido* application = new ApplicationPartido(argv[1],30001);
#endif
        try
	{
		while (!application->mExit)
		{
       	    		application->processUpdate();
		}
		return 0;
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

