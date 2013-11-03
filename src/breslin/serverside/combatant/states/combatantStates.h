#ifndef COMBATANTSTATES_H
#define COMBATANTSTATES_H

#include "../../../fsm/state.h"

class Combatant;


/*******************************
*      GLOBAL_COMBATANT
******************************/

class GLOBAL_COMBATANT : public State<Combatant>
{
private:
  GLOBAL_COMBATANT(){}
public:
  static GLOBAL_COMBATANT* Instance();
  void enter  (Combatant* battle);
  void execute(Combatant* battle);
  void exit   (Combatant* battle);
  bool onLetter(Combatant* battle, Letter* letter);
};

/*******************************
*      Combatant
******************************/

class INIT_COMBATANT : public State<Combatant>
{
private:
  INIT_COMBATANT(){}
public:
  static INIT_COMBATANT* Instance();
  void enter  (Combatant* battle);
  void execute(Combatant* battle);
  void exit   (Combatant* battle);
  bool onLetter(Combatant* battle, Letter* letter);
};

class NORMAL_COMBATANT : public State<Combatant>
{
private:
  NORMAL_COMBATANT(){}
public:
  static NORMAL_COMBATANT* Instance();
  void enter  (Combatant* battle);
  void execute(Combatant* battle);
  void exit   (Combatant* battle);
  bool onLetter(Combatant* battle, Letter* letter);
};

class YIELD : public State<Combatant>
{
private:
  YIELD(){}
public:
  static YIELD* Instance();
  void enter  (Combatant* battle);
  void execute(Combatant* battle);
  void exit   (Combatant* battle);
  bool onLetter(Combatant* battle, Letter* letter);
};

#endif
