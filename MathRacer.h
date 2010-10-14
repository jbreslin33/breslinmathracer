/*
-----------------------------------------------------------------------------
Filename:    TutorialApplication.h
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
#ifndef __MATHRACER_h_
#define __MATHRACER_h_

#include "BaseApplication.h"
//#include "SinbadCharacterController.h"


class MathInput;
class OgreMathProblems;
class MathRacerController;

class MathRacer : public BaseApplication
{
public:
    MathRacer(void);
    virtual ~MathRacer(void);

	MathRacerController* mChara;
	MathInput*                 mMathInput;

    OgreMathProblems* getMathProblems() { return mMathProblems; }

    void createFrameListener(void);

    OgreBites::ParamsPanel* getScoreDetailsPanel() { return mScoreDetailsPanel; }

    bool getGameStarted() { return mGameStarted; }
    void startGame();
    //void checkAnswer();

protected:
    virtual void createScene(void);

    // Ogre::FrameListener
    virtual bool frameRenderingQueued(const Ogre::FrameEvent& evt);

    // OIS::KeyListener
    virtual bool keyPressed  (const OIS::KeyEvent &arg );
    virtual bool keyReleased (const OIS::KeyEvent &arg );

    // OIS::MouseListener
    virtual bool mouseMoved  (const OIS::MouseEvent &arg );
    virtual bool mousePressed(const OIS::MouseEvent &arg, OIS::MouseButtonID id );

    bool mGameStarted;

    OgreBites::ParamsPanel* mScoreDetailsPanel;     // sample details panel

	OgreMathProblems*              mMathProblems;

};

#endif // #ifndef __TutorialApplication_h_

