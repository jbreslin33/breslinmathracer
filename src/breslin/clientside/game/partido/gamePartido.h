#ifndef GAMEPARTIDO_H
#define GAMEPARTIDO_H

#include "../game.h"

//Ogre
#include <OgreEntity.h>

//standard library
#include <vector>

#include "../../../fsm/stateMachine.h"

template <class entity_type> class State;

class ApplicationPartido;

class GamePartido : public Game 
{
public:
	
	GamePartido(ApplicationPartido* applicationPartido);
	~GamePartido();

public:
virtual void processUpdate();

virtual void processMoveControls();

StateMachine<GamePartido>* mPartidoStateMachine;

ApplicationPartido* mApplicationPartido;

//reset
virtual void reset();

//question
static const char mMessageAskQuestion = -76;

//battle
static const char mMessageBattleStart = -75;
static const char mMessageBattleEnd   = -74;

//showCorrectAnswer
static const char mMessageCorrectAnswerStart = -61;
static const char mMessageCorrectAnswer = -62;
static const char mMessageCorrectAnswerEnd = -63;

virtual void checkByteBuffer(ByteBuffer* byteBuffer);
void askQuestion(ByteBuffer* byteBuffer);
void correctAnswer(ByteBuffer* byteBuffer);

//correctAnswer
bool mCorrectAnswerStart;
bool mCorrectAnswerEnd;
};

#endif
