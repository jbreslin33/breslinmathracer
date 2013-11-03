#ifndef SEEKTATES_H
#define SEEKSTATES_H

#include "../../../fsm/state.h"

class Steering;
struct Telegram;


/*******************************
*      GLOBAL_STEERING
******************************/

class GLOBAL_STEERING : public State<Steering>
{
private:
  GLOBAL_STEERING(){}
public:
  static GLOBAL_STEERING* Instance();
  void enter  (Steering* steering);
  void execute(Steering* steering);
  void exit   (Steering* steering);
  bool onLetter(Steering* steering, Letter* letter);
};

/*******************************
*      Steering
******************************/

class NORMAL_STEERING : public State<Steering>
{
private:
  NORMAL_STEERING(){}
public:
  static NORMAL_STEERING* Instance();
  void enter  (Steering* steering);
  void execute(Steering* steering);
  void exit   (Steering* steering);
  bool onLetter(Steering* steering, Letter* letter);
};

class NO_STEERING : public State<Steering>
{
private:
  NO_STEERING(){}
public:
  static NO_STEERING* Instance();
  void enter  (Steering* steering);
  void execute(Steering* steering);
  void exit   (Steering* steering);
  bool onLetter(Steering* steering, Letter* letter);
};

#endif
