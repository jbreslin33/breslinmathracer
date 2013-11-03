//parent
#include "testStates.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//test
#include "../test.h"

//client
#include "../../client/robust/partido/clientPartido.h"

/*****************************************
*******       GLOBAL    ******************
****************************************/
GLOBAL_TEST* GLOBAL_TEST::Instance()
{
  static GLOBAL_TEST instance;
  return &instance;
}
void GLOBAL_TEST::enter(Test* test)
{
}
void GLOBAL_TEST::execute(Test* test)
{

}
void GLOBAL_TEST::exit(Test* test)
{
}
bool GLOBAL_TEST::onLetter(Test* test, Letter* letter)
{
        return true;
}

/*****************************************
	INIT_TEST
****************************************/
INIT_TEST* INIT_TEST::Instance()
{
	static INIT_TEST instance;
	return &instance;
}
void INIT_TEST::enter(Test* test)
{
}
void INIT_TEST::execute(Test* test)
{
	if (test->mQuiz)
	{
		test->mStateMachine->changeState(NORMAL_TEST::Instance());
	}
}
void INIT_TEST::exit(Test* test)
{
}
bool INIT_TEST::onLetter(Test* test, Letter* letter)
{
        return true;
}


/*****************************************
	NORMAL_TEST
****************************************/
NORMAL_TEST* NORMAL_TEST::Instance()
{
  static NORMAL_TEST instance;
  return &instance;
}
void NORMAL_TEST::enter(Test* test)
{
}
void NORMAL_TEST::execute(Test* test)
{
	if (!test->mQuiz)
	{
		test->mStateMachine->changeState(OVER_TEST::Instance());
	}
}
void NORMAL_TEST::exit(Test* test)
{
}
bool NORMAL_TEST::onLetter(Test* test, Letter* letter)
{
        return true;
}

/*****************************************
	OVER_TEST
****************************************/
OVER_TEST* OVER_TEST::Instance()
{
	static OVER_TEST instance;
	return &instance;
}
void OVER_TEST::enter(Test* test)
{
}
void OVER_TEST::execute(Test* test)
{
	if (test->mQuiz)
	{
		test->mStateMachine->changeState(NORMAL_TEST::Instance());
	}
}
void OVER_TEST::exit(Test* test)
{
}
bool OVER_TEST::onLetter(Test* test, Letter* letter)
{
        return true;
}
