/*************** GAME STATES ************/
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
		item.log('GAME::INITGAME');
	}
},

execute: function(item)
{
	item.mStateMachine.changeState(item.mRESETGAME);
},

exit: function(item)
{
}

});

var RESET_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		item.log('GAME::RESET_ITEM');
	}
	item.resetGameEnter();
},

execute: function(item)
{
},

exit: function(item)
{
}

});

var NORMAL_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		item.log('GAME::NORMAL_ITEM');
	}
	item.reset();
},

execute: function(item)
{
},

exit: function(item)
{
}
});

var LEVEL_PASSED_ITEM = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		item.log('GAME::LEVEL_PASSED_ITEM');
	}
	item.levelPassedEnter();
},

execute: function(item)
{
	item.levelPassedExecute();
},

exit: function(item)
{
	item.levelPassedExit();
}

});

