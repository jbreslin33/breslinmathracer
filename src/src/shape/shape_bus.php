var ShapeBus = new Class(
{

Extends: Shape,
	initialize: function(width,height,spawnX,spawnY,game,question,src,backgroundColor,message)
        {
		this.parent(width,height,spawnX,spawnY,game,question,src,backgroundColor,message)
        },

        update: function(delta)
        {
       		this.parent(delta); 

	},
	
	onCollision: function(col)
	{
		this.parent(col);	
		
		if (col == this.mGame.mControlObject && col.mMounteeArray[0].mMessage == 'key')
		{
			if (this.mGame.mKidsToPutOnBus == this.mGame.mKidsOnBus)
			{
				mApplication.log('bus is started');
				this.correctAnswer();
			}
			else
			{
				mApplication.log('bus wont start');
				this.mGame.resetGame();
			}
		}
	},
	
	correctAnswer: function()
        {
                this.mGame.mOn = false;
                window.location = "/src/database/goto_next_level.php";
        }

});
