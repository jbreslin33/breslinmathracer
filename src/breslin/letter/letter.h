#ifndef LETTER_H
#define LETTER_H

class BaseEntity;
class Message;

class Letter 
{

public:  
  
Letter(BaseEntity* receiver, Message* message);
~Letter();

Message* mMessage;
BaseEntity* mReceiver;
	
};

#endif
