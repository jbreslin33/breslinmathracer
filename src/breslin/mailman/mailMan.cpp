#include "mailMan.h"
#include "../baseentity/baseEntity.h"
#include "../serverside/server/server.h"

//log
#include "../serverside/tdreamsock/dreamSockLog.h"

MailMan::MailMan(Server* server)
{
        mServer = server;
}

MailMan::~MailMan()
{
}

void MailMan::deliver(BaseEntity* receiver, Letter* letter)
{
  	//make sure the receiver is valid
  	if (receiver == NULL)
  	{
		LogString("WARNING: Receiver not found with id:%d",receiver->mID);
    		return;
  	}
	
	if (!receiver->handleLetter(letter))
  	{
		LogString("letter could not be handled");
  	}
}
