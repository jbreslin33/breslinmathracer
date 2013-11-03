var ApplicationMainPartido = new Class(
{

Extends: ApplicationMain,
	
initialize: function()
{
},

enter: function(applicationPartido)
{
	this.parent(applicationPartido);
},

execute: function(applicationPartido)
{
	this.parent(applicationPartido);

	//join game B
	if (applicationPartido.mButtonHit == applicationPartido.mButtonJoinGameB)
	{
	        applicationPartido.mButtonHit = 0;
		applicationPartido.setGame(new GamePartido(applicationPartido));
 		applicationPartido.sendJoinGame('2');
                applicationPartido.mStateMachine.changeState(applicationPartido.mApplicationPlay);
	}
},

exit: function(applicationPartido)
{
	this.parent(applicationPartido);
}

});

var ApplicationPlayPartido = new Class(
{
Extends: ApplicationPlay,
	
initialize: function()
{
},

enter: function(applicationPartido)
{
	applicationPartido.mPlayingGame = true;
	applicationPartido.mSentLeaveGame = false;
},

execute: function(applicationPartido)
{
	//check for logout as well....
   	if (applicationPartido.mLoggedIn == false)
        {
                applicationPartido.mStateMachine.changeState(applicationPartido.mApplicationLogin);
	}
	
	if (applicationPartido.mKeyArray[27] && applicationPartido.mSentLeaveGame == false)
        {
		//check to see if in battle....
		if (applicationPartido.getGame().mStateMachine.currentState() == applicationPartido.getGame().mGamePlayPartidoBattle)
		{	
			applicationPartido.mAnswerTime = 3;
			applicationPartido.mStringAnswer = 'esc';
			applicationPartido.sendAnswer();	
		}
		else
		{
			applicationPartido.log('send_leave_game....');
       			message = '';
        		applicationPartido.mNetwork.mSocket.emit('send_leave_game', message);
			applicationPartido.mSentLeaveGame = true;
		}
		applicationPartido.mKeyArray[27] = false;
        }

	if (applicationPartido.mLeaveGame)
	{
		applicationPartido.log('leave game');	
		applicationPartido.mSentLeaveGame = false;
		if (applicationPartido.mLoggedIn)
		{
                	applicationPartido.mStateMachine.changeState(applicationPartido.mApplicationMain);
		}
		else
		{
                	applicationPartido.mStateMachine.changeState(applicationPartido.mApplicationLogin);
		}
	}
        else
        {
                //game
		if (applicationPartido.getGame())
		{
                	applicationPartido.getGame().processUpdate();
		}
        }
},

exit: function(applicationPartido)
{
        applicationPartido.mPlayingGame = false;
	applicationPartido.mLeaveGame = false;
	if (applicationPartido.getGame())
	{
		applicationPartido.getGame().remove();
		applicationPartido.setGame(0);
	}
}

});

