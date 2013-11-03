#ifndef QUIZSTATES_H
#define QUIZSTATES_H

#include "../../../fsm/state.h"

class Quiz;


/*******************************
*      GLOBAL_QUIZ
******************************/

class GLOBAL_QUIZ : public State<Quiz>
{
private:
  GLOBAL_QUIZ(){}
public:
  static GLOBAL_QUIZ* Instance();
  void enter  (Quiz* quiz);
  void execute(Quiz* quiz);
  void exit   (Quiz* quiz);
  bool onLetter(Quiz* quiz, Letter* letter);
};

/*******************************
*      Quiz
******************************/

class INIT_QUIZ : public State<Quiz>
{
private:
  INIT_QUIZ(){}
public:
  static INIT_QUIZ* Instance();
  void enter  (Quiz* quiz);
  void execute(Quiz* quiz);
  void exit   (Quiz* quiz);
  bool onLetter(Quiz* quiz, Letter* letter);
};

class SENDING_QUESTION : public State<Quiz>
{
private:
  SENDING_QUESTION(){}
public:
  static SENDING_QUESTION* Instance();
  void enter  (Quiz* quiz);
  void execute(Quiz* quiz);
  void exit   (Quiz* quiz);
  bool onLetter(Quiz* quiz, Letter* letter);
};

class WAITING_FOR_ANSWER : public State<Quiz>
{
private:
  WAITING_FOR_ANSWER(){}
public:
  static WAITING_FOR_ANSWER* Instance();
  void enter  (Quiz* quiz);
  void execute(Quiz* quiz);
  void exit   (Quiz* quiz);
  bool onLetter(Quiz* quiz, Letter* letter);
};

class SHOW_CORRECT_ANSWER : public State<Quiz>
{
private:
  SHOW_CORRECT_ANSWER(){}
public:
  static SHOW_CORRECT_ANSWER* Instance();
  void enter  (Quiz* quiz);
  void execute(Quiz* quiz);
  void exit   (Quiz* quiz);
  bool onLetter(Quiz* quiz, Letter* letter);
};

class OVER_QUIZ : public State<Quiz>
{
private:
  OVER_QUIZ(){}
public:
  static OVER_QUIZ* Instance();
  void enter  (Quiz* quiz);
  void execute(Quiz* quiz);
  void exit   (Quiz* quiz);
  bool onLetter(Quiz* quiz, Letter* letter);
};

#endif
