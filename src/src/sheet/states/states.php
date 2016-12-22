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
	//sheet.mStateMachine.changeState(sheet.mNORMAL_SHEET);
	sheet.mStateMachine.changeState(sheet.mMAIN_MENU_SHEET);
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
	if (sheet.mItem.mStateMachine.mCurrentState == sheet.mItem.mCORRECT_ITEM)
	{
                sheet.mStateMachine.changeState(sheet.mFINISHED_SHEET);
	}
	if (sheet.mItem.mStateMachine.mCurrentState == sheet.mItem.mINCORRECT_ITEM)
	{
                sheet.mStateMachine.changeState(sheet.mFINISHED_SHEET);
	}
},

exit: function(sheet)
{
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
