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
	item.mStateMachine.changeState(item.mRESET_ITEM);
},

execute: function(item)
{
},

exit: function(item)
{
}

});

var RESET_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		item.log('ITEM::RESET_ITEM');
	}
	item.mStateMachine.changeState(item.mNORMAL_ITEM);
},

execute: function(item)
{
},

exit: function(item)
{
}

});

var NORMAL_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		item.log('ITEM::NORMAL_ITEM');
	}
},

execute: function(item)
{

},

exit: function(item)
{
}
});

var LEVEL_PASSED_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		item.log('ITEM::LEVEL_PASSED_ITEM');
	}
	item.levelPassedEnter();
},

execute: function(item)
{
	item.levelPassedExecute();
},

exit: function(item)
{
	item.levelPassedExit();
}

});

//pad states
var FIRST_TIME_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		item.log('ITEM::FIRST_TIME_ITEM');
	}
        item.firstTimeEnter();
},

execute: function(item)
{
        item.firstTimeExecute();
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
        item.waitingOnAnswerEnter();
},

execute: function(item)
{
        item.waitingOnAnswerExecute();
},

exit: function(item)
{
}

});

var CORRECT_ANSWER_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		item.log('ITEM::CORRECT_ANSWER_ITEM');
	}
        item.mQuiz.correctAnswer();
},

execute: function(item)
{
        if (item.mQuiz.isQuizComplete())
        {
                item.mStateMachine.changeState(item.mLEVEL_PASSED_ITEM);
        }
        else
        {
                item.mStateMachine.changeState(item.mWAITING_ON_ANSWER_ITEM);
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
               	item.mStateMachine.changeState(item.mRESET_ITEM);
        }
},

exit: function(item)
{
        item.showCorrectAnswerExit();
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

