var ByteBuffer = new Class(
{
	
initialize: function(byteBuffer)
{
	this.mBufferArray = byteBuffer;
	this.mReadCount = 0;	
},

writeByte: function(b)
{
	this.mBufferArray[this.mReadCount] = b;
	this.mReadCount++
},

beginReading: function()
{
        this.mReadCount = 0;
},

readByte: function()
{
	var returnValue = this.mBufferArray[this.mReadCount]; 
	this.mReadCount++
	return returnValue;
}


});
