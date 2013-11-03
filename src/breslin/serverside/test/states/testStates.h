#ifndef TESTSTATES_H
#define TESTSTATES_H

#include "../../../fsm/state.h"

class Test;


/*******************************
*      GLOBAL_TEST
******************************/

class GLOBAL_TEST : public State<Test>
{
private:
  GLOBAL_TEST(){}
public:
  static GLOBAL_TEST* Instance();
  void enter  (Test* test);
  void execute(Test* test);
  void exit   (Test* test);
  bool onLetter(Test* test, Letter* letter);
};

/*******************************
*      Test
******************************/

class INIT_TEST : public State<Test>
{
private:
  INIT_TEST(){}
public:
  static INIT_TEST* Instance();
  void enter  (Test* test);
  void execute(Test* test);
  void exit   (Test* test);
  bool onLetter(Test* test, Letter* letter);
};

class NORMAL_TEST : public State<Test>
{
private:
  NORMAL_TEST(){}
public:
  static NORMAL_TEST* Instance();
  void enter  (Test* test);
  void execute(Test* test);
  void exit   (Test* test);
  bool onLetter(Test* test, Letter* letter);
};

class OVER_TEST : public State<Test>
{
private:
  OVER_TEST(){}
public:
  static OVER_TEST* Instance();
  void enter  (Test* test);
  void execute(Test* test);
  void exit   (Test* test);
  bool onLetter(Test* test, Letter* letter);
};

#endif
