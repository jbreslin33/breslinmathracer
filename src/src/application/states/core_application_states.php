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
	//get a new game if neccesary
	application.gameDecider();
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
},
exit: function(application)
{
	application.mLevelCompleted = false;
	application.mEvaluationFailed = false;
}

});

var ADVANCE_TO_NEXT_LEVEL_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::ADVANCE_TO_NEXT_LEVEL_APPLICATION');
	}
	//tell db to advance you
        application.advanceToNextLevel();
},

execute: function(application)
{
	if (application.mGame.mReadyForNormalApplication)
        {
                application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
        }
},

exit: function(application)
{
	application.mGame.mReadyForNormalApplication = false;
 	application.mHud.setLevel(application.mLevel,application.mLevels);	
}

});

var REWIND_TO_PREVIOUS_LEVEL_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::REWIND_TO_PREVIOUS_LEVEL_APPLICATION');
	}
	//tell db to rewind you
        application.advanceToLastLevel();
	application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
},

execute: function(application)
{
},

exit: function(application)
{
}

});

var REMEDIATE_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
        if (application.mStateLogs)
        {
                application.log('APPLICATION::REMEDIATE_APPLICATION');
        }
        //tell db remediate student on item type answered wrong
        application.remediate(application.mGame.mSheet.getItem().mType);
},

execute: function(application)
{
        if (application.mGame.mReadyForNormalApplication)
        {
                application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
        }
},

exit: function(application)
{
        application.mGame.mReadyForNormalApplication = false;
        application.mHud.setLevel(application.mLevel,application.mLevels);
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
        //tell db remediate student on item type answered wrong
        //application.practice(application.mGame.mSheet.getItem().mType);
},

execute: function(application)
{
/*
        if (application.mGame.mReadyForNormalApplication)
        {
                application.mCoreStateMachine.changeState(application.mNORMAL_CORE_APPLICATION);
        }
*/
},

exit: function(application)
{
        application.mGame.mReadyForNormalApplication = false;
        application.mHud.setLevel(application.mLevel,application.mLevels);
}

});
