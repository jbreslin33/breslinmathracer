// Unix code only
#include "dreamLinuxSock.h"

#include <stdio.h>
#include <memory.h>
#include <malloc.h>
#include <errno.h>
#include <unistd.h>
#include <netinet/in.h>
#include <sys/socket.h>
#include <sys/time.h>
#include <sys/ioctl.h>
#include <sys/types.h>
#include <sys/wait.h>
#include <arpa/inet.h>
#include <pthread.h>
#include <signal.h>

//#include "dreamSock.h"
DreamLinuxSock::DreamLinuxSock()
{

}
DreamLinuxSock::~DreamLinuxSock()
{
}

int DreamLinuxSock::getCurrentSystemTime(void)
{
	struct timeval tp;
	struct timezone tzp;
	static int basetime;

	gettimeofday(&tp, &tzp);
	
	if(!basetime)
	{
		basetime = tp.tv_sec;
		return tp.tv_usec / 1000;
	}

	return (tp.tv_sec - basetime) * 1000 + tp.tv_usec / 1000;
}

