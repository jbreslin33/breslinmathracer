var ItemButton = new Class(
{
Extends: Shape,
        initialize: function(width,height,spawnX,spawnY,game,src,backgroundColor,message)
        {
                this.parent(width,height,spawnX,spawnY,game,src,backgroundColor,message);

                //ai
                this.mAiCounter = 0;
                this.mAiCounterDelay = 10;
		this.mFire = false;

		//lets make this not collide 
                this.mCollidable  = false;
                this.mCollisionOn = false;
               
		//event handling 
		if (navigator.appName == "Microsoft Internet Explorer")
                {
                        this.mMesh.attachEvent("onclick",this.buttonHit);
                }
                else
                {
                        this.mMesh.addEvent('click',this.buttonHit);
                }
        },

        update: function(delta)
        {
                //run ai
                if (this.mAiCounter > this.mAiCounterDelay)
                {
			if (this.mFire)
			{
                        	this.ai();
			}
                        this.mAiCounter = 0;
                }
                this.mAiCounter++;

                this.parent(delta);
        },

	ai: function()
	{
        	this.mKey.mX = 0;
                this.mKey.mY = -1;
	},

	setAnswer: function(answer)
	{
		this.mMesh.innerHTML = answer;
	},

	getAnswer: function()
	{
		return this.mMesh.innerHTML;
	},

	//-------- EVENT HANDLING 
        buttonHit: function()
        {
                APPLICATION.mGame.mSheet.mItem.mUserAnswer = '' + this.innerHTML;
        }
});
