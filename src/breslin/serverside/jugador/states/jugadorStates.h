#ifndef JUGADORSTATES_H
#define JUGADORSTATES_H

#include "../../../fsm/state.h"

class Jugador;


/*******************************
*      GLOBAL_JUGADOR
******************************/

class GLOBAL_JUGADOR : public State<Jugador>
{
private:
  GLOBAL_JUGADOR(){}
public:
  static GLOBAL_JUGADOR* Instance();
  void enter  (Jugador* jugador);
  void execute(Jugador* jugador);
  void exit   (Jugador* jugador);
  bool onLetter(Jugador* jugador, Letter* letter);
};

/*******************************
*      Jugador
******************************/
class INIT_JUGADOR : public State<Jugador>
{
private:
  INIT_JUGADOR(){}
public:
  static INIT_JUGADOR* Instance();
  void enter  (Jugador* jugador);
  void execute(Jugador* jugador);
  void exit   (Jugador* jugador);
  bool onLetter(Jugador* jugador, Letter* letter);
};

class GAME_JUGADOR : public State<Jugador>
{
private:
  GAME_JUGADOR(){}
public:
  static GAME_JUGADOR* Instance();
  void enter  (Jugador* jugador);
  void execute(Jugador* jugador);
  void exit   (Jugador* jugador);
  bool onLetter(Jugador* jugador, Letter* letter);
};

class BATTLE_JUGADOR : public State<Jugador>
{
private:
  BATTLE_JUGADOR(){}
public:
  static BATTLE_JUGADOR* Instance();
  void enter  (Jugador* jugador);
  void execute(Jugador* jugador);
  void exit   (Jugador* jugador);
  bool onLetter(Jugador* jugador, Letter* letter);
};

#endif
