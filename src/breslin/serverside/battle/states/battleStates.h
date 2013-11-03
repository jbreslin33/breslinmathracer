#ifndef BATTLESTATES_H
#define BATTLESTATES_H

#include "../../../fsm/state.h"

class Battle;
struct Telegram;


/*******************************
*      GLOBAL_BATTLE
******************************/

class GLOBAL_BATTLE : public State<Battle>
{
private:
  GLOBAL_BATTLE(){}
public:
  static GLOBAL_BATTLE* Instance();
  void enter  (Battle* battle);
  void execute(Battle* battle);
  void exit   (Battle* battle);
  bool onLetter(Battle* battle, Letter* letter);
};

/*******************************
*      Battle
******************************/

class INIT_BATTLE : public State<Battle>
{
private:
  INIT_BATTLE(){}
public:
  static INIT_BATTLE* Instance();
  void enter  (Battle* battle);
  void execute(Battle* battle);
  void exit   (Battle* battle);
  bool onLetter(Battle* battle, Letter* letter);
};

class NORMAL_BATTLE : public State<Battle>
{
private:
  NORMAL_BATTLE(){}
public:
  static NORMAL_BATTLE* Instance();
  void enter  (Battle* battle);
  void execute(Battle* battle);
  void exit   (Battle* battle);
  bool onLetter(Battle* battle, Letter* letter);
};

class OVER_BATTLE : public State<Battle>
{
private:
  OVER_BATTLE(){}
public:
  static OVER_BATTLE* Instance();
  void enter  (Battle* battle);
  void execute(Battle* battle);
  void exit   (Battle* battle);
  bool onLetter(Battle* battle, Letter* letter);
};

#endif
