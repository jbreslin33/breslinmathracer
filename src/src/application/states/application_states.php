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
	application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
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
},
exit: function(application)
{
	application.mLevelCompleted = false;
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

	//set the game on db to end 
        application.sendGameTimeEnd();
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
},

execute: function(application)
{
 	if (application.mRewindToPreviousLevelConfirmation)
        {
                application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
        }
},

exit: function(application)
{
 	application.mRewindToPreviousLevelConfirmation = false;
 	application.mHud.setLevel(application.mLevel,application.mLevels);	
}

});
