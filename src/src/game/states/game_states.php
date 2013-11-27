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
/****************** DUNGEON STATES ************/
/****************** ***********************/
/****************** ********* ************/
var GLOBAL_DUNGEON_GAME = new Class(
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

var INIT_DUNGEON_GAME = new Class(
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
        game.mDungeonStateMachine.changeState(game.mRESET_DUNGEON_GAME);
},

exit: function(game)
{
}

});

var RESET_DUNGEON_GAME = new Class(
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
        //this.log('RESET_DUNGEON_GAME');
        game.reset();
        game.mDungeonStateMachine.changeState(game.mNORMAL_DUNGEON_GAME);
},

execute: function(game)
{
},

exit: function(game)
{
}

});

var NORMAL_DUNGEON_GAME = new Class(
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
        //this.log('NORMAL_DUNGEON_GAME');
},

execute: function(game)
{
	if (game.mDoor.mEnteredDoor == true)
	{
        	game.mDungeonStateMachine.changeState(game.mLEVEL_PASSED_DUNGEON);
	}
},

exit: function(game)
{
}

});

var LEVEL_PASSED_DUNGEON = new Class(
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
        //this.log('RESET_DUNGEON_GAME');
        game.mApplication.mLevelCompleted = true;
},

execute: function(game)
{
	//just wait here until what???
        if (game.mApplication.mAdvanceToNextLevelConfirmation)
        {
                game.mDungeonStateMachine.changeState(game.mINIT_DUNGEON_GAME);
        }

},

exit: function(game)
{
}

});

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
	game.mCorrectAnswerStartTime = game.mTimeSinceEpoch;
	game.hideNumberPad();
	game.mCorrectAnswerBarHeader.mMesh.innerHTML = 'Correct Answer:'; 
	game.mCorrectAnswerBar.mMesh.innerHTML = '' + game.mQuiz.getQuestion().getQuestion() + ' ' + game.mQuiz.getQuestion().getAnswer(); 
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
	game.mCorrectAnswerBar.mMesh.innerHTML = ''; 
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
        game.mCorrectAnswerBarHeader.mMesh.innerHTML = 'OUT OF TIME!';  
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

var LEVEL_PASSED_PAD = new Class(
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
        //this.log('LEVEL_PASSED_PAD');
        game.mApplication.mLevelCompleted = true;
        
	game.hideNumberPad();

	//correctAnswer
        game.hideCorrectAnswerBar();
        game.mCorrectAnswerBarHeader.mMesh.value = '';
        game.mCorrectAnswerBarHeader.mMesh.innerHTML = 'LEVEL PASSED!!!!!!';
        game.mCorrectAnswerBar.mMesh.value = '';
        game.mCorrectAnswerBar.mMesh.innerHTML = 'HOORAY!';

        //number pad
        game.mNumAnswer.mMesh.value = '';
        game.mNumAnswer.mMesh.innerHTML = '';

        game.mNumQuestion.mMesh.value = '';
        game.mNumQuestion.mMesh.innerHTML = '';

        //user answer
        game.mUserAnswer = '';

        //times
        game.mQuestionStartTime = game.mTimeSinceEpoch; //restart timer
},

execute: function(game)
{
	//just wait here until what???
 	if (game.mApplication.mAdvanceToNextLevelConfirmation)
	{
		game.mPadStateMachine.changeState(game.mSHOW_LEVEL_PASSED_PAD);
	}
},

exit: function(game)
{
}
});

var SHOW_LEVEL_PASSED_PAD = new Class(
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
        //this.log('SHOW_LEVEL_PASSED_PAD');
	game.mShowLevelPassedStartTime = game.mTimeSinceEpoch;
	
	//correctAnswer
        game.mCorrectAnswerBarHeader.mMesh.value = '';
        game.mCorrectAnswerBarHeader.mMesh.innerHTML = 'LEVEL PASSED!!!!!!';
        game.mCorrectAnswerBar.mMesh.value = '';
        game.mCorrectAnswerBar.mMesh.innerHTML = 'HOORAY!';
        game.showCorrectAnswerBar();
	game.mVictoryShape_0.setVisibility(true);
	game.mVictoryShape_1.setVisibility(true);
	game.mVictoryShape_2.setVisibility(true);
	game.mVictoryShape_3.setVisibility(true);
	game.mVictoryShape_4.setVisibility(true);
	game.mVictoryShape_5.setVisibility(true);
	game.mVictoryShape_6.setVisibility(true);
	game.mVictoryShape_7.setVisibility(true);
	game.mVictoryShape_8.setVisibility(true);
	game.mVictoryShape_9.setVisibility(true);
	game.mVictoryShape_10.setVisibility(true);
	game.mVictoryShape_11.setVisibility(true);
	game.mVictoryShape_12.setVisibility(true);
	game.mVictoryShape_13.setVisibility(true);
},

execute: function(game)
{
	if (game.mTimeSinceEpoch > game.mShowLevelPassedStartTime + game.mShowLevelPassedThresholdTime)
        {
                game.mPadStateMachine.changeState(game.mINIT_PAD_GAME);
        }
},

exit: function(game)
{
        game.hideCorrectAnswerBar();
        game.mCorrectAnswerBarHeader.mMesh.value = '';
        game.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
        game.mCorrectAnswerBar.mMesh.value = '';
        game.mCorrectAnswerBar.mMesh.innerHTML = '';
	game.mVictoryShape_0.setVisibility(false);
	game.mVictoryShape_0.setPosition(50,300);
	game.mVictoryShape_1.setVisibility(false);
	game.mVictoryShape_1.setPosition(100,300);
	game.mVictoryShape_2.setVisibility(false);
	game.mVictoryShape_2.setPosition(150,300);
	game.mVictoryShape_3.setVisibility(false);
	game.mVictoryShape_3.setPosition(200,300);
	game.mVictoryShape_4.setVisibility(false);
	game.mVictoryShape_4.setPosition(250,300);
	game.mVictoryShape_5.setVisibility(false);
	game.mVictoryShape_5.setPosition(300,300);
	game.mVictoryShape_6.setVisibility(false);
	game.mVictoryShape_6.setPosition(350,300);
	game.mVictoryShape_7.setVisibility(false);
	game.mVictoryShape_7.setPosition(400,300);
	game.mVictoryShape_8.setVisibility(false);
	game.mVictoryShape_8.setPosition(450,300);
	game.mVictoryShape_9.setVisibility(false);
	game.mVictoryShape_9.setPosition(500,300);
	game.mVictoryShape_10.setVisibility(false);
	game.mVictoryShape_10.setPosition(550,300);
	game.mVictoryShape_11.setVisibility(false);
	game.mVictoryShape_11.setPosition(600,300);
	game.mVictoryShape_12.setVisibility(false);
	game.mVictoryShape_12.setPosition(650,300);
	game.mVictoryShape_13.setVisibility(false);
	game.mVictoryShape_13.setPosition(700,300);
	
}
});

