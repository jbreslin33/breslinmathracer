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
	application.mCoreStateMachine.changeState(application.mLOGIN_APPLICATION);
},

exit: function(application)
{
}

});

var LOGIN_APPLICATION = new Class(
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
		application.log('APPLICATION::LOGIN_APPLICATION');
	}
	application.mRef_id = 'login';
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGameName = "login";
        application.mGame = new login(APPLICATION);
	application.mLoggedIn = false;
	application.mFullLogin = false;

	application.mResponseArray = [];
 
	//lets hide homeselect
       	APPLICATION.mHud.mHome.setVisibility(false);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LOGIN_APPLICATION execute');
	}
	if (application.mSent == true)
	{
		application.mCoreStateMachine.changeState(application.mLOGIN_WAIT_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::LOGIN_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
}

});

var LOGIN_WAIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::LOGIN_WAIT_APPLICATION');
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
		application.log('APPLICATION::LOGIN_WAIT_APPLICATION execute');
	}

	//4 things can happen when you have sent a login request
	
	if (application.mFullLogin == true) //we have some data to read
	{
		APPLICATION.log('full in exe');
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[2];
		APPLICATION.mFullLogin = false;
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
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
        
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mLOGIN_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::LOGIN_WAIT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
	application.mBadPassword = false;
	application.mBadUsername = false;
}

});

var SCHOOL_LOGIN_WAIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::SCHOOL_LOGIN_WAIT_APPLICATION');
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
		application.log('APPLICATION::SCHOOL_LOGIN_WAIT_APPLICATION execute');
	}

	//4 things can happen when you have sent a login request
	
	if (application.mFullLogin == true) //we have some data to read
	{
		APPLICATION.log('full in exe');
		//lets sniff packet
                APPLICATION.mLoggedIn = APPLICATION.mResponseArray[1]; //no refid so its element 1
		APPLICATION.mFullLogin = false;
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

		//application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
		application.mCoreStateMachine.changeState(application.mREPORT_CORE_APPLICATION);
	}

	else if (application.mBadUsername == true)
	{
		application.mBadUsername = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSCHOOL_LOGIN_APPLICATION);
                var v = 'BAD USERNAME';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
	else if (application.mBadPassword == true)
	{
		application.mBadPassword = false;
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSCHOOL_LOGIN_APPLICATION);
                var v = 'BAD PASSWORD';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
	}
        
	else if (APPLICATION.mGame.mTimeSinceEpoch > parseInt(application.mStateEnterTime + application.mStateThresholdTime))
	{
                var v = 'LOGIN TIMED OUT';
                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
        	APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSCHOOL_LOGIN_APPLICATION);
	}
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::SCHOOL_LOGIN_WAIT_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
	application.mBadPassword = false;
	application.mBadUsername = false;
}

});

var SCHOOL_LOGIN_APPLICATION = new Class(
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
		application.log('APPLICATION::SCHOOL_LOGIN_APPLICATION');
	}
	application.mRef_id = 'login';
        if (application.mGame)
        {
        	application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGameName = "login";
        application.mGame = new SchoolLogin(APPLICATION);
	
	application.mLoggedIn = false;
	application.mFullLogin = false;

	application.mResponseArray = [];
 
	//lets hide homeselect
       	APPLICATION.mHud.mHome.setVisibility(false);
	
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::SCHOOL_LOGIN_APPLICATION execute');
	}	
       
	if (application.mSent == true)
        {
		APPLICATION.log('sent');
                application.mCoreStateMachine.changeState(application.mSCHOOL_LOGIN_WAIT_APPLICATION);
        }
},

exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::SCHOOL_LOGIN_APPLICATION exit');
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
        application.mRef_id = 'signup';
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGameName = "signup";
        application.mGame = new signup(APPLICATION);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::SIGNUP_STUDENT_APPLICATION execute');
	}
        if (application.mLoggedIn == true)
        {
                application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
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
        application.mRef_id = 'signup';
        if (application.mGame)
        {
                application.mGame.destructor();
                application.mGame = 0;
        }
        application.mGameName = "signup";
        application.mGame = new SignupSchool(APPLICATION);
},

