#ifndef CLIENTROBUSTSTATES_H
#define CLIENTROBUSTSTATES_H

#include "../../../../fsm/state.h"

class ClientRobust;


/*******************************
*      GLOBAL_ROBUST 
******************************/

class GLOBAL_ROBUST : public State<ClientRobust>
{
private:
  GLOBAL_ROBUST(){}
public:
  static GLOBAL_ROBUST* Instance();
  void enter  (ClientRobust* clientRobust);
  void execute(ClientRobust* clientRobust);
  void exit   (ClientRobust* clientRobust);
  bool onLetter(ClientRobust* clientRobust, Letter* letter);
};

/*******************************
*       CLIENT STATES 
******************************/

class LOGGED_OUT : public State<ClientRobust>
{
private:
  LOGGED_OUT(){}
public:
  static LOGGED_OUT* Instance();
  void enter  (ClientRobust* clientRobust);
  void execute(ClientRobust* clientRobust);
  void exit   (ClientRobust* clientRobust);
  bool onLetter(ClientRobust* clientRobust, Letter* letter);
};

class LOBBY : public State<ClientRobust>
{
private:
  LOBBY(){}
public:
  static LOBBY* Instance();
  void enter  (ClientRobust* clientRobust);
  void execute(ClientRobust* clientRobust);
  void exit   (ClientRobust* clientRobust);
  bool onLetter(ClientRobust* clientRobust, Letter* letter);
};

class GAME_MODE : public State<ClientRobust>
{
private:
  GAME_MODE(){}
public:
  static GAME_MODE* Instance();
  void enter  (ClientRobust* clientRobust);
  void execute(ClientRobust* clientRobust);
  void exit   (ClientRobust* clientRobust);
  bool onLetter(ClientRobust* clientRobust, Letter* letter);
};

#endif
