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
},

execute: function(application)
{
	if (application.mLoggedIn == true)
	{
		application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
	}
},

exit: function(application)
{
}

});

var SIGNUP_APPLICATION = new Class(
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
                application.log('APPLICATION::SIGNUP_APPLICATION');
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
        if (application.mLoggedIn == true)
        {
                application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
        }
},

exit: function(application)
{
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
},
exit: function(application)
{
	application.mLevelCompleted = false;
	application.mEvaluationFailed = false;
	application.mGotoPractice = false;
	application.mGotoCore = false;
	application.mLeavePractice = false;
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
      if(raphael != 0)
          raphael.setSize(10,10);

        if (application.mStateLogs)
        {
                application.log('APPLICATION::PRACTICE_APPLICATION');
        }
        application.mWaitForReturn = true;
        application.leavePractice();
},

execute: function(application)
{
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

