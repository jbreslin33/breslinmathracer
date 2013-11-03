#include "serverPartido.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

#include "../../game/partido/gamePartido.h"
#include "../../client/robust/partido/clientPartido.h"
#include "../../../math/vector3D.h"
#include "../../../utility/utility.h"
#include "../../shape/shape.h"
#include "../../question/question.h"
#include "../../test/test.h"
#include "../../shape/partido/shapePartido.h"

ServerPartido::ServerPartido(Ogre::Root* root, const char *localIP, int serverPort) 
:
 Server(root, localIP, serverPort)
{
	//questionCount
	mQuestionCount = 0;

	//get schools
	getSchools();

	//get questions
        getQuestions();
}

ServerPartido::~ServerPartido()
{
}

void ServerPartido::processClients()
{
        //update clients
        for (unsigned int i = 0; i < mClientPartidoVector.size(); i++)
        {
                mClientPartidoVector.at(i)->update();
        }
        for (unsigned int i = 0; i < mClientPartidoVectorTemp.size(); i++)
        {
                mClientPartidoVectorTemp.at(i)->update();
        }
}


void ServerPartido::createClients()
{
        PGconn          *conn;
        PGresult        *res;
        int             rec_count;
        int             row;
        conn = PQconnectdb("dbname=abcandyou host=localhost user=postgres password=mibesfat");
	
	std::string query = "select * from users WHERE username != 'root' ORDER BY id LIMIT ";
        query.append(mUtility->intToString(mNumberOfClients));
        const char * q = query.c_str();
        res = PQexec(conn,q);

        if (PQresultStatus(res) != PGRES_TUPLES_OK)
        {
                puts("We did not get any data!");
        }
        rec_count = PQntuples(res);
        //printf("We received %d records from user table.\n", rec_count);
        for (row=0; row<rec_count; row++)
        {
                //id
                const char* a = PQgetvalue(res, row, 0);
                stringstream a_str;
                a_str << a;
                unsigned int a_int;
                a_str >> a_int;

                //username
                const char* b = PQgetvalue(res, row, 1);
 		std::string bString(b);

                //password
                const char* c = PQgetvalue(res, row, 2);
 		std::string cString(c);

                //first_name
                const char* d = PQgetvalue(res, row, 3);
 		std::string dString(d);
                
		//middle_name1
                const char* e = PQgetvalue(res, row, 4);
 		std::string eString(e);
		
		//middle_name2
                const char* f = PQgetvalue(res, row, 5);
 		std::string fString(f);
		
		//middle_name3
                const char* g = PQgetvalue(res, row, 6);
 		std::string gString(g);

                //last_name
                const char* h = PQgetvalue(res, row, 7);
 		std::string hString(h);

                //school_id
                const char* i = PQgetvalue(res, row, 8);
                stringstream i_str;
                i_str << i;
                unsigned int i_int;
                i_str >> i_int;
                
		//client
                ClientPartido* clientPartido = new ClientPartido(this,NULL,-2,true,a_int,bString,cString,dString,eString,fString,gString,hString,i_int);

                clientPartido->mGamePartido = mGamePartido;
                clientPartido->mGame = mGamePartido;

        }
        PQclear(res);
        PQfinish(conn);
}

void ServerPartido::addClient(Client* client, bool permanent)
{
	Server::addClient(client, permanent);
	ClientPartido* clientPartido = (ClientPartido*)client;
        if (permanent)
        {
                mClientPartidoVector.push_back(clientPartido);
        }
        else
        {
                mClientPartidoVectorTemp.push_back(clientPartido);
        }
}

