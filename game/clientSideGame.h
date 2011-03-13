#ifndef CLIENTSIDEGAME_H
#define CLIENTSIDEGAME_H

#include "game.h"
#include "../client/clientSideClient.h"

#include <vector>

class ClientSideBaseGame;
class ClientSideCommand;
class ClientSideNetwork;
class ClientSideShape;

class ClientSideGame : public Game
{
public:
	ClientSideGame(ClientSideBaseGame* baseGame);
	~ClientSideGame();

	//Scene
	void createScene(void);

	//Movement
	void RunLocalPredictions(void);
	void CheckPredictionError(int a);
	void CalculateVelocity(ClientSideCommand *command, float frametime);
	void PredictMovement(int prevFrame, int curFrame);
	void MoveObjects(void);
	void MovePlayer(void);
	//clients
	void AddClient(int local, int index, char *name);
	void RemoveClient(int index);
	void RemoveClients(void);

	//players
	void createPlayer(int index);

	//power up and down
	void Shutdown(void);

	//input
	void CheckKeys(void);
	void CheckKeys(int i);

	void Frame(void);

	//network
	void RunNetwork(int msec);


	ClientSideClient *clientList;			// Client list
	ClientSideClient *localClient;		// Pointer to the local client in the client list

	ClientSideClient inputClient;			// Handles all keyboard input

	float frametime;

	ClientSideClient *GetClientList(void) { return clientList; }

	ClientSideClient *GetClientPointer(int index);

	ClientSideNetwork* mClientSideNetwork;

	ClientSideBaseGame *next;

	ClientSideBaseGame* mClientSideBaseGame;

	std::vector<ClientSideShape*> mClientSideShapeVector;
	ClientSideShape* localGuy;
};

#endif
