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
	//this.log('RESET_PAD_GAME');
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
	//this.log('WAITING_ON_ANSWER_FIRST_TIME');

	//correctAnswer
	game.hideCorrectAnswerBar();
	game.mCorrectAnswerBarHeader.mMesh.value = '';
	game.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
	game.mCorrectAnswerBar.mMesh.value = '';
	game.mCorrectAnswerBar.mMesh.innerHTML = '';

	//number pad
 	game.mNumAnswer.mMesh.value = '';
 	game.mNumAnswer.mMesh.innerHTML = '';

 	game.mNumQuestion.mMesh.value = '';
 	game.mNumQuestion.mMesh.innerHTML = '';

	if (game.mQuiz)
	{
		if (!game.mQuiz.getQuestion())	
		{
			game.createQuestions();
		}
	}

 	game.mNumQuestion.mMesh.innerHTML = '' + game.mQuiz.getQuestion().getQuestion();
	game.showNumberPad();

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
			///this.log('correct in first wait!!!!!');
                        game.mQuiz.correctAnswer();
                      	game.mPadStateMachine.changeState(game.mWAITING_ON_ANSWER);
                }
                else
                {
			//this.log('show correct in first wait!!!!!');
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
	//this.log('WAITING_ON_ANSWER');
	
	//correctAnswer
	game.hideCorrectAnswerBar();
	game.mCorrectAnswerBarHeader.mMesh.value = '';
	game.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
	game.mCorrectAnswerBar.mMesh.value = '';
	game.mCorrectAnswerBar.mMesh.innerHTML = '';

	//number pad
 	game.mNumAnswer.mMesh.value = '';
 	game.mNumAnswer.mMesh.innerHTML = '';

 	game.mNumQuestion.mMesh.value = '';
 	game.mNumQuestion.mMesh.innerHTML = '';
 	game.mNumQuestion.mMesh.innerHTML = '' + game.mQuiz.getQuestion().getQuestion();
	game.showNumberPad();

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
		game.mPadStateMachine.changeState(game.mLEVEL_PASSED_PAD);
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
	this.log('SHOW_CORRECT_ANSWER');
	
	game.showCorrectAnswer();
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
	game.mCorrectAnswerBar.mMesh.innerHTML = ''; 
	
	game.mMemorizeShape.setVisibility(false);
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
        //this.log('SHOW_CORRECT_ANSWER_OUT_OF_TIME');
        game.mCorrectAnswerStartTime = game.mTimeSinceEpoch;
        game.hideNumberPad();
        game.mCorrectAnswerBarHeader.mMesh.innerHTML = 'GO FASTER!';  
        game.mCorrectAnswerBar.mMesh.innerHTML = '' + game.mQuiz.getQuestion().getQuestion() + ' ' + game.mQuiz.getQuestion().getAnswer();  
        game.showCorrectAnswerBar();
	
	game.mClockShape.setVisibility(true);
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
        game.mCorrectAnswerBar.mMesh.innerHTML = '';
	
	game.mClockShape.setVisibility(false);
}

});
