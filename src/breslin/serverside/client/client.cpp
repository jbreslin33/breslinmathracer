//parent
#include "client.h"
#include "robust/clientRobust.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//message
#include "../../message/message.h"

//network
#include "../network/network.h"

//server
#include "../server/server.h"

//game
#include "../game/game.h"

//shape
#include "../shape/shape.h"

//rotation
#include "../rotation/rotation.h"

//move
#include "../move/move.h"

//math
#include "../../math/vector3D.h"

//states
#include "states/clientStates.h"

//mailman
#include "../../mailman/mailMan.h"

//mailman
#include "../../utility/utility.h"

#ifdef WIN32
//
#else
#include <sys/socket.h>
#include <netinet/in.h>
#include <arpa/inet.h>
#endif

//postgresql
#include <stdio.h>
#include <postgresql/libpq-fe.h>

//quiz
#include "../quiz/quiz.h"

Client::Client(Server* server, struct sockaddr *address, int clientID, bool permanence) : BaseEntity(BaseEntity::getNextValidID())
{
	mScore = 0;	
	mScoreLast = 0;	

	mDeltaCode = 0;
	mDeltaCodeLast = 0;
	
	mUtility = new Utility;

	mPermanence = permanence;

	//logged in
	mLoggedIn = false;

	//client id for php but everyone uses one...
	mClientID = clientID;
	
	//server
	mServer = server;

	mLastMessageTime = mServer->mNetwork->getCurrentSystemTime();

	//fsm
	mStateMachine =  new StateMachine<Client>(this);
        mStateMachine->setCurrentState (NULL);
        mStateMachine->setPreviousState(NULL);
        mStateMachine->setGlobalState  (GLOBAL_CLIENT::Instance());

	if (!address)
	{
		mConnectionState  = DREAMSOCK_DISCONNECTED;
	}
	else
	{
		setSocketAddress(address);
		mConnectionState  = DREAMSOCK_CONNECTING;
	}

	if (mClientID >= 0)
	{
       		sendConnected();
	}
	else
	{
		//your the node for web sockets or a dummy ai client using node address temporarily
	}

	if (mPermanence)
	{
		mServer->addClient(this,true);
	}	
	else
	{
		mServer->addClient(this,false);
	}
	
	mServer->mBaseEntityVector.push_back(this);
}

Client::~Client()
{
	delete mStateMachine;
	delete mUtility;
/*
	//this will check if there is an mShape

	if (mGame)
	{
		mGame->leave(this);
	}

	for (unsigned int i = 0; i < mServer->mClientVector.size(); i++)
        {
                if (mServer->mClientVector.at(i) == this)
		{
 			mServer->mClientVector.erase(mServer->mClientVector.begin()+i);
		}
	}
*/
}

void Client::reset()
{

}

void Client::setSocketAddress(struct sockaddr *address)
{
	if (address == NULL)
	{
		struct sockaddr	tempSocketAddress;
		memcpy(&mSocketAddress, &tempSocketAddress, sizeof(struct sockaddr)); 
	}
	else
	{
		memcpy(&mSocketAddress, address, sizeof(struct sockaddr)); 
	}
}

void Client::update()
{
        mStateMachine->update();
}

bool Client::handleLetter(Letter* letter)
{
	return mStateMachine->handleLetter(letter);
}

void Client::remove()
{
/*
	for (unsigned int i = 0; i < mServer->mClientVector.size(); i++)
	{
		if (mServer->mClientVector.at(i) == this)
		{
			//mServer->mClientVector.erase(mServer->mClientVector.begin()+i);
			///delete this;
		}
	}
*/
}

//connected
void Client::sendConnected()
{
        mMessage.Init(mMessage.outgoingData, sizeof(mMessage.outgoingData));
        mMessage.WriteByte(mServer->mMessageConnected); // add type
	if (mClientID > 0)
	{
        	mMessage.WriteByte(mClientID); // add mClientID for browsers 
	}
	mServer->mNetwork->sendPacketTo(this,&mMessage);
}

