/*
-----------------------------------------------------------------------------
Filename:    BasicTutorial4.h
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
#ifndef __BasicTutorial4_h_
#define __BasicTutorial4_h_

#include "BaseApplication.h"

class BasicTutorial4 : public BaseApplication
{
public:
    BasicTutorial4(void);
    virtual ~BasicTutorial4(void);
protected:
    virtual void createScene(void);
    virtual bool frameRenderingQueued(const Ogre::FrameEvent& evt);
private:
    bool processUnbufferedInput(const Ogre::FrameEvent& evt);
};

#endif // #ifndef __BasicTutorial4_h_