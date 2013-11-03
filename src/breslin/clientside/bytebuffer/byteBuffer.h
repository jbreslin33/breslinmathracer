#ifndef BYTEBUFFER_H
#define BYTEBUFFER_H

/******************************************************
*				INCLUDES
********************************************************/

/******************************************************
*				FORWARD DECLARATIONS
********************************************************/
class Client;

/******************************************************
*				CLASS
********************************************************/
class ByteBuffer
{
public:
	ByteBuffer();
	~ByteBuffer();

/**************************************************
*			VARIABLES
**************************************************/
public:
	int				mSize;
	char*			mCharArray;

private:
	int				mMaxSize;
	int				mReadCount;


/**************************************************
*			METHODS
**************************************************/
public:

	//admin
	int             getReadCount() { return mReadCount; }
	void			BeginReading();

	//size
	int				GetSize()		{ return mSize; }
	void			SetSize(int s)		{ mSize = s; }

	//write
	void			WriteByte  (char c);
	void			WriteShort (short c);
	void			WriteFloat (float c);
	void			WriteString(const char *s);
	void			Write(const void *d, int length);

	//read
	char			ReadByte   ();
	short			ReadShort  ();
	float			ReadFloat  ();

private:

	char			*GetNewPoint(int length);
	void			Clear();
};



#endif
