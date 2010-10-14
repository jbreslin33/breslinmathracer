
#ifndef MATHPROBLEMS_H_
#define MATHPROBLEMS_H_

#include <vector>
#include <string>

class MathRacer;

class MathProblems
{
public:
	MathProblems(MathRacer* mathRacer);
	~MathProblems();

	//store numbers to add or subract
	std::vector<int> mVectorOfInts;

	//just to test for now....
	std::string getQuestion();
	virtual bool        checkAnswer();

    virtual void setCorrectAnswer(std::string answer) { mCorrectAnswer = answer; }
    virtual void setPlayerAnswer (std::string answer) { mPlayerAnswer  = answer; }
   //utility
	std::string convertInt(int number);

protected:
	std::string mQuestion;
	std::string mCorrectAnswer;
	std::string mPlayerAnswer;

	MathRacer* mMathRacer;

};

#endif
