var ApplicationGlobal = new Class(
{
Extends: State,
initialize: function()
{
},

enter: function(application)
{

},

execute: function(application)
{
	if (application.mSetup)
	{
		//graphics
		application.runGraphics();
	}
},

exit: function(application)
{

}

});
var ApplicationInitialize = new Class(
{
Extends: State,
	
initialize: function()
{
},

enter: function(application)
{
},

execute: function(application)
{
        if (application.setup())
        {
        	application.mSetup = true;
        }
        if (application.mSetup && application.mConnected)
	{
		application.hideLoadingScreen();
        	application.mStateMachine.changeState(application.mApplicationLogin);

	}
},

exit: function()
{
}

});
var ApplicationInitialize = new Class(
{
Extends: State,
	
initialize: function()
{
},

enter: function(application)
{
},

execute: function(application)
{
        if (application.setup())
        {
        	application.mSetup = true;
        }
        if (application.mSetup && application.mConnected)
	{
		application.hideLoadingScreen();
        	application.mStateMachine.changeState(application.mApplicationLogin);

	}
},

exit: function(application)
{
}

});
var ApplicationLogin = new Class(
{
	
Extends: State,
initialize: function()
{
},

enter: function(application)
{
        application.createLoginScreen();
        application.showLoginScreen();
	application.mLabelUsername.focus();
},

execute: function(application)
{
	if (application.mLoggedIn == true)
	{	
                application.mStateMachine.changeState(application.mApplicationMain);
	}

	//for button
	if (application.mButtonHit == application.mButtonLogin)
	{
		if (application.mLabelUsername.value == '')
		{
	        	application.mButtonHit = 0;
			alert('username cannot be blank');
		}
		else
		{
	        	application.mButtonHit = 0;
			application.sendLogin();	
		}
	}

	//for enter key
    	if (application.mLabelUsername == document.activeElement)
        {
		if (application.mKey_enter ==  true)
		{
                	application.mLabelPassword.focus();
		}
        }
        if (application.mLabelPassword == document.activeElement)
        {
		if (application.mKey_enter == true)
		{
                	application.sendLogin();
		}
        }

	

},

exit: function(application)
{
	application.mStringUsername = '';
	application.mStringPassword = '';
	
	application.hideLoginScreen();
}

});
var ApplicationMain = new Class(
{
Extends: State,
	
initialize: function()
{
},

enter: function(applicationBreslin)
{
        applicationBreslin.createMainScreen();
        applicationBreslin.showMainScreen();
},

execute: function(applicationBreslin)
{
	//join game A
	if (applicationBreslin.mButtonHit == applicationBreslin.mButtonJoinGameA)
	{
	        applicationBreslin.mButtonHit = 0;
		applicationBreslin.setGame(new Game(applicationBreslin));
 		applicationBreslin.sendJoinGame('1');
                applicationBreslin.mStateMachine.changeState(applicationBreslin.mApplicationPlay);
	}

	//logout
	if (applicationBreslin.mButtonHit == applicationBreslin.mButtonLogout)
	{
	        applicationBreslin.mButtonHit = 0;
                applicationBreslin.sendLogout();
	}

	if (applicationBreslin.mLoggedIn == false)
	{
                applicationBreslin.mStateMachine.changeState(applicationBreslin.mApplicationLogin);
	}

	//exit
	if (applicationBreslin.mButtonHit == applicationBreslin.mButtonExit)
	{
	        applicationBreslin.mButtonHit = 0;
	
	}
},

exit: function(applicationBreslin)
{
        applicationBreslin.hideMainScreen();
}

});
var ApplicationPlay = new Class(
{
	
Extends: State,
initialize: function()
{
},

enter: function(applicationBreslin)
{
	applicationBreslin.mPlayingGame = true;
	applicationBreslin.mSentLeaveGame = false;
},

execute: function(applicationBreslin)
{
	//check for logout as well....
   	if (applicationBreslin.mLoggedIn == false)
        {
                applicationBreslin.mStateMachine.changeState(applicationBreslin.mApplicationLogin);
	}
	
	if (mApplicationBreslin.mKeyArray[27] && mApplicationBreslin.mSentLeaveGame == false)
	{
		message = '';
                applicationBreslin.mNetwork.mSocket.emit('send_leave_game', message);
                applicationBreslin.mSentLeaveGame = true;
	}

	if (applicationBreslin.mLeaveGame)
	{
		applicationBreslin.mSentLeaveGame = false;
		if (applicationBreslin.mLoggedIn)
		{
                	applicationBreslin.mStateMachine.changeState(applicationBreslin.mApplicationMain);
		}
		else
		{
                	applicationBreslin.mStateMachine.changeState(applicationBreslin.mApplicationLogin);
		}
	}
        else
        {
                //game
		if (applicationBreslin.getGame())
		{
                	applicationBreslin.getGame().processUpdate();
		}
        }
},

exit: function(applicationBreslin)
{
        applicationBreslin.mPlayingGame = false;
	applicationBreslin.mLeaveGame = false;
	if (applicationBreslin.getGame())
	{
		applicationBreslin.getGame().remove();
		applicationBreslin.setGame(0);
	}
}

});

