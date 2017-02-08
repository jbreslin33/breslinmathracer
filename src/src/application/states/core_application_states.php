var GLOBAL_CORE_APPLICATION = new Class(
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
        if (application.mGame)
        {
                application.mGame.update();
        }

	if (application.mEvaluationsID == 41 && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mMAIN_MENU_APPLICATION)
	{
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mMAIN_MENU_APPLICATION);
	}

	if ( (application.mEvaluationsID > 0 && application.mEvaluationsID < 41) && APPLICATION.mCoreStateMachine.mCurrentState != APPLICATION.mNORMAL_CORE_APPLICATION)
	{
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mNORMAL_CORE_APPLICATION);
	}
},

exit: function(application)
{
}

});

var INIT_CORE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::INIT_CORE_APPLICATION');
	}
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::INIT_CORE_APPLICATION execute');
	}
	application.mCoreStateMachine.changeState(application.mLOGIN_STUDENT_APPLICATION);
},

exit: function(application)
{
}

});

var LOGIN_STUDENT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	application.mLoggedIn = false;
	application.mSent = false;

	if (application.mStateLogs)
	{
		application.log('APPLICATION::LOGIN_STUDENT_APPLICATION');
	}
	application.mRef_id = 'login';
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGameName = "login_student";
        application.mGame = new LoginStudent(APPLICATION);
	application.mLoggedIn = false;
	application.mDataToRead = false;

	application.mResponseArray = [];
 
	//lets hide homeselect
       	APPLICATION.mHud.mHome.setVisibility(false);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LOGIN_STUDENT_APPLICATION execute');
	}
	if (application.mSent == true)
	{
		application.mCoreStateMachine.changeState(application.mLOGIN_STUDENT_WAIT_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::LOGIN_STUDENT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
}

});

//maybe wait for login....
var LOGIN_STUDENT_WAIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::LOGIN_STUDENT_WAIT_APPLICATION');
	}
	application.mStateEnterTime = APPLICATION.mGame.mTimeSinceEpoch; 
	application.mSent = false;

        //gets called right away
        APPLICATION.mGame.mLoginButton.setVisibility(false);
        APPLICATION.mGame.mUsernameLabel.setVisibility(false);
        APPLICATION.mGame.mUsernameTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordTextBox.setVisibility(false);
        var v = 'PLEASE WAIT LOGGING IN';
        APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LOGIN_STUDENT_WAIT_APPLICATION execute');
	}

	//4 things can happen when you have sent a login request
	
	if (application.mDataToRead == true) //we have some data to read
	{
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[2];
		APPLICATION.mDataToRead = false;
		
		if (application.mLoggedIn == true) //i am going to send item_types and item_attempts here. maybe in rawData??
		{
        		APPLICATION.mRef_id = APPLICATION.mResponseArray[1]; 
                	APPLICATION.mHud.setOrange('Game:' + APPLICATION.mRef_id);
               	 	APPLICATION.mUsername = APPLICATION.mResponseArray[3];
                	APPLICATION.mFirstName = APPLICATION.mResponseArray[4];
                	APPLICATION.mLastName = APPLICATION.mResponseArray[5];
                	APPLICATION.mStandard = APPLICATION.mResponseArray[6];
                	APPLICATION.mHud.setYellow(APPLICATION.mStandard);
                	APPLICATION.mRole = 1;
			
			var itemTypes = APPLICATION.mResponseArray[7];
			APPLICATION.mItemTypesArray = itemTypes.split(":");
			for (i=0; i < APPLICATION.mItemTypesArray.length; i++)
			{
				APPLICATION.log('APPLICATION.mItemTypesArray[' + i + ']:' + APPLICATION.mItemTypesArray[i]); 
			}
	
			//lets get standards here
			APPLICATION.fillStandardsArray();
			
			var itemAttemptsEvaluationsID = APPLICATION.mResponseArray[8];
			APPLICATION.mItemAttemptsEvaluationsIDArray = itemAttemptsEvaluationsID.split(":");
                
			var itemAttemptsTypes = APPLICATION.mResponseArray[9];
			APPLICATION.mItemAttemptsTypeArray = itemAttemptsTypes.split(":");
	
			var itemAttemptsTransactionCodes = APPLICATION.mResponseArray[10];
			APPLICATION.mItemAttemptsTransactionCodeArray = itemAttemptsTransactionCodes.split(":");
		
			APPLICATION.mEvaluationsID = APPLICATION.mResponseArray[11];
			APPLICATION.log('APPLICATION.mEvaluationsID:' + APPLICATION.mEvaluationsID);

			APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

			application.mCoreStateMachine.changeState(application.mMAIN_MENU_APPLICATION);
		}
	}

	else if (application.mBadUsername == true)
	{
		application.mBadUsername = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		APPLICATION.log('mBadUsername');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
		APPLICATION.log('mBadPassword');
	}
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
		APPLICATION.log('LOGIN TIMED OUT');
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::LOGIN_STUDENT_WAIT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
	application.mBadPassword = false;
	application.mBadUsername = false;
}

});

