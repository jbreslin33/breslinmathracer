/*
#ifndef __CArmyWar_h_
#define __CArmyWar_h_

#include "BaseApplication.h"
#include "common.h"


extern bool keys[256];

 
class CArmyWar : public BaseApplication
{
public:
   // CArmyWar(void);
   // virtual ~CArmyWar(void);
	void createPlayer(int index);

protected:
    virtual void createScene(void);
    virtual bool frameRenderingQueued(const Ogre::FrameEvent& evt);
private:
    bool processUnbufferedInput(const Ogre::FrameEvent& evt);
};
 
#endif // #ifndef __CArmyWar_h_
 */