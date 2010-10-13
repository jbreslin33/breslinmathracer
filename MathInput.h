#ifndef MATHINPUT_H_
#define MATHINPUT_H_

#include "OIS.h"

class TutorialApplication;

class MathInput
{
public:
	MathInput();
	~MathInput();

	//input
	void injectKeyDown(const OIS::KeyEvent& evt);
    void keyNumberHit (const OIS::KeyEvent &arg);

protected:
    //TutorialApplication* mTutorialApplication;
    std::string mPlayerAnswer;

};

#endif
