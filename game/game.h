#ifndef GAME_H
#define GAME_H

//keys for linux
#ifdef WIN32
        //do nothing
#else
#define VK_ESCAPE 0
#define VK_DOWN 1
#define VK_UP 2
#define VK_LEFT 3
#define VK_RIGHT 4
#define VK_SPACE 5
#endif

#define COMMAND_HISTORY_SIZE            64

#define KEY_UP                                          1
#define KEY_DOWN                                        2
#define KEY_LEFT                                        4
#define KEY_RIGHT                                       8

#define CMD_KEY                                         1
#define CMD_ORIGIN                                      4

#define USER_MES_FRAME                          1
#define USER_MES_NONDELTAFRAME          2
#define USER_MES_SERVEREXIT                     3

class Game
{
public:

Game();
~Game();



};
#endif
