#ifndef JUGADOR_H
#define JUGADOR_H

#include "../../fsm/stateMachine.h"

class Battle;
class ClientPartido;
class Quiz;

class Jugador 
{

public:

Jugador(ClientPartido* clientPartido);
virtual ~Jugador();

//update
void update();

StateMachine<Jugador>* mStateMachine;
Battle* mBattle;
ClientPartido* mClientPartido;
Jugador* mFoe;
Quiz* mQuiz;

//score
int mScore;


};

#endif

