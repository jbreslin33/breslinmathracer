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

	getPronoun: function(name,uppercase)
	{
		for (i=0; i < this.mBoyNameArray.length; i++)
		{
			if (name == this.mBoyNameArray[i])
			{
				if (uppercase == 0)
				{
					return 'he';
				}
				else
				{
					return 'He';
				}
			}
		}
                for (i=0; i < this.mGirlNameArray.length; i++)
                {
                        if (name == this.mGirlNameArray[i])
                        {
                                if (uppercase == 0)
                                {
                                        return 'she';
                                }
                                else
                                {
                                        return 'She';
                                }
                        }
                }
	},

	getName: function(gender)
	{
		var keepGoing = true; 	
		var randomElement = 0;
		var randomGender = 0;
		var randomName = '';
		while (keepGoing)
		{
			if (gender == '')
			{ 
				randomGender = Math.floor(Math.random()*2);
			}
			else if (gender == 'boy')
			{
				randomGender = 0;
			}				
			else if (gender == 'girl')
			{
				randomGender = 1;
			}				

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

