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
		this.mBoyNameArray.push("Ethan"); 
		this.mBoyNameArray.push("Fred"); 
		this.mBoyNameArray.push("Gerry"); 
		this.mBoyNameArray.push("Harry"); 
		this.mBoyNameArray.push("Ivan"); 
		this.mBoyNameArray.push("Jim"); 
		this.mBoyNameArray.push("Kevin"); 
		this.mBoyNameArray.push("Luke"); 
		this.mBoyNameArray.push("Mike"); 
		
		this.mGirlNameArray.push("Alice"); 
		this.mGirlNameArray.push("Becky"); 
		this.mGirlNameArray.push("Cathy"); 
		this.mGirlNameArray.push("Doris"); 
		this.mGirlNameArray.push("Eve"); 
		this.mGirlNameArray.push("Fabiana"); 
		this.mGirlNameArray.push("Grace"); 
		this.mGirlNameArray.push("Heidi"); 
		this.mGirlNameArray.push("Isabella"); 
		this.mGirlNameArray.push("Jessica"); 
		this.mGirlNameArray.push("Kate"); 
		this.mGirlNameArray.push("Lucy"); 
		this.mGirlNameArray.push("Maria"); 

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
		this.mPlayedActivityArray.push("video games");
		this.mPlayedActivityArray.push("chess");
		this.mPlayedActivityArray.push("checkers");
		this.mPlayedActivityArray.push("dominoes");
		this.mPlayedActivityArray.push("monopoly");
		this.mPlayedActivityArray.push("tic tac toe");
		this.mPlayedActivityArray.push("dodge ball");
		
		//point activities
		this.mPointActivityArray = new Array();
		this.mUsedPointActivityElementArray = new Array();
		this.mPointActivityArray.push("soccer");
		this.mPointActivityArray.push("basketball");
		this.mPointActivityArray.push("football");
		this.mPointActivityArray.push("hockey");
		this.mPointActivityArray.push("video games");

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
		
		//distance increment
		this.mDistanceIncrementArray = new Array();
		this.mUsedDistanceIncrementElementArray = new Array();
		this.mDistanceIncrementArray.push("centimeters");
		this.mDistanceIncrementArray.push("inches");
		this.mDistanceIncrementArray.push("feet");
		this.mDistanceIncrementArray.push("meters");
		this.mDistanceIncrementArray.push("yards");
		this.mDistanceIncrementArray.push("kilometers");
		this.mDistanceIncrementArray.push("miles");
		
		//animals
		this.mAnimalArray = new Array();
		this.mUsedAnimalElementArray = new Array();
		this.mAnimalArray.push("apes");
		this.mAnimalArray.push("bears");
		this.mAnimalArray.push("cats");
		this.mAnimalArray.push("ducks");
		this.mAnimalArray.push("elephants");
		this.mAnimalArray.push("frogs");
		this.mAnimalArray.push("girrafes");
		this.mAnimalArray.push("monkeys");
		this.mAnimalArray.push("birds");
		this.mAnimalArray.push("sharks");
		this.mAnimalArray.push("cows");
		this.mAnimalArray.push("zebras");
	
		//fruit
		this.mFruitArray = new Array();
		this.mUsedFruitElementArray = new Array();
		this.mFruitArray.push("apples");
		this.mFruitArray.push("bananas");
		this.mFruitArray.push("oranges");
		this.mFruitArray.push("plums");

       		//subject
                this.mSubjectArray = new Array();
                this.mUsedSubjectElementArray = new Array();
                this.mSubjectArray.push("english");
                this.mSubjectArray.push("math");
                this.mSubjectArray.push("spelling");
                this.mSubjectArray.push("history");
                this.mSubjectArray.push("religion");

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

    //school supplies
		this.mSuppliesArray = new Array();
		this.mUsedSuppliesElementArray = new Array();
		this.mSuppliesArray.push("staplers");
		this.mSuppliesArray.push("erasers");
		this.mSuppliesArray.push("calculators");
		this.mSuppliesArray.push("notebooks");
		this.mSuppliesArray.push("textbooks");
		this.mSuppliesArray.push("scales");

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

		//sum	
		this.mSumArray = new Array();
		this.mUsedSumElementArray = new Array();
		this.mSumArray.push("in all");	
		this.mSumArray.push("altogether");	
		this.mSumArray.push("in total");	
		this.mSumArray.push("in sum");	
		this.mSumArray.push("total");	
		
		//left	
		this.mLeftArray = new Array();
		this.mUsedLeftElementArray = new Array();
		this.mLeftArray.push("left");	
		this.mLeftArray.push("remaining");	
		this.mLeftArray.push("still");	


		//operationString	
		this.mOperationInstructionExpression = 'Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 1+2';	
		this.mOperationInstructionEquation = 'Use + for addition, - for subtraction, * for multiplication and / for division. Do not use spaces. Example Answer: 1+2=3';	
	},

	getNumberName: function(number)
	{
  		if (number == 1)
                {
                        return 'one';
                }
                if (number == 2)
                {
                        return 'two';
                }
                if (number == 3)
                {
                        return 'three';
                }
                if (number == 4)
                {
                        return 'four';
                }
                if (number == 5)
                {
                        return 'five';
                }
                if (number == 6)
                {
                        return 'six';
                }
                if (number == 7)
                {
                        return 'seven';
                }
                if (number == 8)
                {
                        return 'eight';
                }
                if (number == 9)
                {
                        return 'nine';
                }
                if (number == 10)
                {
                        return 'ten';
                }
                if (number == 11)
                {
                        return 'eleven';
                }
                if (number == 12)
                {
                        return 'twelve';
               	} 
                if (number == 13)
                {
                        return 'thirteen';
                }
                if (number == 14)
                {
                        return 'fourteen';
                }
                if (number == 15)
                {
                        return 'thirteen';
                }
                if (number == 16)
                {
                        return 'thirteen';
                }
                if (number == 17)
                {
                        return 'thirteen';
                }
                if (number == 18)
                {
                        return 'thirteen';
                }
                if (number == 19)
                {
                        return 'thirteen';
                }
                if (number == 20)
                {
                        return 'twenty';
                }
                if (number == 21)
                {
                        return 'twenty-one';
                }
                if (number == 22)
                {
                        return 'twenty-two';
                }
                if (number == 23)
                {
                        return 'twenty-three';
                }
                if (number == 24)
                {
                        return 'twenty-four';
                }
                if (number == 25)
                {
                        return 'twenty-five';
                }
                if (number == 26)
                {
                        return 'twenty-six';
                }
                if (number == 27)
                {
                        return 'twenty-seven';
                }
                if (number == 28)
                {
                        return 'twenty-eight';
                }
                if (number == 29)
                {
                        return 'twenty-nine';
                }
                if (number == 30)
                {
                        return 'thirty';
                }
	},

	getDenominatorName: function(number)
	{
		if (number == 2)
		{
			return 'halves'
		}	
		if (number == 3)
		{
			return 'thirds'
		}	
		if (number == 4)
		{
			return 'fourths'
		}	
		if (number == 5)
		{
			return 'fifths'
		}	
		if (number == 6)
		{
			return 'sixths'
		}	
		if (number == 7)
		{
			return 'sevenths'
		}	
		if (number == 8)
		{
			return 'eighths'
		}	
		if (number == 9)
		{
			return 'ninths'
		}	
		if (number == 10)
		{
			return 'tenths'
		}	
	},

	getOperationInstructionExpression: function()
	{
		return this.mOperationInstructionExpression;	
	},
	
	getOperationInstructionEquation: function()
	{
		return this.mOperationInstructionEquation;	
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

        getSupply: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mSuppliesArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedSuppliesElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedSuppliesElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedSuppliesElementArray.push(randomElement);
                return this.mSuppliesArray[randomElement];
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
    
	getAnimal: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mAnimalArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedAnimalElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedAnimalElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedAnimalElementArray.push(randomElement);
                return this.mAnimalArray[randomElement];
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
       
	getSubject: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mSubjectArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedSubjectElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedSubjectElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedSubjectElementArray.push(randomElement);
                return this.mSubjectArray[randomElement];
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

	getSingular: function(word)
	{
		if (word == 'seconds')
		{
			return 'second';	
		}
		if (word == 'minutes')
		{
			return 'minute';	
		}
		if (word == 'hours')
		{
			return 'hour';	
		}
		if (word == 'days')
		{
			return 'day';	
		}
		if (word == 'weeks')
		{
			return 'week';	
		}
		if (word == 'months')
		{
			return 'month';	
		}
		if (word == 'years')
		{
			return 'year';	
		}
		if (word == 'decades')
		{
			return 'decade';	
		}
		if (word == 'centuries')
		{
			return 'centurie';	
		}
		return word;
	}, 

        getDistanceIncrement: function(from,till)
        {
		//get from and till elements
		var fromElement = 0;
		var tillElement = 0;

               	for (i=0; i < this.mDistanceIncrementArray.length; i++)
		{
			if (from == this.mDistanceIncrementArray[i])
			{
				fromElement = i;
			} 
			if (till == this.mDistanceIncrementArray[i])
			{
				tillElement = i;
			} 
		}

                var keepGoing = true;
                var randomElement = 0;

                while (keepGoing)
                {
                        var length = this.mDistanceIncrementArray.length;
			var span = parseInt(tillElement - fromElement + 1);
                        randomElement = Math.floor((Math.random()*span)+fromElement);

                        var noDup = false;
                        for (i=0; i < this.mUsedDistanceIncrementElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedDistanceIncrementElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedDistanceIncrementElementArray.push(randomElement);
                return this.mDistanceIncrementArray[randomElement];
        },

	getDistanceAbbreviation: function(distance)
	{
		if (distance == 'centimeters')
		{
			return 'cm';
		}
		if (distance == 'inches')
		{
			return 'in';
		}
		if (distance == 'feet')
		{
			return 'ft';
		}
		if (distance == 'meters')
		{
			return 'm';
		}
		if (distance == 'yards')
		{
			return 'yd';
		}
		if (distance == 'kilometers')
		{
			return 'km';
		}
		if (distance == 'miles')
		{
			return 'mi';
		}
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

     	getPointActivity: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mPointActivityArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedPointActivityElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedPointActivityElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false) 
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedPointActivityElementArray.push(randomElement);
                return this.mPointActivityArray[randomElement];
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

	getPictureName: function(link)
	{

		if (link == "/images/bus/kid.png")
		{
			return 'kids';
		}
		if (link == "/images/monster/red_monster.png")
		{
			return 'red monsters';
		}
		if (link == "/images/treasure/gold_coin_head.png")
		{
			return 'gold coins';
		}
		if (link == "/images/treasure/chest.png")
		{
			return 'treasure chests';
		}
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
  	
	getNameString: function(numberOfNames) 
	{
		var nameString = '';
                for (var i = 0; i < numberOfNames; i++)
                {
                	if (i == 0)
                        {
                                nameString = nameString + this.getName();
                        }
                        else if (i > 0 && i < parseInt(numberOfNames - 1))
                        {
                                nameString = nameString + ', ' + this.getName();
                        }
                        else
                        {
                                nameString = nameString + ' and ' + this.getName();
                        }
                }
		return nameString;
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
        },

        getSum: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mSumArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedSumElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedSumElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedSumElementArray.push(randomElement);
                return this.mSumArray[randomElement];
        },
        
	getLeft: function()
        {
                var keepGoing = true;
                var randomElement = 0;
                while (keepGoing)
                {
                        var length = this.mLeftArray.length;
                        randomElement = Math.floor(Math.random()*length);

                        var noDup = false;
                        for (i=0; i < this.mUsedLeftElementArray.length; i++)
                        {
                                if (randomElement == this.mUsedLeftElementArray[i])
                                {
                                        noDup = true;
                                }
                        }

                        if (noDup == false)
                        {
                                keepGoing = false;
                        }
                }
                this.mUsedLeftElementArray.push(randomElement);
                return this.mLeftArray[randomElement];
        }

});

var NameSampler = new Class(
{
        initialize: function ()
        {
                this.mNameMachine = new NameMachine();

                this.mNameOne     = this.mNameMachine.getName();
                this.mNameTwo     = this.mNameMachine.getName();
                this.mNameThree     = this.mNameMachine.getName();

		this.mNameArray = new Array(); 
		this.mNameArray.push(this.mNameOne);
		this.mNameArray.push(this.mNameTwo);
		this.mNameArray.push(this.mNameThree);

                this.mThings      = this.mNameMachine.getThing();
                this.mThingOne      = this.mNameMachine.getThing();
                this.mThingTwo      = this.mNameMachine.getThing();
                this.mThingThree      = this.mNameMachine.getThing();
		
		this.mThingArray = new Array(); 
		this.mThingArray.push(this.mThingOne);
		this.mThingArray.push(this.mThingTwo);
		this.mThingArray.push(this.mThingThree);

                this.mSchoolOne      = this.mNameMachine.getSchool();
                this.mSchoolTwo      = this.mNameMachine.getSchool();
                this.mSchoolThree      = this.mNameMachine.getSchool();
		
		this.mSchoolArray = new Array(); 
		this.mSchoolArray.push(this.mSchoolOne);
		this.mSchoolArray.push(this.mSchoolTwo);
		this.mSchoolArray.push(this.mSchoolThree);

                this.mAdultOne = this.mNameMachine.getAdult();
                this.mAdultTwo = this.mNameMachine.getAdult();
                this.mAdultThree = this.mNameMachine.getAdult();
		
		this.mAdultArray = new Array(); 
		this.mAdultArray.push(this.mAdultOne);
		this.mAdultArray.push(this.mAdultTwo);
		this.mAdultArray.push(this.mAdultThree);

                this.mVegetableOne = this.mNameMachine.getVegetable();
                this.mVegetableTwo = this.mNameMachine.getVegetable();
                this.mVegetableThree = this.mNameMachine.getVegetable();
		
		this.mVegetableArray = new Array(); 
		this.mVegetableArray.push(this.mVegetableOne);
		this.mVegetableArray.push(this.mVegetableTwo);
		this.mVegetableArray.push(this.mVegetableThree);

                this.mFruitOne = this.mNameMachine.getFruit();
                this.mFruitTwo = this.mNameMachine.getFruit();
                this.mFruitThree = this.mNameMachine.getFruit();

		this.mFruitArray = new Array(); 
		this.mFruitArray.push(this.mFruitOne);
		this.mFruitArray.push(this.mFruitTwo);
		this.mFruitArray.push(this.mFruitThree);

                this.mSubjectOne = this.mNameMachine.getSubject();
                this.mSubjectTwo = this.mNameMachine.getSubject();
                this.mSubjectThree = this.mNameMachine.getSubject();

                this.mSubjectArray = new Array();
                this.mSubjectArray.push(this.mSubjectOne);
                this.mSubjectArray.push(this.mSubjectTwo);
                this.mSubjectArray.push(this.mSubjectThree);

                this.mPlayedActivityOne = this.mNameMachine.getPlayedActivity();
                this.mPlayedActivityTwo = this.mNameMachine.getPlayedActivity();
                this.mPlayedActivityThree = this.mNameMachine.getPlayedActivity();
                
		this.mPlayedActivityArray = new Array(); 
		this.mPlayedActivityArray.push(this.mPlayedActivityOne);
		this.mPlayedActivityArray.push(this.mPlayedActivityTwo);
		this.mPlayedActivityArray.push(this.mPlayedActivityThree);
		
		this.mPointActivityOne = this.mNameMachine.getPlayedActivity();
                this.mPointActivityTwo = this.mNameMachine.getPlayedActivity();
                this.mPointActivityThree = this.mNameMachine.getPlayedActivity();
	
		this.mPointActivityArray = new Array(); 
		this.mPointActivityArray.push(this.mPointActivityOne);
		this.mPointActivityArray.push(this.mPointActivityTwo);
		this.mPointActivityArray.push(this.mPointActivityThree);
 
                this.mTimeIncrementSmall = this.mNameMachine.getTimeIncrement('seconds','hours');
                this.mTimeIncrementMedium = this.mNameMachine.getTimeIncrement('days','years');
                this.mTimeIncrementLarge = this.mNameMachine.getTimeIncrement('decades','centuries');

                this.mDistanceIncrementSmall = this.mNameMachine.getDistanceIncrement('centimeters','inches');
                this.mDistanceIncrementMedium = this.mNameMachine.getDistanceIncrement('feet','yards');
                this.mDistanceIncrementLarge = this.mNameMachine.getDistanceIncrement('kilometers','miles');

                this.mDayOfWeekOne = this.mNameMachine.getDayOfWeek();
                this.mDayOfWeekTwo = this.mNameMachine.getDayOfWeek();
                this.mDayOfWeekThree = this.mNameMachine.getDayOfWeek();
		
		this.mDayOfWeekArray = new Array(); 
		this.mDayOfWeekArray.push(this.mDayOfWeekOne);
		this.mDayOfWeekArray.push(this.mDayOfWeekTwo);
		this.mDayOfWeekArray.push(this.mDayOfWeekThree);

		this.mAnimalOne = this.mNameMachine.getAnimal();
		this.mAnimalTwo = this.mNameMachine.getAnimal();
		this.mAnimalThree = this.mNameMachine.getAnimal();
		
		this.mAnimalArray = new Array(); 
		this.mAnimalArray.push(this.mAnimalOne);
		this.mAnimalArray.push(this.mAnimalTwo);
		this.mAnimalArray.push(this.mAnimalThree);
		
		this.mColorOne   = this.mNameMachine.getColor();
		this.mColorTwo   = this.mNameMachine.getColor();
		this.mColorThree = this.mNameMachine.getColor();
		
		this.mColorArray = new Array(); 
		this.mColorArray.push(this.mColorOne);
		this.mColorArray.push(this.mColorTwo);
		this.mColorArray.push(this.mColorThree);

                this.mSum = this.mNameMachine.getSum();
                this.mLeft = this.mNameMachine.getLeft();
	}
});
