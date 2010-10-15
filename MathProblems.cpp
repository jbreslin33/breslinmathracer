#include "MathProblems.h"

#include <stdlib.h>
#include <sstream>
#include <iostream>//Ah the way it should be

MathProblems::MathProblems(MathRacer* mathRacer)
{
    mMathRacer     = mathRacer;
	mQuestion      = "What is 7 + 3\n";
	mPlayerAnswer  = "";
	mCorrectAnswer = "";
}

MathProblems::~MathProblems()
{

}

std::string MathProblems::convertInt(int number)
{
   std::stringstream ss;//create a stringstream
   ss << number;//add number to the stream
   return ss.str();//return a string with the contents of the stream
}

bool MathProblems::checkAnswer()
{
/*
	if (mPlayerAnswer == mCorrectAnswer)
		return true;
	else
		return false;
*/
}

std::string MathProblems::getQuestion()
{

   srand ( time(NULL) );

   /* generate numbers: */
   /*
   int mNumber1 = rand() % 10 + 1;
   int mNumber2 = rand() % 10 + 1;
   int correctAnswer = mNumber1 + mNumber2;

   mCorrectAnswer = convertInt(correctAnswer);

   mQuestion = convertInt(mNumber1) + " + " + convertInt(mNumber2) + " = ";
*/
   return "";

}


