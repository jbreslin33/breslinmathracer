var NameMachine = new Class(
{
        initialize: function ()
        {
       		this.mNameArray = new Array();

		this.mUsedNameArray = new Array();
		this.mBoyNameArray = new Array();
		this.mGirlNameArray = new Array();
			
		this.mBoyNameArray.push("Alan"); 
		this.mBoyNameArray.push("Brad"); 
		this.mBoyNameArray.push("Charles"); 
		this.mBoyNameArray.push("Dave"); 
		
		this.mGirlNameArray.push("Alice"); 
		this.mGirlNameArray.push("Becky"); 
		this.mGirlNameArray.push("Cathy"); 
		this.mGirlNameArray.push("Doris"); 
	},

	getName: function()
	{
		var keepGoing = true; 	
		var randomElement = 0;
		var randomGender = Math.floor(Math.random()*2);
		var randomName = '';
		while (keepGoing)
		{
			if (randomGender == 0)
			{
				var length = this.mBoyNameArray.length;
				randomElement = Math.floor(Math.random()*length);			
				randomName = this.mBoyNameArray[randomElement]; 
				
			}
			else
			{
				var length = this.mGirlNameArray.length;
				randomElement = Math.floor(Math.random()*length);			
				randomName = this.mGirlNameArray[randomElement]; 
			}

			var noBoyDup = false;  
			var noGirlDup = false;  
			for (i=0; i < this.mUsedNameArray.length; i++)
			{
				if (randomElement == this.mUsedNameArray[i])  
				{
					noBoyDup = true;	
				}
				if (randomElement == this.mUsedNameArray[i])  
				{
					noGirlDup = true;	
				}
			}	

			if (noBoyDup == false && noGirlDup == false)
			{
				keepGoing = false;	
			}
		}
		this.mUsedNameArray.push(randomName); 
		return randomName; 
	}
});

