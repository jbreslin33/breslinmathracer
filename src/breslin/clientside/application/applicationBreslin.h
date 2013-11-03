#ifndef APPLICATIONBRESLIN_H
#define APPLICATIONBRESLIN_H

/***************************************
*   		INCLUDES
***************************************/

//parents
#include "BaseApplication.h"

#include "../../fsm/stateMachine.h"

template <class entity_type> class State;

/***************************************
*   		FORWARD DECLARATIONS
***************************************/
class Game;
class Network;

class ApplicationBreslin : public BaseApplication
{
public:
	
	ApplicationBreslin(const char* serverIP, int serverPort);
	~ApplicationBreslin();

/***************************************
*   		MEMBER VARIABLES
***************************************/

public:

//state machine
StateMachine<ApplicationBreslin>* mStateMachine;

//constants
static const char mMessageServerExit  = 3;
static const char mMessageConnect     = -101;
static const char mMessageConnected   = -90;
static const char mMessageAddSchool   = -109;
static const char mMessageLogin       = -110;
static const char mMessageLogout      = -120;
static const char mMessageLoggedIn    = -113;
static const char mMessageLoggedOut   = -114;
static const char mMessageJoinGame    = -107;
static const char mMessageDisconnect  = -102;
static const char mMessageLeaveGame   =  -99;
static const char mMessageGameStart   =  -57;
static const char mMessageGameEnd     =  -58;


//Network
Network*     mNetwork;

//game
Game* mGame;
virtual void createGame();
int mGameCode;

//state transition variables
bool mSetup;
bool mConnected;
bool mPlayingGame;
bool mConnectSent;
bool mLoggedIn;
bool mLeaveGame;
bool mSentLeaveGame;
bool mExit;

//gui
OgreBites::SelectMenu* mSelectMenuSchool;
OgreBites::Button* mButtonHit;

OgreBites::Label* mLabelUsername;
OgreBites::Label* mLabelPassword;
OgreBites::Label* mLabelFocus;

OgreBites::Button* mButtonLogin;
OgreBites::Button* mButtonLogout;
OgreBites::Button* mButtonJoinGameA;
OgreBites::Button* mButtonExit;

std::string mStringSchool;

std::string mStringUsername;
std::string mStringPassword;

public:
//time
float mRenderTime;

private:
/***************************************
*			          METHODS
***************************************/

public:

//process update
virtual void processUpdate();

//time
float getRenderTime();

//scene
Ogre::SceneManager* getSceneManager      () { return mSceneMgr; }

//gui
//login
void createLoginScreen();
void showLoginScreen();
void hideLoginScreen();

//main
virtual void createMainScreen();
virtual void showMainScreen();
virtual void hideMainScreen();

//reset
virtual void createResetScreen();
virtual void showResetScreen();
virtual void hideResetScreen();
OgreBites::Label* mLabelReset;
std::string mStringReset;

//input
OIS::Keyboard* getKeyboard() { return mKeyboard; }

//keys
bool mKeyArray[128];  

/********* NETWORK *******/
void checkForByteBuffer();

//connect
void sendConnect   ();

//join game
void sendJoinGame(int gameID);

//login 
void sendLogin();
void sendLogout();

//shutdown
void shutdown();

//graphics
bool runGraphics();

//camera
Ogre::Camera* getCamera() { return mCamera; }

private:
void createScene          ();

public:
//rendering
virtual bool frameRenderingQueued (const Ogre::FrameEvent& evt);

private:
//input
void buttonHit  (OgreBites::Button *button);
void labelHit   (OgreBites::Label* label );
bool mouseMoved (const OIS::MouseEvent &arg );
protected:
virtual bool keyPressed  ( const OIS::KeyEvent &arg );
virtual bool keyReleased ( const OIS::KeyEvent &arg );

};

#endif
