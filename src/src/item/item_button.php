var ItemButton = new Class(
{
Extends: Shape,
        initialize: function(width,height,spawnX,spawnY,game,src,backgroundColor,message)
        {
                this.parent(width,height,spawnX,spawnY,game,src,backgroundColor,message);

                //ai
                this.mAiCounter = 0;
                this.mAiCounterDelay = 2;
		this.mFire = false;

		//event handling 
		if (navigator.appName == "Microsoft Internet Explorer")
                {
			if (message == 'A')
			{
				this.mMesh.attachEvent("onclick",this.buttonHitA);
			}
			if (message == 'B')
			{
				this.mMesh.attachEvent("onclick",this.buttonHitB);
			}
			if (message == 'C')
			{
				this.mMesh.attachEvent("onclick",this.buttonHitC);
			}
			if (message == 'S')
			{
				this.mMesh.attachEvent("onclick",this.buttonHitS);
			}
                }
                else
                {
			if (message == 'A')
			{
                        	this.mMesh.addEvent('click',this.buttonHitA);
			}
			if (message == 'B')
			{
                        	this.mMesh.addEvent('click',this.buttonHitB);
			}
			if (message == 'C')
			{
                        	this.mMesh.addEvent('click',this.buttonHitC);
			}	
			if (message == 'S')
			{
                        	this.mMesh.addEvent('click',this.buttonHitS);
			}	
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
        buttonHitA: function()
        {
                APPLICATION.mGame.mSheet.mItem.fireThis('A');
        },
        buttonHitB: function()
        {
                APPLICATION.mGame.mSheet.mItem.fireThis('B');
        },
        buttonHitC: function()
        {
                APPLICATION.mGame.mSheet.mItem.fireThis('C');
        },
        buttonHitS: function()
        {
                APPLICATION.mGame.mSheet.mItem.fireThis('S');
        }
});
