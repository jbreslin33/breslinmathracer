#ifndef GAMESTATES_H
#define GAMESTATES_H

#include "../../../fsm/state.h"

class Game;

/******************************************************
*				NORMAL
********************************************************/
class PLAY_GAME : public State<Game>
{
private:
  PLAY_GAME(){}
public:
  static PLAY_GAME* Instance();
  void enter  (Game* game);
  void execute(Game* game);
  void exit   (Game* game);
  bool onLetter(Game* game, Letter* letter);
};


class RESET_GAME : public State<Game>
{
private:
  RESET_GAME(){}
public:
  static RESET_GAME* Instance();
  void enter  (Game* game);
  void execute(Game* game);
  void exit   (Game* game);
  bool onLetter(Game* game, Letter* letter);
};

#endif
