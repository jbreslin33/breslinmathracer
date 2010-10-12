#include "MathRacer.h"

using namespace Ogre;
//using namespace OgreBites;

//-------------------------------------------------------------------------------------
MathRacer::MathRacer(BaseApplication* baseApplication) : mScoreDetailsPanel(0),mNumber1(0),mNumber2(0),mCorrectAnswer(NULL),mPlayerAnswer(NULL)
{
}
//-------------------------------------------------------------------------------------
MathRacer::~MathRacer(void)
{
}

//-------------------------------------------------------------------------------------

void MathRacer::createFrameListener(OgreBites::SdkTrayManager* mTrayMgr){


    // create a params panel for displaying score details
    Ogre::StringVector scoreItems;
    scoreItems.push_back("Time");
    scoreItems.push_back("Question");
    scoreItems.push_back("Answer");
    scoreItems.push_back("Correct Answer");
    scoreItems.push_back("Speed");

    mScoreDetailsPanel = mTrayMgr->createParamsPanel(OgreBites::TL_NONE, "ScoreDetailsPanel", 200, scoreItems);
    mTrayMgr->moveWidgetToTray(mScoreDetailsPanel, OgreBites::TL_TOPRIGHT, 0);
    mScoreDetailsPanel->show();

    getNewQuestion();


}
bool MathRacer::nextLocation(void){
    if (mWalkList.empty()) return false;
    mDestination = mWalkList.front();  // this gets the front of the deque
    mWalkList.pop_front();             // this removes the front of the deque
    mDirection = mDestination - mNode->getPosition();
    mDistance = mDirection.normalise();
    return true;
}

bool MathRacer::frameRenderingQueued(const Ogre::FrameEvent &evt){

   	if (mDirection == Ogre::Vector3::ZERO) {
		if (nextLocation()) {
			// Set walking animation

		}//if
	}else{
		Ogre::Real move = mWalkSpeed * evt.timeSinceLastFrame;
		mDistance -= move;
		if (mDistance <= 0.0f){
			mNode->setPosition(mDestination);
			mDirection = Ogre::Vector3::ZERO;
			// Set animation based on if the robot has another point to walk to.
			if (!nextLocation()){
				// Set Idle animation

			}else{
				// Rotation Code will go here later
				Ogre::Vector3 src = mNode->getOrientation() * Ogre::Vector3::UNIT_X;
				if ((1.0f + src.dotProduct(mDirection)) < 0.0001f) {
					mNode->yaw(Ogre::Degree(180));
				}else{
					Ogre::Quaternion quat = src.getRotationTo(mDirection);
					mNode->rotate(quat);
				} // else
			}//else
		}else{
			mNode->translate(mDirection * move);
		} // else
	} // if
	//mAnimationState->addTime(evt.timeSinceLastFrame);

   //update timer as this function runs on a timer and we don't want to update time thru user input like
   //I will with questions and answers
   if (mScoreDetailsPanel->isVisible())   // if details panel is visible, then update its contents
   {
   	mScoreDetailsPanel->setParamValue(0, Ogre::StringConverter::toString(time(NULL)));
   }

	return BaseApplication::frameRenderingQueued(evt);
}

void MathRacer::getNewQuestion()
{

   //let's clear answers.....questions etc....
   mCorrectAnswer = NULL;
   mPlayerAnswer = NULL;
   mScoreDetailsPanel->setParamValue(2, "");
   mScoreDetailsPanel->setParamValue(3, "");

  //mScoreDetailsPanel->setParamValue(2, Ogre::StringConverter::toString(mPlayerAnswer));
    /* initialize random seed: */
   srand ( time(NULL) );

   /* generate numbers: */
   mNumber1 = rand() % 10 + 1;
   mNumber2 = rand() % 10 + 1;
   mCorrectAnswer = mNumber1 + mNumber2;

   /*conver numbers to strings */
 	std::string my_string1 = Ogre::StringConverter::toString(mNumber1);
 	std::string my_string2 = " + ";
  	std::string my_string3 = Ogre::StringConverter::toString(mNumber2);

   std::string my_string4 = my_string1 + my_string2 + my_string3;

   /*display question */
   mScoreDetailsPanel->setParamValue(1, my_string4);

}

void MathRacer::processAnswer()
{
   mScoreDetailsPanel->setParamValue(3, Ogre::StringConverter::toString(mCorrectAnswer));
	if (mCorrectAnswer == mPlayerAnswer)
	{
		mWalkSpeed += 1.0;
	}
	else
	{
		mWalkSpeed -= 1.0;
	}
   mScoreDetailsPanel->setParamValue(4, Ogre::StringConverter::toString(mWalkSpeed));
}

void MathRacer::keyNumberHit(const OIS::KeyEvent &arg)
{
	std::string playerAnswer = Ogre::StringConverter::toString(mPlayerAnswer); //set current real player answer to string
   std::string tempString = Ogre::StringConverter::toString(arg.key);

   Ogre::Real tempReal = Ogre::StringConverter::parseReal(tempString);
   tempReal = tempReal - 1;
   tempString = Ogre::StringConverter::toString(tempReal);

   playerAnswer.append(tempString); // append new number to temp string

   //let's strip leading zero....
   if (playerAnswer.substr(0,1) == (std::string) "0")
   	playerAnswer = playerAnswer.substr(1,playerAnswer.length() -1);

   mScoreDetailsPanel->setParamValue(2, playerAnswer); //show player in box their newest answer

   mPlayerAnswer = Ogre::StringConverter::parseReal(playerAnswer); // set global mPlayerAnswer(a real) to currnet answer attempt
}

bool MathRacer::keyPressed( const OIS::KeyEvent &arg )
{
 	if(arg.key == OIS::KC_1)   // refresh all textures
	{
		keyNumberHit(arg);
	}
   else if(arg.key == OIS::KC_2)   // refresh all textures
	{
		keyNumberHit(arg);
	}
   else if(arg.key == OIS::KC_3)   // refresh all textures
	{
		keyNumberHit(arg);
	}using namespace Ogre;
using namespace OgreBites;
    else if(arg.key == OIS::KC_4)   // refresh all textures
	{
		keyNumberHit(arg);
	}
    else if(arg.key == OIS::KC_5)   // refresh all textures
	{
		keyNumberHit(arg);
	}
    else if(arg.key == OIS::KC_6)   // refresh all textures
	{
		keyNumberHit(arg);
	}
   else if(arg.key == OIS::KC_7)   // refresh all textures
	{
		keyNumberHit(arg);
	}
   else if(arg.key == OIS::KC_8)   // refresh all textures
	{
		keyNumberHit(arg);
	}
   else if(arg.key == OIS::KC_9)   // refresh all textures
	{
		keyNumberHit(arg);
	}
   else if(arg.key == OIS::KC_0)   // refresh all textures
	{
		keyNumberHit(arg);
	}
	else if(arg.key == OIS::KC_RETURN)
	{
		processAnswer();
		getNewQuestion();
	}

}

