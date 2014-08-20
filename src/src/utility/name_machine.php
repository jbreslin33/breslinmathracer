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

		//kid names	
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
		this.mPlayedActivityArray.push("soccer");
		this.mPlayedActivityArray.push("baseball");
		this.mPlayedActivityArray.push("football");
		this.mPlayedActivityArray.push("hockey");

		//time increment
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
	
		//fruit
		this.mFruitArray = new Array();
		this.mUsedFruitElementArray = new Array();
		this.mFruitArray.push("apples");
		this.mFruitArray.push("bananas");
		this.mFruitArray.push("oranges");
		this.mFruitArray.push("plums");

		//vegetables	
		this.mVegetableArray = new Array();
		this.mUsedVegetableElementArray = new Array();
		this.mVegetableArray.push("onions");
		this.mVegetableArray.push("mushrooms");
		this.mVegetableArray.push("potatoes");
		
		//color
		this.mColorArray = new Array();
		this.mUsedColorElementArray = new Array();
		this.mColorArray.push("red");
		this.mColorArray.push("white");
		this.mColorArray.push("blue");
		this.mColorArray.push("green");
		this.mColorArray.push("purple");
		this.mColorArray.push("orange");
		this.mColorArray.push("brown");

		//things
		this.mThingArray = new Array();
		this.mUsedThingElementArray = new Array();
		this.mThingArray.push("cards");
		this.mThingArray.push("sticks");
		this.mThingArray.push("balls");
		this.mThingArray.push("blocks");
		this.mThingArray.push("rocks");
		this.mThingArray.push("balloons");

		//schools
		this.mSchoolArray = new Array();
		this.mUsedSchoolElementArray = new Array();
		this.mSchoolArray.push("Saint Anselm Elementary School");
		this.mSchoolArray.push("Visitation BVM Elementary School");
		this.mSchoolArray.push("Saint Anne Elementary School");

		//grade
                this.mGradeArray = new Array();
                this.mUsedGradeElementArray = new Array();
                this.mGradeArray.push("1st");
                this.mGradeArray.push("2nd");
                this.mGradeArray.push("3rd");
                this.mGradeArray.push("4th");
                this.mGradeArray.push("5th");
                this.mGradeArray.push("6th");
                this.mGradeArray.push("7th");
                this.mGradeArray.push("8th");
 
		//adult names
                this.mUsedAdultArray = new Array();
                this.mManArray = new Array();
                this.mWomanArray = new Array();

                this.mManArray.push("Mr. Breslin");
                this.mManArray.push("Mr. Roache");
                this.mManArray.push("Mr. Dubois");
                this.mManArray.push("Mr. Corcoran");
                this.mManArray.push("Mr. OBrien");
                this.mManArray.push("Mr. Nucera");
                this.mManArray.push("Mr. Coleman");

                this.mWomanArray.push("Ms. Mcginnis");
                this.mWomanArray.push("Ms. Farrell");
                this.mWomanArray.push("Mrs. Donahue");
                this.mWomanArray.push("Ms. Cox");
                this.mWomanArray.push("Mrs. Corcoran");
                this.mWomanArray.push("Mrs. Uholik");
                this.mWomanArray.push("Mrs. Vera");

		//owned
		this.mOwnedArray = new Array();
		this.mUsedOwnedElementArray = new Array();
		this.mOwnedArray.push("had");
		this.mOwnedArray.push("borrowed");
		this.mOwnedArray.push("found");
		this.mOwnedArray.push("owned");

		//added	
		this.mAddedArray = new Array();
		this.mUsedAddedElementArray = new Array();
		this.mAddedArray.push("got");
		this.mAddedArray.push("bought");
		this.mAddedArray.push("found");
		this.mAddedArray.push("borrowed");
		this.mAddedArray.push("added");
		
		//subtracted	
		this.mSubtractedArray = new Array();
		this.mUsedSubtractedElementArray = new Array();
		this.mSubtractedArray.push("gave away");	
		this.mSubtractedArray.push("lost");	
		this.mSubtractedArray.push("threw away");	
	},
       
	getSchool: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mSchoolArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedSchoolElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedSchoolElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedSchoolElementArray.push(randomElement);
                return this.mSchoolArray[randomElement];
        },

        getThing: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mThingArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedThingElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedThingElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedThingElementArray.push(randomElement);
                return this.mThingArray[randomElement];
        },

        getVegetable: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mVegetableArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedVegetableElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedVegetableElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedVegetableElementArray.push(randomElement);
                return this.mVegetableArray[randomElement];
        },

        getFruit: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mFruitArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedFruitElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedFruitElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedFruitElementArray.push(randomElement);
                return this.mFruitArray[randomElement];
        },

        getColor: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mColorArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedColorElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedColorElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedColorElementArray.push(randomElement);
                return this.mColorArray[randomElement];
        },

        getGrade: function(from,till)
        {
		//get from and till elements
		var fromElement = 0;
		var tillElement = 0;

               	for (i=0; i < this.mGradeArray.length; i++)
		{
			if (from == this.mGradeArray[i])
			{
				fromElement = i;
			} 
			if (till == this.mGradeArray[i])
			{
				tillElement = i;
			} 
		}

                var keepGoing = true;
                var randomElement = 0;

                while (keepGoing)
                {
                        var length = this.mGradeArray.length;
			var span = parseInt(tillElement - fromElement + 1);
                        randomElement = Math.floor((Math.random()*span)+fromElement);

                        var noDup = false;
                        for (i=0; i < this.mUsedGradeElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedGradeElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedGradeElementArray.push(randomElement);
                return this.mGradeArray[randomElement];
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
                                if (randomElement == this.mUsedPlayedActivityElementArray[i])
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

	getPronoun: function(name,uppercase,possesive)
	{
		for (i=0; i < this.mBoyNameArray.length; i++)
		{
			if (name == this.mBoyNameArray[i])
			{
				if (uppercase == 0)
				{
					if (possesive)
					{
						return 'his';
					}
					else
					{
						return 'he';
					}
				}
				else
				{
					if (possesive)
					{
						return 'His';
					}
					else
					{
						return 'He';
					}
				}
			}
		}
                for (i=0; i < this.mGirlNameArray.length; i++)
                {
                        if (name == this.mGirlNameArray[i])
                        {
                                if (uppercase == 0)
                                {
					if (possesive)
					{
						return 'her';
					}
					else
					{
						return 'she';
					}
                                }
                                else
                                {
					if (possesive)
					{
						return 'Her';
					}
					else
					{
						return 'She';
					}
                                }
                        }
                }
                for (i=0; i < this.mManArray.length; i++)
                {
                        if (name == this.mManArray[i])
                        {
                                if (uppercase == 0)
                                {
					if (possesive)
					{
						return 'his';
					}
					else
					{
						return 'he';
					}
                                }
                                else
                                {
					if (possesive)
					{
						return 'His';
					}
					else
					{
						return 'He';
					}
                                }
                        }
                }
                for (i=0; i < this.mWomanArray.length; i++)
                {
                        if (name == this.mWomanArray[i])
                        {
                                if (uppercase == 0)
                                {
					if (possesive)
					{
						return 'her';
					}
					else
					{
						return 'she';
					}
                                }
                                else
                                {
					if (possesive)
					{
						return 'Her';
					}
					else
					{
						return 'She';
					}
                                }
                        }
                }
	},
	
	getAdult: function(gender)
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
			else if (gender == 'man')
			{
				randomGender = 0;
			}				
			else if (gender == 'woman')
			{
				randomGender = 1;
			}				

			if (randomGender == 0)
			{
				var length = this.mManArray.length;
				randomElement = Math.floor(Math.random()*length);			
				randomName = this.mManArray[randomElement]; 
			}
			else
			{
				var length = this.mWomanArray.length;
				randomElement = Math.floor(Math.random()*length);			
				randomName = this.mWomanArray[randomElement]; 
			}

			var noManDup = false;  
			var noWomanDup = false;  
			for (i=0; i < this.mUsedAdultArray.length; i++)
			{
				if (randomElement == this.mUsedAdultArray[i])  
				{
					noManDup = true;	
				}
				if (randomElement == this.mUsedAdultArray[i])  
				{
					noWomanDup = true;	
				}
			}	

			if (noManDup == false && noWomanDup == false)
			{
				keepGoing = false;	
			}
		}
		this.mUsedAdultArray.push(randomName); 
		return randomName; 
	},

	getName: function(gender)
	{
		var dup = true; 	
		var randomElement = 0;
		var randomGender = 0;
		var randomName = '';
		while (dup)
		{
			dup = false;
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

			var dup = false;  
			for (i=0; i < this.mUsedNameArray.length; i++)
			{
				if (randomName == this.mUsedNameArray[i])  
				{
					dup = true;	
				}
			}	
		}
		this.mUsedNameArray.push(randomName); 
		return randomName; 
	},

        getOwned: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mOwnedArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedOwnedElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedOwnedElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedOwnedElementArray.push(randomElement);
                return this.mOwnedArray[randomElement];
        },

        getAdded: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mAddedArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedAddedElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedAddedElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedAddedElementArray.push(randomElement);
                return this.mAddedArray[randomElement];
        },

	getSubtracted: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mSubtractedArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedSubtractedElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedSubtractedElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedSubtractedElementArray.push(randomElement);
                return this.mSubtractedArray[randomElement];
        }

});

