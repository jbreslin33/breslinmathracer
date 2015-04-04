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
		APPLICATION.log('GAME::INITGAME');
	}
	game.reset();
	game.mStateMachine.changeState(game.mNORMALGAME);
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
		APPLICATION.log('GAME::NORMALGAME');
	}
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
