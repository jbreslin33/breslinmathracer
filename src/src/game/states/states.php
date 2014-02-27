/*************** GAME STATES ************/
var GLOBAL_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
},

execute: function(game)
{
},

exit: function(game)
{
}

});

var INIT_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::INIT_GAME');
	}
},

execute: function(game)
{
	game.mStateMachine.changeState(game.mRESET_GAME);
},

exit: function(game)
{
}

});

var RESET_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::RESET_GAME');
	}
	game.resetGameEnter();
},

execute: function(game)
{
},

exit: function(game)
{
}

});

var NORMAL_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::NORMAL_GAME');
	}
	game.reset();
},

execute: function(game)
{
	if (game.mQuiz.isQuizComplete())
        {
                game.mStateMachine.changeState(game.mLEVEL_PASSED);
        }

        if (game.mKilled == true)
       	{
                game.mStateMachine.changeState(game.mRESET_GAME);
        }
},

exit: function(game)
{
}
});

var LEVEL_PASSED = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::LEVEL_PASSED');
	}
	game.levelPassedEnter();
},

execute: function(game)
{
	game.levelPassedExecute();
},

exit: function(game)
{
	game.levelPassedExit();
}

});

var LEVEL_FAILED = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::LEVEL_FAILED');
	}
        game.levelFailedEnter();
},

execute: function(game)
{
        game.levelFailedExecute();
},

exit: function(game)
{
        game.levelFailedExit();
}

});

//pad states
var FIRST_TIME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::FIRST_TIME');
	}
        game.firstTimeEnter();
},

execute: function(game)
{
        game.firstTimeExecute();
},

exit: function(game)
{
}

});

var WAITING_ON_ANSWER = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::WAITING_ON_ANSWER');
	}
        game.waitingOnAnswerEnter();
},

execute: function(game)
{
        game.waitingOnAnswerExecute();
},

exit: function(game)
{
}

});

var CORRECT_ANSWER = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::CORRECT_ANSWER');
	}
        game.mQuiz.correctAnswer();
},

execute: function(game)
{
        if (game.mQuiz.isQuizComplete())
        {
                game.mStateMachine.changeState(game.mLEVEL_PASSED);
        }
        else
        {
                game.mStateMachine.changeState(game.mWAITING_ON_ANSWER);
        }
},

exit: function(game)
{
}

});

var SHOW_CORRECT_ANSWER = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::SHOW_CORRECT_ANSWER');
	}
        game.showCorrectAnswerEnter();
},

execute: function(game)
{
        if (game.mTimeSinceEpoch > game.mCorrectAnswerStartTime + game.mCorrectAnswerThresholdTime)
        {
               	game.mStateMachine.changeState(game.mRESET_GAME);
        }
},

exit: function(game)
{
        game.showCorrectAnswerExit();
}

});

var OUT_OF_TIME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::OUT_OF_TIME');
	}
        game.outOfTimeEnter();
},

execute: function(game)
{
        game.outOfTimeExecute();
},

exit: function(game)
{
        game.outOfTimeExit();
}

});

