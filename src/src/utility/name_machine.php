var NameMachine = new Class(
{
        initialize: function ()
        {
		//pictures
                this.mPictureLinkArray = new Array();
                this.mUsedPictureLinkElementArray = new Array();

                this.mPictureLinkArray.push("/images/bus/kid.png");
                this.mPictureLinkArray.push("/images/monster/red_monster.png");
                this.mPictureLinkArray.push("/images/treasure/gold_coin_head.png");
                this.mPictureLinkArray.push("/images/treasure/chest.png");

		//people names	
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

		//days of week
		this.mDayOfWeekArray = new Array();
		this.mUsedDayOfWeekElementArray = new Array();
		this.mDayOfWeekArray.push("Sunday");
		this.mDayOfWeekArray.push("Monday");
		this.mDayOfWeekArray.push("Tuesday");
		this.mDayOfWeekArray.push("Wednesday");
		this.mDayOfWeekArray.push("Thursday");
		this.mDayOfWeekArray.push("Friday");
		this.mDayOfWeekArray.push("Saturday");
	},

        getDayOfWeek: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mDayOfWeekArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedDayOfWeekElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedDayOfWeekElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedDayOfWeekElementArray.push(randomElement);
                return this.mDayOfWeekArray[randomElement];
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
                        for (i=0; i < this.mUsedPictureLinkElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedPictureLinkElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedPictureLinkElementArray.push(randomElement);
                return this.mPictureLinkArray[randomElement];
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

