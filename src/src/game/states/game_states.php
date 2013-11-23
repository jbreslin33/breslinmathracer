var GLOBAL_PAD_GAME = new Class(
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

enter: function(game)
{
},

execute: function(game)
{
	if (game.mWorkingOnLevel != game.mApplication.mNextLevelID)
        {
		game.mPadStateMachine.changeState(game.mRESET_PAD_GAME);
        }

        if (game.mQuiz.isQuizComplete())
        {
                game.mQuizComplete = true;
                game.mApplication.mLevelCompleted = true;
                alert('Electrical Bananas! Next Level!');
        }

        if (game.mAlertPause == false)
        {
        	if (game.mStartGameHit == true && game.mOutOfTime == false)
                {
                	if (game.mTimeSinceEpoch > game.mQuestionStartTime + game.mThresholdTime)
                        {
                       	        game.mOutOfTime = true;
                                alert('Out of time! Correct Answer is:' + game.mQuiz.getQuestion().getAnswer());
                                game.resetGame();
                        }
                }
         }
},

exit: function(game)
{
}

});

var INIT_PAD_GAME = new Class(
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

var RESET_PAD_GAME = new Class(
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

enter: function(game)
{
	game.mWorkingOnLevel = game.mApplication.mNextLevelID;
        game.resetGame();
},

execute: function(game)
{
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

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
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

var SHOW_CORRECT_ANSWER = new Class(
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

