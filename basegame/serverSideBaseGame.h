#ifndef SERVERSIDEBASEGAME_H
#define SERVERSIDEBASEGAME_H


/******************************************/
/* MMOG programmer's guide                */
/* Tutorial game server                   */
/* Programming:						      */
/* Teijo Hakala						      */
/******************************************/

#ifdef WIN32
#ifndef _WINSOCKAPI_
#define _WINSOCKAPI_
#endif

#include <windows.h>

#endif

#ifdef WIN32
#include <shellapi.h>

#else
#include <signal.h>
#include <syslog.h>
#include <errno.h>
#include <unistd.h>
#include <sys/time.h>
#include <sys/stat.h>
#include <sys/types.h>
#include <sys/wait.h>
#include <fcntl.h>
#endif

#include <string.h>
#include <stdlib.h>
#include <stdio.h>

// WIN32 only
#ifdef WIN32

// UNIX only
#else
int runningDaemon;
#endif

#include <vector>

class ServerSideGame;

class ServerSideBaseGame
{
public:
#ifdef WIN32

ServerSideBaseGame(HWND hwnd);
#else
ServerSideBaseGame();
#endif

~ServerSideBaseGame();

//virtual void createScene         (void);
//virtual bool frameRenderingQueued(const Ogre::FrameEvent& evt);
//void         go                  (void);

ServerSideGame* mServerSideGame;

};

#endif
