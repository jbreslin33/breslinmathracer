#include "gamePartido.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//server
#include "../../server/partido/serverPartido.h"

//shape
#include "../../shape/partido/shapePartido.h"

//client
#include "../../client/robust/partido/clientPartido.h"

//vector3d
#include "../../../math/vector3D.h"

//battle
#include "../../battle/battle.h"
#include "../../battle/states/battleStates.h"

//combatant
#include "../../combatant/combatant.h"

//test
#include "../../test/test.h"

//questionAttempts
#include "../../question/questionAttempts.h"

//utility
#include "../../../utility/utility.h"

#include <stdio.h>

GamePartido::GamePartido(ServerPartido* serverPartido, int id) : Game(serverPartido,id)
{
	mServerPartido = serverPartido;
	mUtility = new Utility();
	
	mDataDumpThreshold = 2000;
	mDataDumpCounter   = 0;
}

GamePartido::~GamePartido()
{
}

//you should call this from server update
void GamePartido::update(int msec)
{
	Game::update(msec);

	for (unsigned int i = 0; i < mBattleVector.size(); i++)
	{
		mBattleVector.at(i)->update();
	}
}


void GamePartido::endBattles()
{
	//let's end battles gracefully
        for (unsigned int i = 0; i < mBattleVector.size(); i++)
	{
		mBattleVector.at(i)->mStateMachine->changeState(OVER_BATTLE::Instance());
	}
}

void GamePartido::resetEnter()
{
	endBattles();
	Game::resetEnter();
}

void GamePartido::resetExecute()
{
	Game::resetExecute();

}

void GamePartido::resetExit()
{
	Game::resetExit();

	//clear battle vectors...
        for (unsigned int i = 0; i < mBattleVector.size(); i++)
	{	
		delete mBattleVector.at(i);	
	}
	int size = mBattleVector.size();
	mBattleVector.erase (mBattleVector.begin(),mBattleVector.begin()+size);

	//reset sent standings
        for (unsigned int i = 0; i < mServerPartido->mClientPartidoVector.size(); i++)
	{
        	mServerPartido->mClientPartidoVector.at(i)->mStandingsSent = false;
	}
}

void GamePartido::massiveInserts()
{
	//make a multi-insert to questions_attempts 
	massiveQuestionsAttemptsInsert();
}

void GamePartido::massiveQuestionsAttemptsInsert()
{
	bool weGotOne = false;
	mMassiveInsert.clear();

	QuestionAttempts* questionAttempt = NULL;	
	Test* test = NULL;

        mMassiveInsert = "insert into questions_attempts (question_id, answer, answer_time, user_id) values ";

        for (unsigned int i = 0; i < mServerPartido->mClientPartidoVector.size(); i++)
	{
 		if (mServerPartido->mClientPartidoVector.at(i)->mClientID == -1) //browser bridge
                {
                        continue;
                }

		test = mServerPartido->mClientPartidoVector.at(i)->mTest;

		if (test)
		{	
 			for (unsigned int z = 0; z < test->mQuestionAttemptsVector.size(); z++)
        		{
                		questionAttempt = test->mQuestionAttemptsVector.at(z);

				if (!questionAttempt->mWrittenToDisk)
				{
					mMassiveInsert.append("(");
                			mMassiveInsert.append(mUtility->intToString(questionAttempt->question_id));
                			mMassiveInsert.append(",'");
                			mMassiveInsert.append(questionAttempt->answer);
                			mMassiveInsert.append("',");
                			mMassiveInsert.append(mUtility->intToString(questionAttempt->answer_time));
                			mMassiveInsert.append(",");
                			mMassiveInsert.append(mUtility->intToString(questionAttempt->user_id));
                			mMassiveInsert.append(")");
                			mMassiveInsert.append(", ");
					questionAttempt->mWrittenToDisk = true;
					weGotOne = true;
				}
				else	
				{
				}
			}
       		}
	}

	if (weGotOne)
	{
		PGconn* conn;
        	conn = PQconnectdb("dbname=abcandyou host=localhost user=postgres password=mibesfat");
		mMassiveInsert.resize(mMassiveInsert.size() - 2); //to get rid of last comma
        	const char * q = mMassiveInsert.c_str();
       		//LogString("questionAttempt:%s",q); 
		PQexec(conn,q);
        	PQfinish(conn);
	}
	else
	{
		LogString("no question attempts");
	}
}

void GamePartido::createShapes()
{
        for (unsigned int i = 0; i < mServerPartido->mClientPartidoVector.size(); i++)
        {
		mServerPartido->mClientPartidoVector.at(i)->setShape( new ShapePartido(getOpenIndex(),this,mServerPartido->mClientPartidoVector.at(i),getOpenPoint(),new Vector3D(),new Vector3D(),mServerPartido->mRoot,false,true,30.0f,2,true) );
               // mServerPartido->mClientPartidoVector.at(i)->setShape( new ShapePartido(getOpenIndex(),this,mServerPartido->mClientPartidoVector.at(i),getOpenPoint(),new Vector3D(),new Vector3D(),mServerPartido->mRoot,true,true,30.0f,2,true) );

        }
}

void GamePartido::checkCollisions()
{
        for (unsigned int i = 0; i < mShapePartidoVector.size(); i++)
        {
                if (mShapePartidoVector.at(i)->mCollidable == true)
                {
                        for (unsigned int j = i+1; j < mShapePartidoVector.size(); j++)
                        {
                                if (mShapePartidoVector.at(j)->mCollidable == true && mShapePartidoVector.at(j) != mShapePartidoVector.at(i)->mTimeoutShape)
                                {
                                        float x1 = mShapePartidoVector.at(i)->mSceneNode->getPosition().x;
                                        float z1 = mShapePartidoVector.at(i)->mSceneNode->getPosition().z;
                                        float x2 = mShapePartidoVector.at(j)->mSceneNode->getPosition().x;
                                        float z2 = mShapePartidoVector.at(j)->mSceneNode->getPosition().z;

                                        float distSq = pow((x1-x2),2) + pow((z1-z2),2);

                                        //i am simply adding the 2 collisionradius's of the 2 objects in question then comparing
                                        //to distSQ between them. IS this right or is it working by chance?
                                        if(distSq < mShapePartidoVector.at(i)->mCollisionRadius + mShapePartidoVector.at(j)->mCollisionRadius)
                                        {
						Battle* battle = new Battle(this,mShapePartidoVector.at(i)->mClientPartido,mShapePartidoVector.at(j)->mClientPartido);
						//call collision on shape...				
						mShapePartidoVector.at(i)->collision(mShapePartidoVector.at(j));
						mShapePartidoVector.at(j)->collision(mShapePartidoVector.at(i));
	
						mBattleVector.push_back(battle);
                                        }
                                }
                        }
                }
        }
}

