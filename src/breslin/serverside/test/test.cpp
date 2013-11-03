#include "test.h"
#include "states/testStates.h"

#include "../client/robust/partido/clientPartido.h"
#include "../server/partido/serverPartido.h"
#include "../question/question.h"
#include "../network/network.h"
#include "../../utility/utility.h"
#include "../question/questionAttempts.h"
#include "../quiz/quiz.h"
#include "../combatant/combatant.h"
#include "../shape/shape.h"
#include "../../utility/utility.h"

Test::Test(ClientPartido* clientPartido)
{
	mUtility = new Utility();

	mClientPartido = clientPartido;
	getQuestionAttempts();

	mQuiz = NULL;
	mQuizLast = NULL;

	//question
	mQuestionID = 1;

	//answer
	mWaitingForAnswer = false;
	mShowCorrectAnswer = false;

	//time
	mAnswerTime = 0;
 
	//quiz states
        mStateMachine =  new StateMachine<Test>(this);
        mStateMachine->setCurrentState      (INIT_TEST::Instance());
        mStateMachine->setPreviousState     (INIT_TEST::Instance());
        mStateMachine->setGlobalState       (GLOBAL_TEST::Instance());

	mRandom = 0;
	mCurrent = 0;
	mAdvance = 0;

}

Test::~Test()
{
	delete mStateMachine;	
	for (unsigned int i = 0; i < mQuestionAttemptsVector.size(); i++)
	{
		mQuestionAttemptsVector.at(i) = NULL;
		delete mQuestionAttemptsVector.at(i);
	}
	mQuestionAttemptsVector.clear();
}

void Test::reset()
{
	//also do db stuff...
/*
	for (int i = 0; i < mQuestionAttemptsVector.size(); i++)
	{
		mQuestionAttemptsVector.at(i)->dbInsert();
	}
*/	
	//quiz
	mQuiz = NULL;
	mQuizLast = NULL;
	
	//question
	mQuestionID = 1;
	
	//answer
	mWaitingForAnswer = false;
	mShowCorrectAnswer = false;
	
	//time
	mAnswerTime = 0;
        
        mStateMachine->setPreviousState     (INIT_TEST::Instance());
	mStateMachine->setCurrentState      (INIT_TEST::Instance());
	
}

void Test::update()
{
	mStateMachine->update();
}

int Test::getNewQuestionID()
{
        int maxLevel            = getMaxLevelAskedID();
	int questionID = 1;

        if (rand() % 2 == 1)
        {
                //you could advance here if you passed maxLevel and all before it...
                for (int i = 1; i <= maxLevel; i++)
                {
                        if (checkLevel(i))
                        {
                                if (i == maxLevel)
                                {
                                        //advance level
                                        questionID = maxLevel + 1;
					//LogString("ADVANCE:%d",questionID);
					mAdvance++;
					//LogString("mRandom:%d mCurrent:%d mAdvance:%d",mRandom,mCurrent,mAdvance);
                                        return questionID;
                                }
                        }
                        else
                        {
                                questionID = i;
				//LogString("CURRENT:%d",questionID);
				mCurrent++;
				//LogString("mRandom:%d mCurrent:%d mAdvance:%d",mRandom,mCurrent,mAdvance);
                                return questionID;
                        }
                }

        }
        else
        {
                //do it random based on maxLevel, you cannot advance a level here.
                questionID  = rand() % maxLevel + 1;
		//LogString("RANDOM:%d",questionID);
		mRandom++;
		//LogString("mRandom:%d mCurrent:%d mAdvance:%d",mRandom,mCurrent,mAdvance);
                return questionID;
        }
        return questionID;
}


void Test::getQuestionAttempts()
{
        PGconn          *conn;
        PGresult        *res;
        int             rec_count;
        int             row;
        conn = PQconnectdb("dbname=abcandyou host=localhost user=postgres password=mibesfat");
        std::string query = "select id, question_id, answer, extract(epoch from answer_attempt_time), answer_time, user_id from questions_attempts WHERE user_id = ";
        query.append(mClientPartido->mServerPartido->mUtility->intToString(mClientPartido->id));
        query.append(" ORDER BY answer_attempt_time");
        const char * q = query.c_str();
        //LogString("q:%s",q);
        res = PQexec(conn,q);

        if (PQresultStatus(res) != PGRES_TUPLES_OK)
        {
                puts("We did not get any data!");
        }
        else
        {
        }
        rec_count = PQntuples(res);

        for (row=0; row<rec_count; row++)
        {
                const char* a = PQgetvalue(res, row, 0);
                std::string aString(a);
                int aInt = mClientPartido->mServerPartido->mUtility->stringToInt(aString);

                const char* b = PQgetvalue(res, row, 1);
                std::string bString(b);
                int bInt = mClientPartido->mServerPartido->mUtility->stringToInt(bString);

                const char* c = PQgetvalue(res, row, 2);
                std::string cString(c);

                const char* d = PQgetvalue(res, row, 3);
                std::string dString(d);
                double dDouble = atof(dString.c_str());

                const char* e = PQgetvalue(res, row, 4);
                std::string eString(e);
                int eInt = mClientPartido->mServerPartido->mUtility->stringToInt(eString);

                const char* f = PQgetvalue(res, row, 5);
                std::string fString(f);
                int fInt = mClientPartido->mServerPartido->mUtility->stringToInt(fString);

                QuestionAttempts* questionAttempts = new QuestionAttempts(aInt,bInt,cString,dDouble,eInt,fInt,true);
                mQuestionAttemptsVector.push_back(questionAttempts);
        }
        PQclear(res);
        PQfinish(conn);
}

