#ifndef GAMESTATES_H
#define GAMESTATES_H

#include "../../../fsm/state.h"

class Game;
struct Telegram;

/*******************************
*      GLOBAL_GAME
******************************/

class GLOBAL_GAME : public State<Game>
{
private:
  GLOBAL_GAME(){}
public:
  static GLOBAL_GAME* Instance();
  void enter  (Game* move);
  void execute(Game* move);
  void exit   (Game* move);
  bool onLetter(Game* move, Letter* letter);
};

/*******************************
*      INIT_GAME
******************************/

class INIT_GAME : public State<Game>
{
private:
  INIT_GAME(){}
public:
  static INIT_GAME* Instance();
  void enter  (Game* move);
  void execute(Game* move);
  void exit   (Game* move);
  bool onLetter(Game* move, Letter* letter);
};

/*******************************
*      NORMAL_GAME
******************************/

class NORMAL_GAME : public State<Game>
{
private:
  NORMAL_GAME(){}
public:
  static NORMAL_GAME* Instance();
  void enter  (Game* move);
  void execute(Game* move);
  void exit   (Game* move);
  bool onLetter(Game* move, Letter* letter);
};

/*******************************
*      RESET_GAME
******************************/

class RESET_GAME : public State<Game>
{
private:
  RESET_GAME(){}
public:
  static RESET_GAME* Instance();
  void enter  (Game* move);
  void execute(Game* move);
  void exit   (Game* move);
  bool onLetter(Game* move, Letter* letter);
};

#endif
