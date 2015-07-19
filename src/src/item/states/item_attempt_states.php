/*************** ITEM STATES ************/
var GLOBAL_ITEM_ATTEMPT = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(itemAttempt)
{
},

execute: function(itemAttempt)
{
},
exit: function(itemAttempt)
{
}

});

var INIT_ITEM_ATTEMPT = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(itemAttempt)
{
	if (itemAttempt.mStateLogs)
	{
		APPLICATION.log('ITEM_ATTEMPT::INIT_ITEM_ATTEMPT');
	}
        itemAttempt.mStateMachine.changeState(itemAttempt.mSEND_INSERT);
},

execute: function(itemAttempt)
{
},

exit: function(itemAttempt)
{
}

});

var SEND_INSERT = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(itemAttempt)
{
        if (itemAttempt.mStateLogs)
        {
                APPLICATION.log('ITEM_ATTEMPT::SEND_INSERT');
        }

},

execute: function(itemAttempt)
{
	if (APPLICATION.mGame)
	{
		APPLICATION.log('if....');
		//send insert to db and then wait
		itemAttempt.sendInsert();
		itemAttempt.mStateMachine.changeState(itemAttempt.mWAIT_FOR_INSERT_CONFIRMATION);
	}
	else	
	{
		APPLICATION.log('else....');
	}	
},

exit: function(itemAttempt)
{
}

});

var WAIT_FOR_INSERT_CONFIRMATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(itemAttempt)
{
	if (itemAttempt.mStateLogs)
	{
		APPLICATION.log('ITEM_ATTEMPT::WAIT_FOR_INSERT_CONFIRMATION');
	}
},

execute: function(itemAttempt)
{

},

exit: function(itemAttempt)
{
}
});

var WAIT_FOR_USER_ANSWER = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(itemAttempt)
{
        if (itemAttempt.mStateLogs)
        {
                APPLICATION.log('ITEM_ATTEMPT::WAIT_FOR_USER_ANSWER');
        }
},

execute: function(itemAttempt)
{

},

exit: function(itemAttempt)
{
}
});

var UPDATE_ITEM_ATTEMPT = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(itemAttempt)
{
        if (itemAttempt.mStateLogs)
        {
                APPLICATION.log('ITEM_ATTEMPT::UPDATE_ITEM_ATTEMPT');
        }
},

execute: function(itemAttempt)
{

},

exit: function(itemAttempt)
{
}

});

var WAIT_FOR_UPDATE_CONFIRMATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(itemAttempt)
{
        if (itemAttempt.mStateLogs)
        {
                APPLICATION.log('ITEM_ATTEMPT::WAIT_FOR_UPDATE_CONFIRMATION');
        }
},

execute: function(itemAttempt)
{

},

exit: function(itemAttempt)
{
}

});

var ITEM_ATTEMPT_END = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(itemAttempt)
{
        if (itemAttempt.mStateLogs)
        {
                APPLICATION.log('ITEM_ATTEMPT::ITEM_ATTEMPT_END');
        }
},

execute: function(itemAttempt)
{

},

exit: function(itemAttempt)
{
}

});
