
#ifndef OGREMATHPROBLEMS_H_
#define OGREMATHPROBLEMS_H_

#include "MathProblems.h"

#include <vector>
#include <string>

class MathRacer;

class OgreMathProblems : public MathProblems
{
public:
	OgreMathProblems(MathRacer* mathRacer);
	~OgreMathProblems();

	bool checkAnswer();
    std::string getQuestion();
    void keyNumberHit(std::string number);
};

#endif
