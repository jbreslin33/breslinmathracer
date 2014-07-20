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
		//if (APPLICATION.mGame.mSheet.mItem.mStandardInfoButton.getVisibility())
		if (APPLICATION.mGame.mSheet.getItem().mStandardInfoButton)
		{
			APPLICATION.log('Standardinfo:' + APPLICATION.mGame.mSheet.mStandardDescription);
			APPLICATION.mGame.mSheet.getItem().mStandardInfoButton.setVisibility(true);
		}	
        }
});
