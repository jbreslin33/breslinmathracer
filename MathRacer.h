#ifndef __MathRacer_h_
#define __MathRacer_h_
 
#include "BaseApplication.h"
#include <deque>
 
class MathRacer : public BaseApplication
{
public:
    MathRacer(void);
    virtual ~MathRacer(void);
 
protected:
    virtual void createScene(void);
    virtual void createFrameListener(void);
 
    virtual bool frameRenderingQueued(const Ogre::FrameEvent &evt);
    virtual bool nextLocation(void);
     
    Ogre::Real mDistance;                  // The distance the object has left to travel
    Ogre::Vector3 mDirection;              // The direction the object is moving
    Ogre::Vector3 mDestination;            // The destination the object is moving towards
 
    //Ogre::AnimationState *mAnimationState; // The current animation state of the object
 
    Ogre::Entity *mEntity;                 // The Entity we are animating
    Ogre::SceneNode *mNode;                // The -SceneNode that the Entity is attached to
    std::deque<Ogre::Vector3> mWalkList;   // The list of points we are walking to
 
    Ogre::Real mWalkSpeed;                 // The speed at which the object is moving
    
    OgreBites::ParamsPanel* mScoreDetailsPanel;     // score details panel
    
    Ogre::Real mNumber1;
    Ogre::Real mNumber2;
    Ogre::Real mCorrectAnswer;
    Ogre::Real mPlayerAnswer;
    
    void getNewQuestion();  
    void processAnswer();
    void keyNumberHit(const OIS::KeyEvent &arg); 
    
    virtual bool keyPressed( const OIS::KeyEvent &arg );
    

};
 
#endif // #ifndef __MathRacer_h_