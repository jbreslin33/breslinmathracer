//header
#include "applicationBreslin.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//shape
#include "../shape/shape.h"

//math
#include "../../math/vector3D.h"

//byteBuffer
#include "../bytebuffer/byteBuffer.h"

//network
#include "../network/network.h"

//command
#include "../command/command.h"

//game
#include "../game/game.h"

//move states
#include "states/applicationStates.h"

//game states
#include "../game/states/gameStates.h"

/***************************************
*	CONSTRUCTORS		          
***************************************/
ApplicationBreslin::ApplicationBreslin(const char* serverIP, int serverPort)
{
	StartLog();

	//network
	mNetwork = new Network(this,serverIP,serverPort);

	//initilize
	//state transition variables
	mSetup = false;
	mConnected = false;
	mPlayingGame = false;
	mConnectSent = false;
	mButtonHit = NULL;
	mLoggedIn = false;
        mLeaveGame = false;
        mSentLeaveGame = false;
	mGameCode = 1;
	mExit = false;

	//time
	mRenderTime = 0.0f;

	mGame = NULL;

        //states
        mStateMachine =  new StateMachine<ApplicationBreslin>(this);
        mStateMachine->setCurrentState      (INIT_APPLICATION::Instance());
        mStateMachine->setPreviousState     (INIT_APPLICATION::Instance());
        mStateMachine->setGlobalState       (GLOBAL_APPLICATION::Instance());

	//init all keys to false as in up/released
	for (int i = 0; i <= 127; i++)
	{
		mKeyArray[i] = false;
	}

}


ApplicationBreslin::~ApplicationBreslin()
{
/*
	mSceneMgr->clearScene();
	mNetwork->close();
	delete mNetwork;
	
	delete mStateMachine;
	delete mGame;
*/

}

/*********************************
			update
**********************************/
void ApplicationBreslin::processUpdate()
{
	mStateMachine->update();
	
	//did you sendConnect if not do so
	if (!mConnectSent)
	{
		mConnectSent = true; 
		sendConnect();
	}
}

/*********************************
	GAME	
**********************************/
void ApplicationBreslin::createGame()
{
	LogString("ApplicationBreslin::createGame");
	if (!mGame)
	{
		mGame = new Game(this);
	}
}

/*********************************
	ADMIN
**********************************/

void ApplicationBreslin::shutdown()
{
	ByteBuffer* byteBuffer = new ByteBuffer();
	byteBuffer->WriteByte(mMessageDisconnect);
	mNetwork->send(byteBuffer);
	mNetwork->reset();
}


/*********************************
		NETWORK
**********************************/

void ApplicationBreslin::sendConnect()
{
	ByteBuffer* byteBuffer = new ByteBuffer();
	byteBuffer->WriteByte(mMessageConnect);
	mNetwork->send(byteBuffer);
}

void ApplicationBreslin::sendLogin()
{
	ByteBuffer* byteBuffer = new ByteBuffer();
	byteBuffer->WriteByte(mMessageLogin);

	//get length of username
	int sizeOfUsername = mStringUsername.size();

	//write length of username
	byteBuffer->WriteByte(sizeOfUsername);

	//get length of password
	int sizeOfPassword = mStringPassword.size();
	
	//write length of password 
	byteBuffer->WriteByte(sizeOfPassword);
	
	//loop thru username string
	for (int i = 0; i < sizeOfUsername; i++)
	{
		//write individual char of mStringUsername
		byteBuffer->WriteByte(mStringUsername.at(i));	
	}

	//loop thru password  string
	for (int i = 0; i < sizeOfPassword; i++)
	{
		//write individual char of mStringPassword
		byteBuffer->WriteByte(mStringPassword.at(i));	
	}

	//send it off to server
	mNetwork->send(byteBuffer);
}

void ApplicationBreslin::sendLogout()
{
	ByteBuffer* byteBuffer = new ByteBuffer();
	byteBuffer->WriteByte(mMessageLogout);
	
	//send it off to server
	mNetwork->send(byteBuffer);
}

