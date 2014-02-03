/*************** GAME STATES ************/
var GLOBAL_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
},

execute: function(game)
{
	game.normalGame();
},

exit: function(game)
{
}

});

var INIT_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
},

execute: function(game)
{
	game.mStateMachine.changeState(game.mRESET_GAME);
},

exit: function(game)
{
}

});

var RESET_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	game.resetGameEnter();
},

execute: function(game)
{
},

exit: function(game)
{
}

});

var NORMAL_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	game.reset();
},

execute: function(game)
{
	game.normalGameExecute();
},

exit: function(game)
{
}
});

var LEVEL_PASSED = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	game.levelPassedEnter();
},

execute: function(game)
{
	game.levelPassedExecute();
},

exit: function(game)
{
	game.levelPassedExit();
}

});

var SHOW_LEVEL_PASSED = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	game.showLevelPassedEnter();
},

execute: function(game)
{
	game.showLevelPassedExecute();
},

exit: function(game)
{
	game.showLevelPassedExit();
}

});

