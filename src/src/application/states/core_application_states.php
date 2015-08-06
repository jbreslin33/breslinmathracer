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
                	APPLICATION.mHud.setStandard(APPLICATION.mRef_id);
               	 	APPLICATION.mUsername = APPLICATION.mResponseArray[3];
                	APPLICATION.mFirstName = APPLICATION.mResponseArray[4];
                	APPLICATION.mLastName = APPLICATION.mResponseArray[5];
                	APPLICATION.mRole = APPLICATION.mResponseArray[6];
                
			var itemTypes = APPLICATION.mResponseArray[7];
			APPLICATION.mItemTypesArray = itemTypes.split(":");
                
			var itemAttemptsTypes = APPLICATION.mResponseArray[8];
			APPLICATION.mItemAttemptsTypeArray = itemAttemptsTypes.split(":");
		
			var itemAttemptsTransactionCodes = APPLICATION.mResponseArray[9];
			APPLICATION.mItemAttemptsTransactionCodeArray = itemAttemptsTransactionCodes.split(":");
			
			APPLICATION.mEvaluationsID = APPLICATION.mResponseArray[10];
               	
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
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
        
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_STUDENT_APPLICATION);
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
                APPLICATION.mHud.setStandard(APPLICATION.mRef_id);
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
	}
	
	else if (application.mLoggedIn == true)
	{
        	APPLICATION.mRef_id = APPLICATION.mResponseArray[1];
                APPLICATION.mHud.setStandard(APPLICATION.mRef_id);
                //APPLICATION.mLoggedIn = APPLICATION.mResponseArray[2];
                APPLICATION.mUsername = APPLICATION.mResponseArray[3];
                APPLICATION.mFirstName = APPLICATION.mResponseArray[4];
                APPLICATION.mLastName = APPLICATION.mResponseArray[5];
                APPLICATION.mRawData = APPLICATION.mResponseArray[6];
                APPLICATION.mRole = APPLICATION.mResponseArray[7];
               	
		APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

		application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
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
        application.mLoggedIn = false;
        if (application.mStateLogs)
        {
                application.log('APPLICATION::SIGNUP_SCHOOL_APPLICATION');
        }

        if (APPLICATION.mCoreStateMachine.mPreviousState == APPLICATION.mSIGNUP_SCHOOL_WAIT_APPLICATION)
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
                APPLICATION.log('2');
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
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[1];
		APPLICATION.mDataToRead = false;
	}
	
	else if (application.mLoggedIn == true)
	{
                APPLICATION.mUsername = APPLICATION.mResponseArray[2];
                APPLICATION.mRole = APPLICATION.mResponseArray[3];
               	
		//APPLICATION.mHud.setUsername(APPLICATION.mFirstName,APPLICATION.mLastName);

		application.mCoreStateMachine.changeState(application.mREPORT_CORE_APPLICATION);
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
	if (application.mEvaluationsID == 2)
	{
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mPRACTICE_APPLICATION);
	}
	if (application.mEvaluationsID == 3)
	{
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mTIMES_TABLES_TWO_APPLICATION);
	}

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
      	window.location.replace("/web/navigation/main_menu_school.php");
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

var PRACTICE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::PRACTICE_APPLICATION');
        }
	application.mPracticeItemID = application.mGame.mSheet.getItem().mPracticeInfo.mMesh.options[application.mGame.mSheet.getItem().mPracticeInfo.mMesh.selectedIndex].text; 

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new PracticeGame(APPLICATION);

},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::PRACTICE_APPLICATION execute');
	}
	if (application.mEvaluationsID == 1)
	{
		application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
	}
},

exit: function(application)
{
}

});

var TIMES_TABLES_TWO_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_TWO_APPLICATION');
        }

	//if already have a game destroy it.
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGame = new TimesTablesTwoGame(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_TWO_APPLICATION execute');
	}
	if (application.mEvaluationsID == 1)
	{
		application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
	}
	if (application.mEvaluationsID == 2)
	{
		application.mCoreStateMachine.changeState(application.mPRACTICE_APPLICATION);
	}
},

exit: function(application)
{
}

});
