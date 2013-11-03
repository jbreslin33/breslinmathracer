#ifndef CLIENTSTATEMACHINE_H
#define CLIENTSTATEMACHINE_H
#include "clientState.h"

class Client;

class ClientStateMachine
{
private:
  //a pointer to the agent that owns this instance
  Client*   mClient;
  ClientState*    mCurrentState;

  //a record of the last state the agent was in
  ClientState*   mPreviousState;

  //this is called every time the FSM is updated
  ClientState*   mGlobalState;

public:

  ClientStateMachine(Client* owner):mClient(owner),
	                               mCurrentState(0),
                                   mPreviousState(0),
                                   mGlobalState(0)
  {}

  virtual ~ClientStateMachine(){}

  //use these methods to initialize the FSM
  void setCurrentState(ClientState* s){mCurrentState = s;}
  void setGlobalState(ClientState* s) {mGlobalState = s;}
  void setPreviousState(ClientState* s){mPreviousState = s;}

  //call this to update the FSM
  void  update()const
  {
    if(mGlobalState)
   	mGlobalState->execute(mClient);
    if (mCurrentState) mCurrentState->execute(mClient);
  }

  //change to a new state
  void  changeState(ClientState* mNewState)
  {

    mPreviousState = mCurrentState;

	if(mCurrentState)
       mCurrentState->exit(mClient);

    mCurrentState = mNewState;

	if(mCurrentState)
       mCurrentState->enter(mClient);
  }

  void  revertToPreviousState()
  {
    changeState(mPreviousState);
  }

  ClientState*  currentState()  const{return mCurrentState;}
  ClientState*  globalState()   const{return mGlobalState;}
  ClientState*  previousState() const{return mPreviousState;}
};
#endif