var LOGIN_SCHOOL_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	application.mLoggedIn = false;

	if (application.mStateLogs)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_APPLICATION');
	}
	application.mRef_id = 'login';
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGameName = "login_school";
        application.mGame = new LoginSchool(APPLICATION);
	
	application.mLoggedIn = false;
	application.mDataToRead = false;

	application.mResponseArray = [];
 
	//lets hide homeselect
       	APPLICATION.mHud.mHome.setVisibility(false);
	
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_APPLICATION execute');
	}	
       
	if (application.mSent == true)
        {
		APPLICATION.log('sent');
                application.mCoreStateMachine.changeState(application.mLOGIN_SCHOOL_WAIT_APPLICATION);
        }
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_APPLICATION exit');
	}
	//lets show homeselect
        APPLICATION.mHud.mHome.setVisibility(true);
        application.mBadPassword = false;
        application.mBadUsername = false;
}

});
var LOGIN_SCHOOL_WAIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_WAIT_APPLICATION');
	}
	application.mStateEnterTime = APPLICATION.mGame.mTimeSinceEpoch; 
	application.mSent = false;

        //gets called right away
        APPLICATION.mGame.mLoginButton.setVisibility(false);
        APPLICATION.mGame.mUsernameLabel.setVisibility(false);
        APPLICATION.mGame.mUsernameTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordTextBox.setVisibility(false);
        var v = 'PLEASE WAIT LOGGING IN';
        APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        APPLICATION.mHud.setOrange('G: LoginSchol');
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_WAIT_APPLICATION execute');
	}

	//4 things can happen when you have sent a login request
	
	if (application.mDataToRead == true) //we have some data to read
	{
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[1]; //no refid so its element 1
		APPLICATION.mDataToRead = false;
	}
	
	else if (application.mLoggedIn == true)
	{
        	APPLICATION.mRef_id = APPLICATION.mResponseArray[1];
                //APPLICATION.mLoggedIn = APPLICATION.mResponseArray[2];
                APPLICATION.mUsername = APPLICATION.mResponseArray[3];
                APPLICATION.mFirstName = APPLICATION.mResponseArray[4];
                APPLICATION.mLastName = APPLICATION.mResponseArray[5];
                APPLICATION.mRawData = APPLICATION.mResponseArray[6];
                APPLICATION.mRole = APPLICATION.mResponseArray[7];
               	
		APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

		application.mCoreStateMachine.changeState(application.mREPORT_CORE_APPLICATION);
	}

	else if (application.mBadUsername == true)
	{
		application.mBadUsername = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_SCHOOL_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_SCHOOL_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
        
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_SCHOOL_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::LOGIN_SCHOOL_WAIT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
	application.mBadPassword = false;
	application.mBadUsername = false;
}

});


