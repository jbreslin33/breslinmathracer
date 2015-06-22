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
 
	//lets hide homeselect
       	APPLICATION.mHud.mHome.setVisibility(false);
},

execute: function(application)
{
	if (application.mStateLogsExecute)
	{
		application.log('APPLICATION::LOGIN_APPLICATION execute');
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
		application.log('APPLICATION::LOGIN_APPLICATION exit');
	}
	//lets show homeselect
       	APPLICATION.mHud.mHome.setVisibility(true);
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
                application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
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
	//you might not have a game if this your first time or you just went to a level that requires new game
	if (application.mLevelCompleted)
	{
		application.mCoreStateMachine.changeState(application.mADVANCE_TO_NEXT_LEVEL_APPLICATION);
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

