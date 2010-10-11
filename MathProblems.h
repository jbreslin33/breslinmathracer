
#ifndef MATHPROBLEMS_H_
#define MATHPROBLEMS_H_

#include <vector>
#include <string>

class MathProblems
{
public:
	MathProblems();
	~MathProblems();

	//store numbers to add or subract
	std::vector<int> mVectorOfInts;

	//just to test for now....
	std::string getQuestion();
	bool        checkAnswer(std::string answer);

   //utility
	std::string convertInt(int number);

protected:
	std::string mQuestion;
	std::string mAnswer;

};

#endif
