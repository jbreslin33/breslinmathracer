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
       	if (item.mShowStandard)
        {
                if (item.mStateMachine.mCurrentState != item.mSHOW_STANDARD)
		{
                	item.mStateMachine.changeState(item.mSHOW_STANDARD);
		}
        }
        if (item.mShowItem)
        {
                if (item.mStateMachine.mCurrentState != item.mSHOW_ITEM)
		{
                	item.mStateMachine.changeState(item.mSHOW_ITEM);
		}
        }
        if (item.mShowPractice)
        {
                if (item.mStateMachine.mCurrentState != item.mSHOW_PRACTICE)
		{
                	item.mStateMachine.changeState(item.mSHOW_PRACTICE);
		}
        }
        if (item.mShowCore)
        {
                if (item.mStateMachine.mCurrentState != item.mSHOW_CORE)
		{
                	item.mStateMachine.changeState(item.mSHOW_CORE);
		}
        }
        if (item.mShowTimesTables)
        {
                if (item.mStateMachine.mCurrentState != item.mSHOW_TIMES_TABLES)
		{
                	item.mStateMachine.changeState(item.mSHOW_TIMES_TABLES);
		}
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
		APPLICATION.log('ITEM::INIT_ITEM');
	}
	item.createShapes();
	item.hideShapes();
},

execute: function(item)
{
	//if your THE ITEM then go to wait state
	if (item.mSheet.mItem == item && item.mSheet.mStateMachine.currentState() == item.mSheet.mNORMAL_SHEET && item.mSheet.mItem.mThresholdTime == 0)
	{
		item.mStateMachine.changeState(item.mWAITING_ON_ANSWER_ITEM);
	}
	else if (item.mSheet.mItem == item && item.mSheet.mStateMachine.currentState() == item.mSheet.mNORMAL_SHEET && item.mSheet.mItem.mThresholdTime > 0)
	{
		item.mStateMachine.changeState(item.mWAITING_ON_SPEED_ITEM);
	}
},

exit: function(item)
{
	item.createQuestionShapes();
}

});

var WAITING_ON_SPEED_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM::WAITING_ON_SPEED_ITEM');
        }

	item.showContinueSpeed();	
	item.showSpeed();
},

execute: function(item)
{
        if (item.mContinueSpeed == true)
        {
                item.mStateMachine.changeState(item.mWAITING_ON_ANSWER_ITEM);
        }
},

exit: function(item)
{
  	item.hideContinueSpeed();
	item.hideSpeed();

  if(item.raphael != 0)
     item.raphael.remove();

        item.mContinueSpeed = false;
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
   	
	if (item.mUserAnswer != '')
	{
		//goto init. 
		item.mStateMachine.changeState(item.mINIT_ITEM);
	}
	
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
	APPLICATION.log('ITEM::HERE 10');
},

execute: function(item)
{
	APPLICATION.log('ITEM::HERE 11');
	if (item.mThresholdTime == 0)
        {
		APPLICATION.log('ITEM::HERE 12');
                //no possibility of OUT_OF_TIME
        }
        else if (APPLICATION.mGame.mTimeSinceEpoch > item.mQuestionStartTime + item.mThresholdTime)
        {
		APPLICATION.log('ITEM::HERE 13');
        	item.mOutOfTime = true;
                item.mStatus = 2;
                item.mStateMachine.changeState(item.mOUT_OF_TIME_ITEM);
	}
	APPLICATION.log('ITEM::HERE 14');

	//you should check mUserAnswer in item here....
	APPLICATION.log('itemAnswer:' + item.mUserAnswer);
   	if (item.mUserAnswer != '')
        {
		APPLICATION.log('ITEM::HERE 15');
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
	else
	{
		APPLICATION.log('ITEM::HERE 16');
	}
},

exit: function(item)
{
	item.send();
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
	item.hideUserAnswer();
	item.hideQuestionShapes();
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
	item.mShowStandard = false;
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
        item.hideUserAnswer();
        item.hideQuestionShapes();
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
	item.mShowItem = false;
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
        item.hideUserAnswer();
        item.hideQuestionShapes();
        item.showPractice();

        if(item.raphael != 0)
	{
        	item.raphael.setSize(10,10);
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

        if(item.raphael != 0)
          item.raphael.setSize(item.raphaelSizeX,item.raphaelSizeY);

	item.mShowPractice = false;
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
        item.hideUserAnswer();
        item.hideQuestionShapes();

        item.showCore();

        if(item.raphael != 0)
	{
        	item.raphael.setSize(10,10);
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

        if(item.raphael != 0)
          item.raphael.setSize(item.raphaelSizeX,item.raphaelSizeY);
	
	item.mShowCore = false;
}

});

var SHOW_TIMES_TABLES = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM::SHOW_TIMES_TABLES');
        }
        item.hideQuestion();
        item.hideAnswerInputs();
        item.hideUserAnswer();
        item.hideQuestionShapes();
        item.showTimesTables();

        if(item.raphael != 0)
	{
        	item.raphael.setSize(10,10);
	}
	
},

execute: function(item)
{
        if (item.mShowTimesTables == false)
        {
                item.mStateMachine.changeState(item.mStateMachine.mPreviousState);
        }
},

exit: function(item)
{
        item.hideTimesTables();

        if(item.raphael != 0)
          item.raphael.setSize(item.raphaelSizeX,item.raphaelSizeY);
	
	item.mShowTimesTables = false;
}

});

//here is where you keep sending till you get a new item_attempt....
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
	item.mUpdate = 0;
},

execute: function(item)
{
	if (item.mStatus == 0)
	{
		//item.mStateMachine.changeState(item.mINIT_ITEM);
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
},

exit: function(item)
{
  item.hideContinueIncorrect();
	item.hideCorrectAnswer();

  if(item.raphael != 0)
     item.raphael.remove();

	item.mContinueIncorrect = false;
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

