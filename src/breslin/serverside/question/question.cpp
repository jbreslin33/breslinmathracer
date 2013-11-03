#include "question.h"

Question::Question()
{
	id = "";
	question = "";
	answer = "";
	level_id = "";
}

Question::Question(std::string i, std::string q, std::string a, std::string l)
{
	id = i;
	question = q;
	answer = a;
	level_id = l;
}

Question::~Question()
{
}

void Question::set(std::string i, std::string q, std::string a, std::string l)
{
	id = i;
	question = q;
	answer = a;
	level_id = l;
} 
