#ifndef MAILMAN_H
#define MAILMAN_H

class Server;
class BaseEntity;
class Letter;

class MailMan
{

public:  
  
MailMan(Server* server);
~MailMan();

Server* mServer;
  
void deliver(BaseEntity* receiver, Letter* letter);
	
};

#endif