var SIGNUP_STUDENT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        application.mLoggedIn = false;
        if (application.mStateLogs)
        {
                application.log('APPLICATION::SIGNUP_STUDENT_APPLICATION');
        }
	if (APPLICATION.mCoreStateMachine.mPreviousState == APPLICATION.mSIGNUP_STUDENT_WAIT_APPLICATION)
	{
		APPLICATION.log('1');
		//dont reinstantiate class... just set visible
        	APPLICATION.mGame.mLoginButton.setVisibility(true);
        	APPLICATION.mGame.mUsernameLabel.setVisibility(true);
        	APPLICATION.mGame.mUsernameTextBox.setVisibility(true);
        	APPLICATION.mGame.mPasswordOneLabel.setVisibility(true);
        	APPLICATION.mGame.mPasswordOneTextBox.setVisibility(true);
        	APPLICATION.mGame.mPasswordTwoLabel.setVisibility(true);
        	APPLICATION.mGame.mPasswordTwoTextBox.setVisibility(true);
        	APPLICATION.mGame.mFirstNameLabel.setVisibility(true);
        	APPLICATION.mGame.mFirstNameTextBox.setVisibility(true);
        	APPLICATION.mGame.mLastNameLabel.setVisibility(true);
        	APPLICATION.mGame.mLastNameTextBox.setVisibility(true);
	}
	else 
	{
		APPLICATION.log('2');
        	if (application.mGame)
        	{
                	application.mGame.destructor();
                	application.mGame = 0;
        	}
        	application.mGame = new SignupStudent(APPLICATION);
	}
        application.mRef_id = 'signup_student';
        application.mGameName = "signup_student";
        application.mLoggedIn = false;
        application.mDataToRead = false;

        application.mResponseArray = [];

        //lets hide homeselect
        APPLICATION.mHud.mHome.setVisibility(false);

},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_APPLICATION execute');
	}
        if (application.mSent == true)
        {
		APPLICATION.log('change state');
                application.mCoreStateMachine.changeState(application.mSIGNUP_STUDENT_WAIT_APPLICATION);
        }
	else
	{
		APPLICATION.log('no change state');
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
}

});

var SIGNUP_STUDENT_WAIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_WAIT_APPLICATION');
	}
	application.mStateEnterTime = APPLICATION.mGame.mTimeSinceEpoch; 

        //gets called right away
        APPLICATION.mGame.mLoginButton.setVisibility(false);
        APPLICATION.mGame.mUsernameLabel.setVisibility(false);
        APPLICATION.mGame.mUsernameTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordOneLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordOneTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordTwoLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordTwoTextBox.setVisibility(false);
        APPLICATION.mGame.mFirstNameLabel.setVisibility(true);
        APPLICATION.mGame.mFirstNameTextBox.setVisibility(true);
        APPLICATION.mGame.mLastNameLabel.setVisibility(true);
        APPLICATION.mGame.mLastNameTextBox.setVisibility(true);

        var v = 'PLEASE WAIT LOGGING IN';
        APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        APPLICATION.mHud.setOrange('Signup Student');
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_WAIT_APPLICATION execute');
	}
	//4 things can happen when you have sent a login request
	
	if (application.mDataToRead == true) //we have some data to read
	{
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[2];
		APPLICATION.mDataToRead = false;
		
		if (application.mLoggedIn == true) //i am going to send item_types and item_attempts here. maybe in rawData??
		{
        		APPLICATION.mRef_id = APPLICATION.mResponseArray[1]; 
               	 	APPLICATION.mUsername = APPLICATION.mResponseArray[3];
                	APPLICATION.mFirstName = APPLICATION.mResponseArray[4];
                	APPLICATION.mLastName = APPLICATION.mResponseArray[5];
                	APPLICATION.mRole = APPLICATION.mResponseArray[6];
                
			var itemTypes = APPLICATION.mResponseArray[7];
			APPLICATION.mItemTypesArray = itemTypes.split(":");

			//lets get standards here..
			APPLICATION.fillStandardsArray();

                        var itemAttemptsEvaluationsID = APPLICATION.mResponseArray[8];
                        APPLICATION.mItemAttemptsEvaluationsIDArray = itemAttemptsEvaluationsID.split(":");

                        var itemAttemptsTypes = APPLICATION.mResponseArray[9];
                        APPLICATION.mItemAttemptsTypeArray = itemAttemptsTypes.split(":");

                        var itemAttemptsTransactionCodes = APPLICATION.mResponseArray[10];
                        APPLICATION.mItemAttemptsTransactionCodeArray = itemAttemptsTransactionCodes.split(":");

                        APPLICATION.mEvaluationsID = APPLICATION.mResponseArray[11];

			APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);
			if (application.mEvaluationsID == 1)
			{
				application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
			}
			if (application.mEvaluationsID == 2)
			{
				application.mCoreStateMachine.changeState(application.mPRACTICE_APPLICATION);
			}
		}
	}

	else if (application.mBadUsername == true)
	{
		application.mBadUsername = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_STUDENT_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_STUDENT_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
        
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_STUDENT_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_WAIT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
	application.mBadPassword = false;
	application.mBadUsername = false;
}

});

