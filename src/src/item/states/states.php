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
		item.log('ITEM::INIT_ITEM');
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
		item.log('ITEM::WAITING_ON_ANSWER_ITEM');
	}
 
	//times
       	item.mQuestionStartTime = APPLICATION.mGame.mTimeSinceEpoch; //restart timer
	
	item.showQuestion();
	item.showAnswerInputs();
 
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
			APPLICATION.sendLevelAttempt();
		}

        	pass = item.checkUserAnswer();
                if (pass)
                {
                        item.mStatus = 1;
                	item.mStateMachine.changeState(item.mCORRECT_ITEM);
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
                item.log('ITEM::CORRECT_ITEM');
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
		item.log('ITEM::SHOW_CORRECT_ANSWER_ITEM');
	}
        item.mCorrectAnswerStartTime = item.mSheet.mGame.mTimeSinceEpoch;  

	//item.hideAnswerInputs();

	item.showQuestion();
	item.showUserAnswer();
	item.showCorrectAnswer();
},

execute: function(item)
{
        if (item.mSheet.mGame.mTimeSinceEpoch > item.mCorrectAnswerStartTime + item.mCorrectAnswerThresholdTime)
        {
               	item.mStateMachine.changeState(item.mINCORRECT_ITEM);
        }
},

exit: function(item)
{
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
                item.log('ITEM::INCORRECT_ITEM');
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
		item.log('ITEM::OUT_OF_TIME_ITEM');
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

