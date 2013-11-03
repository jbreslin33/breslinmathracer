#ifndef GAMEMATH_H
#define GAMEMATH_H

#include "game.h"

using namespace std;

//class Network;
class Server;

class GameMath : public Game
{
public:

	GameMath(Server* server, int id);
	~GameMath();

	//time
	void	processUpdate();
};

#endif