void ApplicationBreslin::sendJoinGame(int gameID)
{
	ByteBuffer* byteBuffer = new ByteBuffer();
	byteBuffer->WriteByte(mMessageJoinGame);
	byteBuffer->WriteByte(gameID);
	mNetwork->send(byteBuffer);
}

void ApplicationBreslin::checkForByteBuffer()
{
        int type = 0;

        ByteBuffer* byteBuffer = new ByteBuffer();

        while(mNetwork->checkForByteBuffer(byteBuffer))
        {
                byteBuffer->BeginReading();

                type = byteBuffer->ReadByte();

		if (type == mMessageConnected)
		{
			mConnected = true;
		}

		if (type == mMessageAddSchool)
		{
			std::string school;
			int length = byteBuffer->ReadByte();
			for (int i = 0; i < length; i++)
			{
				char c =  byteBuffer->ReadByte(); 
                                school.append(1,c);
			}			
			mSelectMenuSchool->addItem(school);
		}

		if (type == mMessageLoggedIn)
		{
			mLoggedIn = true;
		}

		if (type == mMessageLoggedOut)
		{
			mLoggedIn = false;
		}

		if (type == mMessageLeaveGame)
		{
			mLeaveGame = true;
		}

		//pass on to game if there is one....
		if (mGame)
		{
			mGame->checkByteBuffer(byteBuffer);
		}
        }
}


/*********************************

*		TIME
***********************************/
float ApplicationBreslin::getRenderTime()
{
	return mRenderTime;
}


/*********************************
		GRAPHICS
**********************************/
void ApplicationBreslin::createScene()
{
}

bool ApplicationBreslin::runGraphics()
{
	//Pump messages in all registered RenderWindow windows
	WindowEventUtilities::messagePump();
	if (!mRoot->renderOneFrame())
	{
		return false;
	}
	else
	{
		return true;
	}
}

bool ApplicationBreslin::frameRenderingQueued(const Ogre::FrameEvent& evt)
{
	mRenderTime = evt.timeSinceLastFrame;

	bool ret = BaseApplication::frameRenderingQueued(evt);
	
	return ret;
}

/*********************************
		GUI
**********************************/

//LOGIN
void ApplicationBreslin::createLoginScreen()
{
	if (!mSelectMenuSchool)
	{
        	mSelectMenuSchool = mTrayMgr->createThickSelectMenu(OgreBites::TL_CENTER, "mSelectMenuSchool", "Select School", 120, 10);
	}
	
	if (!mLabelUsername)
	{
        	mLabelUsername  = mTrayMgr->createLabel(OgreBites::TL_CENTER, "mLabelUsername", "Username:");
	}

	if (!mLabelPassword)
	{
        	mLabelPassword  = mTrayMgr->createLabel(OgreBites::TL_CENTER, "mLabelPassword", "Password:");
	}

	if (!mButtonLogin)
	{
        	mButtonLogin    = mTrayMgr->createButton(OgreBites::TL_CENTER, "mButtonLogin", "Login");
	}
		
	if (!mButtonExit)
	{
        	mButtonExit     = mTrayMgr->createButton(OgreBites::TL_CENTER, "mButtonExit", "Exit Application");
	}
}

void ApplicationBreslin::showLoginScreen()
{
        mTrayMgr->moveWidgetToTray(mSelectMenuSchool,OgreBites::TL_CENTER);
        mTrayMgr->moveWidgetToTray(mLabelUsername,OgreBites::TL_CENTER);
        mTrayMgr->moveWidgetToTray(mLabelPassword,OgreBites::TL_CENTER);
        mTrayMgr->moveWidgetToTray(mButtonLogin,OgreBites::TL_CENTER);
        mTrayMgr->moveWidgetToTray(mButtonExit,OgreBites::TL_CENTER);

        mSelectMenuSchool->show();
        mLabelUsername->show();
        mLabelPassword->show();
        mButtonLogin->show();
        mButtonExit->show();

        mTrayMgr->showCursor();

        //set intial focus on username
        mLabelFocus = mLabelUsername;
}

