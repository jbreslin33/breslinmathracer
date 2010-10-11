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
#ifndef __TutorialApplication_h_
#define __TutorialApplication_h_

#include "BaseApplication.h"
#include "SinbadCharacterController.h"

class MathInput;

class TutorialApplication : public BaseApplication
{
public:
    TutorialApplication(void);
    virtual ~TutorialApplication(void);

	SinbadCharacterController* mChara;
	MathInput* mMathInput;

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



};

#endif // #ifndef __TutorialApplication_h_
