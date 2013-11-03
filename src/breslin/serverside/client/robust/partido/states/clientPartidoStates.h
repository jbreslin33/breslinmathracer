#ifndef CLIENTPARTIDOSTATES_H
#define CLIENTPARTIDOSTATES_H

#include "../../../../../fsm/state.h"

class ClientPartido;


/*******************************
*      GLOBAL_CLIENT_PARTIDO 
******************************/

class GLOBAL_CLIENT_PARTIDO : public State<ClientPartido>
{
private:
  GLOBAL_CLIENT_PARTIDO(){}
public:
  static GLOBAL_CLIENT_PARTIDO* Instance();
  void enter  (ClientPartido* clientPartido);
  void execute(ClientPartido* clientPartido);
  void exit   (ClientPartido* clientPartido);
  bool onLetter(ClientPartido* clientPartido, Letter* letter);
};

/*******************************
*       CLIENT PARTIDO STATES 
******************************/

class GAME_PARTIDO_MODE : public State<ClientPartido>
{
private:
  GAME_PARTIDO_MODE(){}
public:
  static GAME_PARTIDO_MODE* Instance();
  void enter  (ClientPartido* clientPartido);
  void execute(ClientPartido* clientPartido);
  void exit   (ClientPartido* clientPartido);
  bool onLetter(ClientPartido* clientPartido, Letter* letter);
};

class CLIENT_PARTIDO_BATTLE : public State<ClientPartido>
{
private:
  CLIENT_PARTIDO_BATTLE(){}
public:
  static CLIENT_PARTIDO_BATTLE* Instance();
  void enter  (ClientPartido* clientPartido);
  void execute(ClientPartido* clientPartido);
  void exit   (ClientPartido* clientPartido);
  bool onLetter(ClientPartido* clientPartido, Letter* letter);
};


#endif
