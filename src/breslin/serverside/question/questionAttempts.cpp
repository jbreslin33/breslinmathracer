#include "questionAttempts.h"
#include "../tdreamsock/dreamSockLog.h"
#include "../../utility/utility.h"

//postgresql
#include <stdio.h>
#include <postgresql/libpq-fe.h>

QuestionAttempts::QuestionAttempts(int i, int q, std::string a, double aat, int at, int uid, bool writtenToDisk)
{
	id = i;
	question_id = q;
	answer = a;
	answer_attempt_time = aat;
	answer_time = at;
	user_id = uid;

	mWrittenToDisk = writtenToDisk;
	//lets try a db insert...
	//dbInsert();
}

QuestionAttempts::~QuestionAttempts()
{
}

void QuestionAttempts::dbInsert()
{
	if (!mWrittenToDisk)
	{
 		PGconn* conn;
        	conn = PQconnectdb("dbname=abcandyou host=localhost user=postgres password=mibesfat");

		std::string query = "insert into questions_attempts (question_id, answer, answer_time, user_id) values ("; 
		query.append(mUtility->intToString(question_id));
		query.append(",'");
		query.append(answer);
		query.append("',");
		query.append(mUtility->intToString(answer_time));
		query.append(",");
		query.append(mUtility->intToString(user_id));
		query.append(")");
        	const char * q = query.c_str();
        	PQexec(conn,q);
        	PQfinish(conn);
		mWrittenToDisk = true;
	}
}

void QuestionAttempts::set(int i, int q, std::string a, double aat, int at, int uid)
{
	id = i;
	question_id = q;
	answer = a;
	answer_attempt_time = aat;
	answer_time = at;
	user_id = uid;
} 
