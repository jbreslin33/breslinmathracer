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
	sheet.levelPassedEnter();
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