void Client::readLoginMessage(Message* mes)
{
	//clear username and password strings
        mStringUsername.clear();
        mStringPassword.clear();

        int sizeOfUsername = mes->ReadByte();
        int sizeOfPassword = mes->ReadByte();

        //loop thru and set mStringUsername from client
        for (int i = 0; i < sizeOfUsername; i++)
        {
                if (mClientID > 0)
                {
                        char c = mes->ReadByte();
                        mStringUsername.append(1,c);
                }
                else
                {
                        int numeric = mes->ReadByte();
                        char ascii = (char)numeric;
                        mStringUsername.append(1,ascii);
                }
        }

        //loop thru and set mStringPassword from client
        for (int i = 0; i < sizeOfPassword; i++)
        {
                if (mClientID > 0)
                {
                        char c = mes->ReadByte();
                        mStringPassword.append(1,c);
                }
                else
                {
                        int numeric = mes->ReadByte();
                        char ascii = (char)numeric;
                        mStringPassword.append(1,ascii);
                }
        }
}
/*
       for (unsigned int i = 0; i < mServer->mClientVector.size(); i++)
        {
                if (mStringUsername.compare(mServer->mClientVector.at(i)->db_username) == 0 && mStringPassword.compare(mServer->mClientVector.at(i)->db_password) == 0)
                {

*/
bool Client::checkLogin(Message* mes)
{
	readLoginMessage(mes);


	for (unsigned int i = 0; i < mServer->mClientVector.size(); i++)
	{
		if (mStringUsername.compare(mServer->mClientVector.at(i)->username) == 0 && mStringPassword.compare(mServer->mClientVector.at(i)->password) == 0)
		{
			//send logout letter to clientRobust....
                        mServer->mClientVector.at(i)->logout();
			
			mConnectionState = DREAMSOCK_DISCONNECTED; 

                        mServer->mClientVector.at(i)->setSocketAddress(&mSocketAddress);
                        mServer->mClientVector.at(i)->mConnectionState = DREAMSOCK_CONNECTED;
                        mServer->mClientVector.at(i)->mClientID = mClientID;
			

			//send login letter
                        mServer->mClientVector.at(i)->login();
			return true;
		}
	}
	return true;
}

bool Client::getPasswordMatch(std::string username,std::string password)
{
        PGconn          *conn;
        PGresult        *res;
        int             rec_count;
        int             row = 0;
        bool match = false;
        std::string query = "select id, username, password from users where username = '";
        std::string a = "' ";
        std::string b = "and password = '";
        std::string c = "'";

        query.append(username);
        query.append(a);
        query.append(b);
        query.append(password);
        query.append(c);

        const char * q = query.c_str();

        conn = PQconnectdb("dbname=abcandyou host=localhost user=postgres password=mibesfat");

        res = PQexec(conn,q);
        if (PQresultStatus(res) != PGRES_TUPLES_OK)
        {
                puts("We did not get any data!");
                //exit(0);
        }
        rec_count = PQntuples(res);
        if (rec_count > 0)
        {
		const char* value = PQgetvalue(res, row, 0);
		stringstream strValue;
		strValue << value;
		unsigned int intValue;
		strValue >> intValue;
		//db_id = intValue;
	
                match = true;
        }
        PQclear(res);
        PQfinish(conn);
        return match;
}

void Client::checkForTimeout()
{
/*
        // Don't timeout when connecting or if logged out...
        if(mLoggedIn == false || mConnectionState == DREAMSOCK_CONNECTING)
        {
        	return;
        }

        int currentTime = mServer->mNetwork->getCurrentSystemTime();

        // Check if the client has been silent for 30 seconds if so log him out and start ai up...
        if(currentTime - mLastMessageTime > 30000)
        {
		logout();
        }
*/
}
void Client::sendSimpleMessage(int message)
{
	if (mConnectionState == DREAMSOCK_CONNECTED)
        {
                mMessage.Init(mMessage.outgoingData, sizeof(mMessage.outgoingData));
                mMessage.WriteByte(message); // add type

                if (mClientID > 0)
               	{ 
                       	mMessage.WriteByte(mClientID); // add mClientID for browsers
                }

                //send it
        	mServer->mNetwork->sendPacketTo(this,&mMessage);
	}
}

