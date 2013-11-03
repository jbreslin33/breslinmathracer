#include "time.h"
#include "windows.h"

Time::Time()
{
}

Time::~Time()
{
}

//TIME
int Time::dreamSock_GetCurrentSystemTime(void)
{
	#ifndef WIN32
		return getCurrentSystemTime();
	#else
		return getCurrentSystemTime();
	#endif
}

int Time::getCurrentSystemTime(void)
{
	int curtime;
	static int base;
	static bool initialized = false;

	if(!initialized)
	{
		base = timeGetTime() & 0xffff0000;
		initialized = true;
	}

	curtime = timeGetTime() - base;

	return curtime;
}