var SIGNUP_SCHOOL_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::SIGNUP_SCHOOL_APPLICATION');
        }

        if (APPLICATION.mCoreStateMachine.mPreviousState == APPLICATION.mSIGNUP_SCHOOL_WAIT_APPLICATION)
        {
                //dont reinstantiate class... just set visible
                APPLICATION.mGame.mLoginButton.setVisibility(true);
                APPLICATION.mGame.mUsernameLabel.setVisibility(true);
                APPLICATION.mGame.mUsernameTextBox.setVisibility(true);
                APPLICATION.mGame.mPasswordOneLabel.setVisibility(true);
                APPLICATION.mGame.mPasswordOneTextBox.setVisibility(true);
                APPLICATION.mGame.mPasswordTwoLabel.setVisibility(true);
                APPLICATION.mGame.mPasswordTwoTextBox.setVisibility(true);
                APPLICATION.mGame.mNameLabel.setVisibility(true);
                APPLICATION.mGame.mNameTextBox.setVisibility(true);
                APPLICATION.mGame.mCityLabel.setVisibility(true);
                APPLICATION.mGame.mCityTextBox.setVisibility(true);
                APPLICATION.mGame.mStateLabel.setVisibility(true);
                APPLICATION.mGame.mStateTextBox.setVisibility(true);
                APPLICATION.mGame.mZipLabel.setVisibility(true);
                APPLICATION.mGame.mZipTextBox.setVisibility(true);
                
		APPLICATION.mGame.mEmailOneLabel.setVisibility(true);
                APPLICATION.mGame.mEmailOneTextBox.setVisibility(true);
		
		APPLICATION.mGame.mEmailTwoLabel.setVisibility(true);
                APPLICATION.mGame.mEmailTwoTextBox.setVisibility(true);
		
		APPLICATION.mGame.mCodeLabel.setVisibility(true);
                APPLICATION.mGame.mCodeTextBox.setVisibility(true);
        }
        else
        {
                if (application.mGame)
                {
                        application.mGame.destructor();
                        application.mGame = 0;
                }
                application.mGame = new SignupSchool(APPLICATION);
        }
        application.mRef_id = 'signup_school';
        application.mGameName = "signup_school";
        application.mLoggedIn = false;
        application.mDataToRead = false;

        application.mResponseArray = [];

        //lets hide homeselect
        APPLICATION.mHud.mHome.setVisibility(false);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::SIGNUP_SCHOOL_APPLICATION execute');
        }

        if (application.mSent == true)
        {
                application.mCoreStateMachine.changeState(application.mSIGNUP_SCHOOL_WAIT_APPLICATION);
        }
        else
        {
        }
},

