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

