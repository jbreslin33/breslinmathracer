var PictureMachine = new Class(
{
        initialize: function ()
        {
       		this.mPictureLinkArray = new Array();

		this.mUsedElementArray = new Array();
			
		this.mPictureLinkArray.push("/images/bus/kid.png"); 
		this.mPictureLinkArray.push("/images/monster/red_monster.png"); 
		this.mPictureLinkArray.push("/images/treasure/gold_coin_head.png"); 
		this.mPictureLinkArray.push("/images/treasure/chest.png"); 
	},

	getPictureLink: function()
	{
		var keepGoing = true; 	
		var randomElement = 0;
		while (keepGoing)
		{
			var length = this.mPictureLinkArray.length;
			randomElement = Math.floor(Math.random()*length);			

			var noDup = false;  
			for (i=0; i < this.mUsedElementArray.length; i++)
			{
				if (randomElement == this.mUsedElementArray[i])  
				{
					noDup = true;	
				}
			}	

			if (noDup == false)
			{
				keepGoing = false;	
			}
		}
		this.mUsedElementArray.push(randomElement); 
		return this.mPictureLinkArray[randomElement]; 
	}
});

