#ifndef GAMETAGALL_H
#define GAMETAGALL_H

//parent
#include "gameTag.h"

class ServerTagAll;

class GameTagAll : public GameTag
{
public:

GameTagAll();
~GameTagAll();

//server
virtual void createServer();

//world
virtual void createWorld();

//collision
virtual void collision(Shape* shape1, Shape* shape2);

//commands
virtual void storeCommands(Shape* shape);
virtual void checkBounds(Shape* shape);


std::vector<Shape*> mShapeItVector;
ServerTagAll* mServerTagAll;
};

#endif
