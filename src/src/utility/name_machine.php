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

		//played activities
		this.mPlayedActivityArray = new Array();
		this.mUsedPlayedActivityElementArray = new Array();
		this.mPlayedActivityArray.push("Soccer");
		this.mPlayedActivityArray.push("Baseball");
		this.mPlayedActivityArray.push("Football");
		this.mPlayedActivityArray.push("Hockey");

		this.mTimeIncrementArray = new Array();
		this.mUsedTimeIncrementElementArray = new Array();
		this.mTimeIncrementArray.push("seconds");
		this.mTimeIncrementArray.push("minutes");
		this.mTimeIncrementArray.push("hours");
		this.mTimeIncrementArray.push("days");
		this.mTimeIncrementArray.push("weeks");
		this.mTimeIncrementArray.push("months");
		this.mTimeIncrementArray.push("years");
		this.mTimeIncrementArray.push("decades");
		this.mTimeIncrementArray.push("centuries");
		

	},

        getTimeIncrement: function(from,till)
        {

		//get from and till elements
		var fromElement = 0;
		var tillElement = 0;

               	for (i=0; i < this.mTimeIncrementArray.length; i++)
		{
			if (from == this.mTimeIncrementArray[i])
			{
				fromElement = i;
			} 
			if (till == this.mTimeIncrementArray[i])
			{
				tillElement = i;
			} 
		}

                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mTimeIncrementArray.length;
			var span = parseInt(tillElement - fromElement + 1);
                        randomElement = Math.floor((Math.random()*span)+fromElement);

                        var noDup = false;
                        for (i=0; i < this.mUsedTimeIncrementElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedTimeIncrementElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedTimeIncrementElementArray.push(randomElement);
                return this.mTimeIncrementArray[randomElement];
        },

        getPlayedActivity: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mPlayedActivityArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedPlayedActivityElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedPlayedActivieyElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedPlayedActivityElementArray.push(randomElement);
                return this.mPlayedActivityArray[randomElement];
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

