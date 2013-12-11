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
        //this.log('RESET_DUNGEON_GAME');
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
        this.log('NORMAL_DUNGEON_GAME');
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
        	game.mDungeonStateMachine.changeState(game.mLEVEL_PASSED_DUNGEON);
	}

	if (game.mKilled == true)
	{	
		this.log('killed');
        	game.mDungeonStateMachine.changeState(game.mRESET_DUNGEON_GAME);
	}
},

exit: function(game)
{
}

});

var LEVEL_PASSED_DUNGEON = new Class(
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
        //this.log('RESET_DUNGEON_GAME');
        game.mApplication.mLevelCompleted = true;
},

execute: function(game)
{
	//just wait here until what???
        if (game.mApplication.mAdvanceToNextLevelConfirmation)
        {
                game.mDungeonStateMachine.changeState(game.mSHOW_LEVEL_PASSED_DUNGEON);
        }

},

exit: function(game)
{
}

});

var SHOW_LEVEL_PASSED_DUNGEON = new Class(
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
        //this.log('SHOW_LEVEL_PASSED_DUNGEON');
        game.mShowLevelPassedStartTime = game.mTimeSinceEpoch;

        //correctAnswer
        game.mCorrectAnswerBarHeader.mMesh.value = '';
        game.mCorrectAnswerBarHeader.mMesh.innerHTML = 'LEVEL PASSED!!!!!!';
        game.mCorrectAnswerBar.mMesh.value = '';
        game.mCorrectAnswerBar.mMesh.innerHTML = 'HOORAY!';
        game.showCorrectAnswerBar();

        game.mVictoryShape_0.setVisibility(true);
        game.mVictoryShape_0.setPosition(50,300);
        game.mVictoryShape_1.setVisibility(true);
        game.mVictoryShape_1.setPosition(100,300);
        game.mVictoryShape_2.setVisibility(true);
        game.mVictoryShape_2.setPosition(150,300);
        game.mVictoryShape_3.setVisibility(true);
        game.mVictoryShape_3.setPosition(200,300);
        game.mVictoryShape_4.setVisibility(true);
        game.mVictoryShape_4.setPosition(250,300);
        game.mVictoryShape_5.setVisibility(true);
        game.mVictoryShape_5.setPosition(300,300);
        game.mVictoryShape_6.setVisibility(true);
        game.mVictoryShape_6.setPosition(350,300);
        game.mVictoryShape_7.setVisibility(true);
        game.mVictoryShape_7.setPosition(400,300);
        game.mVictoryShape_8.setVisibility(true);
        game.mVictoryShape_8.setPosition(450,300);
        game.mVictoryShape_9.setVisibility(true);
        game.mVictoryShape_9.setPosition(500,300);
        game.mVictoryShape_10.setVisibility(true);
        game.mVictoryShape_10.setPosition(550,300);
        game.mVictoryShape_11.setVisibility(true);
        game.mVictoryShape_11.setPosition(600,300);
        game.mVictoryShape_12.setVisibility(true);
        game.mVictoryShape_12.setPosition(650,300);
        game.mVictoryShape_13.setVisibility(true);
        game.mVictoryShape_13.setPosition(700,300);
},
execute: function(game)
{
        if (game.mTimeSinceEpoch > game.mShowLevelPassedStartTime + game.mShowLevelPassedThresholdTime)
        {
                game.mDungeonStateMachine.changeState(game.mINIT_DUNGEON_GAME);
        }
},

exit: function(game)
{
        game.hideCorrectAnswerBar();
        game.mCorrectAnswerBarHeader.mMesh.value = '';
        game.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
        game.mCorrectAnswerBar.mMesh.value = '';
        game.mCorrectAnswerBar.mMesh.innerHTML = '';
        game.mVictoryShape_0.setVisibility(false);
        game.mVictoryShape_0.setPosition(50,300);
        game.mVictoryShape_1.setVisibility(false);
        game.mVictoryShape_1.setPosition(100,300);
        game.mVictoryShape_2.setVisibility(false);
        game.mVictoryShape_2.setPosition(150,300);
        game.mVictoryShape_3.setVisibility(false);
        game.mVictoryShape_3.setPosition(200,300);
        game.mVictoryShape_4.setVisibility(false);
        game.mVictoryShape_4.setPosition(250,300);
        game.mVictoryShape_5.setVisibility(false);
        game.mVictoryShape_5.setPosition(300,300);
        game.mVictoryShape_6.setVisibility(false);
        game.mVictoryShape_6.setPosition(350,300);
        game.mVictoryShape_7.setVisibility(false);
        game.mVictoryShape_7.setPosition(400,300);
        game.mVictoryShape_8.setVisibility(false);
        game.mVictoryShape_8.setPosition(450,300);
        game.mVictoryShape_9.setVisibility(false);
        game.mVictoryShape_9.setPosition(500,300);
        game.mVictoryShape_10.setVisibility(false);
        game.mVictoryShape_10.setPosition(550,300);
        game.mVictoryShape_11.setVisibility(false);
        game.mVictoryShape_11.setPosition(600,300);
        game.mVictoryShape_12.setVisibility(false);
        game.mVictoryShape_12.setPosition(650,300);
        game.mVictoryShape_13.setVisibility(false);
        game.mVictoryShape_13.setPosition(700,300);
}
});

