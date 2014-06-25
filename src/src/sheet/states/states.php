/*************** GAME STATES ************/
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
		sheet.log('GAME::INITGAME');
	}
},

execute: function(sheet)
{
	sheet.mStateMachine.changeState(sheet.mRESETGAME);
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
		sheet.log('GAME::RESET_SHEET');
	}
	sheet.resetGameEnter();
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
		sheet.log('GAME::NORMAL_SHEET');
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
		sheet.log('GAME::LEVEL_PASSED_SHEET');
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

