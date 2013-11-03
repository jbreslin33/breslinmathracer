#ifndef APPLICATIONSTATES_H
#define APPLICATIONSTATES_H

#include "../../../fsm/state.h"

#include "../applicationBreslin.h"


class Application;
/******************************************************
	         GLOBAL_APPLICATION
********************************************************/

class GLOBAL_APPLICATION : public State<ApplicationBreslin>
{
private:
  GLOBAL_APPLICATION(){}
public:
  static GLOBAL_APPLICATION* Instance();
  void enter  (ApplicationBreslin* applicationBreslin);
  void execute(ApplicationBreslin* applicationBreslin);
  void exit   (ApplicationBreslin* applicationBreslin);
  bool onLetter(ApplicationBreslin* applicationBreslin, Letter* letter);
};


/******************************************************
*				NORMAL
********************************************************/
class INIT_APPLICATION : public State<ApplicationBreslin>
{
private:
  INIT_APPLICATION(){}
public:
  static INIT_APPLICATION* Instance();
  void enter  (ApplicationBreslin* applicationBreslin);
  void execute(ApplicationBreslin* applicationBreslin);
  void exit   (ApplicationBreslin* applicationBreslin);
  bool onLetter(ApplicationBreslin* applicationBreslin, Letter* letter);
};

/******************************************************
*				NORMAL
********************************************************/
class LOGIN_APPLICATION : public State<ApplicationBreslin>
{
private:
  LOGIN_APPLICATION(){}
public:
  static LOGIN_APPLICATION* Instance();
  void enter  (ApplicationBreslin* applicationBreslin);
  void execute(ApplicationBreslin* applicationBreslin);
  void exit   (ApplicationBreslin* applicationBreslin);
  bool onLetter(ApplicationBreslin* applicationBreslin, Letter* letter);
};

/******************************************************
*			MAIN_APPLICATION	
********************************************************/
class MAIN_APPLICATION : public State<ApplicationBreslin>
{
private:
  MAIN_APPLICATION(){}
public:
  static MAIN_APPLICATION* Instance();
  void enter  (ApplicationBreslin* applicationBreslin);
  void execute(ApplicationBreslin* applicationBreslin);
  void exit   (ApplicationBreslin* applicationBreslin);
  bool onLetter(ApplicationBreslin* applicationBreslin, Letter* letter);
};

/******************************************************
*                       PLAY_APPLICATION
********************************************************/
class PLAY_APPLICATION : public State<ApplicationBreslin>
{
private:
  PLAY_APPLICATION(){}
public:
  static PLAY_APPLICATION* Instance();
  void enter  (ApplicationBreslin* applicationBreslin);
  void execute(ApplicationBreslin* applicationBreslin);
  void exit   (ApplicationBreslin* applicationBreslin);
  bool onLetter(ApplicationBreslin* applicationBreslin, Letter* letter);
};

/******************************************************
*                       EXIT_APPLICATION
********************************************************/
class EXIT_APPLICATION : public State<ApplicationBreslin>
{
private:
  EXIT_APPLICATION(){}
public:
  static EXIT_APPLICATION* Instance();
  void enter  (ApplicationBreslin* applicationBreslin);
  void execute(ApplicationBreslin* applicationBreslin);
  void exit   (ApplicationBreslin* applicationBreslin);
  bool onLetter(ApplicationBreslin* applicationBreslin, Letter* letter);
};

#endif
