#ifndef CLIENTSIDENONNETWORKEDGAME_H
#define CLIENTSIDENONNETWORKEDGAME_H

#include "clientSideGame.h"

class ClientSideNonNetworkedGame : public ClientSideGame
{
public:

ClientSideNonNetworkedGame();
~ClientSideNonNetworkedGame();

    virtual void createScene(void);
	virtual void StartConnection(char* serverIP);
	//virtual void go(void);
	virtual void gameLoop();
};
#endif
