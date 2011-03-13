#include "dreamMessage.h"
#include "dreamClient.h"
/*
#ifdef WIN32
// Windows specific headers
	#ifndef _WINSOCKAPI_
	#define _WINSOCKAPI_
	#endif
	#include <windows.h>
	#include <winsock2.h>
#else
// UNIX specific headers
	#include <memory.h>
	#include <errno.h>
	#include <sys/ioctl.h>
	#include <sys/socket.h>
	#include <sys/time.h>
	#include <netinet/in.h>
	#include <arpa/inet.h>
#endif
*/
// Common headers
#include <stdio.h>
#include <stdarg.h>
#include <stdlib.h>
#include <ctype.h>
#include <time.h>
#include "dreamSock.h"
#include "dreamConsole.h"


//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::Init(char *d, int length)
{
	data		= d;
	maxSize		= length;
	size		= 0;
	readCount	= 0;
	overFlow	= false;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::Clear(void)
{
	size		= 0;
	readCount	= 0;
	overFlow	= false;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
char *DreamMessage::GetNewPoint(int length)
{
	char *tempData;

	// Check for overflow
	if(size + length > maxSize)
	{
		Clear(); 
		overFlow = true;
	}

	tempData = data + size;
	size += length;

	return tempData;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::AddSequences(DreamClient *client)
{
	WriteShort(client->GetOutgoingSequence());
	WriteShort(client->GetIncomingSequence());
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::Write(const void *d, int length)
{
	memcpy(GetNewPoint(length), d, length);		
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::WriteByte(char c)
{
	char *buf;

	buf = GetNewPoint(1);

	memcpy(buf, &c, 1);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::WriteShort(short c)
{
	char *buf;

	buf = GetNewPoint(2);

	memcpy(buf, &c, 2);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::WriteLong(long c)
{
	char *buf;
	
	buf = GetNewPoint(4);

	memcpy(buf, &c, 4);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::WriteFloat(float c)
{
	char *buf;
	
	buf = GetNewPoint(4);

	memcpy(buf, &c, 4);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::WriteString(const char *s)
{
	if(!s)
	{
		return;
	}
	else
		Write(s, strlen(s) + 1);
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::BeginReading(void)
{
	readCount = 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
void DreamMessage::BeginReading(int s)
{
	size = s;
	readCount = 0;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
char *DreamMessage::Read(int s)
{
	static char c[2048];

	if(readCount+s > size)
		return NULL;
	else
		memcpy(&c, &data[readCount], s);

	readCount += s;

	return c;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
char DreamMessage::ReadByte(void)
{
	char c;

	if(readCount+1 > size)
		c = -1;
	else
		memcpy(&c, &data[readCount], 1);

	readCount++;

	return c;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
short DreamMessage::ReadShort(void)
{
	short c;

	if(readCount+2 > size)
		c = -1;
	else		
		memcpy(&c, &data[readCount], 2);

	readCount += 2;

	return c;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
long DreamMessage::ReadLong(void)
{
	long c;

	if(readCount+4 > size)
		c = -1;
	else
		memcpy(&c, &data[readCount], 4);

	readCount += 4;

	return c;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
float DreamMessage::ReadFloat(void)
{
	float c;

	if(readCount+4 > size)
		c = -1;
	else
		memcpy(&c, &data[readCount], 4);

	readCount += 4;

	return c;
}

//-----------------------------------------------------------------------------
// Name: empty()
// Desc: 
//-----------------------------------------------------------------------------
char *DreamMessage::ReadString(void)
{
	static char string[2048];
	int	l, c;

	l = 0;

	do
	{
		c = ReadByte();

		if (c == -1 || c == 0)
			break;

		string[l] = c;
		l++;
	} while(l < sizeof(string)-1);

	string[l] = 0;

	return string;
}
