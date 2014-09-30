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
	if (item.mSheet.mItem == item && item.mSheet.mStateMachine.currentState() == item.mSheet.mNORMAL_SHEET)
	{
		item.mStateMachine.changeState(item.mWAITING_ON_ANSWER_ITEM);
	}
},

exit: function(item)
{
	item.createQuestionShapes();
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
 
	//start timer but only once
	if (item.mQuestionStartTime == 0)
	{
       		item.mQuestionStartTime = APPLICATION.mGame.mTimeSinceEpoch; //restart timer
	}
	
	item.showQuestion();
	item.showAnswerInputs();
	item.showQuestionShapes();
 
	//try to set focus
	item.setTheFocus();

	//show item type id in Game hud
	APPLICATION.mHud.setProgression(item.mType);	
	APPLICATION.mType = item.mType;	

	//hud question number	
	APPLICATION.mHud.setProgressedTypeID(item.mProgressedTypeID);	
	APPLICATION.mHud.setItemTypeStats(item.mStreak);	
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
                item.mStatus = 2;
                item.mStateMachine.changeState(item.mOUT_OF_TIME_ITEM);
	}

	//you should check mUserAnswer in item here....
   	if (item.mUserAnswer != '')
        {
        	pass = item.checkUserAnswer();
                if (pass)
                {
                        item.mStatus = 1;
                	item.mStateMachine.changeState(item.mCONTINUE_CORRECT);
                }
                else
                {
                        item.mStatus = 2;
                	item.mStateMachine.changeState(item.mSHOW_CORRECT_ANSWER_ITEM);
                }
	}                   

	if (item.mShowStandard)
	{
                item.mStateMachine.changeState(item.mSHOW_STANDARD);
	}
	if (item.mShowItem)
	{
                item.mStateMachine.changeState(item.mSHOW_ITEM);
	}
	if (item.mShowPractice)
	{
                item.mStateMachine.changeState(item.mSHOW_PRACTICE);
	}
	if (item.mShowCore)
	{
                item.mStateMachine.changeState(item.mSHOW_CORE);
	}
},

exit: function(item)
{
	APPLICATION.sendItemAttempt(item.mType,item.mStatus);
}
});

var SHOW_STANDARD = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM::SHOW_STANDARD');
        }
	item.hideQuestion();
	item.hideAnswerInputs();
	item.hideQuestionShapes();
        item.hideToggleItemInfoButton();
        item.hideTogglePracticeInfoButton();
        item.hideToggleCoreInfoButton();

        item.showStandard();
},

execute: function(item)
{
	if (item.mShowStandard == false)
	{
                item.mStateMachine.changeState(item.mStateMachine.mPreviousState);
        }
},

exit: function(item)
{
        item.hideStandard();
        item.showToggleItemInfoButton();
        item.showTogglePracticeInfoButton();
        item.showToggleCoreInfoButton();
}

});

var SHOW_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM::SHOW_ITEM');
        }
        item.hideQuestion();
        item.hideAnswerInputs();
        item.hideQuestionShapes();
        item.hideToggleStandardInfoButton();
        item.hideTogglePracticeInfoButton();
        item.hideToggleCoreInfoButton();

        item.showItem();
},

execute: function(item)
{
        if (item.mShowItem == false)
        {
                item.mStateMachine.changeState(item.mStateMachine.mPreviousState);
        }
},

exit: function(item)
{
        item.hideItem();
        item.showToggleStandardInfoButton();
        item.showTogglePracticeInfoButton();
        item.showToggleCoreInfoButton();
}

});

var SHOW_PRACTICE = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM::SHOW_PRACTICE');
        }
        item.hideQuestion();
        item.hideAnswerInputs();
        item.hideQuestionShapes();
        item.hideToggleStandardInfoButton();
        item.hideToggleItemInfoButton();
        item.hideToggleCoreInfoButton();

        item.showPractice();

        if(raphael != 0)
	{
        	raphael.setSize(10,10);
	}
},

execute: function(item)
{
        if (item.mShowPractice == false)
        {
                item.mStateMachine.changeState(item.mStateMachine.mPreviousState);
        }
},

exit: function(item)
{
        item.hidePractice();
        item.showToggleStandardInfoButton();
        item.showToggleItemInfoButton();
        item.showToggleCoreInfoButton();

        if(raphael != 0)
          raphael.setSize(630,360);
}

});

var SHOW_CORE = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM::SHOW_CORE');
        }
        item.hideQuestion();
        item.hideAnswerInputs();
        item.hideQuestionShapes();
        item.hideToggleStandardInfoButton();
        item.hideToggleItemInfoButton();
        item.hideTogglePracticeInfoButton();

        item.showCore();

        if(raphael != 0)
	{
        	raphael.setSize(10,10);
	}
},

execute: function(item)
{
        if (item.mShowCore == false)
        {
                item.mStateMachine.changeState(item.mStateMachine.mPreviousState);
        }
},

