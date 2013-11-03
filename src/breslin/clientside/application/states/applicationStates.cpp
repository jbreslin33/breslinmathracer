//header
#include "applicationStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//game
#include "../../application/applicationBreslin.h"

//game
#include "../../game/game.h"

//shape
#include "../../shape/shape.h"

//ability
#include "../applicationBreslin.h"

//utility
#include <math.h>

//command
#include "../../command/command.h"

//byte buffer
#include "../../bytebuffer/byteBuffer.h"

//network
#include "../../network/network.h"


/******************** GLOBAL_APPLICATION *****************/

GLOBAL_APPLICATION* GLOBAL_APPLICATION::Instance()
{
  static GLOBAL_APPLICATION instance;
  return &instance;
}
void GLOBAL_APPLICATION::enter(ApplicationBreslin* application)
{

}
void GLOBAL_APPLICATION::execute(ApplicationBreslin* application)
{
  	if (application->mSetup)
        {
                //check network
                application->checkForByteBuffer();

                //graphics
                application->runGraphics();
        }

}
void GLOBAL_APPLICATION::exit(ApplicationBreslin* application)
{
}

bool GLOBAL_APPLICATION::onLetter(ApplicationBreslin* application, Letter* letter)
{
        return true;
}

/******************** INIT_APPLICATION *****************/

INIT_APPLICATION* INIT_APPLICATION::Instance()
{
  static INIT_APPLICATION instance;
  return &instance;
}
void INIT_APPLICATION::enter(ApplicationBreslin* application)
{
}
void INIT_APPLICATION::execute(ApplicationBreslin* application)
{
   	//setup calls ogre specific graphics setup,
        //when it returns true we can begin our graphics stuff
        if (!application->mSetup)
	{
        	if (application->setup())
        	{
                	application->mSetup = true;
        	}
	}

        if (application->mSetup && application->mConnected)
        {
                application->mStateMachine->changeState(LOGIN_APPLICATION::Instance());
        }

}
void INIT_APPLICATION::exit(ApplicationBreslin* application)
{
}

bool INIT_APPLICATION::onLetter(ApplicationBreslin* application, Letter* letter)
{
        return true;
}

/******************** LOGIN_APPLICATION *****************/

LOGIN_APPLICATION* LOGIN_APPLICATION::Instance()
{
        static LOGIN_APPLICATION instance;
        return &instance;
}
void LOGIN_APPLICATION::enter(ApplicationBreslin* application)
{
  	application->createLoginScreen();
        application->showLoginScreen();
        application->mLabelFocus = application->mLabelUsername;

}
void LOGIN_APPLICATION::execute(ApplicationBreslin* application)
{
	if (application->mLoggedIn == true)
        {
                application->mStateMachine->changeState(MAIN_APPLICATION::Instance());
        }

        if (application->mButtonHit == application->mButtonLogin)
        {
                application->mButtonHit = NULL;
                if (application->mStringUsername.size() > 0)
                {
                        application->sendLogin();
                }
        }

        if (application->mButtonHit == application->mButtonExit)
        {
                application->mStateMachine->changeState(EXIT_APPLICATION::Instance());
                application->mStateMachine->setGlobalState(NULL);
                application->mButtonHit = NULL;
                application->shutdown();
                application->mShutDown = true;
                delete application;
        }

	//for keys
        if (application->mLabelFocus == application->mLabelUsername)
        {
                if (application->mKeyArray[8]) //backspace
                {
                        application->mKeyArray[8] = false;
                        int size = application->mStringUsername.size();
                        if (size > 0)
                        {
                                application->mStringUsername.resize(size - 1);
                        }
                        application->mLabelUsername->setCaption(application->mStringUsername);
                }

                if (application->mKeyArray[9]) //tab
                {
                        application->mKeyArray[9] = false;
                        application->mLabelFocus = application->mLabelPassword;

                }

                if (application->mKeyArray[13]) //enter
                {
                        application->mKeyArray[13] = false;
                        application->mLabelFocus = application->mLabelPassword;

                }

                for (int i = 47; i < 123; i++)
                {
                        if (application->mKeyArray[i])
                        {
                                application->mKeyArray[i] = false;
                                char ascii = (char)i;
                                application->mStringUsername.append(1,ascii);
                                application->mLabelUsername->setCaption(application->mStringUsername);
                        }
                }
        }

	if (application->mLabelFocus == application->mLabelPassword)
        {

                if (application->mKeyArray[8]) //backspace
                {
                        application->mKeyArray[8] = false;
                        int size = application->mStringPassword.size();
                        if (size > 0)
                        {
                                application->mStringPassword.resize(size - 1);
                        }
                        application->mLabelPassword->setCaption(application->mStringPassword);
                }

                if (application->mKeyArray[13]) //enter
                {
                        application->mKeyArray[13] = false;

                        //let's simulate hitting login button
                        if (application->mStringUsername.size() > 0)
                        {
                                application->sendLogin();
                        }
                }

                for (int i = 47; i < 123; i++)
                {
                        if (application->mKeyArray[i])
                        {
                                application->mKeyArray[i] = false;
                                char ascii = (char)i;
                                application->mStringPassword.append(1,ascii);
                                application->mLabelPassword->setCaption(application->mStringPassword);
                        }
                }
        }      
}
void LOGIN_APPLICATION::exit(ApplicationBreslin* application)
{
	application->mStringUsername.clear();
        application->mStringPassword.clear();

        application->mLabelUsername->setCaption("Username");
        application->mLabelPassword->setCaption("Password");

        application->hideLoginScreen();

}

