#ifndef POLYNETWORKEDGAME_H
#define POLYNETWORKEDGAME_H

#include "networkedGame.h"
#include "../tdreamsock/dreamSock.h"

class PolyNetworkedGame : public NetworkedGame
{

public:
	
PolyNetworkedGame();
~PolyNetworkedGame();

	virtual void createScene(void);

};

#endif
