#ifndef QUIZ_H
#define QUIZ_H

#include "../../fsm/stateMachine.h"

#include "../../message/message.h"

#include <string>
#include <vector>

class QuestionAttempts;
class Message;
class Combatant;
class Test;

class Quiz 
{
public:
	
Quiz(Combatant* combatant);
~Quiz();

void update();

StateMachine<Quiz>* mStateMachine;

//combatant
Combatant* mCombatant;

//test
Test* mTest;

//message
Message mMessage;

//question
int mComputerAskedTime;

//answer
int mComputerAnswerTime;

//correctAnswer
int mCorrectAnswerTime;
int mCorrectAnswerStartTime;
};

#endif
