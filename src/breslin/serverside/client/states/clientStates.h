#ifndef CLIENTSTATES_H
#define CLIENTSTATES_H

#include "../../../fsm/state.h"

class Client;
struct Telegram;


/*******************************
*      GLOBAL_CLIENT 
******************************/

class GLOBAL_CLIENT : public State<Client>
{
private:
  GLOBAL_CLIENT(){}
public:
  static GLOBAL_CLIENT* Instance();
  void enter  (Client* client);
  void execute(Client* client);
  void exit   (Client* client);
  bool onLetter(Client* client, Letter* letter);
};

#endif
