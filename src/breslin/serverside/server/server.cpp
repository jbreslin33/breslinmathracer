//parent 
#include "server.h"

//log 
#include "../tdreamsock/dreamSockLog.h"

//network 
#include "../network/network.h"

//client
#include "../client/robust/clientRobust.h"

//message
#include "../../message/message.h" 

//shape
#include "../shape/shape.h"

//game
#include "../game/game.h"

//math
#include "../../math/vector3D.h"

//utility
#include "../../utility/utility.h"

//rotation
#include "../rotation/rotation.h"

//move
#include "../move/move.h"

//mailman
#include "../../mailman/mailMan.h"

//letter
#include "../../letter/letter.h"

//postgresql
#include <stdio.h>
#include <postgresql/libpq-fe.h>

Server::Server(Ogre::Root* root, const char *localIP, int serverPort)
{
	mUtility = new Utility();

	//numberOf Clients
	mNumberOfClients = 10;

	//ogre root
	mRoot = root;

	mGame = NULL;

	//MailMan
	mMailMan = new MailMan(this);

        //sequence
        mOutgoingSequence = 1;

	//time
	mTickLength = 32;
 	mFrameTime  = 0;
        mFrameTimeLast  = 0;

	mLocalIP = localIP;
	
	// Store the server IP and port for later use
	mPort = serverPort;

	// Create network
	mNetwork = new Network(this,localIP, mPort);
}

Server::~Server()
{
	mClientVector.empty();
	mClientVectorTemp.empty();
	mNetwork->closeSocket(mNetwork->mSocket);
	
	delete mNetwork;
	delete mMailMan;
	delete mUtility;
}

/*******************************************************
		UPDATES	
********************************************************/
void Server::update(int msec)
{
 	mFrameTime += msec;

	readPackets();
	
	processClients();

	mGame->update(msec);

        // Wait full 32 ms before allowing to send
        if(mFrameTime < mTickLength)
        {
                return;
        }

	sendCommand(mGame);

        mFrameTimeLast = mFrameTime;
        mFrameTime = 0;
}

void Server::processClients()
{
	//update clients
  	for (unsigned int i = 0; i < mClientVector.size(); i++)
	{
		mClientVector.at(i)->update();
	}
  	for (unsigned int i = 0; i < mClientVectorTemp.size(); i++)
	{
		mClientVectorTemp.at(i)->update();
	}

}

/*******************************************************
		CLIENTS	
********************************************************/
void Server::createClients()
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
                ClientRobust* clientRobust = new ClientRobust(this,NULL,-2,true,a_int,bString,cString,dString,eString,fString,gString,hString,i_int);

                //add Games
                clientRobust->mGame = mGame;
	}
        PQclear(res);
        PQfinish(conn);
}

void Server::addClient(Client* client, bool permanent)
{
	if (permanent)
	{
		mClientVector.push_back((ClientRobust*)client);
	}
	else
	{
		mClientVectorTemp.push_back(client);
	}
}





/*******************************************************
		PACKETS
********************************************************/
int Server::getPacket(char *data, struct sockaddr *from)
{
	// Check if the server is set up
	if(!mNetwork->mSocket)
		return 0;

	// Wait for a while or incoming data
	int maxfd = mNetwork->mSocket;
	fd_set allset;
	struct timeval waittime;

	waittime.tv_sec = 10 / 1000;
	waittime.tv_usec = (10 % 1000) * 1000;

	FD_ZERO(&allset); 
	FD_SET(mNetwork->mSocket, &allset);

	fd_set reading = allset;

	int nready = select(maxfd + 1, &reading, NULL, NULL, &waittime);

	if(!nready)
		return 0;

	// Read data of the socket
	int ret = 0;

	Message mes;
	mes.Init(data, sizeof(data));

	ret = mNetwork->getPacket(mNetwork->mSocket, mes.data, from);

	if(ret <= 0)
	{	
		return 0;
	}

	mes.SetSize(ret);

	// Parse system messages
	parsePacket(&mes, from);

	return ret;
}

