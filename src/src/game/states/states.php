/*************** GAME STATES ************/
var GLOBALGAME = new Class(
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
},

exit: function(game)
{
}

});

var INITGAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::INITGAME');
	}
},

execute: function(game)
{
	game.mStateMachine.changeState(game.mNORMALGAME);
},

exit: function(game)
{
}

});

var RESETGAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::RESETGAME');
	}
	game.resetGameEnter();
},

execute: function(game)
{
},

exit: function(game)
{
}

});

var NORMALGAME = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(game)
{
	if (game.mStateLogs)
	{
		game.log('GAME::NORMALGAME');
	}
	//game.reset();
},

execute: function(game)
{
        if (game.mKilled == true)
       	{
                game.mStateMachine.changeState(game.mRESETGAME);
        }
},

exit: function(game)
{
}
});
