#ifndef GAMETAG_H
#define GAMETAG_H

//parent
#include "game.h"

class ServerTag;

class GameTag : public Game
{
public:

GameTag();
~GameTag();

//server
virtual void createServer();

//world
virtual void createWorld();

//collision
virtual void collision(Shape* shape1, Shape* shape2);

//commands
virtual void storeCommands(Shape* shape);
virtual void checkBounds(Shape* shape);

Shape* mShapeIt;
Shape* mShapeNoTagBack;
ServerTag* mServerTag;
  

};

#endif
