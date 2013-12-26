/****************** PAD STATES ************/
/****************** ***********************/
/****************** ********* ************/
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
	this.log('RESET_PAD_GAME.game.reset');
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
	//numberPad
	this.log('WAITING_ON_ANSWER_FIRST_TIME.mInputPad.reset');
	if (game.mQuiz)
	{
		this.log('mQuiz exists');
		if (!game.mQuiz.getQuestion())	
		{
			game.createQuestions();
		}
	}
	else
	{
		this.log('mQuiz ! exists');
	}	
	
	//show the question...
	game.showQuestion();

	//show the pad	
	game.mInputPad.show();

	//correctAnswer
	game.hideCorrectAnswerBar();


	//user answer
	game.mUserAnswer = '';
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
	//correctAnswer
	game.hideCorrectAnswerBar();

	//number pad
	game.showQuestion();
	game.mInputPad.show();

	//user answer
	game.mUserAnswer = '';

	//times
	game.mQuestionStartTime = game.mTimeSinceEpoch; //restart timer
},

execute: function(game)
{
	//if you have an answer...
	if (game.mUserAnswer != '')
	{
		if (game.mUserAnswer == game.mQuiz.getQuestion().getAnswer())
               	{ 
                      	game.mPadStateMachine.changeState(game.mCORRECT_ANSWER_PAD_GAME);
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
                game.mPadStateMachine.changeState(game.mSHOW_CORRECT_ANSWER_OUT_OF_TIME);
       	} 
},

exit: function(game)
{
}

});

var CORRECT_ANSWER_PAD_GAME = new Class(
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
	game.mQuiz.correctAnswer();
},

execute: function(game)
{
        if (game.mQuiz.isQuizComplete())
        {
		game.mPadStateMachine.changeState(game.mLEVEL_PASSED);
        }
	else
	{
		game.mPadStateMachine.changeState(game.mWAITING_ON_ANSWER);
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
	game.showCorrectAnswerEnter();
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
	game.showCorrectAnswerExit();
}

});

var SHOW_CORRECT_ANSWER_OUT_OF_TIME = new Class(
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
	game.showCorrectAnswerOutOfTimeEnter();
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
	game.showCorrectAnswerOutOfTimeExit();
}

});
