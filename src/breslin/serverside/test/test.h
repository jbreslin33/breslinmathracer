#ifndef TEST_H
#define TEST_H

#include "../../fsm/stateMachine.h"

#include "../../message/message.h"

#include <string>
#include <vector>


class QuestionAttempts;
class Message;
class ClientPartido;
class Quiz;
class Utility;

class Test 
{
public:
	
	Test(ClientPartido* clientPartido);
	~Test();

void reset();

void update();
StateMachine<Test>* mStateMachine;



//client
ClientPartido* mClientPartido;

//quiz
Quiz* mQuiz;
Quiz* mQuizLast;

//message
Message mMessage;

//questions
std::string mQuestionString;
int mQuestionID;
int getNewQuestionID();
std::vector<QuestionAttempts*> mQuestionAttemptsVector;
std::vector<QuestionAttempts*> mQuestionAttemptsVectorTemp;
int getLowestUnpassedLevel(int maxLevel);
void getQuestionAttempts();
void sendQuestion(int questionID);

//answer
std::string mStringAnswer;
bool mWaitingForAnswer;
bool mShowCorrectAnswer;
int mAnswerTime;
void insertAnswerAttempt(int questionID, std::string stringAnswer, int answerTime);
void parseAnswer(Message* message);
void readAnswer(int answerTime, std::string answer);

//showCorrectAnswer
void sendCorrectAnswer(int questionID);

//level
int  getMaxLevelAskedID();
bool checkLevel(int level);

int mRandom;
int mCurrent;
int mAdvance;

Utility* mUtility;
};

#endif
