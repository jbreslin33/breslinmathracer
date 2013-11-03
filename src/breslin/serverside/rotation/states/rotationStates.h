#ifndef ROTATIONSTATES_H
#define ROTATIONSTATES_H

#include "../../../fsm/state.h"

class Rotation;
struct Telegram;


/*******************************
*      GLOBAL_ROTATION
******************************/

class GLOBAL_ROTATION : public State<Rotation>
{
private:
  GLOBAL_ROTATION(){}
public:
  static GLOBAL_ROTATION* Instance();
  void enter  (Rotation* rotation);
  void execute(Rotation* rotation);
  void exit   (Rotation* rotation);
  bool onLetter(Rotation* rotation, Letter* letter);
};


/*******************************
*      ROTATION 
******************************/

class NORMAL_ROTATION : public State<Rotation>
{
private:
  NORMAL_ROTATION(){}
public:
  static NORMAL_ROTATION* Instance();
  void enter  (Rotation* rotation);
  void execute(Rotation* rotation);
  void exit   (Rotation* rotation);
  bool onLetter(Rotation* rotation, Letter* letter);
};

class NO_ROTATION : public State<Rotation>
{
private:
  NO_ROTATION(){}
public:
  static NO_ROTATION* Instance();
  void enter  (Rotation* rotation);
  void execute(Rotation* rotation);
  void exit   (Rotation* rotation);
  bool onLetter(Rotation* rotation, Letter* letter);
};

class ACCELERATE_ROTATION : public State<Rotation>
{
private:
  ACCELERATE_ROTATION(){}
public:
  static ACCELERATE_ROTATION* Instance();
  void enter  (Rotation* rotation);
  void execute(Rotation* rotation);
  void exit   (Rotation* rotation);
  bool onLetter(Rotation* rotation, Letter* letter);
};

class DECELERATE_ROTATION : public State<Rotation>
{
private:
  DECELERATE_ROTATION(){}
public:
  static DECELERATE_ROTATION* Instance();
  void enter  (Rotation* rotation);
  void execute(Rotation* rotation);
  void exit   (Rotation* rotation);
  bool onLetter(Rotation* rotation, Letter* letter);
};

#endif
