#ifndef QUESTIONATTEMPTS_H
#define QUESTIONATTEMPTS_H

#include <string>

class Utility;

class QuestionAttempts 
{
public:
	
QuestionAttempts(int i, int q, std::string a, double aat, int at, int uid, bool writtenToDisk);
virtual ~QuestionAttempts();

Utility* mUtility;

int id;
int question_id;
std::string answer; 
double answer_attempt_time; 
int answer_time; 
int user_id; 
bool mWrittenToDisk;

void set(int i, int q, std::string a, double aat, int at, int uid);
void dbInsert();
};

#endif
