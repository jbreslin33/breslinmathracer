//header
#include "shapeTag.h"

//log
#include "../tdreamsock/dreamSockLog.h"

//applicationBreslin
#include "../application/applicationBreslin.h"

//byteBuffer
#include "../bytebuffer/byteBuffer.h"

ShapeTag::ShapeTag(ApplicationBreslin* applicationBreslin, ByteBuffer* byteBuffer, bool isGhost)
: Shape(applicationBreslin,byteBuffer,isGhost)
{
	
}
ShapeTag::~ShapeTag()
{
}

int ShapeTag::parseDeltaByteBuffer(ByteBuffer* byteBuffer)
{
	int flags = Shape::parseDeltaByteBuffer(byteBuffer);
	if(flags & mCommandIt)
	{
		appendToTitle("IT");
		if (mLocal == 0)
		{
			//LogString("localHH");
		}
	}
	return flags;
}


