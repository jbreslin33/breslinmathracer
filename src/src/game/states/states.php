/*************** GAME STATES ************/
var GLOBAL_GAME = new Class(
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

var INIT_GAME = new Class(
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
	game.mStateMachine.changeState(game.mNORMAL_GAME);
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
        //get time since epoch and set lasttime
        e = new Date();
        game.mLastTimeSinceEpoch = game.mTimeSinceEpoch;
        game.mTimeSinceEpoch = e.getTime();

        //set deltatime as function of timeSinceEpoch and LastTimeSinceEpoch diff
        game.mDeltaTime = game.mTimeSinceEpoch - game.mLastTimeSinceEpoch;

        if(game.mDeltaTime < 50000)
        {
                game.mGameTime = game.mGameTime + game.mDeltaTime;
        }

        //check Keys from application
        if (game.mKeysOn)
        {
                game.checkKeys();
        }

        if (game.mMouseOn)
        {
                game.checkMouse();
        }

        //move shapes
        for (i = 0; i < game.mShapeArray.length; i++)
        {
                game.mShapeArray[i].update(game.mDeltaTime);
        }

        //collision Detection
 	game.checkForCollisions();

        for (i = 0; i < game.mShapeArray.length; i++)
        {
                game.mShapeArray[i].render();
        }

        //save old positions
        game.saveOldPositions();
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

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
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

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
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

