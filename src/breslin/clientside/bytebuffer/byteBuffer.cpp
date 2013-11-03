#include "byteBuffer.h"

#include "../tdreamsock/dreamSockLog.h"

// Common headers
#include <stdio.h>
#include <string.h>

ByteBuffer::ByteBuffer()
{
	mMaxSize = 1400;
	mCharArray = new char[mMaxSize];
	mSize		= 0;
	mReadCount	= 0;
}

ByteBuffer::~ByteBuffer()
{
}

/**********************************************
				ADMIN
************************************************/
void ByteBuffer::BeginReading()
{
	mReadCount = 0;
}

void ByteBuffer::Clear()
{
	mSize		= 0;
	mReadCount	= 0;
}

char *ByteBuffer::GetNewPoint(int length)
{
	char *tempData;

	// Check for overflow
	if(mSize + length > mMaxSize)
	{
		Clear(); 
	}
	tempData = mCharArray + mSize;
	mSize += length;

	return tempData;
}


/**********************************************
				WRITE
************************************************/
void ByteBuffer::WriteByte(char c)
{
	char *buf;
	buf = GetNewPoint(1);
	memcpy(buf, &c, 1);
}

void ByteBuffer::WriteShort(short c)
{
	char *buf;
	buf = GetNewPoint(2);
	memcpy(buf, &c, 2);
}

void ByteBuffer::WriteFloat(float c)
{
	char *buf;
	buf = GetNewPoint(4);
	memcpy(buf, &c, 4);
}

void ByteBuffer::WriteString(const char *s)
{
	if(!s)
	{
		return;
	}
	else
		Write(s, strlen(s) + 1);
}

void ByteBuffer::Write(const void *d, int length)
{
	memcpy(GetNewPoint(length), d, length);		
}
/**********************************************
				READ
************************************************/

char ByteBuffer::ReadByte()
{
	char c;

	if(mReadCount+1 > mSize)
		c = -1;
	else
		memcpy(&c, &mCharArray[mReadCount], 1);

	mReadCount++;

	return c;
}

short ByteBuffer::ReadShort()
{
	short c;

	if(mReadCount+2 > mSize)
		c = -1;
	else		
		memcpy(&c, &mCharArray[mReadCount], 2);

	mReadCount += 2;

	return c;
}

float ByteBuffer::ReadFloat()
{
	float c;

	if(mReadCount+4 > mSize)
		c = -1;
	else
		memcpy(&c, &mCharArray[mReadCount], 4);

	mReadCount += 4;

	return c;
}

