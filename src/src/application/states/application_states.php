var GLOBAL_APPLICATION = new Class(
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

enter: function(application)
{
},

execute: function(application)
{
},

exit: function(application)
{
}

});

var INIT_APPLICATION = new Class(
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

enter: function(application)
{
},

execute: function(application)
{
	application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
},

exit: function(application)
{
}

});

var NORMAL_APPLICATION = new Class(
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

enter: function(application)
{
},

execute: function(application)
{
	if (application.mGame == 0)
        {
		application.mStateMachine.changeState(application.mGET_GAME_DATA_APPLICATION);
        }
        if (application.mGame)
        {
                application.mGame.update();
        }
},

exit: function(application)
{
}

});

var GET_GAME_DATA_APPLICATION = new Class(
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

enter: function(application)
{
	application.getGameData();
},

execute: function(application)
{
        if (application.mGame)
        {
		application.mStateMachine.changeState(application.mNORMAL_APPLICATION);
        }
},

exit: function(application)
{
}

});

