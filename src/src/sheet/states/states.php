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
		sheet.log('SHEET::INIT_SHEET');
	}
	sheet.mStateMachine.changeState(sheet.mRESET_SHEET);
},

execute: function(sheet)
{
},

exit: function(sheet)
{
}

});

var RESET_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
	if (sheet.mStateLogs)
	{
		sheet.log('SHEET::RESET_SHEET');
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
		sheet.log('SHEET::NORMAL_SHEET');
	}
},

execute: function(sheet)
{
	if (sheet.getItem().mStatus == 1)
        {
                sheet.correctAnswer();
        }
        else if (sheet.getItem().mStatus == 2)
        {
        }
 
	if (sheet.isSheetComplete())
        {
                sheet.mStateMachine.changeState(sheet.mLEVEL_PASSED_SHEET);
        }

},

exit: function(sheet)
{
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
		sheet.log('SHEET::LEVEL_PASSED_SHEET');
	}
   
	APPLICATION.mLevelCompleted = true;

        //times
        sheet.getItem().mQuestionStartTime = sheet.mGame.mTimeSinceEpoch; //restart timer
        sheet.mShowLevelPassedStartTime = sheet.mGame.mTimeSinceEpoch;

        //gui bar
        if (APPLICATION.mLevel == APPLICATION.mLevels)
        {
		sheet.log('you beat the whole game!');
        }
        else
        {
		sheet.log('you beat a level!');
        }
},

execute: function(sheet)
{
	//sheet.log('epoch:' + sheet.mGame.mTimeSinceEpoch + ' rest:' + parseInt(sheet.mShowLevelPassedStartTime + sheet.mShowLevelPassedThresholdTime));
 
	if (sheet.mGame.mTimeSinceEpoch > sheet.mShowLevelPassedStartTime + sheet.mShowLevelPassedThresholdTime)
        {
                sheet.mStateMachine.changeState(sheet.mEND_SHEET);
        }
},

exit: function(sheet)
{
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
                sheet.log('SHEET::END_SHEET');
        }
	sheet.mGame.mReadyForNormalApplication = true;
	sheet.mGame.reset();
        sheet.reset();
        sheet.mStateMachine.changeState(sheet.mINIT_SHEET);
	
},

execute: function(sheet)
{


},
exit: function(sheet)
{
}

});
