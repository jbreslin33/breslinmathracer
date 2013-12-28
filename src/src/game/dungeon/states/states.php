/****************** DUNGEON STATES ************/
/****************** ***********************/
/****************** ********* ************/
var GLOBAL_DUNGEON_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
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

var INIT_DUNGEON_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(game)
{
},

execute: function(game)
{
        game.mDungeonStateMachine.changeState(game.mRESET_DUNGEON_GAME);
},

exit: function(game)
{
}

});

var RESET_DUNGEON_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(game)
{
        game.reset();
        game.mDungeonStateMachine.changeState(game.mNORMAL_DUNGEON_GAME);
},

execute: function(game)
{
},

exit: function(game)
{
}

});

var NORMAL_DUNGEON_GAME = new Class(
{
Extends: State,

initialize: function()
{
},

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(game)
{
        //correctAnswer
        game.hideCorrectAnswerBar();
        game.mCorrectAnswerBarHeader.mMesh.value = '';
        game.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
        game.mCorrectAnswerBar.mMesh.value = '';
        game.mCorrectAnswerBar.mMesh.innerHTML = '';
},

execute: function(game)
{
	
	if (game.mDoor.mEnteredDoor == true)
	{
        	game.mDungeonStateMachine.changeState(game.mLEVEL_PASSED);
	}

	if (game.mKilled == true)
	{	
        	game.mDungeonStateMachine.changeState(game.mRESET_DUNGEON_GAME);
	}
},

exit: function(game)
{
}

});
