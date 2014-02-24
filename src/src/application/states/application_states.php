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
		
	if (application.mLevelFailed)
	{
		application.mStateMachine.changeState(application.mREWIND_TO_PREVIOUS_LEVEL_APPLICATION);
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
	//tell db to advance you
        application.advanceToLastLevel();

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
	application.mLevelFailed = false;
 	application.mHud.setLevel(application.mLevel,application.mLevels);	
}

});
