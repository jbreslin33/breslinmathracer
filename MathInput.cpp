
#include "MathInput.h"
#include "MathRacer.h"
#include "Ogre.h"


MathInput::MathInput(MathRacer* mathRacer)
{
    //mTutorialApplication = tutorialApplication;
    mPlayerAnswer = "";
    mMathRacer = mathRacer;
}

MathInput::~MathInput()
{
}

void MathInput::keyNumberHit(const OIS::KeyEvent &arg)
{

    std::string tempString   = Ogre::StringConverter::toString(arg.key);

    mPlayerAnswer.append(tempString);

    /*
    std::string playerAnswer = Ogre::StringConverter::toString(mPlayerAnswer); //set current real player answer to string
    std::string tempString   = Ogre::StringConverter::toString(arg.key);

    Ogre::Real tempReal = Ogre::StringConverter::parseReal(tempString);
    tempReal            = tempReal - 1;
    tempString          = Ogre::StringConverter::toString(tempReal);

    playerAnswer.append(tempString); // append new number to temp string

    //let's strip leading zero....
    if (playerAnswer.substr(0,1) == (std::string) "0")
        playerAnswer = playerAnswer.substr(1,playerAnswer.length() -1);

    mScoreDetailsPanel->setParamValue(2, playerAnswer); //show player in box their newest answer
    mPlayerAnswer = Ogre::StringConverter::parseReal(playerAnswer); // set global mPlayerAnswer(a real) to currnet answer attempt
    */

}

void MathInput::injectKeyDown(const OIS::KeyEvent& evt)
{
std::cout << "hit a number";

    if (evt.key == OIS::KC_M)
    {
        mMathRacer->startGame();
    }

    if (evt.key == OIS::KC_0)
    {
        keyNumberHit(evt);
    }
    else if (evt.key == OIS::KC_1)
    {
        keyNumberHit(evt);
    }
    else if (evt.key == OIS::KC_2)
    {
        keyNumberHit(evt);
    }
    else if (evt.key == OIS::KC_3)
    {
        keyNumberHit(evt);
    }
    else if (evt.key == OIS::KC_4)
    {
        keyNumberHit(evt);
    }
    else if (evt.key == OIS::KC_5)
    {
        keyNumberHit(evt);
    }
    else if (evt.key == OIS::KC_6)
    {
        keyNumberHit(evt);
    }
    else if (evt.key == OIS::KC_7)
    {
        keyNumberHit(evt);
    }
    else if (evt.key == OIS::KC_8)
    {
        keyNumberHit(evt);
    }
    else if (evt.key == OIS::KC_9)
    {
        keyNumberHit(evt);
    }

    else if (evt.key == OIS::KC_RETURN)
    {

    }


}
