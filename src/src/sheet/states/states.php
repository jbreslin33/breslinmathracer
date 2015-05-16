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
                sheet.mStateMachine.changeState(sheet.mNORMAL_DUP_PREVENTER_SHEET);
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
	else if (APPLICATION.mRef_id == 'timestables_2')
	{
		APPLICATION.timestables('2');
	}	
	else if (APPLICATION.mRef_id == 'timestables_3')
	{
		APPLICATION.timestables('3');
	}	
	else if (APPLICATION.mRef_id == 'timestables_4')
	{
		APPLICATION.timestables('4');
	}	
	else if (APPLICATION.mRef_id == 'timestables_5')
	{
		APPLICATION.timestables('5');
	}	
	else if (APPLICATION.mRef_id == 'timestables_6')
	{
		APPLICATION.timestables('6');
	}	
	else if (APPLICATION.mRef_id == 'timestables_7')
	{
		APPLICATION.timestables('7');
	}	
	else if (APPLICATION.mRef_id == 'timestables_8')
	{
		APPLICATION.timestables('8');
	}	
	else if (APPLICATION.mRef_id == 'timestables_9')
	{
		APPLICATION.timestables('9');
	}	
	else if (APPLICATION.mRef_id == 'timestables')
	{
		APPLICATION.timestables('10');
	}	
	else if (APPLICATION.mRef_id == 'The Izzy')
	{
		APPLICATION.timestables('11');
	}	
	else if (APPLICATION.mRef_id == 'Add Subtract within 5')
	{
		APPLICATION.timestables('12');
	}	
}
});

//sniff the packet
var NORMAL_DUP_PREVENTER_SHEET = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(sheet)
{
	if (sheet.mStateLogs)
	{
		APPLICATION.log('SHEET::NORMAL_DUP_PREVENTER_SHEET');
	}
        sheet.showVictoryShapes();
},

execute: function(sheet)
{
	if (sheet.mRefreshStartTime == 0)
       	{ 
                sheet.mRefreshStartTime = APPLICATION.mGame.mTimeSinceEpoch;
        }

        var itemIDArray = APPLICATION.mRawData.split(":");

        var itemAttemptsID = itemIDArray[4];
        if (itemAttemptsID == APPLICATION.mItemAttemptsIDLast)
        {
        	if ( parseInt(APPLICATION.mGame.mTimeSinceEpoch) > parseInt(this.mRefreshStartTime + this.mRefreshThresholdTime) )
                {
			APPLICATION.log('normal call from PREVENTER');
                	APPLICATION.normal();
			sheet.mRefreshStartTime = 0;
                }
        }
	else
	{
                sheet.mStateMachine.changeState(sheet.mFINISHED_SHEET);
	}
},

exit: function(sheet)
{
/*
	if (APPLICATION.mRef_id == 'normal')
	{
		APPLICATION.normal();
	}
	else if (APPLICATION.mRef_id == 'practice')
	{
		APPLICATION.practice(APPLICATION.mType);
	}	
	else if (APPLICATION.mRef_id == 'timestables_2')
	{
		APPLICATION.timestables('2');
	}	
	else if (APPLICATION.mRef_id == 'timestables_3')
	{
		APPLICATION.timestables('3');
	}	
	else if (APPLICATION.mRef_id == 'timestables_4')
	{
		APPLICATION.timestables('4');
	}	
	else if (APPLICATION.mRef_id == 'timestables_5')
	{
		APPLICATION.timestables('5');
	}	
	else if (APPLICATION.mRef_id == 'timestables_6')
	{
		APPLICATION.timestables('6');
	}	
	else if (APPLICATION.mRef_id == 'timestables_7')
	{
		APPLICATION.timestables('7');
	}	
	else if (APPLICATION.mRef_id == 'timestables_8')
	{
		APPLICATION.timestables('8');
	}	
	else if (APPLICATION.mRef_id == 'timestables_9')
	{
		APPLICATION.timestables('9');
	}	
	else if (APPLICATION.mRef_id == 'timestables')
	{
		APPLICATION.timestables('10');
	}	
	else if (APPLICATION.mRef_id == 'The Izzy')
	{
		APPLICATION.timestables('11');
	}	
	else if (APPLICATION.mRef_id == 'Add Subtract within 5')
	{
		APPLICATION.timestables('12');
	}	
*/
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