void Server::parsePacket(Message *mes, struct sockaddr *address)
{
	Client* client;
	mes->BeginReading();

	int type = mes->ReadByte();
	
	/***CONNECT********/
	//this should just create a client then client should do what need be done.
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
		//LogString("Connect node.... %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%");
		mes->ReadByte();
 		new ClientRobust(this, address, -1, true,0,"","","","","","","",0);
	}	

	/***JOIN GAME********/
	/* can i just send more information here for different games?                      */
	else if (type == mMessageJoinGame)
	{
		//client is joining game as "original" client! according to memory and then as far as php it is joining as the client id! i think!
		int gameID = mes->ReadByte();

		for (unsigned int i = 0; i < mClientVector.size(); i++)
		{
			if( memcmp(mClientVector.at(i)->GetSocketAddress(), address, sizeof(address)) == 0)
			{
				//get client
				ClientRobust* client = mClientVector.at(i);
				if (DREAMSOCK_DISCONNECTED == client->mConnectionState)
				{
					continue;
				}
        			
				//send letter
        			Message message;
        			message.Init(message.outgoingData, sizeof(message.outgoingData));
        			message.WriteByte(mMessageJoinGame); 
        			message.WriteByte(gameID);
        			Letter* letter = new Letter(client,&message);
        			mMailMan->deliver(client,letter);
				delete letter;	
				client->mGame = mGame;
				client->mPlayed = true;
				mGame->sendShapes(client);
			}
		}
	}
	
	else if (type == mMessageJoinGameBrowser)
	{
                int clientID = mes->ReadByte();
		int gameID   = mes->ReadByte();

		for (unsigned int i = 0; i < mClientVector.size(); i++)
		{
			if (mClientVector.at(i)->mClientID == clientID)
			{
 				//get client
                                ClientRobust* client = mClientVector.at(i);

				//send letter
        			Message message;
        			message.Init(message.outgoingData, sizeof(message.outgoingData));
        			message.WriteByte(mMessageJoinGame); 
        			message.WriteByte(gameID);
        			Letter* letter = new Letter(client,&message);
        			mMailMan->deliver(client,letter);
				delete letter;	
				client->mGame = mGame;
				mGame->sendShapes(client);
			}
                }
	}

	/******* LOGIN **********/
	else if (type == mMessageLogin)
	{
 		//get client is it a (ClientRobust) one???	
		for (unsigned int i = 0; i < mClientVector.size(); i++)
                {
			//do you match the address of a robust client?
                        if( memcmp(mClientVector.at(i)->GetSocketAddress(), address, sizeof(address)) == 0)
                        {
                                client = mClientVector.at(i);
				LogString("call checkLogin on the client robust vector match..");
				client->checkLogin(mes);
				return;

			}
                }

 		//get client is it a temp(Client) one???	
		for (unsigned int i = 0; i < mClientVectorTemp.size(); i++)
                {
                        if( memcmp(mClientVectorTemp.at(i)->GetSocketAddress(), address, sizeof(address)) == 0)
                        {
                                client = mClientVectorTemp.at(i);
				client->checkLogin(mes);
				return;
			}
		}
	}

	else if (type == mMessageLoginBrowser)
	{
                int clientID = mes->ReadByte();
 		//get client is it a (ClientRobust) one???	
		for (unsigned int i = 0; i < mClientVector.size(); i++)
		{
			if (mClientVector.at(i)->mClientID == clientID)
			{
                                //set client to pointer
                                client = mClientVector.at(i);
				client->checkLogin(mes);
				return;
			}
		}	

 		//get client is it a (Client) one???	
		for (unsigned int i = 0; i < mClientVectorTemp.size(); i++)
		{
			if (mClientVectorTemp.at(i)->mClientID == clientID)
			{
                                //set client to pointer
                                client = mClientVectorTemp.at(i);
				client->checkLogin(mes);
				return;
			}
		}
	}

	/***LOG OUT********/
	else if (type == mMessageLogout)
	{
 		//get client 
                for (unsigned int i = 0; i < mClientVector.size(); i++)
                {
                        if( memcmp(mClientVector.at(i)->GetSocketAddress(), address, sizeof(address)) == 0)
                        {
                                //set client to pointer
                                ClientRobust* client = mClientVector.at(i);
 				if (DREAMSOCK_DISCONNECTED == client->mConnectionState)
                                {
                                        continue;
                                }
				//LogString("mMessageLogout:logout");
				client->logout();
			}
		}
	}

        else if (type == mMessageLogoutBrowser)
        {
                int clientID = mes->ReadByte();
                for (unsigned int i = 0; i < mClientVector.size(); i++)
                {
                        if (mClientVector.at(i)->mClientID == clientID)
                        {
                                //set client to pointer
                                ClientRobust* client = mClientVector.at(i);
 				if (DREAMSOCK_DISCONNECTED == client->mConnectionState)
                                {
                                        continue;
                                }
				//LogString("mMessageLogoutBrowser:logout");
				client->logout();
			}
		}
	}
                           	
	/***QUIT GAME********/
	else if (type == mMessageLeaveGame)
	{
		// Find the correct client by comparing addresses
		for (unsigned int i = 0; i < mClientVector.size(); i++)
		{
			if( memcmp(mClientVector.at(i)->GetSocketAddress(), address, sizeof(address)) == 0)
			{
				client = mClientVector.at(i);
 				if (DREAMSOCK_DISCONNECTED == client->mConnectionState)
                                {
                                        continue;
                                }
        			mMessage.Init(mMessage.outgoingData,sizeof(mMessage.outgoingData));
        			mMessage.WriteByte(mMessageLeaveGame); 
	   			mNetwork->sendPacketTo(client,&mMessage);
			}
		}
	}

	else if (type == mMessageLeaveGameBrowser)
	{
                int clientID = mes->ReadByte();
		for (unsigned int i = 0; i < mClientVector.size(); i++)
		{
			if (mClientVector.at(i)->mClientID == clientID)
			{
				client = mClientVector.at(i);
 				if (DREAMSOCK_DISCONNECTED == client->mConnectionState)
                                {
                                        continue;
                                }
        			mMessage.Init(mMessage.outgoingData,sizeof(mMessage.outgoingData));
        			mMessage.WriteByte(mMessageLeaveGame); 
 				if (client->mClientID > 0)
                		{
                        		mMessage.WriteByte(client->mClientID); //client id for browsers
                		}
	   			mNetwork->sendPacketTo(client,&mMessage);
			}
		}
	}
	
	else if (type == mMessageFrame)
	{
		
		// Find the correct client by comparing addresses
		for (unsigned int i = 0; i < mClientVector.size(); i++)
		{
			if( memcmp(mClientVector.at(i)->GetSocketAddress(), address, sizeof(address)) == 0)
			{
				ClientRobust* client = mClientVector.at(i);
 				if (DREAMSOCK_DISCONNECTED == client->mConnectionState)
                                {
                                        continue;
                                }
				client->mLastMessageTime = mNetwork->getCurrentSystemTime();
                                client->mGame->readDeltaMoveCommand(mes,client);
				
				// Wait for one message before setting state to connected
                                if(client->mConnectionState == DREAMSOCK_CONNECTING)
                                {
                                        client->mConnectionState = DREAMSOCK_CONNECTED;
                                }
			}
		}
	}
	
	else if (type == mMessageFrameBrowser)
	{
		int clientID = mes->ReadByte();
		
		for (unsigned int i = 0; i < mClientVector.size(); i++)
		{
			if (mClientVector.at(i)->mClientID == clientID)
			{
				ClientRobust* client = mClientVector.at(i);
 				if (DREAMSOCK_DISCONNECTED == client->mConnectionState)
                                {
                                        continue;
                                }
				client->mLastMessageTime = mNetwork->getCurrentSystemTime();
                                client->mGame->readDeltaMoveCommand(mes,client);
  				// Wait for one message before setting state to connected
        			if(client->mConnectionState == DREAMSOCK_CONNECTING)
        			{
                			client->mConnectionState = DREAMSOCK_CONNECTED;
        			}
			}
		}
	} 
}


