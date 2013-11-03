#include "letter.h"

#include "../baseentity/baseEntity.h"
#include "../message/message.h"

//log
#include "../serverside/tdreamsock/dreamSockLog.h"

//message
#include "../message/message.h"

Letter::Letter(BaseEntity* receiver, Message* message)
{
        mReceiver = receiver;
	mMessage = message;
}

Letter::~Letter()
{
}

