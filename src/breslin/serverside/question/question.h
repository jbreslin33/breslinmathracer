#ifndef QUESTION_H
#define QUESTION_H

#include <string>

class Question 
{
public:
	
Question();
Question(std::string i, std::string q, std::string a, std::string l);
virtual ~Question();

std::string id;
std::string question;
std::string answer; 
std::string level_id; 

void set(std::string i, std::string q, std::string a, std::string l);

};

#endif
