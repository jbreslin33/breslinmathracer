
package breslin.clientside.bytebuffer;

/******************************************************
*				INCLUDES
********************************************************/

//standard library
import java.nio.ByteBuffer;

/******************************************************
*				CLASS
********************************************************/
public class Dispatch
{


public Dispatch()
{
	mMaxSize = 1400;
	mCharArray = new byte[mMaxSize];
	mByteBuffer = ByteBuffer.wrap(mCharArray);

	mSize		= 0;
	mReadCount	= 0;
}
/**************************************************
*			VARIABLES
**************************************************/

	int				mMaxSize;
	int				mSize;
	int				mReadCount;
	public byte[]			mCharArray;
	public ByteBuffer mByteBuffer;

/**************************************************
*			METHODS
**************************************************/
//admin

public byte[] getByteArray()
{
	return mCharArray;
}

int             getReadCount()

{
	return mReadCount;
}

void			BeginReading()
{

}

//char			*GetNewPoint(int length);

void			Clear()
{

}

int				GetSize()
{
	return mSize;
}

void			SetSize(int s)
{
	mSize = s;
}

//write
public void			WriteByte  (byte  b)
{
	mByteBuffer.put(b);

}

void			WriteShort (short s)
{

}

void			WriteFloat (float f)
{

}

//read
public byte			ReadByte   ()
{

	byte byteRead = mByteBuffer.get();
	mReadCount++;
	return byteRead;
}

short			ReadShort  ()
{
	return 0;
}
float			ReadFloat  ()
{
	return 0;
}




}
