var ToggleStandardInfoButton = new Class(
{
Extends: Shape,
        initialize: function(width,height,spawnX,spawnY,game,src,backgroundColor,message)
        {
                this.parent(width,height,spawnX,spawnY,game,src,backgroundColor,message);

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

	//-------- EVENT HANDLING 
        buttonHit: function()
        {
		if (APPLICATION.mGame.mSheet.getItem().mShowStandard == true)
		{
			APPLICATION.mGame.mSheet.getItem().mShowStandard = false;
			APPLICATION.log('false');
		}	
		else
		{
			APPLICATION.mGame.mSheet.getItem().mShowStandard = true;
			APPLICATION.log('true');
		}
        }
});
