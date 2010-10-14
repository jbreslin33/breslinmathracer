#ifndef MATHINPUT_H_
#define MATHINPUT_H_

#include "OIS.h"

class MathRacer;

class MathInput
{
public:
	MathInput(MathRacer* mathRacer);
	~MathInput();

	//input

	std::string getPlayerAnswer() { return mPlayerAnswer; }
	void injectKeyDown(const OIS::KeyEvent& evt);
    void keyNumberHit (const OIS::KeyEvent &arg);

protected:
    std::string mPlayerAnswer;

    MathRacer* mMathRacer;

};

#endif
