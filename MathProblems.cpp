#include "MathProblems.h"

#include <stdlib.h>
#include <sstream>
#include <iostream>//Ah the way it should be

MathProblems::MathProblems()
{
	mQuestion = "What is 7 + 3\n";
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

bool MathProblems::checkAnswer(std::string answer)
{
	if (answer == mAnswer)
		return true;
	else
		return false;

}

std::string MathProblems::getQuestion()
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
   int mCorrectAnswer = mNumber1 + mNumber2;

   mAnswer = convertInt(mCorrectAnswer);

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
   return mQuestion;

}


