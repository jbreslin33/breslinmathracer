#include "OgreMathProblems.h"

#include "MathProblems.h"
#include "MathRacer.h"

#include <stdlib.h>
#include <sstream>
#include <iostream>//Ah the way it should be

OgreMathProblems::OgreMathProblems(MathRacer* mathRacer) : MathProblems(mathRacer)
{

}

OgreMathProblems::~OgreMathProblems()
{

}
std::string OgreMathProblems::getQuestion()
{
   //let's clear answers.....questions etc....
/*
   mCorrectAnswer = NULL;
   mPlayerAnswer = NULL;
   mScoreDetailsPanel->setParamValue(2, "");
   mScoreDetailsPanel->setParamValue(3, "");
*/
  //mScoreDetailsPanel->setParamValue(2, Ogre::StringConverter::toString(mPlayerAnswer));
    /* initialize random seed: */
   srand ( time(NULL) );

   /* generate numbers: */
   int mNumber1 = rand() % 10 + 1;
   int mNumber2 = rand() % 10 + 1;
   int correctAnswer = mNumber1 + mNumber2;

   mCorrectAnswer = convertInt(correctAnswer);

   mQuestion = convertInt(mNumber1) + " + " + convertInt(mNumber2) + " = ";
   //std::cout << mAnswer;

   /*conver numbers to strings */
   /*
 	std::string my_string1 = Ogre::StringConverter::toString(mNumber1);
 	std::string my_string2 = " + ";
  	std::string my_string3 = Ogre::StringConverter::toString(mNumber2);

   std::string my_string4 = my_string1 + my_string2 + my_string3;
   */
   /*display question */
   //mScoreDetailsPanel->setParamValue(1, my_string4);

   mMathRacer->getScoreDetailsPanel()->setParamValue(1, mQuestion);

   return mQuestion;
}

bool OgreMathProblems::checkAnswer()
{

    if (mCorrectAnswer == mPlayerAnswer)
    {
        mMathRacer->getScoreDetailsPanel()->setParamValue(3, "CORRECT");
        mMathRacer->getScoreDetailsPanel()->setParamValue(1, "");
        mMathRacer->getScoreDetailsPanel()->setParamValue(2, "");
        mCorrectAnswer = "";
        mPlayerAnswer = "";
        return true;
    }
    else
    {
        mMathRacer->getScoreDetailsPanel()->setParamValue(3, "WRONG");
        mMathRacer->getScoreDetailsPanel()->setParamValue(1, "");
        mMathRacer->getScoreDetailsPanel()->setParamValue(2, "");
        mCorrectAnswer = "";
        mPlayerAnswer = "";
        return false;
    }

}


