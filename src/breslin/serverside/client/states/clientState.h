#ifndef CLIENTSTATE_H
#define CLIENTSTATE_H

class Client;

class ClientState
{
public:

  virtual ~ClientState(){}

  virtual void enter(Client*)=0;

  virtual void execute(Client*)=0;

  virtual void exit(Client*)=0;
};

#endif