execute: function(application)
{
        if (application.mStateLogsExecute)
        {
                application.log('APPLICATION::SIGNUP_SCHOOL_APPLICATION execute');
        }
 
	if (application.mLoggedIn == true)
        {
                if (application.mRole == 1)
                {
                        application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
                }
                else if (application.mRole == 2)
                {
                        application.mCoreStateMachine.changeState(application.mREPORT_CORE_APPLICATION);
                }
                else if (application.mRole == 3)
                {
                        application.mCoreStateMachine.changeState(application.mREPORT_CORE_APPLICATION);
                }
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
	//get a new game if neccesary
	application.gameDecider();
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::NORMAL_CORE_APPLICATION execute');
	}
	if (application.mEvaluationFailed)
	{
		application.mCoreStateMachine.changeState(application.mREMEDIATE_APPLICATION);
	}
	
	if (application.mGotoPractice)
	{
		application.mCoreStateMachine.changeState(application.mPRACTICE_APPLICATION);
	}
	if (application.mGotoCore)
	{
		application.mCoreStateMachine.changeState(application.mCORE_APPLICATION);
	}
	
	if (application.mLeavePractice)
	{
		application.mCoreStateMachine.changeState(application.mLEAVE_PRACTICE_APPLICATION);
	}
	
	if (application.mGotoTimesTables)
	{
		application.mCoreStateMachine.changeState(application.mTIMES_TABLES_APPLICATION);
	}
},
exit: function(application)
{
	if (application.mStateLogsExit)
	{
		application.log('APPLICATION::NORMAL_CORE_APPLICATION exit');
	}
	application.mLevelCompleted = false;
	application.mEvaluationFailed = false;
	application.mGotoPractice = false;
	application.mGotoCore = false;
	application.mGotoTimesTables = false;
	application.mLeavePractice = false;
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
	application.mWaitForReturn = true;
	application.practice(application.mGame.mSheet.getItem().mPracticeInfo.mMesh.options[application.mGame.mSheet.getItem().mPracticeInfo.mMesh.selectedIndex].text);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::PRACTICE_APPLICATION execute');
	}
	if (application.mWaitForReturn == false)
	{
		application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
	}
},

exit: function(application)
{
       	application.mGame.mReadyForNormalApplication = false;
}

});

var CORE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::CORE_APPLICATION');
        }
        application.mWaitForReturn = true;
        application.core(application.mGame.mSheet.getItem().mCoreInfo.mMesh.options[application.mGame.mSheet.getItem().mCoreInfo.mMesh.selectedIndex].text);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::CORE_APPLICATION execute');
	}
        if (application.mWaitForReturn == false)
        {
                application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
        }
},

exit: function(application)
{
        application.mGame.mReadyForNormalApplication = false;
        //application.normal();
}

});

var TIMES_TABLES_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::TIMES_TABLES_APPLICATION');
        }
        application.mWaitForReturn = true;
        application.timestables(application.mGame.mSheet.getItem().mTimesTablesInfo.mMesh.options[application.mGame.mSheet.getItem().mTimesTablesInfo.mMesh.selectedIndex].value);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::TIMES_TABLES_APPLICATION execute');
	}
        if (application.mWaitForReturn == false)
        {
                application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
        }
},

exit: function(application)
{
        application.mGame.mReadyForNormalApplication = false;
}

});


var LEAVE_PRACTICE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
      //if(raphael != 0)
       //   raphael.setSize(10,10);

        if (application.mStateLogs)
        {
                application.log('APPLICATION::PRACTICE_APPLICATION');
        }
        application.mWaitForReturn = true;
        application.leavePractice();
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LEAVE_PRACTICE_APPLICATION execute');
	}
        if (application.mWaitForReturn == false)
        {
                application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
        }
},

exit: function(application)
{
        application.mGame.mReadyForNormalApplication = false;
}

});