void ServerPartido::parsePacket(Message *mes, struct sockaddr *address)
{
        mes->BeginReading();

        int type = mes->ReadByte();

        /***CONNECT********/
        //this should just create a client then client should do what need be done.
        
	if (type == mMessageConnect || type == mMessageConnectBrowser || type == mMessageConnectNode
		|| type == mMessageAnswerQuestion || type == mMessageAnswerQuestionBrowser)
	{
		if (type == mMessageConnect)
        	{
                	Client* client = new Client(this, address, 0, false);
			LogString("c++ client:",client->mClientID);

        	}

        	else if (type == mMessageConnectBrowser)
        	{
                	int clientID = mes->ReadByte();
                	new Client(this, address, clientID, false);
        	}

        	else if (type == mMessageConnectNode)
        	{
                	mes->ReadByte();
                	new ClientRobust(this, address, -1, true,0,"","","","","","","",0);
        	}     	 
       		else if (type == mMessageAnswerQuestion)
                {
      			// Find the correct client by comparing addresses
                	for (unsigned int i = 0; i < mClientPartidoVector.size(); i++)
                	{
                        	if( memcmp(mClientPartidoVector.at(i)->GetSocketAddress(), address, sizeof(address)) == 0)
                        	{
                                	ClientPartido* clientPartido = mClientPartidoVector.at(i);
  					if (DREAMSOCK_DISCONNECTED == clientPartido->mConnectionState)
                        		{
                        			continue;
                        		}
					clientPartido->mTest->parseAnswer(mes);
						
				}
			}
                }
    		else if (type == mMessageAnswerQuestionBrowser)
                {
 			int clientID = mes->ReadByte();
                	for (unsigned int i = 0; i < mClientPartidoVector.size(); i++)
                	{
                                ClientPartido* clientPartido = mClientPartidoVector.at(i);
                        	if (mClientPartidoVector.at(i)->mClientID == clientID)
                        	{
  					if (DREAMSOCK_DISCONNECTED == clientPartido->mConnectionState)
					{
						continue;
					}
					else
					{
						clientPartido->mTest->parseAnswer(mes);
					}
				}	
			}
                }
	}
	else
	{
		Server::parsePacket(mes,address);
	}
}

void ServerPartido::getQuestions()
{
        PGconn          *conn;
        PGresult        *res;
        int             rec_count;
        int             row;
        conn = PQconnectdb("dbname=abcandyou host=localhost user=postgres password=mibesfat");
        res = PQexec(conn,
       "select * from questions ORDER BY level_id");
        if (PQresultStatus(res) != PGRES_TUPLES_OK)
        {
                puts("We did not get any data!");
                //exit(0);
        }
	else
	{
	}
        rec_count = PQntuples(res);
	mQuestionCount = rec_count;
        //printf("We received %d records.\n", rec_count);
       
	//make first elements x so they coincide with db id's 
	Question* question = new Question("x","x","x","x");
        mQuestionVector.push_back(question);

        for (row=0; row<rec_count; row++)
        {
                const char* a = PQgetvalue(res, row, 0);
                std::string aString(a);

                const char* b = PQgetvalue(res, row, 1);
                std::string bString(b);

                const char* c = PQgetvalue(res, row, 2);
                std::string cString(c);

                const char* d = PQgetvalue(res, row, 3);
                std::string dString(d);

		Question* question = new Question(aString,bString,cString,dString);
		mQuestionVector.push_back(question);
        }
        PQclear(res);
        PQfinish(conn);
}

void ServerPartido::getSchools()
{
        PGconn          *conn;
        PGresult        *res;
        int             rec_count;
        int             row;
        conn = PQconnectdb("dbname=abcandyou host=localhost user=postgres password=mibesfat");
        res = PQexec(conn,
       "select * from schools");
        if (PQresultStatus(res) != PGRES_TUPLES_OK)
        {
                puts("We did not get any data!");
                //exit(0);
        }
        rec_count = PQntuples(res);
        //printf("We received %d records.\n", rec_count);
        for (row=0; row<rec_count; row++)
        {
                const char* c = PQgetvalue(res, row, 1);
                std::string school(c);

                mSchoolVector.push_back(school);
        }

        PQclear(res);

        PQfinish(conn);
}

