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
	if (item.mStateMachine.currentState() !=  this.mFINISHED_ITEM) 
	{
	}
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
},

execute: function(item)
{
	if (item.mStatus == 1)
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
	item.createWorld();
        
	//times
       	item.mQuestionStartTime = APPLICATION.mGame.mTimeSinceEpoch; //restart timer
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
                item.log('ITEM::FINISHED_ITEM');
        }
        item.destroyWorld();
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
        item.showCorrectAnswerEnter();
},

execute: function(item)
{
        if (item.mTimeSinceEpoch > item.mCorrectAnswerStartTime + item.mCorrectAnswerThresholdTime)
        {
               	item.mStateMachine.changeState(item.mINCORRECT_ITEM);
        }
},

exit: function(item)
{
        item.showCorrectAnswerExit();
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
                item.log('ITEM::FINISHED_ITEM');
        }
        item.destroyWorld();
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

