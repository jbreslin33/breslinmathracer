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
	application.mWaitingOnLevelData = true;
	application.getLevelData();
},

execute: function(application)
{
	if (!application.mWaitingOnLevelData)
	{
        	if (application.mGame)
        	{
			application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
        	}
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
	application.mLevelCompleted = false;
	if (application.mGame)
	{
        	application.advanceToNextLevel();
                application.mGame.resetGame();
                application.sendGameTimeEnd();
	}
        application.mStateMachine.changeState(application.mGET_LEVEL_DATA_APPLICATION);
},

execute: function(application)
{
        if (application.mGame)
        {
                application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
        }
},

exit: function(application)
{
}

});

