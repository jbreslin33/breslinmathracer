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
		//send insert to db and then wait state
		itemAttempt.sendInsert();
		itemAttempt.mStateMachine.changeState(itemAttempt.mWAIT_FOR_INSERT_AND_USER_ANSWER_CONFIRMATION);
	}
},

exit: function(itemAttempt)
{
}

});

var WAIT_FOR_INSERT_AND_USER_ANSWER_CONFIRMATION = new Class(
{
Extends: State,

initialize: function()
{
},

enter: function(itemAttempt)
{
	if (itemAttempt.mStateLogs)
	{
		APPLICATION.log('ITEM_ATTEMPT::WAIT_FOR_INSERT_AND_USER_ANSWER_CONFIRMATION');
	}
},

execute: function(itemAttempt)
{
	if (itemAttempt.mID != 0 && itemAttempt.mUserAnswer != '')
	{
		itemAttempt.mStateMachine.changeState(itemAttempt.mUPDATE_ITEM_ATTEMPT);
	}
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
	itemAttempt.sendUpdate();
	itemAttempt.mStateMachine.changeState(itemAttempt.mWAIT_FOR_UPDATE_CONFIRMATION);
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
	APPLICATION.log('conf:' + itemAttempt.mUpdateConfirmation);
	if (parseInt(itemAttempt.mUpdateConfirmation) == 1)
	{
		APPLICATION.log('if conf:' + itemAttempt.mUpdateConfirmation);
		itemAttempt.mStateMachine.changeState(itemAttempt.mITEM_ATTEMPT_END);
	}
	else
	{
		APPLICATION.log('else conf:' + itemAttempt.mUpdateConfirmation);
	}
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
	//do nothing
},

exit: function(itemAttempt)
{
}

});
