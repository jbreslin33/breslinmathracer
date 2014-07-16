var GLOBAL_APPLICATION = new Class(
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

var INIT_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::INIT_APPLICATION');
	}
},

execute: function(application)
{
	application.mStateMachine.changeState(application.mLOGIN_APPLICATION);
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
		application.log('APPLICATION::INIT_APPLICATION');
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
		application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
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
                application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
        }
},

exit: function(application)
{
}

});



var NORMAL_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::NORMAL_APPLICATION');
	}
	//get a new game if neccesary
	application.gameDecider();
},

execute: function(application)
{
	//you might not have a game if this your first time or you just went to a level that requires new game
	if (application.mGame == 0)
        {
		application.mStateMachine.changeState(application.mGET_LEVEL_DATA_APPLICATION);
        }

	if (application.mLevelCompleted)
	{
		application.mStateMachine.changeState(application.mADVANCE_TO_NEXT_LEVEL_APPLICATION);
	}
	
	if (application.mEvaluationFailed)
	{
		application.mStateMachine.changeState(application.mREMEDIATE_APPLICATION);
	}
},
exit: function(application)
{
	application.mLevelCompleted = false;
	application.mEvaluationFailed = false;
}

});

var GET_LEVEL_DATA_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(application)
{
	if (application.mStateLogs)
	{
		application.log('APPLICATION::GET_LEVEL_DATA_APPLICATION');
	}
	application.mWaitingOnLevelData = true;
	application.getLevelData();
},

execute: function(application)
{
	if (!application.mWaitingOnLevelData)
	{
		application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
	}
},

exit: function(application)
{
	application.mWaitingOnLevelData = false;
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
                application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
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
	//tell db to advance you
        application.advanceToLastLevel();
	application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
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
        //tell db remediate student on standard they answered wrong
        application.remediate(application.mGame.mSheet.getItem().mStandard,application.mGame.mSheet.getItem().mType);
},

execute: function(application)
{
        if (application.mGame.mReadyForNormalApplication)
        {
                application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
        }
},

exit: function(application)
{
        application.mGame.mReadyForNormalApplication = false;
        application.mHud.setLevel(application.mLevel,application.mLevels);
}

});

