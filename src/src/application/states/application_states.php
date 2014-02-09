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
},
exit: function(application)
{
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
        application.mAdvanceToNextLevelConfirmation = false;

	//tell db to advance you
        application.advanceToNextLevel();

	//set the game on db to end 
        application.sendGameTimeEnd();
},

execute: function(application)
{
        if (application.mAdvanceToNextLevelConfirmation)
        {
        	//application.mAdvanceToNextLevelConfirmation = false;
                application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
        }
},

exit: function(application)
{
	application.mLevelCompleted = false;
 	application.mHud.setLevel(application.mLevel,application.mLevels);	
}

});
