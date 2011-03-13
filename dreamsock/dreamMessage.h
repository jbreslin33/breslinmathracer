#ifndef __DREAMMESSAGE_H
#define __DREAMMESSAGE_H


#ifdef WIN32
#include "../dreamSock/dreamConsole.h"
	#pragma comment (lib,"ws2_32.lib")
	#pragma message ("Auto linking WinSock2 library")

	#include <winsock2.h>
#else
	#include <string.h>
	#include <netinet/in.h>
#endif

#include <stdio.h>
#include <stddef.h>

// Define SOCKET data type for UNIX (defined in WinSock for Win32)
// And socklen_t for Win32
#ifdef WIN32
	typedef int socklen_t;
#else
	typedef int SOCKET;

	#ifndef TRUE
	#define TRUE 1
	#endif
	#ifndef FALSE
	#define FALSE 0
	#endif
#endif

#ifdef WIN32
	#define DreamSock_INVALID_SOCKET	INVALID_SOCKET
#else
	#define DreamSock_INVALID_SOCKET	-1
#endif

class DreamClient;

class DreamMessage
{
private:
	bool	overFlow;
	int	maxSize;
	int	size;
	int	readCount;

	char	*GetNewPoint(int length);

public:
	void    Init(char *d, int length);
	void	Clear(void);
	void	Write(const void *d, int length);
	void	AddSequences(DreamClient *client);

	void    WriteByte(char c);
	void	WriteShort(short c);
	void	WriteLong(long c);
	void    WriteFloat(float c);
	void	WriteString(const char *s);
	void	BeginReading(void);
	void	BeginReading(int s);
	char	*Read(int s);
	char    ReadByte(void);
	short	ReadShort(void);
	long	ReadLong(void);
	float	ReadFloat(void);
	char	*ReadString(void);

	bool	GetOverFlow(void)	{ return overFlow; }
	int	GetSize(void)		{ return size; }
	void    SetSize(int s)		{ size = s; }

	char	*data;
	char	outgoingData[1400];
};

#endif
