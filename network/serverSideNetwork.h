#ifndef SERVERSIDENETWORK_H
#define SERVERSIDENETWORK_H

#include "network.h"

#include "../dreamsock/dreamSock.h"

class DreamClient;
class DreamMessage;
class ServerSideClient;
class ServerSideGame;

typedef struct clientLoginData
{
        struct sockaddr         address;
        DreamClient                     *netClient;
        clientLoginData         *next;
} clientLoginData;


class ServerSideNetwork : public Network
{

public:
ServerSideNetwork(ServerSideGame* server);
~ServerSideNetwork();

void ReadPackets(void);
void SendCommand(void);
void SendExitNotification(void);
void ReadDeltaMoveCommand(DreamMessage *mes, ServerSideClient *client);
void BuildMoveCommand(DreamMessage *mes, ServerSideClient *client);
void BuildDeltaMoveCommand(DreamMessage *mes, ServerSideClient *client);

ServerSideGame* mServer;

};
#endif
