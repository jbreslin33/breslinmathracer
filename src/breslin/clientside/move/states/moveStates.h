#ifndef MOVESTATES_H
#define MOVESTATES_H

#include "../../../fsm/state.h"

class Move;
/******************************************************
	         GLOBAL_MOVE
********************************************************/

class GLOBAL_PROCESSTICK_MOVE : public State<Move>
{
private:
  GLOBAL_PROCESSTICK_MOVE(){}
public:
  static GLOBAL_PROCESSTICK_MOVE* Instance();
  void enter  (Move* move);
  void execute(Move* move);
  void exit   (Move* move);
  bool onLetter(Move* move, Letter* letter);
};


/******************************************************
*				NORMAL
********************************************************/
class NORMAL_PROCESSTICK_MOVE : public State<Move>
{
private:
  NORMAL_PROCESSTICK_MOVE(){}
public:
  static NORMAL_PROCESSTICK_MOVE* Instance();
  void enter  (Move* move);
  void execute(Move* move);
  void exit   (Move* move);
  bool onLetter(Move* move, Letter* letter);
};

/******************************************************
*				NORMAL
********************************************************/
class STOP_PROCESSTICK_MOVE : public State<Move>
{
private:
  STOP_PROCESSTICK_MOVE(){}
public:
  static STOP_PROCESSTICK_MOVE* Instance();
  void enter  (Move* move);
  void execute(Move* move);
  void exit   (Move* move);
  bool onLetter(Move* move, Letter* letter);
};

/******************************************************
*				CATCHUP
********************************************************/
class CATCHUP_PROCESSTICK_MOVE : public State<Move>
{
private:
  CATCHUP_PROCESSTICK_MOVE(){}
public:
  static CATCHUP_PROCESSTICK_MOVE* Instance();
  void enter  (Move* move);
  void execute(Move* move);
  void exit   (Move* move);
  bool onLetter(Move* move, Letter* letter);
};

/******************************************************
*				INTERPOLATE TICK
*
*				   STATES
********************************************************/

/******************************************************
*				NORMAL
********************************************************/
class NORMAL_INTERPOLATETICK_MOVE : public State<Move>
{
private:
  NORMAL_INTERPOLATETICK_MOVE(){}
public:
  static NORMAL_INTERPOLATETICK_MOVE* Instance();
  void enter  (Move* move);
  void execute(Move* move);
  void exit   (Move* move);
  bool onLetter(Move* move, Letter* letter);
};

#endif
  bool onLetter(Move* move, Letter* letter);
