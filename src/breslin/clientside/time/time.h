#ifndef TIME_H
#define TIME_H

class Time 
{
public:
	
	Time();
	~Time();

	//time
	#ifndef WIN32
	int dreamSock_Linux_GetCurrentSystemTime();
	#endif
	int dreamSock_GetCurrentSystemTime();

	int getCurrentSystemTime();
};

#endif
