/*
-----------------------------------------------------------------------------
Filename:    MathRacer.cpp
-----------------------------------------------------------------------------

This source file is part of the
   ___                 __    __ _ _    _
  /___\__ _ _ __ ___  / / /\ \ (_) | _(_)
 //  // _` | '__/ _ \ \ \/  \/ / | |/ / |
/ \_// (_| | | |  __/  \  /\  /| |   <| |
\___/ \__, |_|  \___|   \/  \/ |_|_|\_\_|
      |___/
      Tutorial Framework
      http://www.ogre3d.org/tikiwiki/
-----------------------------------------------------------------------------
*/

#include "MathRacer.h"
#include "MathInput.h"
#include "../questionfactory/OgreMathProblems.h"
#include "../charactercontrollers/MathRacerController.h"

#include <time.h>

using namespace Ogre;
using namespace OgreBites;

//-------------------------------------------------------------------------------------
MathRacer::MathRacer(void)
{
}
//-------------------------------------------------------------------------------------
MathRacer::~MathRacer(void)
{
}

//-------------------------------------------------------------------------------------
void MathRacer::createFrameListener(void)
{
    BaseApplication::createFrameListener();


    mGameStarted = false;

    Ogre::StringVector scoreItems;
    scoreItems.push_back("Time");
    scoreItems.push_back("Question");
    scoreItems.push_back("Answer");
    scoreItems.push_back("Correct Answer");
    scoreItems.push_back("Speed");

    mScoreDetailsPanel = mTrayMgr->createParamsPanel(OgreBites::TL_TOPLEFT, "ScoreDetailsPanel", 200, scoreItems);
    mTrayMgr->moveWidgetToTray(mScoreDetailsPanel, OgreBites::TL_TOPLEFT, 0);
    mScoreDetailsPanel->show();

}
//-------------------------------------------------------------------------------------
void MathRacer::createScene(void)
{
	mSceneMgr->setAmbientLight(ColourValue(0.3, 0.3, 0.3));

    // add a bright light above the scene
	Light* light = mSceneMgr->createLight();
	light->setType(Light::LT_POINT);
	light->setPosition(-10, 40, 20);
	light->setSpecularColour(ColourValue::White);

	// create a floor mesh resource
	MeshManager::getSingleton().createPlane("floor", ResourceGroupManager::DEFAULT_RESOURCE_GROUP_NAME,
	Plane(Vector3::UNIT_Y, 0), 200, 200, 10, 10, true, 1, 10, 10, Vector3::UNIT_Z);

	// create a floor entity, give it a material, and place it at the origin
    Entity* floor = mSceneMgr->createEntity("Floor", "floor");
    floor->setMaterialName("Examples/Rockwall");
    floor->setCastShadows(false);
    mSceneMgr->getRootSceneNode()->attachObject(floor);

	// disable default camera control so the character can do its own
	mCameraMan->setStyle(CS_MANUAL);

	// create our character controller
	mChara        = new MathRacerController(mCamera);
	mMathProblems = new OgreMathProblems(this);
	mMathInput    = new MathInput(this);

}

bool MathRacer::frameRenderingQueued(const FrameEvent& evt)
{

    if (mGameStarted)
    {
        //update score time
        mScoreDetailsPanel->setParamValue(0, Ogre::StringConverter::toString(time(NULL)));
    }

	// let character update animations and camera
	mChara->addTime(evt.timeSinceLastFrame);
	return BaseApplication::frameRenderingQueued(evt);
}

bool MathRacer::keyPressed(const OIS::KeyEvent& evt)
{
	// relay input events to character controller
	if (!mTrayMgr->isDialogVisible())
	{
        mChara->injectKeyDown(evt);
        mMathInput->injectKeyDown(evt);
	}
	return BaseApplication::keyPressed(evt);
}

bool MathRacer::keyReleased(const OIS::KeyEvent& evt)
{
	// relay input events to character controller
	if (!mTrayMgr->isDialogVisible()) mChara->injectKeyUp(evt);
	return BaseApplication::keyReleased(evt);
}

bool MathRacer::mouseMoved(const OIS::MouseEvent& evt)
{
	// relay input events to character controller
	if (!mTrayMgr->isDialogVisible()) mChara->injectMouseMove(evt);
	return BaseApplication::mouseMoved(evt);
}

bool MathRacer::mousePressed(const OIS::MouseEvent& evt, OIS::MouseButtonID id)
{
	// relay input events to character controller
	if (!mTrayMgr->isDialogVisible()) mChara->injectMouseDown(evt, id);
	return BaseApplication::mousePressed(evt, id);
}

void MathRacer::startGame()
{
    mGameStarted = true;
    //get a math problem
    mScoreDetailsPanel->setParamValue(1, mMathProblems->getQuestion());
}
/*
void MathRacer::checkAnswer()
{
   // if (mMathProblems->checkAnswer(mScoreDetailsPanel->getParamValue(2)))

    {
        mScoreDetailsPanel->setParamValue(3, "CORRECT");
    }
    else
    {
        mScoreDetailsPanel->setParamValue(3, "WRONG");
    }
    mScoreDetailsPanel->setParamValue(1, "");
    mScoreDetailsPanel->setParamValue(2, "");

}
*/
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
        MathRacer app;

        try {
            app.go();
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



