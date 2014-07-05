/*************** ITEM STATES ************/
var GLOBAL_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
},

execute: function(item)
{
},

exit: function(item)
{
}

});

var INIT_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		APPLICATION.log('ITEM::INIT_ITEM');
	}
	item.createShapes();
	item.hideShapes();
},

execute: function(item)
{
	//if your THE ITEM then go to wait state
	if (item.mSheet.mItem == item)
	{
		item.mStateMachine.changeState(item.mWAITING_ON_ANSWER_ITEM);
	}
},

exit: function(item)
{
}

});

var WAITING_ON_ANSWER_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		APPLICATION.log('ITEM::WAITING_ON_ANSWER_ITEM');
	}
 
	//times
       	item.mQuestionStartTime = APPLICATION.mGame.mTimeSinceEpoch; //restart timer
	
	item.showQuestion();
	item.showAnswerInputs();
	item.createQuestionShapes();
	item.showQuestionShapes();
 
	//try to set focus
	item.setTheFocus();
},

execute: function(item)
{
	if (item.mThresholdTime == 0)
        {
                //no possibility of OUT_OF_TIME
        }
        else if (APPLICATION.mGame.mTimeSinceEpoch > item.mQuestionStartTime + item.mThresholdTime)
        {
        	item.mOutOfTime = true;
                item.mStateMachine.changeState(item.mOUT_OF_TIME);
	}

	//you should check mUserAnswer in item here....
   	if (item.mUserAnswer != '')
        {
		if (item == item.mSheet.mItemArray[0])
		{
			//item is the first in array on Sheet so send attempt
			APPLICATION.sendLevelAttempt(item.mType);
		}
		else
		{
			//just send item attempt first item attempt was sent with sendLevelAttempt
			APPLICATION.sendItemAttempt(item.mType);
		}

        	pass = item.checkUserAnswer();
                if (pass)
                {
                	item.mStateMachine.changeState(item.mCONTINUE_CORRECT);
                }
                else
                {
                        item.mStatus = 2;
                	item.mStateMachine.changeState(item.mSHOW_CORRECT_ANSWER_ITEM);
                }
	}                   
},

exit: function(item)
{
}

});

var CONTINUE_CORRECT = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM::CONTINUE_CORRECT');
        }
 	item.mShowContinueCorrectStartTime = item.mSheet.mGame.mTimeSinceEpoch;

	item.mSheet.mGame.incrementScore();
        item.mCorrectAnswerStartTime = item.mSheet.mGame.mTimeSinceEpoch;

        item.showContinueCorrect();
},

execute: function(item)
{
        if (item.mSheet.mGame.mTimeSinceEpoch > item.mShowContinueCorrectStartTime + item.mShowContinueCorrectThresholdTime)
        {
               	item.mStateMachine.changeState(item.mCORRECT_ITEM);
        }
/*
        if (item.mContinueCorrect == true)
        {
                item.mStateMachine.changeState(item.mCORRECT_ITEM);
        }
*/
},

exit: function(item)
{
        item.hideContinueCorrect();
}

});


var CORRECT_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM::CORRECT_ITEM');
        }
        item.mStatus = 1;
        item.hideShapes();
	item.hideQuestionShapes();
},

execute: function(item)
{
	if (item.mStatus == 0)
	{
		item.mStateMachine.changeState(item.mINIT_ITEM);
	}
},

exit: function(item)
{
}

});


var SHOW_CORRECT_ANSWER_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		APPLICATION.log('ITEM::SHOW_CORRECT_ANSWER_ITEM');
	}
        item.mCorrectAnswerStartTime = item.mSheet.mGame.mTimeSinceEpoch;  

	item.showCorrectAnswer();
},

execute: function(item)
{
        if (item.mSheet.mGame.mTimeSinceEpoch > item.mCorrectAnswerStartTime + item.mCorrectAnswerThresholdTime)
        {
               	item.mStateMachine.changeState(item.mCONTINUE_INCORRECT);
        }
},

exit: function(item)
{
}

});

var CONTINUE_INCORRECT = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM::CONTINUE_INCORRECT');
        }
        item.mCorrectAnswerStartTime = item.mSheet.mGame.mTimeSinceEpoch;

        item.showContinueIncorrect();
},

execute: function(item)
{
        if (item.mContinueIncorrect == true)
        {
                item.mStateMachine.changeState(item.mINCORRECT_ITEM);
        }
},

exit: function(item)
{
        item.hideContinueIncorrect();
	item.hideCorrectAnswer();
}

});



var INCORRECT_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM::INCORRECT_ITEM');
        }
	item.hideShapes();
},

execute: function(item)
{
        if (item.mStatus == 0)
        {
                item.mStateMachine.changeState(item.mINIT_ITEM);
        }
},

exit: function(item)
{
}
});



var OUT_OF_TIME_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		APPLICATION.log('ITEM::OUT_OF_TIME_ITEM');
	}
        item.outOfTimeEnter();
},

execute: function(item)
{
        item.outOfTimeExecute();
},

exit: function(item)
{
        item.outOfTimeExit();
}

});

