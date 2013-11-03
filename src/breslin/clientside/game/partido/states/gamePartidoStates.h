#ifndef GAMEPARTIDOSTATES_H
#define GAMEPARTIDOSTATES_H

#include "../../../../fsm/state.h"

class GamePartido;

/******************************************************
*			BATTLE_OFF
********************************************************/
class BATTLE_OFF : public State<GamePartido>
{
private:
  BATTLE_OFF(){}
public:
  static BATTLE_OFF* Instance();
  void enter  (GamePartido* gamePartido);
  void execute(GamePartido* gamePartido);
  void exit   (GamePartido* gamePartido);
  bool onLetter(GamePartido* gamePartido, Letter* letter);
};

/******************************************************
*			ANSWER_QUESTION	
********************************************************/
class ANSWER_QUESTION : public State<GamePartido>
{
private:
  ANSWER_QUESTION(){}
public:
  static ANSWER_QUESTION* Instance();
  void enter  (GamePartido* gamePartido);
  void execute(GamePartido* gamePartido);
  void exit   (GamePartido* gamePartido);
  bool onLetter(GamePartido* gamePartido, Letter* letter);
};


/******************************************************
*			SHOWCORRECTANSWER_PARTIDO_GAME	
********************************************************/
class SHOWCORRECTANSWER_PARTIDO_GAME : public State<GamePartido>
{
private:
  SHOWCORRECTANSWER_PARTIDO_GAME(){}
public:
  static SHOWCORRECTANSWER_PARTIDO_GAME* Instance();
  void enter  (GamePartido* gamePartido);
  void execute(GamePartido* gamePartido);
  void exit   (GamePartido* gamePartido);
  bool onLetter(GamePartido* gamePartido, Letter* letter);
};

#endif
