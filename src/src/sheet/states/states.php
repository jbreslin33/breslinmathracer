/*************** SHEET STATES ************/
var GLOBAL_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
},

execute: function(sheet)
{
},

exit: function(sheet)
{
}

});

var INIT_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
	if (sheet.mStateLogs)
	{
		APPLICATION.log('SHEET::INIT_SHEET');
	}
	sheet.mStateMachine.changeState(sheet.mNORMAL_SHEET);
},

execute: function(sheet)
{
},

exit: function(sheet)
{
}

});

var NORMAL_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
	if (sheet.mStateLogs)
	{
		APPLICATION.log('SHEET::NORMAL_SHEET');
	}
},

execute: function(sheet)
{
	if (sheet.mItem)
	{

	}
	else
	{
                sheet.mStateMachine.changeState(sheet.mFINISHED_SHEET);
	}
},

exit: function(sheet)
{
	if (APPLICATION.mRef_id == 'normal')
	{
		APPLICATION.normal();
	}
	else if (APPLICATION.mRef_id == 'practice')
	{
		APPLICATION.practice(APPLICATION.mType);
	}	
}
});

var FINISHED_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
        if (sheet.mStateLogs)
        {
                APPLICATION.log('SHEET::FINISHED_SHEET');
        }
  
        //times
        sheet.mStartTime = sheet.mGame.mTimeSinceEpoch;

        //gui bar
        sheet.showVictoryShapes();
},

execute: function(sheet)
{
        if (sheet.mGame.mTimeSinceEpoch > sheet.mStartTime + sheet.mThresholdTime)
        {
                sheet.mStateMachine.changeState(sheet.mEND_SHEET);
        }
},

exit: function(sheet)
{
        sheet.hideVictoryShapes();
        sheet.hideBossShapes();
}

});


var LEVEL_PASSED_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
	if (sheet.mStateLogs)
	{
		APPLICATION.log('SHEET::LEVEL_PASSED_SHEET');
	}
   
	APPLICATION.mLevelCompleted = true;

        //times
        sheet.mStartTime = sheet.mGame.mTimeSinceEpoch;

        //gui bar
	if (parseInt(APPLICATION.mLevel) < parseInt(APPLICATION.mLevels))
        {
		sheet.showVictoryShapes();
        }
        else
        {
		sheet.showBossShapes();
        }
},

execute: function(sheet)
{
	if (sheet.mGame.mTimeSinceEpoch > sheet.mStartTime + sheet.mThresholdTime)
        {
                sheet.mStateMachine.changeState(sheet.mEND_SHEET);
        }
},

exit: function(sheet)
{
	sheet.hideVictoryShapes();
	sheet.hideBossShapes();
}

});

var LEVEL_FAILED_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
        if (sheet.mStateLogs)
        {
                APPLICATION.log('SHEET::LEVEL_FAILED_SHEET');
        }
	APPLICATION.mStateMachine.changeState(APPLICATION.mREWIND_TO_PREVIOUS_LEVEL_APPLICATION);
},

execute: function(sheet)
{
	//wait on word from item that it is done showing correct answer...
	if (sheet.mItem.mStateMachine.currentState() == sheet.mItem.mINCORRECT_ITEM)
	{
                sheet.mStateMachine.changeState(sheet.mEND_SHEET);
        }
},

exit: function(sheet)
{
        sheet.hideVictoryShapes();
}

});

var EVALUATION_FAILED_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
        if (sheet.mStateLogs)
        {
                APPLICATION.log('SHEET::EVALUATION_FAILED_SHEET');
        }
	APPLICATION.mEvaluationFailed = true;
},

execute: function(sheet)
{
        //wait on word from item that it is done showing correct answer...
        if (sheet.mItem.mStateMachine.currentState() == sheet.mItem.mINCORRECT_ITEM)
        {
                sheet.mStateMachine.changeState(sheet.mEND_SHEET);
        }

},

exit: function(sheet)
{
        //sheet.hideVictoryShapes();
}

});

var PRACTICE_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
        if (sheet.mStateLogs)
        {
                APPLICATION.log('SHEET::PRACTICE_SHEET');
        }
},

execute: function(sheet)
{
       // if (APPLICATION.mWaitOnPractice == false)
        //{
                sheet.mStateMachine.changeState(sheet.mEND_SHEET);
        //}
},

exit: function(sheet)
{
        //sheet.hideVictoryShapes();
}

});

var END_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
        if (sheet.mStateLogs)
        {
                APPLICATION.log('SHEET::END_SHEET');
        }
	sheet.mGame.mReadyForNormalApplication = true;
        sheet.reset();
	//sheet.mGame.setScore(0);
        sheet.mStateMachine.changeState(sheet.mINIT_SHEET);
},

execute: function(sheet)
{
},
exit: function(sheet)
{
}
});