void ApplicationBreslin::hideLoginScreen()
{
        mSelectMenuSchool->hide();
        mLabelUsername->hide();
        mLabelPassword->hide();
        mButtonLogin->hide();
        mButtonExit->hide();

        mTrayMgr->removeWidgetFromTray(mSelectMenuSchool);
        mTrayMgr->removeWidgetFromTray(mLabelUsername);
        mTrayMgr->removeWidgetFromTray(mLabelPassword);
        mTrayMgr->removeWidgetFromTray(mButtonLogin);
        mTrayMgr->removeWidgetFromTray(mButtonExit);
}


//MAIN
void ApplicationBreslin::createMainScreen()
{
	if (!mButtonJoinGameA)
	{
		mButtonJoinGameA = mTrayMgr->createButton(OgreBites::TL_CENTER, "mButtonJoinGameA", "Join Game A");
	}

	if (!mButtonLogout)
	{
        	mButtonLogout    = mTrayMgr->createButton(OgreBites::TL_CENTER, "mButtonLogout", "Logout");
	}

	if (!mButtonExit)
	{
		mButtonExit     = mTrayMgr->createButton(OgreBites::TL_CENTER, "mButtonExit", "Exit Application");
	}
}

void ApplicationBreslin::showMainScreen()
{
	mTrayMgr->moveWidgetToTray(mButtonJoinGameA,OgreBites::TL_CENTER);
	mTrayMgr->moveWidgetToTray(mButtonLogout,OgreBites::TL_CENTER);
	mTrayMgr->moveWidgetToTray(mButtonExit,OgreBites::TL_CENTER);
	
	mButtonJoinGameA->show();
	mButtonLogout->show();
	mButtonExit->show();
	
	mTrayMgr->showCursor();

	//set intial focus on username
	mLabelFocus = mLabelUsername;
}

void ApplicationBreslin::hideMainScreen()
{
	mButtonJoinGameA->hide();
	mButtonLogout->hide();
	mButtonExit->hide();

	mTrayMgr->removeWidgetFromTray(mButtonJoinGameA);
	mTrayMgr->removeWidgetFromTray(mButtonLogout);
	mTrayMgr->removeWidgetFromTray(mButtonExit);
}

//RESET
void ApplicationBreslin::createResetScreen()
{
	if (!mLabelReset)
	{
        	mLabelReset  = mTrayMgr->createLabel(OgreBites::TL_CENTER, "mLabelReset", "Reset:");
	}
}

void ApplicationBreslin::showResetScreen()
{
        mTrayMgr->moveWidgetToTray(mLabelReset,OgreBites::TL_CENTER);

        mLabelReset->show();

        //mTrayMgr->showCursor();

        //set intial focus on username
        mLabelFocus = mLabelReset;
}

void ApplicationBreslin::hideResetScreen()
{
        mLabelReset->hide();
        mTrayMgr->removeWidgetFromTray(mLabelReset);
}


void ApplicationBreslin::buttonHit(OgreBites::Button *button)
{
	mButtonHit = button;
}

bool ApplicationBreslin::mouseMoved( const OIS::MouseEvent &arg )
{
	if (mTrayMgr->injectMouseMove(arg))
	{
		return true;
	}
	if (mPlayingGame)
	{
		mCameraMan->injectMouseMove(arg);
	}
    return true;
}

bool ApplicationBreslin::keyPressed( const OIS::KeyEvent &arg )
{
	int numeric = arg.text;
	mKeyArray[numeric] = true;
	return true;
}

bool ApplicationBreslin::keyReleased( const OIS::KeyEvent &arg )
{
	int numeric = arg.text;
	mKeyArray[numeric] = false;
	return true;
}

void ApplicationBreslin::labelHit( OgreBites::Label* label )
{
	//set pointer to label that is focused so you can write keypressed to it 
	mLabelFocus = label;

}

