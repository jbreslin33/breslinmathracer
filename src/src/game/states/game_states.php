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
                //alert('Electrical Bananas! Next Level!');
        }

/*
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
*/
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
	this.log('RESET_PAD_GAME');
        game.reset();
	game.mPadStateMachine.changeState(game.mWAITING_ON_ANSWER_FIRST_TIME);
},

execute: function(game)
{
},

exit: function(game)
{
}

});

var WAITING_ON_ANSWER_FIRST_TIME = new Class(
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
	this.log('WAITING_ON_ANSWER_FIRST_TIME');
	game.hideCorrectAnswerBar();
	game.showNumberPad();
 	game.mNumAnswer.mMesh.value = '';
 	game.mNumAnswer.mMesh.innerHTML = '';
},

execute: function(game)
{
	//if you have an answer...
	if (game.mUserAnswer != '')
	{
		if (game.mUserAnswer == game.mQuiz.getQuestion().getAnswer())
               	{ 
                        game.mQuiz.correctAnswer();
                      	game.mPadStateMachine.changeState(game.mWAITING_ON_ANSWER);
                }
                else
                {
                      	game.mPadStateMachine.changeState(game.mSHOW_CORRECT_ANSWER);
                }
	}
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
	this.log('WAITING_ON_ANSWER');
 	game.mNumAnswer.mMesh.value = '';
 	game.mNumAnswer.mMesh.innerHTML = '';
	game.mQuestionStartTime = game.mTimeSinceEpoch; //restart timer
},

execute: function(game)
{
	//if you have an answer...
	if (game.mUserAnswer != '')
	{
		if (game.mUserAnswer == game.mQuiz.getQuestion().getAnswer())
               	{ 
                        game.mQuiz.correctAnswer();
                        game.mQuestionStartTime = game.mTimeSinceEpoch; //restart timer
                }
                else
                {
                      	game.mPadStateMachine.changeState(game.mSHOW_CORRECT_ANSWER);
                }
	}

	//check time
        if (game.mTimeSinceEpoch > game.mQuestionStartTime + game.mThresholdTime)
        {
        	game.mOutOfTime = true;
                game.mPadStateMachine.changeState(game.mSHOW_CORRECT_ANSWER);
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

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(game)
{
	this.log('SHOW_CORRECT_ANSWER');
	game.mCorrectAnswerStartTime = game.mTimeSinceEpoch;
	game.hideNumberPad();
	game.mCorrectAnswerBar.mMesh.innerHTML = 'C:' + game.mQuiz.getQuestion().getQuestion() + ' ' + game.mQuiz.getQuestion().getAnswer(); 
	game.showCorrectAnswerBar();
},

execute: function(game)
{
	if (game.mTimeSinceEpoch > game.mCorrectAnswerStartTime + game.mCorrectAnswerThresholdTime)
        {
		game.mPadStateMachine.changeState(game.mRESET_PAD_GAME);	
	}
},

exit: function(game)
{
	game.hideCorrectAnswerBar();
}

});

