#ifndef COMPUTERPARTIDOSTATES_H
#define COMPUTERPARTIDOSTATES_H

#include "../../../../fsm/state.h"

class ComputerPartido;

/*******************************
*     GLOBAL COMPTER 
******************************/

class GLOBAL_COMPUTER_PARTIDO : public State<ComputerPartido>
{
private:
  GLOBAL_COMPUTER_PARTIDO(){}
public:
  static GLOBAL_COMPUTER_PARTIDO* Instance();
  void enter  (ComputerPartido* computerPartido);
  void execute(ComputerPartido* computerPartido);
  void exit   (ComputerPartido* computerPartido);
  bool onLetter(ComputerPartido* computerPartido, Letter* letter);
};


/*******************************
*     COMPTER 
******************************/

class COMPUTER_CONTROLLED_PARTIDO : public State<ComputerPartido>
{
private:
  COMPUTER_CONTROLLED_PARTIDO(){}
public:
  static COMPUTER_CONTROLLED_PARTIDO* Instance();
  void enter  (ComputerPartido* computerPartido);
  void execute(ComputerPartido* computerPartido);
  void exit   (ComputerPartido* computerPartido);
  bool onLetter(ComputerPartido* computerPartido, Letter* letter);
};

class HUMAN_CONTROLLED_PARTIDO : public State<ComputerPartido>
{
private:
  HUMAN_CONTROLLED_PARTIDO(){}
public:
  static HUMAN_CONTROLLED_PARTIDO* Instance();
  void enter  (ComputerPartido* computerPartido);
  void execute(ComputerPartido* computerPartido);
  void exit   (ComputerPartido* computerPartido);
  bool onLetter(ComputerPartido* computerPartido, Letter* letter);
};
#endif
