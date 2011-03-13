#ifndef SERVERSIDENETWORKEDGAME_H
#define SERVERSIDENETWORKEDGAME_H

#include "serverSideGame.h"
#include "../client/serverSideNetworkedClient.h"

class ServerSideNetworkedGame : public ServerSideGame
{

public:
	ServerSideNetworkedGame();
	~ServerSideNetworkedGame();

	dreamServer	*networkServer;

	int		InitNetwork();
	void	ReadPackets(void);

	void	ReadDeltaMoveCommand(dreamMessage *mes, ServerSideNetworkedClient *client);
	void	BuildMoveCommand(dreamMessage *mes, ServerSideNetworkedClient *client);
	void	BuildDeltaMoveCommand(dreamMessage *mes, ServerSideNetworkedClient *client);

	void	SendCommand(void);
	void	SendExitNotification(void);
	
	void	ShutdownNetwork(void);

	void	MovePlayers(void);
	void	MovePlayer(ServerSideNetworkedClient *client);
	void	AddClient(void);
	void	RemoveClient(struct sockaddr *address);



	ServerSideNetworkedClient *GetClientList(void)	{ return clientList; }
	void Frame(int msec);

	void	SetName(char *n)		{ strcpy(gamename, n); }
	char	*GetName(void)			{ return gamename; }

	void	SetIndex(int ind)	{ index = ind; }
	int		GetIndex(void)		{ return index; }

};

#endif
