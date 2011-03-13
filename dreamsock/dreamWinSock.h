#include <time.h>

class DreamWinSock
{
public:
	DreamWinSock();
	~DreamWinSock();

int dreamSock_InitializeWinSock(void);
int dreamSock_Win_GetCurrentSystemTime(void);
};
