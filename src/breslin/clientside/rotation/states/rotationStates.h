#ifndef ROTATIONSTATES_H
#define ROTATIONSTATES_H

#include "../../../fsm/state.h"

class Rotation;

/******************************************************
*				GLOBAL
********************************************************/

class GLOBAL_PROCESSTICK_ROTATION : public State<Rotation>
{
private:
  GLOBAL_PROCESSTICK_ROTATION(){}
public:
  static GLOBAL_PROCESSTICK_ROTATION* Instance();
  void enter  (Rotation* rotation);
  void execute(Rotation* rotation);
  void exit   (Rotation* rotation);
  bool onLetter(Rotation* rotation, Letter* letter);
};

/******************************************************
*				NORMAL
********************************************************/
class NORMAL_PROCESSTICK_ROTATION : public State<Rotation>
{
private:
  NORMAL_PROCESSTICK_ROTATION(){}
public:
  static NORMAL_PROCESSTICK_ROTATION* Instance();
  void enter  (Rotation* rotation);
  void execute(Rotation* rotation);
  void exit   (Rotation* rotation);
  bool onLetter(Rotation* rotation, Letter* letter);
};

/******************************************************
*				CATCHUP
********************************************************/
class CATCHUP_PROCESSTICK_ROTATION : public State<Rotation>
{
private:
  CATCHUP_PROCESSTICK_ROTATION(){}
public:
  static CATCHUP_PROCESSTICK_ROTATION* Instance();
  void enter  (Rotation* rotation);
  void execute(Rotation* rotation);
  void exit   (Rotation* rotation);
  bool onLetter(Rotation* rotation, Letter* letter);
};

/******************************************************
*				INTERPOLATE TICK
*
*				   STATES
*
********************************************************/


/******************************************************
*				NORMAL
********************************************************/

class NORMAL_INTERPOLATETICK_ROTATION : public State<Rotation>
{
private:
  NORMAL_INTERPOLATETICK_ROTATION(){}
public:
  static NORMAL_INTERPOLATETICK_ROTATION* Instance();
  void enter  (Rotation* rotation);
  void execute(Rotation* rotation);
  void exit   (Rotation* rotation);
  bool onLetter(Rotation* rotation, Letter* letter);
};

/******************************************************
*				OFF
********************************************************/
class OFF_INTERPOLATETICK_ROTATION : public State<Rotation>
{
private:
  OFF_INTERPOLATETICK_ROTATION(){}
public:
  static OFF_INTERPOLATETICK_ROTATION* Instance();
  void enter  (Rotation* rotation);
  void execute(Rotation* rotation);
  void exit   (Rotation* rotation);
  bool onLetter(Rotation* rotation, Letter* letter);
};
#endif
