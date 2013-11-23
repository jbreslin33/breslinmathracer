var GLOBAL_APPLICATION = new Class(
{
Extends: State,

initialize: function()
{
},

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(application)
{
},

execute: function(application)
{
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

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
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

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(application)
{
	//this.log('NORMAL_APPLICATION::enter');
	
	//delete any current game
	if (application.mGame)
	{
		application.mGame.destructor();
		application.mGame = 0;
	}

	//get a new game
	application.gameDecider();
},

execute: function(application)
{
	if (application.mGame == 0)
        {
		application.mStateMachine.changeState(application.mGET_LEVEL_DATA_APPLICATION);
        }
        if (application.mGame)
        {
		if (application.mLevelCompleted)
		{
			application.mStateMachine.changeState(application.mADVANCE_TO_NEXT_LEVEL_APPLICATION);

		}
                application.mGame.update();
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

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(application)
{
	//this.log('GET_LEVEL_DATA_APPLICATION::enter');
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

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(application)
{
	//this.log('ADVANCE_TO_NEXT_LEVEL_APPLICATION::enter');
	application.mLevelCompleted = false;

	//tell db to advance you
        application.advanceToNextLevel();

	//set the game on db to end 
        application.sendGameTimeEnd();
},

execute: function(application)
{
        if (application.mAdvanceToNextLevelConfirmation)
        {
                application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
        }
},

exit: function(application)
{
}

});