//this loops thru each client instance and then calls their sendPacket(mess) function
//we are right here I need to just send to one client for all browsers then he should broadcast
void Server::sendPackets()
{
	// Check if the server is set up
	if(!mNetwork->mSocket)
		return;

	for (unsigned int i = 0; i < mClientVector.size(); i++)
	{
		if(mMessage.GetSize() == 0)
			continue;

		//is the a browser client but not THE browser client which is -1 normal c++ clients are 0 if so skip
		if(mClientVector.at(i)->mClientID > 0)
			continue; 

		mNetwork->sendPacketTo(mClientVector.at(i),&mMessage);
			
	}
}

void Server::readPackets()
{
	char data[1400];

	struct sockaddr address;

	Message mes;
	mes.Init(data, sizeof(data));

	// Get the packet from the socket
	
	try
	{
		while(getPacket(mes.data, &address))
		{
			//you could do something here, what i have no idea yet..	
		}
	}
	catch(...)
	{
		LogString("Unknown Exception caught in Lobby ReadPackets loop");

#ifdef WIN32
		MessageBox(NULL, "Unknown Exception caught in Lobby ReadPackets loop", "Error", MB_OK | MB_TASKMODAL);
#endif
	}
}

void Server::sendCommand(Game* game)
{
        // Fill messages..for all clients
        //standard initialize of mMessage for client in this case
        mMessage.Init(mMessage.outgoingData,
                sizeof(mMessage.outgoingData));

        //start filling said mMessage that belongs to client
        mMessage.WriteByte(mMessageFrame);                    // type

        mMessage.WriteShort(mOutgoingSequence);

        //frame time
        mMessage.WriteByte(mFrameTime);

        //this is where you need to actually loop thru the shapes not the clients but put write to client mMessage
        for (unsigned int j = 0; j < game->mShapeVector.size(); j++)
        {                         //the client to send to's message        //the shape command it's about
                game->mShapeVector.at(j)->addToMoveMessage(&mMessage);
        }

        sendPackets();

        // Store the sent command in
        for (unsigned int i = 0; i < game->mShapeVector.size(); i++)
        {
                storeCommands();
        }
}

void Server::storeCommands()
{
        for (unsigned int i = 0; i < mGame->mShapeVector.size(); i++)
	{
                Shape* shape = mGame->mShapeVector.at(i);
        	shape->mClient->mKeyLast = shape->mClient->mKey;
        	shape->mClient->mScoreLast = shape->mClient->mScore;
        	shape->mMove->mPositionLast->convertFromVector3(shape->mSceneNode->getPosition());
        	shape->mRotation->mRotationLast->copyValuesFrom(shape->mRotation->mRotation);
		shape->mClient->mDeltaCodeLast = shape->mClient->mDeltaCode;
	}
}


