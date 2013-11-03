#ifndef SERVER_H
#define SERVER_H

#include "../../message/message.h"

#include <vector>
#include <string>

// Connection states
#define DREAMSOCK_CONNECTING			0
#define DREAMSOCK_CONNECTED				1
#define DREAMSOCK_DISCONNECTING			2
#define DREAMSOCK_DISCONNECTED			4

#ifdef WIN32
	#define DREAMSOCK_INVALID_SOCKET	INVALID_SOCKET
#else
	#define DREAMSOCK_INVALID_SOCKET	-1
#endif

// System messages
// Note (for all messages - system and user):
// positive = sequenced message
// negative = un-sequenced message

//Ogre headers
#include "Ogre.h"
using namespace Ogre;

// Introduce classes
class BaseEntity;
class Network;
class Client;
class ClientRobust;
class Game;
class Shape;
class MailMan;
class Utility;
class Server
{
public:

	//Ogre Root
	Ogre::Root* mRoot;

	//utility
	Utility* mUtility;

	//network
	Network* mNetwork;

	//Message
	Message mMessage;

	//MailMan
	MailMan* mMailMan;
	
	//games
	std::vector<BaseEntity*> mBaseEntityVector;

	//game
	Game* mGame;

	//clients
	std::vector<ClientRobust*> mClientVector;
	std::vector<Client*> mClientVectorTemp;
	int mNumberOfClients;

	//port
	int mPort;					// Port

	//time
	int mTickLength;
 	int mFrameTime;
        int mFrameTimeLast;
 	
	//sequence
        signed short    mOutgoingSequence;

	//address
	const char *mLocalIP;

	//codes

	//db
	static const int mMessageGameStart               = -57;
	static const int mMessageGameEnd                 = -58;

	//frames
	static const int mMessageFrame 	                = 1;
	static const int mMessageFrameBrowser     	= 2;

	//questions	
	static const int mMessageQuestion               = -105;
	static const int mMessageQuestionBrowser        = -115;

	//answer
	static const int mMessageAnswer                 = -106;
	static const int mMessageAnswerBrowser          = -116;

	//connect
	static const int mMessageConnected              = -90;
	static const int mMessageConnect                = -101;
	static const int mMessageConnectBrowser         = -111;
	static const int mMessageConnectNode            = -121;

	//join game
	static const int mMessageJoinGame               = -107;
	static const int mMessageJoinGameBrowser        = -117;
	static const int mMessageLeaveGame              = -99;
	static const int mMessageLeaveGameBrowser       = -45;

	//disconnect	
	static const int mMessageDisconnect             = -102;
	static const int mMessageDisconnectBrowser      = -112;

	//login
	static const int mMessageLogin              	 = -110;
	static const int mMessageLoginBrowser        	 = -125;
	static const int mMessageLogout        	         = -120;
	static const int mMessageLogoutBrowser        	 = -98;
	static const int mMessageLoggedIn             	 = -113;
	static const int mMessageLoggedOut            	 = -114;
	
	//add shape	
	static const int mMessageAddShape    	         = -103;
	static const int mMessageRemoveShape             = -104;

	//standings
	static const int mMessageReportStandings         = -94;
	

public:
	Server(Ogre::Root* root, const char *localIP, int serverPort);
	~Server();

	//update
	void update(int msec);
	virtual void processClients();

	//client
   	void createClients();
	virtual void addClient(Client* client, bool permanent);

	//packets
	int  getPacket  (char *data, struct sockaddr *from);
	void sendPackets();
        void readPackets();
	virtual void parsePacket(Message *mes, struct sockaddr *address);

        //commands
        virtual void storeCommands();
	void sendCommand(Game* game);
};

#endif