int Test::getMaxLevelAskedID()
{
        int highestQuestionID = 1;

        for (unsigned int i = 0; i < mQuestionAttemptsVector.size(); i++)
        {
                if (mQuestionAttemptsVector.at(i)->question_id > highestQuestionID)
                {
                        highestQuestionID = mQuestionAttemptsVector.at(i)->question_id;
                }
        }
        return highestQuestionID;
}

bool Test::checkLevel(int level)
{
        int total = 0;
        int index = mQuestionAttemptsVector.size() - 1;
        //clear the vector...
        mQuestionAttemptsVectorTemp.clear();

        while (total < 3 && index > -1)
        {
                if (mQuestionAttemptsVector.at(index)->question_id == level)
                {
                        mQuestionAttemptsVectorTemp.push_back(mQuestionAttemptsVector.at(index));
                        total++;
                }
                index--;
        }

        if (mQuestionAttemptsVectorTemp.size() < 3)
        {
		return false;
        }
        else
        {
        	return true;
        }
}

void Test::parseAnswer(Message* mes)
{
        int answerTime = mes->ReadShort();
        int sizeOfAnswer = mes->ReadByte();

        std::string answer;

        //loop thru and set stringAnswer
        for (int i = 0; i < sizeOfAnswer; i++)
        {
                if (mClientPartido->mClientID > 0)
                {
                        char c = mes->ReadByte();
                        answer.append(1,c);
                }
                else
                {
                        int numeric = mes->ReadByte();
                        char ascii = (char)numeric;
                        answer.append(1,ascii);
                }
        }
        readAnswer(answerTime,answer);
}

void Test::insertAnswerAttempt(int questionID, std::string stringAnswer, int answerTime)
{
        QuestionAttempts* questionAttempts = new QuestionAttempts(0,questionID,stringAnswer,mClientPartido->mServerPartido->mNetwork->getCurrentSystemTime(),answerTime,mClientPartido->id,false);
        mQuestionAttemptsVector.push_back(questionAttempts);
}

void Test::sendQuestion(int questionID)
{
        if (mClientPartido->mConnectionState == DREAMSOCK_CONNECTED)
        {
                mMessage.Init(mMessage.outgoingData, sizeof(mMessage.outgoingData));
                mMessage.WriteByte(mClientPartido->mServerPartido->mMessageAskQuestion); // add type

                if (mClientPartido->mClientID > 0)
                {
                        mMessage.WriteByte(mClientPartido->mClientID); // add mClientID for browsers
                }
                int length = mClientPartido->mServerPartido->mQuestionVector.at(questionID)->question.length();
                mMessage.WriteByte(length);

                //loop thru length and write it
                for (int i=0; i < length; i++)
                {
                        mMessage.WriteByte(mClientPartido->mServerPartido->mQuestionVector.at(questionID)->question.at(i));
                }

                //send it
                mClientPartido->mServerPartido->mNetwork->sendPacketTo(mClientPartido,&mMessage);
        }
}

void Test::sendCorrectAnswer(int questionID)
{
        if (mClientPartido->mConnectionState == DREAMSOCK_CONNECTED)
        {
		//init message with type
                mMessage.Init(mMessage.outgoingData, sizeof(mMessage.outgoingData));
                mMessage.WriteByte(mClientPartido->mServerPartido->mMessageCorrectAnswerStart); // add type

		//for browsers
                if (mClientPartido->mClientID > 0)
                {
                        mMessage.WriteByte(mClientPartido->mClientID); // add mClientID for browsers
                }
	
		//equal sign	
		std::string equalSign = " = "; 
		
		//length
                int lengthOfQuestion = mClientPartido->mServerPartido->mQuestionVector.at(questionID)->question.length();
		int lengthOfEqualSign = equalSign.length();
                int lengthOfAnswer   = mClientPartido->mServerPartido->mQuestionVector.at(questionID)->answer.length();
		int length = lengthOfQuestion + lengthOfEqualSign + lengthOfAnswer;
                mMessage.WriteByte(length);

                //loop thru length and write it
                for (int i=0; i < lengthOfQuestion; i++)
                {
                        mMessage.WriteByte(mClientPartido->mServerPartido->mQuestionVector.at(questionID)->question.at(i));
                }
              
                for (int i=0; i < lengthOfEqualSign; i++)
		{
                        mMessage.WriteByte(equalSign.at(i));
		}
 
		//loop thru length and write it
                for (int i=0; i < lengthOfAnswer; i++)
                {
                        mMessage.WriteByte(mClientPartido->mServerPartido->mQuestionVector.at(questionID)->answer.at(i));
                }

                //send it
                mClientPartido->mServerPartido->mNetwork->sendPacketTo(mClientPartido,&mMessage);
        }
}


void Test::readAnswer(int answerTime, std::string answer)
{
        //clear answer string
        mStringAnswer.clear();
        mAnswerTime = answerTime;
        mStringAnswer = answer;

        insertAnswerAttempt(mQuestionID,mStringAnswer,mAnswerTime);

        if (mStringAnswer.compare(mClientPartido->mServerPartido->mQuestionVector.at(mQuestionID)->answer) != 0 || mAnswerTime > 2000)
        //if (mStringAnswer.compare(mClientPartido->mServerPartido->mQuestionVector.at(mQuestionID)->answer) != 0)
        {
       		mShowCorrectAnswer = true;	 
        }
	else
	{
		if (mQuiz)
		{	
			if (mQuiz->mCombatant)
			{
				mQuiz->mCombatant->mScore++;	
				//LogString("mScore:%d",mQuiz->mCombatant->mScore);
				//mClientPartido->mShape->setText(mUtility->intToString(mQuiz->mCombatant->mScore));
       				mShowCorrectAnswer = false;	 
			}
		}
	}
        //set vars for new question and answer combo....
        mWaitingForAnswer = false;
        mQuestionString = "";
}

