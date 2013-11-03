#ifndef COMPUTERSTATES_H
#define COMPUTERSTATES_H

#include "../../../fsm/state.h"

class Computer;


/*******************************
*     GLOBAL COMPTER 
******************************/

class GLOBAL_COMPUTER : public State<Computer>
{
private:
  GLOBAL_COMPUTER(){}
public:
  static GLOBAL_COMPUTER* Instance();
  void enter  (Computer* computer);
  void execute(Computer* computer);
  void exit   (Computer* computer);
  bool onLetter(Computer* computer, Letter* letter);
};


/*******************************
*     COMPTER 
******************************/

class COMPUTER_CONTROLLED : public State<Computer>
{
private:
  COMPUTER_CONTROLLED(){}
public:
  static COMPUTER_CONTROLLED* Instance();
  void enter  (Computer* computer);
  void execute(Computer* computer);
  void exit   (Computer* computer);
  bool onLetter(Computer* computer, Letter* letter);
};

class HUMAN_CONTROLLED : public State<Computer>
{
private:
  HUMAN_CONTROLLED(){}
public:
  static HUMAN_CONTROLLED* Instance();
  void enter  (Computer* computer);
  void execute(Computer* computer);
  void exit   (Computer* computer);
  bool onLetter(Computer* computer, Letter* letter);
};

#endif
