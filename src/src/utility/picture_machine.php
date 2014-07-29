var PictureMachine = new Class(
{
        initialize: function ()
        {
       		this.mPictureLinkArray = new Array();
		
		this.mPictureLinkArray.push("/images/bus/kid.png"); 
		this.mPictureLinkArray.push("/images/monster/red_monster.png"); 
		this.mPictureLinkArray.push("/images/treasure/gold_coin_head.png"); 
		this.mPictureLinkArray.push("/images/treasure/chest.png"); 
	},

	getPictureLink: function()
	{
		var length = this.mPictureLinkArray.length;
		var randomElement = Math.floor(Math.random()*length);			
	
		return this.mPictureLinkArray[randomElement]; 
	}
});

