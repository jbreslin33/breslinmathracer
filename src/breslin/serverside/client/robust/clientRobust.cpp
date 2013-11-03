//parent
#include "clientRobust.h"

//log
#include "../../tdreamsock/dreamSockLog.h"

//server
#include "../../server/server.h"

//game
#include "../../game/game.h"

//mailman
#include "../../../mailman/mailMan.h"

//letter
#include "../../../letter/letter.h"

//network
#include "../../network/network.h"

//states
#include "states/clientRobustStates.h"


ClientRobust::ClientRobust(Server* server, struct sockaddr *address, int clientID, bool permanence, int i, std::string u, std::string p, std::string f, std::string m1, std::string m2, std::string m3, std::string l, int s) : Client(server,address,clientID,permanence)
{

	//temp client
	mClient = NULL;

        //keys
        mKeyUp = 1;
        mKeyDown = 2;
        mKeyLeft = 4;
        mKeyRight = 8;
        mKeyCounterClockwise = 16;
        mKeyClockwise = 32;

        mKey = 0;
        mKeyLast = 0;

	//user table
	id = i;
	username = u;
	password = p;
	first_name = f; 
	middle_name1 = m1; 
	middle_name2 = m2;
	middle_name3 = m3;
	last_name = l; 
 	school_id = s;

	//game
	mInGame = false;
	mGame = NULL;

	//standings
	mStandingsSent = false;
	mPlayed = false;

        //shape
        mShape = NULL;

	//states
        mClientRobustStateMachine =  new StateMachine<ClientRobust>(this);
        mClientRobustStateMachine->setCurrentState      (LOGGED_OUT::Instance());
        mClientRobustStateMachine->setPreviousState     (NULL);
        mClientRobustStateMachine->setGlobalState       (GLOBAL_ROBUST::Instance());

}

ClientRobust::~ClientRobust()
{
}

void ClientRobust::update()
{
	Client::update();
        mClientRobustStateMachine->update();
}

bool ClientRobust::handleLetter(Letter* letter)
{
	bool b = Client::handleLetter(letter);
	if (b)
	{
		return b;	
	}
	return mClientRobustStateMachine->handleLetter(letter);
}


//shape
void ClientRobust::setShape(Shape* shape)
{
        mShape = shape;
}

void ClientRobust::login()
{

        //send letter
        Message message;
        message.Init(message.outgoingData, sizeof(message.outgoingData));
        message.WriteByte(mServer->mMessageLogin); // add type
        Letter* letter = new Letter(this,&message);
        mServer->mMailMan->deliver(this,letter);
	delete letter;

        //set last messageTime
        mLastMessageTime = mServer->mNetwork->getCurrentSystemTime();

        mLoggedIn = true;

        mMessage.Init(mMessage.outgoingData, sizeof(mMessage.outgoingData));
        mMessage.WriteByte(mServer->mMessageLoggedIn); // add type
        if (mClientID > 0)
        {
                mMessage.WriteByte(mClientID); //client id for browsers
        }
        mServer->mNetwork->sendPacketTo(this,&mMessage);
}

void ClientRobust::logout()
{
        //send letter
        Message message;
        message.Init(message.outgoingData, sizeof(message.outgoingData));
        message.WriteByte(mServer->mMessageLogout); // add type
        Letter* letter = new Letter(this,&message);
        mServer->mMailMan->deliver(this,letter);
	delete letter;
        mLoggedIn = false;

        mMessage.Init(mMessage.outgoingData, sizeof(mMessage.outgoingData));
        mMessage.WriteByte(mServer->mMessageLoggedOut); // add type
        if (mClientID > 0)
        {
                mMessage.WriteByte(mClientID); //client id for browsers
        }
        mServer->mNetwork->sendPacketTo(this,&mMessage);
}

bool ClientRobust::checkLogin(Message* mes)
{
        readLoginMessage(mes);

	//ok you matched the address of a robust client in vector now who does your username and password match up with 
        for (unsigned int i = 0; i < mServer->mClientVector.size(); i++)
        {
                if (mStringUsername.compare(mServer->mClientVector.at(i)->username) == 0 && mStringPassword.compare(mServer->mClientVector.at(i)->password) == 0)
                {

                        ClientRobust* clientRobust = mServer->mClientVector.at(i);

			if (this == clientRobust)
			{
                        	clientRobust->mConnectionState = DREAMSOCK_CONNECTED;
				login();
				return true;
			}
			else //swap robust for robust
			{
				if( memcmp(clientRobust->GetSocketAddress(), GetSocketAddress(), sizeof(GetSocketAddress())) == 0)
                        	{
					//set to connected
                        		clientRobust->mConnectionState = DREAMSOCK_CONNECTED;
                        	
					//send login letter
                        		clientRobust->login();
				}
				else	
				{
                        		//send logout letter to matched clientRobust address in case someone isloggedinasthem
					clientRobust->logout();
			
					//set this client to disconnected as you are going to swap..
                        		mConnectionState = DREAMSOCK_DISCONNECTED;

					//set the new client with your address
                        		clientRobust->setSocketAddress(&mSocketAddress);

					//set to connected
                        		clientRobust->mConnectionState = DREAMSOCK_CONNECTED;

					//swap clientID's
                        		clientRobust->mClientID = mClientID;

                        		//send login letter
                        		clientRobust->login();
                     		
					if (mClientID == 0)
					{
						setSocketAddress(NULL); 
					}
					else 
					{
						setSocketAddress(NULL); 
						mClientID = 0;
					}
					return true;
				}	
			}
                }
        }
	return true;
}

