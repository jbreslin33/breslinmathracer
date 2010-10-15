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

void OgreMathProblems::keyNumberHit(std::string number)
{
   mPlayerAnswer.append(number);
   mMathRacer->getScoreDetailsPanel()->setParamValue(2, mPlayerAnswer); //show player in box their newest answer
}

bool OgreMathProblems::checkAnswer()
{

    if (mCorrectAnswer == mPlayerAnswer)
    {
        mMathRacer->getScoreDetailsPanel()->setParamValue(3, "CORRECT");
        mMathRacer->getScoreDetailsPanel()->setParamValue(1, "");
        mMathRacer->getScoreDetailsPanel()->setParamValue(2, "");
        mCorrectAnswer.clear();
        mPlayerAnswer.clear();
        getQuestion();
        return true;
    }
    else
    {
        mMathRacer->getScoreDetailsPanel()->setParamValue(3, "WRONG");
        mMathRacer->getScoreDetailsPanel()->setParamValue(1, "");
        mMathRacer->getScoreDetailsPanel()->setParamValue(2, "");
        mCorrectAnswer.clear();
        mPlayerAnswer.clear();
        getQuestion();
        return false;
    }

}

std::string OgreMathProblems::getQuestion()
{
   srand ( time(NULL) );

   /* generate numbers: */
   int mNumber1 = rand() % 10 + 1;
   int mNumber2 = rand() % 10 + 1;
   int correctAnswer = mNumber1 + mNumber2;

   mCorrectAnswer = convertInt(correctAnswer);

   mQuestion = convertInt(mNumber1) + " + " + convertInt(mNumber2) + " = ";

   mMathRacer->getScoreDetailsPanel()->setParamValue(1, mQuestion);

   return mQuestion;
}



