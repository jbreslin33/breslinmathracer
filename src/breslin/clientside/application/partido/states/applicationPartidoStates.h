#ifndef APPLICATIONPARTIDOSTATES_H
#define APPLICATIONPARTIDOSTATES_H

#include "../../../../fsm/state.h"

class ApplicationPartido;
/******************************************************
	         GLOBAL_PARTIDO_APPLICATION
********************************************************/

class GLOBAL_PARTIDO_APPLICATION : public State<ApplicationPartido>
{
private:
  GLOBAL_PARTIDO_APPLICATION(){}
public:
  static GLOBAL_PARTIDO_APPLICATION* Instance();
  void enter  (ApplicationPartido* applicationPartido);
  void execute(ApplicationPartido* applicationPartido);
  void exit   (ApplicationPartido* applicationPartido);
  bool onLetter(ApplicationPartido* applicationPartido, Letter* letter);
};


/******************************************************
*				NORMAL
********************************************************/
class INIT_PARTIDO_APPLICATION : public State<ApplicationPartido>
{
private:
  INIT_PARTIDO_APPLICATION(){}
public:
  static INIT_PARTIDO_APPLICATION* Instance();
  void enter  (ApplicationPartido* applicationPartido);
  void execute(ApplicationPartido* applicationPartido);
  void exit   (ApplicationPartido* applicationPartido);
  bool onLetter(ApplicationPartido* applicationPartido, Letter* letter);
};

/******************************************************
*				NORMAL
********************************************************/
class PLAY_PARTIDO_APPLICATION : public State<ApplicationPartido>
{
private:
  PLAY_PARTIDO_APPLICATION(){}
public:
  static PLAY_PARTIDO_APPLICATION* Instance();
  void enter  (ApplicationPartido* applicationPartido);
  void execute(ApplicationPartido* applicationPartido);
  void exit   (ApplicationPartido* applicationPartido);
  bool onLetter(ApplicationPartido* applicationPartido, Letter* letter);
};

/******************************************************
*			MAIN_PARTIDO_APPLICATION	
********************************************************/
class MAIN_PARTIDO_APPLICATION : public State<ApplicationPartido>
{
private:
  MAIN_PARTIDO_APPLICATION(){}
public:
  static MAIN_PARTIDO_APPLICATION* Instance();
  void enter  (ApplicationPartido* applicationPartido);
  void execute(ApplicationPartido* applicationPartido);
  void exit   (ApplicationPartido* applicationPartido);
  bool onLetter(ApplicationPartido* applicationPartido, Letter* letter);
};

#endif
