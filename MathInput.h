#ifndef MATHINPUT_H_
#define MATHINPUT_H_

#include "OIS.h"

class MathRacer;

class MathInput
{
public:
	MathInput(MathRacer* mathRacer);
	~MathInput();

	void injectKeyDown(const OIS::KeyEvent& evt);
    void keyNumberHit (const OIS::KeyEvent &arg);

protected:
    MathRacer* mMathRacer;

};

#endif
