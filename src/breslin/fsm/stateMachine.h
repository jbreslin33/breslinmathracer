#ifndef FSTATEMACHINE_H
#define FSTATEMACHINE_H

#include <cassert>
#include <string>

#include "state.h"

//log
#include "../serverside/tdreamsock/dreamSockLog.h"

#include <typeinfo>
template <class entity_type>

class StateMachine
{
private:

  //a pointer to the agent that owns this instance
  entity_type*          m_pOwner;

  State<entity_type>*   m_pCurrentState;
  
  //a record of the last state the agent was in
  State<entity_type>*   m_pPreviousState;

  //this is called every time the FSM is updated
  State<entity_type>*   m_pGlobalState;
  

public:

  StateMachine(entity_type* owner):m_pOwner(owner),
                                   m_pCurrentState(NULL),
                                   m_pPreviousState(NULL),
                                   m_pGlobalState(NULL)
  {}

  virtual ~StateMachine(){}

  //use these methods to initialize the FSM
  void setCurrentState(State<entity_type>* s){m_pCurrentState = s;}
  void setGlobalState(State<entity_type>* s) {m_pGlobalState = s;}
  void setPreviousState(State<entity_type>* s){m_pPreviousState = s;}
  
  //call this to update the FSM
void  update()const
{
    	if(m_pGlobalState)
	{
		m_pGlobalState->execute(m_pOwner);
	}	

    	if (m_pCurrentState)
	{
		m_pCurrentState->execute(m_pOwner);
	}
  }

bool  handleLetter(Letter* letter)const
{
	if (m_pCurrentState && m_pCurrentState->onLetter(m_pOwner, letter))
    	{
      		return true;
    	}
  
    	if (m_pGlobalState && m_pGlobalState->onLetter(m_pOwner, letter))
    	{
      		return true;
    	}

    	return false;
}

  //change to a new state
  void  changeState(State<entity_type>* pNewState)
  {
    assert(pNewState && "<StateMachine::ChangeState>:trying to assign null state to current");

    //keep a record of the previous state
    m_pPreviousState = m_pCurrentState;

    //call the exit method of the existing state
    m_pCurrentState->exit(m_pOwner);

    //change state to the new state
    m_pCurrentState = pNewState;

    //call the entry method of the new state
    m_pCurrentState->enter(m_pOwner);
  }

  //change state back to the previous state
  void  revertToPreviousState()
  {
    changeState(m_pPreviousState);
  }

  //returns true if the current state's type is equal to the type of the
  //class passed as a parameter. 
  bool  isInState(const State<entity_type>& st)const
  {
    if (typeid(*m_pCurrentState) == typeid(st)) return true;
    return false;
  }

  State<entity_type>*  currentState()  const{return m_pCurrentState;}
  State<entity_type>*  globalState()   const{return m_pGlobalState;}
  State<entity_type>*  previousState() const{return m_pPreviousState;}

  //only ever used during debugging to grab the name of the current state
  std::string         getNameOfCurrentState()const
  {
    std::string s(typeid(*m_pCurrentState).name());

    //remove the 'class ' part from the front of the string
    if (s.size() > 5)
    {
      s.erase(0, 6);
    }

    return s;
  }
};




#endif