exit: function(item)
{
        item.hideCore();
        item.showToggleStandardInfoButton();
        item.showToggleItemInfoButton();
        item.showTogglePracticeInfoButton();

        if(raphael != 0)
          raphael.setSize(630,360);
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
 	if (item.mShowContinueCorrectStartTime == 0)
	{
 		item.mShowContinueCorrectStartTime = item.mSheet.mGame.mTimeSinceEpoch;
	}

	item.mSheet.mGame.incrementScore();

        item.showContinueCorrect();
},

execute: function(item)
{
        if (item.mSheet.mGame.mTimeSinceEpoch > item.mShowContinueCorrectStartTime + item.mShowContinueCorrectThresholdTime)
        {
               	item.mStateMachine.changeState(item.mCORRECT_ITEM);
        }
	if (item.mShowStandard)
	{
                item.mStateMachine.changeState(item.mSHOW_STANDARD);
	}
	if (item.mShowItem)
	{
                item.mStateMachine.changeState(item.mSHOW_ITEM);
	}
	if (item.mShowPractice)
	{
                item.mStateMachine.changeState(item.mSHOW_PRACTICE);
	}
	if (item.mShowCore)
	{
                item.mStateMachine.changeState(item.mSHOW_CORE);
	}
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
	item.mSheet.correctAnswer();
},

execute: function(item)
{
	if (item.mStatus == 0)
	{
		item.mStateMachine.changeState(item.mINIT_ITEM);
	}
	if (item.mShowStandard)
	{
                item.mStateMachine.changeState(item.mSHOW_STANDARD);
	}
	if (item.mShowItem)
	{
                item.mStateMachine.changeState(item.mSHOW_ITEM);
	}
	if (item.mShowPractice)
	{
                item.mStateMachine.changeState(item.mSHOW_PRACTICE);
	}
	if (item.mShowCore)
	{
                item.mStateMachine.changeState(item.mSHOW_CORE);
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

        if (item.mCorrectAnswerStartTime == 0)  
	{
        	item.mCorrectAnswerStartTime = item.mSheet.mGame.mTimeSinceEpoch;  
	}

	//make sure these are showing first as you might have re-entered this state from a report state
	item.showQuestion();
	item.showAnswerInputs();
	item.showQuestionShapes();

	//this changes colors and hides surperfulous
	item.showCorrectAnswer();
},

execute: function(item)
{
        if (item.mSheet.mGame.mTimeSinceEpoch > item.mCorrectAnswerStartTime + item.mCorrectAnswerThresholdTime)
        {
               	item.mStateMachine.changeState(item.mCONTINUE_INCORRECT);
        }
	if (item.mShowStandard)
	{
                item.mStateMachine.changeState(item.mSHOW_STANDARD);
	}
	if (item.mShowItem)
	{
                item.mStateMachine.changeState(item.mSHOW_ITEM);
	}
	if (item.mShowPractice)
	{
                item.mStateMachine.changeState(item.mSHOW_PRACTICE);
	}
	if (item.mShowCore)
	{
                item.mStateMachine.changeState(item.mSHOW_CORE);
	}
},

exit: function(item)
{
        if (item.mContinueIncorrect == true)
	{

	}
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
        if (item.mCorrectAnswerStartTime == 0);  
	{
        	item.mCorrectAnswerStartTime = item.mSheet.mGame.mTimeSinceEpoch;
	}

	//make sure these are showing first as you might have re-entered this state from a report state
	item.showQuestion();
	item.showAnswerInputs();
	item.showQuestionShapes();
	item.showCorrectAnswer();

        item.showContinueIncorrect();
},

execute: function(item)
{
        if (item.mContinueIncorrect == true)
        {
                item.mStateMachine.changeState(item.mINCORRECT_ITEM);
        }
	if (item.mShowStandard)
	{
                item.mStateMachine.changeState(item.mSHOW_STANDARD);
	}
	if (item.mShowItem)
	{
                item.mStateMachine.changeState(item.mSHOW_ITEM);
	}
	if (item.mShowPractice)
	{
                item.mStateMachine.changeState(item.mSHOW_PRACTICE);
	}
	if (item.mShowCore)
	{
                item.mStateMachine.changeState(item.mSHOW_CORE);
	}
},

exit: function(item)
{
        item.hideContinueIncorrect();
	item.hideCorrectAnswer();

  if(raphael != 0)
     raphael.remove();
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
	
	item.mSheet.incorrectAnswer();
},

execute: function(item)
{
        if (item.mStatus == 0)
        {
                item.mStateMachine.changeState(item.mINIT_ITEM);
        }
	if (item.mShowStandard)
	{
                item.mStateMachine.changeState(item.mSHOW_STANDARD);
	}
	if (item.mShowItem)
	{
                item.mStateMachine.changeState(item.mSHOW_ITEM);
	}
	if (item.mShowPractice)
	{
                item.mStateMachine.changeState(item.mSHOW_PRACTICE);
	}
	if (item.mShowCore)
	{
                item.mStateMachine.changeState(item.mSHOW_CORE);
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
},

execute: function(item)
{
 	item.mStateMachine.changeState(item.mSHOW_CORRECT_ANSWER_ITEM);
},

exit: function(item)
{
}

});

