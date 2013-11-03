var mApplication;
var mSize = 0;
var mMiddleOfViewPort = new Vector3D();;

window.addEvent('domready', function()
{
       	mSize = window.getSize();

        //let's move control object to middle of screen
        mMiddleOfViewPort.x =  mSize.x / 2;
        mMiddleOfViewPort.y =  0;
        mMiddleOfViewPort.z =  mSize.y / 2;

        mApplication = new ApplicationPartido(mIP,'10001');
	mApplication.createStates();
	mApplication.setStates();
       	
        //input
        document.addEvent("keydown", mApplication.keyDown);
        document.addEvent("keyup", mApplication.keyUp);

        //main loop
	mIntervalCount = 0;
        mInterval=setInterval("mApplication.processUpdate()",32)
        
	mApplication.mNetwork.mSocket.on('news', function (data)
        {
		var type = 0;
		var dataSplit = ''; 
		mApplication.mTimeSinceLastServerTick = 0;

		
		if (data)
		{
                	dataSplit = data.split(',');

                	byteBuffer = new ByteBuffer(dataSplit);
                	type = byteBuffer.readByte();
		}
		else
		{
			mApplication.log('NO DATA!!!!!!!!!!!!!!!!!!!!!!!!');
		}

		//mMessageConnected
  		if (type == -90)
                {
                        mApplication.mConnected = true;
                }

		//mMessageAskQuestion
		if (type == -76)
		{
			if (mApplication.mGame)
                        {
                                mApplication.mGame.askQuestion(byteBuffer);
                        }
                        else
                        {
                                mApplication.log('no game yet on client!');
                        }
		}
  
		//mMessageCorrectAnswerStart
/*
                if (type == -61)
                {
                        if (mApplication.mGame)
                        {
                                mApplication.mGame.mCorrectAnswerStart = true;
                        }
                        else
                        {
                                mApplication.log('no game yet on client!');
                        }

                }
*/
  		//mMessageShowCorrectAnswer
                if (type == -61)
                {
                        if (mApplication.mGame)
                        {
                                mApplication.mGame.mCorrectAnswerStart = true;
                                mApplication.mGame.correctAnswer(byteBuffer);
                        }
                        else
                        {
                                mApplication.log('no game yet on client!');
                        }
                }
 
                //mMessageReportStandings
                if (type == -94)
                {
			mApplication.log('mMessageReportStandings in main');		i
                        if (mApplication.mGame)
                        {
                                mApplication.mGame.setStandings(byteBuffer);
                        }
                        else
                        {
                                mApplication.log('no game yet on client!');
                        }
                }
	
		//mMessageCorrectAnswerEnd
                if (type == -63)
                {
                        if (mApplication.mGame)
                        {
                                mApplication.mGame.mCorrectAnswerEnd = true;
                        }
                        else
                        {
                                mApplication.log('no game yet on client!');
                        }
                }

		//mMessageGameStart
                if (type == -57)
                {
                        if (mApplication.mGame)
                        {
				mApplication.mGame.mStateMachine.changeState(mApplication.mGame.mPLAY_GAME);
                        }
                        else
                        {
                                mApplication.log('no game yet on client!');
                        }
                }

             	//mMessageGameEnd
                if (type == -58)
                {
                        if (mApplication.mGame)
                        {
				mApplication.log('mMessageGameEnd');	
				mApplication.mGame.mStateMachine.changeState(mApplication.mGame.mRESET_GAME);
                        }       
                        else
                        {
                                mApplication.log('no game yet on client!');
                        }
                }


  		//mMessageSetText
                if (type == -66)
                {
                        if (mApplication.mGame)
                        {
                                mApplication.mGame.setText(byteBuffer);
                        }
                        else
                        {
                                mApplication.log('no game yet on client!');
                        }
                }

		//mMessageBattleStart
		if (type == -75)
		{
			if (mApplication.mGame)
                        {
				mApplication.mGame.mPartidoStateMachine.changeState(mApplication.mGame.mANSWER_QUESTION);
                        }
                        else
                        {
                                mApplication.log('no game yet on client!');
                        }
			
		}

		//mMessageBattleEnd
		if (type == -74)
		{
			if (mApplication.mGame)
                        {
				mApplication.mGame.mPartidoStateMachine.changeState(mApplication.mGame.mBATTLE_OFF);
                        }
                        else
                        {
                                mApplication.log('no game yet on client!');
                        }
			
		}

		if (type == -109)
		{
/*
                	length = byteBuffer.readByte();
			var string = "";
			for (i = 0; i < length; i++)
			{
				string = string + byteBuffer.readByte();
			}
			

			var option=document.createElement("option");
			option.text=string;
			try
  			{
  				// for IE earlier than version 8
  				mApplication.mSelectMenuSchool.add(option,x.options[null]);
  			}
			catch (e)
  			{
  				mApplication.mSelectMenuSchool.add(option,null);
  			}
*/
		}
	
                if (type == -103)
                {
			if (mApplication.mGame)
			{
				
				mApplication.mGame.addShape(byteBuffer);
			}
			else
			{
				mApplication.log('no game yet on client!');
			}
                }
	
                if (type == -104)
		{
			if (mApplication.mGame)
			{
				mApplication.mGame.removeShape(byteBuffer);
			}
			else
			{
				mApplication.log('no game so cant process -104');
			}
		}

		if (type == mApplication.mMessageLoggedIn)
                {
                        mApplication.mLoggedIn = true;
                }

                if (type == mApplication.mMessageLoggedOut)
                {
                        mApplication.mLoggedIn = false;
                }
		//-99
                if (type == mApplication.mMessageLeaveGame)
                {
                        mApplication.mLeaveGame = true;
                }

                if (type == 1)
                {
			if (mApplication.mGame)
			{
				mIntervalCount++;
		
				//check if we stopped game loop	
				if (mApplication.mGameReset)
				{

				}
				else
				{
					if (mIntervalCount > 25)
					{
						//game loop stopped so let's clear interval and start a new one.	
						mApplication.log('gameloop stopped');
					
						//clear it
						clearInterval(mInterval);

						//set it again
        					mInterval=setInterval("mApplication.processUpdate()",32)

						mIntervalCount = 0;
					}
				}
                        	mApplication.mGame.readServerTick(byteBuffer);
			}
                }
        });
}
);

window.onresize = function(event)
{
	mSize = window.getSize();	

        //let's move control object to middle of screen
        mMiddleOfViewPort.x =  mSize.x / 2;
        mMiddleOfViewPort.y =  0;
        mMiddleOfViewPort.z =  mSize.y / 2;
    	//mApplication.mNetwork.mSocket.emit('send_disconnect', '');
}

