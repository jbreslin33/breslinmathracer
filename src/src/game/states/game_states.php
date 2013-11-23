/*************** GAME STATES ************/
var GLOBAL_GAME = new Class(
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

var INIT_GAME = new Class(
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
	game.mStateMachine.changeState(game.mNORMAL_GAME);
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
        //get time since epoch and set lasttime
        e = new Date();
        game.mLastTimeSinceEpoch = game.mTimeSinceEpoch;
        game.mTimeSinceEpoch = e.getTime();

        //set deltatime as function of timeSinceEpoch and LastTimeSinceEpoch diff
        game.mDeltaTime = game.mTimeSinceEpoch - game.mLastTimeSinceEpoch;

        if(game.mDeltaTime < 50000)
        {
                game.mGameTime = game.mGameTime + game.mDeltaTime;
        }

        //check Keys from application
        if (game.mKeysOn)
        {
                game.checkKeys();
        }

        if (game.mMouseOn)
        {
                game.checkMouse();
        }

        //move shapes
        for (i = 0; i < game.mShapeArray.length; i++)
        {
                game.mShapeArray[i].update(game.mDeltaTime);
        }

        //collision Detection
 	game.checkForCollisions();

        for (i = 0; i < game.mShapeArray.length; i++)
        {
                game.mShapeArray[i].render();
        }

        //save old positions
        game.saveOldPositions();

},

exit: function(game)
{
}

});

/****************** PAD STATES ************/
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
                                game.reset();
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
	game.mPadStateMachine.changeState(game.mRESET_PAD_GAME);
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
        game.reset();
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