bool LOGIN_APPLICATION::onLetter(ApplicationBreslin* application, Letter* letter)
{
        return true;
}
/******************** MAIN_APPLICATION *****************/

MAIN_APPLICATION* MAIN_APPLICATION::Instance()
{
  static MAIN_APPLICATION instance;
  return &instance;
}
void MAIN_APPLICATION::enter(ApplicationBreslin* application)
{
	application->createMainScreen();
        application->showMainScreen();

}
void MAIN_APPLICATION::execute(ApplicationBreslin* application)
{
	if (application->mButtonHit == application->mButtonJoinGameA)
        {
		LogString("mButtonJoinGameA hit");
                application->mButtonHit = NULL;
                application->createGame();
                application->sendJoinGame(application->mGameCode);
                application->mStateMachine->changeState(PLAY_APPLICATION::Instance());
        }

        if (application->mButtonHit == application->mButtonLogout)
        {
                application->mButtonHit = NULL;
                application->sendLogout();
        }

        if (application->mLoggedIn == false)
        {
                application->mStateMachine->changeState(LOGIN_APPLICATION::Instance());
        }

        if (application->mButtonHit == application->mButtonExit)
        {
                application->mStateMachine->changeState(EXIT_APPLICATION::Instance());
                application->mStateMachine->setGlobalState(NULL);
                application->mButtonHit = NULL;
                application->shutdown();
                application->mShutDown = true;
                delete application;
        }

}
void MAIN_APPLICATION::exit(ApplicationBreslin* application)
{
	application->hideMainScreen();
}

bool MAIN_APPLICATION::onLetter(ApplicationBreslin* application, Letter* letter)
{
        return true;
}

/******************** PLAY_APPLICATION *****************/

PLAY_APPLICATION* PLAY_APPLICATION::Instance()
{
  static PLAY_APPLICATION instance;
  return &instance;
}
void PLAY_APPLICATION::enter(ApplicationBreslin* application)
{
	application->mPlayingGame = true;
        application->mSentLeaveGame = false;
}
void PLAY_APPLICATION::execute(ApplicationBreslin* application)
{
    	//check for logout as well....
        if (application->mLoggedIn == false )
        {
               	application->mStateMachine->changeState(LOGIN_APPLICATION::Instance());
        }

        if (application->mKeyArray[27] && application->mSentLeaveGame == false) //esc
        {
                application->mKeyArray[27] = false;

                //send quit game
                ByteBuffer* byteBuffer = new ByteBuffer();
                byteBuffer->WriteByte(application->mMessageLeaveGame);
                application->mNetwork->send(byteBuffer);
                application->mSentLeaveGame = true;
        }

        if (application->mLeaveGame)
        {
                application->mSentLeaveGame = false;
                if (application->mLoggedIn)
                {
                        application->mStateMachine->changeState(MAIN_APPLICATION::Instance());
                }
                else
                {
                        application->mStateMachine->changeState(LOGIN_APPLICATION::Instance());
                }
        }
        else
        {
                //game
                if (application->mGame)
                {
                        application->mGame->processUpdate();
                }
        }


}
void PLAY_APPLICATION::exit(ApplicationBreslin* application)
{
	application->mPlayingGame = false;
        application->mLeaveGame = false;
}

bool PLAY_APPLICATION::onLetter(ApplicationBreslin* application, Letter* letter)
{
        return true;
}

EXIT_APPLICATION* EXIT_APPLICATION::Instance()
{
  static EXIT_APPLICATION instance;
  return &instance;
}
void EXIT_APPLICATION::enter(ApplicationBreslin* application)
{
	application->mExit = true;
}
void EXIT_APPLICATION::execute(ApplicationBreslin* application)
{

}
void EXIT_APPLICATION::exit(ApplicationBreslin* application)
{
}

bool EXIT_APPLICATION::onLetter(ApplicationBreslin* application, Letter* letter)
{
        return true;
}

