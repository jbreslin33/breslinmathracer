#ifndef CLIENTSIDENETOWORKEDGAME_H
#define CLIENTSIDENETOWORKEDGAME_H

#include "clientSidegame.h"
#include "../tdreamsock/dreamSock.h"

class ClientSideNetworkedGame : public ClientSideGame
{
public:

ClientSideNetworkedGame();
~ClientSideNetworkedGame();

	void ReadPackets(void);
	void ReadDeltaMoveCommand(dreamMessage *mes, clientData *client);
	void BuildDeltaMoveCommand(dreamMessage *mes, clientData *theClient);
	void SendCommand(void);
	void SendRequestNonDeltaFrame(void);
	void ReadMoveCommand(dreamMessage *mes, clientData *client);


	void AddClient(int local, int index, char *name);

	void CheckPredictionError(int a);

	virtual void gameLoop();
	void RunNetwork(int msec);

	void StartConnection(char* serverIP);
	void Connect(void);
	void Disconnect(void);
	void Shutdown(void);
	dreamClient *networkClient;
};
#endif