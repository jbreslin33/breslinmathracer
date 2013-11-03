#ifndef MOVESTATES_H
#define MOVESTATES_H

#include "../../../fsm/state.h"

class Move;
struct Telegram;

/*******************************
*      GLOBAL_MOVE
******************************/

class GLOBAL_MOVE : public State<Move>
{
private:
  GLOBAL_MOVE(){}
public:
  static GLOBAL_MOVE* Instance();
  void enter  (Move* move);
  void execute(Move* move);
  void exit   (Move* move);
  bool onLetter(Move* move, Letter* letter);
};


/*******************************
*      Move
******************************/
class NORMAL_MOVE : public State<Move>
{
private:
  NORMAL_MOVE(){}
public:
  static NORMAL_MOVE* Instance();
  void enter  (Move* move);
  void execute(Move* move);
  void exit   (Move* move);
  bool onLetter(Move* move, Letter* letter);
};

class NO_MOVE : public State<Move>
{
private:
  NO_MOVE(){}
public:
  static NO_MOVE* Instance();
  void enter  (Move* move);
  void execute(Move* move);
  void exit   (Move* move);
  bool onLetter(Move* move, Letter* letter);
};

class ACCELERATE_MOVE : public State<Move>
{
private:
  ACCELERATE_MOVE(){}
public:
  static ACCELERATE_MOVE* Instance();
  void enter  (Move* move);
  void execute(Move* move);
  void exit   (Move* move);
  bool onLetter(Move* move, Letter* letter);
};

class DECELERATE_MOVE : public State<Move>
{
private:
  DECELERATE_MOVE(){}
public:
  static DECELERATE_MOVE* Instance();
  void enter  (Move* move);
  void execute(Move* move);
  void exit   (Move* move);
  bool onLetter(Move* move, Letter* letter);
};
#endif
