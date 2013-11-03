var Game = new Class(
{

initialize: function(application)
{
	this.mDelayClick = 100;
	this.mDelayClickCounter = 0;
	
	//keys
 	this.mKeyArray     = new Array();

	// constants
	this.mCommandKey          = 1;
	this.mCommandFrameTime = 2;

	this.mSequence = 0;

	this.mMessageFrame = 2;  //changed this to browser code

	this.mMessageAddShape    = -103;
	this.mMessageRemoveShape = -104;

	//application	
	this.mApplication = application;	

	//shapes
	this.mShapeVector      = new Array();
	this.mShapeGhostVector = new Array();
	this.mControlObject      = 0; 
	this.mControlObjectGhost = 0; 
	this.mOffSet = new Vector3D();

	//byteBuffer
	this.mByteBuffer = new ByteBuffer();

        //keys
        this.mKeyUp = 1;
        this.mKeyDown = 2;
        this.mKeyLeft = 4;
        this.mKeyRight = 8;
        this.mKeyCounterClockwise = 16;
        this.mKeyClockwise = 32;

        //input
        this.mKeyCurrent = 0;
        this.mKeyLast = 0;

        //time
        this.mRunNetworkTime = 0.0;
	this.mPollDelay = 100;
	this.mPollDelayCounter = 0;
	this.mFrameTimeServer = 0;

	this.mStateMachine = new StateMachine(this);
        this.mPLAY_GAME = new PLAY_GAME(this);
        this.mRESET_GAME = new RESET_GAME(this);
        this.mStateMachine.setGlobalState(0);
        this.mStateMachine.changeState(this.mPLAY_GAME);
/*
        //set Camera
        // Position it at 500 in Z direction
        mApplication->getCamera()->setPosition(Ogre::Vector3(0,20,20));
        // Look back along -Z
        mApplication->getCamera()->lookAt(Ogre::Vector3(0,0,0));
        mApplication->getCamera()->setNearClipDistance(5);
*/
},


log: function(msg)
{
	setTimeout(function()
        {
        	throw new Error(msg);
        }, 0);
},

remove: function()
{
	//set shapes to not visible and clear shapeArrays

	if (this.mShapeGhostVector)
	{
		for (i = 0; i < this.mShapeGhostVector.length; i++)
		{
			this.mShapeGhostVector[i].mDiv.mDiv.removeChild(this.mShapeGhostVector[i].mObjectTitle);
			this.mShapeGhostVector[i].mDiv.mDiv.removeChild(this.mShapeGhostVector[i].mMesh);
			document.body.removeChild(this.mShapeGhostVector[i].mDiv.mDiv);
		}
		//set vector to 0 length...
		this.mShapeGhostVector.length = 0;
	}
	if (this.mShapeVector)
	{
		for (i = 0; i < this.mShapeVector.length; i++)
		{
			this.mShapeVector[i].mDiv.mDiv.removeChild(this.mShapeVector[i].mObjectTitle);
			this.mShapeVector[i].mDiv.mDiv.removeChild(this.mShapeVector[i].mMesh);
			document.body.removeChild(this.mShapeVector[i].mDiv.mDiv);
		}
		//set vector to 0 length...
		this.mShapeVector.length = 0;
	}

},

/*********************************
                Update
**********************************/
processUpdate: function()
{
	//set intervalCount back to zero to signify we are still running game loop
	mIntervalCount = 0;

	//set the offset
	if (this.mControlObject)
	{
		x = parseFloat(this.mControlObject.mPosition.x);
		z = parseFloat(this.mControlObject.mPosition.z);
		//x = parseFloat(x * 2);
		//z = parseFloat(z * 2);

		this.mOffSet.x = parseFloat(this.mApplication.mScreenCenter.x) - parseFloat(x);
        	this.mOffSet.y = 0;
        	this.mOffSet.z = parseFloat(this.mApplication.mScreenCenter.z) - parseFloat(z);
	}

	this.mStateMachine.update();

	for (i = 0; i < this.mShapeVector.length; i++)
	{
		this.mShapeVector[i].interpolateTick(this.mApplication.getRenderTime());
	}
},

/*********************************
               NETWORK 
**********************************/
checkForByteBuffer: function()
{

},

/*********************************
*               SHAPE
**********************************/
addShape: function(byteBuffer)
{
	shape = new Shape(this.mApplication,byteBuffer,false);

	shape.mMove = new Move(shape);

	//put shape and ghost in game vectors so they can be looped and game now knows of them.
        this.mShapeVector.push(shape);
        this.mShapeGhostVector.push(shape.mGhost);
/*
	if (shape.mLocal == 1)
	{
		shape.mGhost.setVisible(true);
	}
	else
	{
		shape.mGhost.setVisible(false);
	}
*/
	shape.mGhost.setVisible(false);

},

removeShape: function(byteBuffer)
{
	if (this.mApplication.mLeaveGame || this.mApplication.mSentLeaveGame)
	{
	}
	else
	{
 		byteBuffer.beginReading();
        	type     = byteBuffer.readByte();
        	clientID = byteBuffer.readByte();
        	index    = byteBuffer.readByte();
	
  		for (i=0; i < this.mShapeVector.length; i++)
        	{
                	if (index == this.mShapeVector[i].mIndex)
			{
 				this.mShapeVector[i].mDiv.mDiv.removeChild(this.mShapeVector[i].mObjectTitle);
                        	this.mShapeVector[i].mDiv.mDiv.removeChild(this.mShapeVector[i].mMesh);
                        	document.body.removeChild(this.mShapeVector[i].mDiv.mDiv);

				this.mShapeVector.splice(i,1);
			}
			inverseIndex = index * -1;
                	if (inverseIndex == this.mShapeGhostVector[i].mIndex)
			{
 				this.mShapeGhostVector[i].mDiv.mDiv.removeChild(this.mShapeGhostVector[i].mObjectTitle);
                        	this.mShapeGhostVector[i].mDiv.mDiv.removeChild(this.mShapeGhostVector[i].mMesh);
                        	document.body.removeChild(this.mShapeGhostVector[i].mDiv.mDiv);

				this.mShapeGhostVector.splice(i,1);
			}
		}
	}
},

readServerTick: function(byteBuffer)
{
	this.mApplication.mIntervalCountLast = this.mApplication.mIntervalCount;
	this.mApplication.mIntervalCount++;

	seq = byteBuffer.readByte(); //seq
	this.mSequence = seq;
	this.mFrameTimeServer = byteBuffer.readByte(); //time
	
	while (byteBuffer.mReadCount < byteBuffer.mBufferArray.length)
	{
		var id = byteBuffer.readByte();
		
		var shape = this.getShape(id);
		
		if (shape != 0)
		{
			shape.processDeltaByteBuffer(byteBuffer);
		}
		else
		{
			//do nothing
		}
	}
},

setText: function(byteBuffer)
{
	var text = '';
        var index = byteBuffer.readByte();
        var length = byteBuffer.readByte();
        
	text = text + byteBuffer.readByte();
/*
	for (i = 0; i < length; i++)
        {
                text = text + byteBuffer.readByte();
        }
*/
	var shape = this.getShape(index);
	shape.setText(text);
},

/*
askQuestion: function(byteBuffer)
{
        this.mApplicationPartido.mStringQuestion = '';
        var length = byteBuffer.readByte();

        for (i = 0; i < length; i++)
        {
                this.mApplicationPartido.mStringQuestion = this.mApplicationPartido.mStringQuestion + byteBuffer.readByte();
        }

        if (this.mApplicationPartido.mLabelQuestion)
        {
                this.mApplicationPartido.mLabelQuestion.value = this.mApplicationPartido.mStringQuestion;
        }
        else
        {
        }

        //reset mAnswerTime
        this.mApplicationPartido.mAnswerTime = 0;
}


*/
getShape: function(id)
{
	var shape = 0;

	for (i=0; i < this.mShapeVector.length; i++)
	{
		var curShape = this.mShapeVector[i];	
		if (curShape.mIndex == id)
		{
			shape = curShape;
		}
	}
	if (shape == 0)
	{
		return 0;
	}
	else
	{
		return shape;
	}
},

sendByteBuffer: function()
{
        this.mRunNetworkTime += this.mApplication.getRenderTime() * 1000.0;
  	
	// Framerate is too high
        if(this.mRunNetworkTime > (1000 / 60))
        {
                // Build delta-compressed move command
                flags = 0;

                //if key has not been changed return having done nothing
                if(this.mKeyLast != this.mKeyCurrent)
                {
                        flags |= this.mCommandKey;
                }
                else
                {
                        return;
                }

                // Send the packet
        	message = '1 ' + this.mKeyCurrent;
        	this.mApplication.mNetwork.mSocket.emit('send_move', message);

                //set 'last' commands for diff
                this.mKeyLast = this.mKeyCurrent;
                
		//reset network time so we can start count anew
		this.mRunNetworkTime = 0.0;
	}
},

/***************************************
*                       INPUT
******************************************/

processInput: function()
{
	this.mKeyCurrent = 0;

	if (this.mApplication.mKey_up)
	{
		this.mKeyCurrent |= this.mKeyUp;
	}
	if (this.mApplication.mKey_down)
	{
		this.mKeyCurrent |= this.mKeyDown;
	}
	if (this.mApplication.mKey_left)
	{
		this.mKeyCurrent |= this.mKeyLeft;
	}
	if (this.mApplication.mKey_right)
	{
		this.mKeyCurrent |= this.mKeyRight;
	}

	if (this.mApplication.mKey_counterclockwise)
	{
		this.mKeyCurrent |= this.mKeyCounterClockwise;
	}
	if (this.mApplication.mKey_clockwise)
	{
		this.mKeyCurrent |= this.mKeyClockwise;
	}
},

reset: function()
{

},

setStandings: function(byteBuffer)
{
	this.log('setStandings called');
        this.mApplication.mStringReset = '';

        this.mApplication.mStringReset = byteBuffer.readByte();
        this.log('mStringReset:' + this.mApplication.mStringReset);

        if (this.mApplication.mLabelReset)
        {
		this.log('setting mLabelReset!!');
                this.mApplication.mLabelReset.value = this.mApplication.mStringReset;
        }
        else
        {
        }
}

});
