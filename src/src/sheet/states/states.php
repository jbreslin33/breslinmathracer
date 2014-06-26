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
	sheet.reset();
},

execute: function(sheet)
{
	if (sheet.getItem().mStatus == 1)
        {
        	sheet.log('Correct!!!!');
                sheet.correctAnswer();
        }
        else if (sheet.getItem().mStatus == 2)
        {
                sheet.log('Wrong!!!!');
        }
 
	if (sheet.isSheetComplete())
        {
                sheet.mStateMachine.changeState(sheet.mLEVEL_PASSED);
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
		sheet.log('level == levels');
        }
        else
        {
		sheet.log('level != levels');
        }
},

execute: function(sheet)
{
	sheet.levelPassedExecute();
},

exit: function(sheet)
{
	sheet.levelPassedExit();
}

});

