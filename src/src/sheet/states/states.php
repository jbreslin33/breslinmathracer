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
	if (sheet.getItem().mStatus == 1)
        {
        	sheet.correctAnswer();
        }
        else if (sheet.getItem().mStatus == 2)
        {
               	sheet.mStateMachine.changeState(sheet.mLEVEL_FAILED_SHEET);
	}
	if (sheet.isSheetComplete())
        {
		//set the ITEM to null so another item dont drop. this may get rid of need for buf question.
		sheet.mItem = 0;
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
		APPLICATION.log('SHEET::LEVEL_PASSED_SHEET');
	}
   
	APPLICATION.mLevelCompleted = true;

        //times
        sheet.mShowLevelPassedStartTime = sheet.mGame.mTimeSinceEpoch;

        //gui bar
	if (parseInt(APPLICATION.mLevel) < parseInt(APPLICATION.mLevels))
        {
		sheet.showVictoryShapes();
        }
        else
        {
		//APPLICATION.log('you beat the whole game!');
        }
},

execute: function(sheet)
{
	if (sheet.mGame.mTimeSinceEpoch > sheet.mShowLevelPassedStartTime + sheet.mShowLevelPassedThresholdTime)
        {
                sheet.mStateMachine.changeState(sheet.mEND_SHEET);
        }
},

exit: function(sheet)
{
	sheet.hideVictoryShapes();
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
	sheet.mGame.setScore(0);
        sheet.mStateMachine.changeState(sheet.mINIT_SHEET);
},

execute: function(sheet)
{
},
exit: function(sheet)
{
}
});
