/*************** ITEM STATES ************/
var GLOBAL_ITEM_ATTEMPT = new Class(
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

var INIT_ITEM_ATTEMPT = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		APPLICATION.log('ITEM_ATTEMPT::INIT_ITEM_ATTEMPT');
	}
        item.mStateMachine.changeState(item.mSEND_INSERT);
},

execute: function(item)
{
		
},

exit: function(item)
{
}

});

var SEND_INSERT = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM_ATTEMPT::SEND_INSERT');
        }

},

execute: function(item)
{

},

exit: function(item)
{
}

});

var WAIT_FOR_INSERT_CONFIRMATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
	if (item.mStateLogs)
	{
		APPLICATION.log('ITEM_ATTEMPT::WAIT_FOR_INSERT_CONFIRMATION');
	}
},

execute: function(item)
{

},

exit: function(item)
{
}
});

var WAIT_FOR_USER_ANSWER = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM_ATTEMPT::WAIT_FOR_USER_ANSWER');
        }
},

execute: function(item)
{

},

exit: function(item)
{
}
});

var UPDATE_ITEM_ATTEMPT = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM_ATTEMPT::UPDATE_ITEM_ATTEMPT');
        }
},

execute: function(item)
{

},

exit: function(item)
{
}

});

var WAIT_FOR_UPDATE_CONFIRMATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM_ATTEMPT::WAIT_FOR_UPDATE_CONFIRMATION');
        }
},

execute: function(item)
{

},

exit: function(item)
{
}

});

var ITEM_ATTEMPT_END = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(item)
{
        if (item.mStateLogs)
        {
                APPLICATION.log('ITEM_ATTEMPT::ITEM_ATTEMPT_END');
        }
},

execute: function(item)
{

},

exit: function(item)
{
}

});
