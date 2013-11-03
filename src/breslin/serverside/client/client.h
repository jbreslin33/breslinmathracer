#ifndef CLIENT_H
#define CLIENT_H

#include "../../baseentity/baseEntity.h"

#include "../../fsm/stateMachine.h"

template <class entity_type> class State;

#include <string>

#include "../../message/message.h"

#include <vector>
#include <string.h>
#include <netinet/in.h>

// Define SOCKET data type for UNIX (defined in WinSock for Win32)
// And socklen_t for Win32
	typedef int SOCKET;

#ifndef TRUE
#define TRUE 1
#endif
#ifndef FALSE
#define FALSE 0
#endif

// Connection states
#define DREAMSOCK_CONNECTING			0
#define DREAMSOCK_CONNECTED			1
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

// Error codes
#define DREAMSOCK_SERVER_ERROR			1
#define DREAMSOCK_CLIENT_ERROR			2

// Introduce classes
class Server;
class Network;
class Shape;
class Game;
class Utility;

class Client : public BaseEntity
{
public:
	Client(Server* server, struct sockaddr *address, int clientID, bool permanent);

~Client();

StateMachine<Client>* mStateMachine;

bool mPermanence;

	//Message
        Message mMessage;

	//id used just for browser clients for now, if it's 0 then we know it's a c++ java client.
	int mClientID;

	int				mConnectionState;		

	signed short	mDroppedPackets;

	struct sockaddr	mSocketAddress;

	int				mLastMessageTime;

	bool mLoggedIn;
	std::string mStringUsername;
	std::string mStringPassword;

	int mDeltaCode;
	int mDeltaCodeLast;

public:

	//update
	virtual void update();
	
	//handle letter 
  	virtual bool  handleLetter(Letter* letter);

	//timeout
	void checkForTimeout();

	//client
	void remove();

	//connect
	void sendConnected();

	//login
	virtual bool checkLogin(Message* mes);
        bool getPasswordMatch(std::string username,std::string password);
	void readLoginMessage(Message* mes);


	//clients address to send back messages to
	struct sockaddr *GetSocketAddress(void) { return &mSocketAddress; }
	void setSocketAddress(struct sockaddr *address); 

	Server* mServer;

	Utility* mUtility;
	
	void sendSimpleMessage(int message);

	virtual void reset();

	int mScore;
	int mScoreLast;
};
#endif
