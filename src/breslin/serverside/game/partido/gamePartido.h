#ifndef GAMEPARTIDO_H
#define GAMEPARTIDO_H

#include "../game.h"

using namespace std;
#include <string>

class ServerPartido;
class ShapePartido;
class ClientPartido;
class Battle;
class Utility;

class GamePartido : public Game
{
public:

	GamePartido(ServerPartido* serverPartido, int id);
	~GamePartido();

	//utility
	Utility* mUtility;

	//updates
	void update(int msec);

	//serverPartido
	ServerPartido* mServerPartido;

	//battles
        std::vector<Battle*> mBattleVector;    

	//shapes
        std::vector<ShapePartido*> mShapePartidoVector;       //every tangible item in game world..
	void createShapes();

	//coldet
	virtual void checkCollisions();

	//reset
	virtual void resetEnter();
	virtual void resetExecute();
	virtual void resetExit();
 	void endBattles();

	//massiveInserts
	virtual void massiveInserts();
	void massiveQuestionsAttemptsInsert();
	void dataDump();
	std::string mMassiveInsert;
	int mDataDumpThreshold;
	int mDataDumpCounter;

};
#endif
