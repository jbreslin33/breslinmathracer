#ifndef CLIENTROBUST_H
#define CLIENTROBUST_H

#include "../../client/client.h"

class Server;
class Network;
class Shape;
class Game;

class ClientRobust : public Client 
{
public:

ClientRobust(Server* server, struct sockaddr *address, int clientID, bool permanent,int i, std::string username, std::string p, std::string first_name, std::string m1, std::string m2, std::string m3, std::string last_name, int s);
~ClientRobust();

StateMachine<ClientRobust>* mClientRobustStateMachine;

//temp client
Client* mClient;

//keys
int mKeyUp;
int mKeyDown;
int mKeyLeft;
int mKeyRight;
int mKeyCounterClockwise;
int mKeyClockwise;

int mKey;
int mKeyLast;

//user table
int id;
std::string username;
std::string password;
std::string first_name;
std::string middle_name1;
std::string middle_name2;
std::string middle_name3;
std::string last_name;
int school_id;

//game
bool mInGame;
Game* mGame;
bool mPlayed;
bool mStandingsSent;

//update
virtual void update();
	
//handle letter 
virtual bool  handleLetter(Letter* letter);

Shape* mShape;  //on server: everybody's got one ...same on clientside mShape is the avatar.
void setShape(Shape* shape);

//login
void login();
void logout();
virtual bool checkLogin(Message* message);

};
#endif