exit: function(application)
{
        if (application.mStateLogsExit)
        {
                application.log('APPLICATION::SIGNUP_SCHOOL_APPLICATION exit');
        }
        //lets show homeselect
        APPLICATION.mHud.mHome.setVisibility(true);
}
});

var SIGNUP_SCHOOL_WAIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::SIGNUP_SCHOOL_WAIT_APPLICATION');
	}
	application.mStateEnterTime = APPLICATION.mGame.mTimeSinceEpoch; 

        //gets called right away
        APPLICATION.mGame.mLoginButton.setVisibility(false);
        APPLICATION.mGame.mUsernameLabel.setVisibility(false);
        APPLICATION.mGame.mUsernameTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordOneLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordOneTextBox.setVisibility(false);
        APPLICATION.mGame.mPasswordTwoLabel.setVisibility(false);
        APPLICATION.mGame.mPasswordTwoTextBox.setVisibility(false);
        APPLICATION.mGame.mNameLabel.setVisibility(false);
        APPLICATION.mGame.mNameTextBox.setVisibility(false);
        APPLICATION.mGame.mCityLabel.setVisibility(false);
        APPLICATION.mGame.mCityTextBox.setVisibility(false);
        APPLICATION.mGame.mStateLabel.setVisibility(false);
        APPLICATION.mGame.mStateTextBox.setVisibility(false);
        APPLICATION.mGame.mZipLabel.setVisibility(false);
        APPLICATION.mGame.mZipTextBox.setVisibility(false);
        APPLICATION.mGame.mEmailOneLabel.setVisibility(false);
        APPLICATION.mGame.mEmailOneTextBox.setVisibility(false);
        APPLICATION.mGame.mEmailTwoLabel.setVisibility(false);
        APPLICATION.mGame.mEmailTwoTextBox.setVisibility(false);
        APPLICATION.mGame.mCodeLabel.setVisibility(false);
        APPLICATION.mGame.mCodeTextBox.setVisibility(false);

        var v = 'PLEASE WAIT LOGGING IN';
        APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::SIGNUP_SCHOOL_WAIT_APPLICATION execute');
	}

	//4 things can happen when you have sent a login request
	
	if (application.mDataToRead == true) //we have some data to read
	{
		application.log('READ DATA set loggedin');
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[1];
		APPLICATION.mDataToRead = false;
	
		if (application.mLoggedIn == true)
		{
			application.log('READ DATA set loggedin true next');
                	APPLICATION.mUsername = APPLICATION.mResponseArray[2];
                	APPLICATION.mRole = APPLICATION.mResponseArray[3];
			application.mCoreStateMachine.changeState(application.mREPORT_CORE_APPLICATION);
		}
	}

	else if (application.mBadUsername == true)
	{
		application.mBadUsername = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_SCHOOL_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_SCHOOL_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
        
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_SCHOOL_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::SIGNUP_SCHOOL_WAIT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
	application.mBadPassword = false;
	application.mBadUsername = false;
}

});

var MAIN_MENU_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::MAIN_MENU_APPLICATION');
        }
   
        //if already have a game destroy it.
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new MainMenuGame(APPLICATION);
        application.calcScore();
        APPLICATION.mHud.setOrange('G: MainMenu');
},

execute: function(application)
{
},

exit: function(application)
{
        if (application.mStateLogsExit)
        {
                application.log('APPLICATION::MAIN_MENU_APPLICATION exit');
        }
}

});


var NORMAL_CORE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::NORMAL_CORE_APPLICATION');
	}
    
	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new NormalGame(APPLICATION);
	application.calcScore();
},

execute: function(application)
{
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::NORMAL_CORE_APPLICATION exit');
	}
}

});

var REPORT_CORE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::REPORT_CORE_APPLICATION');
	}
      	window.location.replace("/web/navigation/school/main_menu.php");
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::REPORT_CORE_APPLICATION execute');
	}
},
exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::REPORT_CORE_APPLICATION exit');
	}
}

});
