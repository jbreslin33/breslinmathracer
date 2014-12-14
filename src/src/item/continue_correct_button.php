var ContinueCorrectButton = new Class(
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
                APPLICATION.mGame.mSheet.mItem.mContinueCorrect = true;
        }
});
