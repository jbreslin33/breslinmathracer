var PLAY_GAME = new Class(
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
        if (game.mControlObject)
        {
                if (game.mControlObject.mCommandToRunOnShape.mDeltaCode == game.mApplication.mMessageGameEnd)
                {
			this.log('control object delta says reset');
                        game.mStateMachine.changeState(game.mRESET_GAME);
                }
        }

	//user input
        game.processInput();

        //network outgoing
        game.sendByteBuffer();
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

log: function(msg)
{
        setTimeout(function()
        {
                throw new Error(msg);
        }, 0);
},

enter: function(game)
{
	this.log('RESET_GAME::enter');
	game.mApplication.createResetScreen();
        game.mApplication.showResetScreen();
  
	for (i = 0; i < game.mShapeVector.length; i++)
        {
                game.mShapeVector[i].setVisible(false);
        }
},

execute: function(game)
{
        if (game.mControlObject)
        {
                if (game.mControlObject.mCommandToRunOnShape.mDeltaCode == game.mApplication.mMessageGameStart)
                {
                        game.mStateMachine.changeState(game.mPLAY_GAME);
                }
        }

},

exit: function(game)
{
        game.mApplication.hideResetScreen();
	
	for (i = 0; i < game.mShapeVector.length; i++)
        {
                game.mShapeVector[i].setVisible(true);
		game.mShapeVector[i].setText('' + game.mShapeVector[i].mStringUsername + ':0');
        }
}

});

