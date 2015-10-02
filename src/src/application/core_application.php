var CoreApplication = new Class(
{
Extends: Application,
	initialize: function()
        {
		this.parent();

		//logging
		this.mStateLogs = false; 
		this.mStateLogsExecute = false; 
		this.mStateLogsExit = false; 

		//parse codes

		//games
		this.NORMAL = 1;
		this.PRACTICE = 2;

		//login
		this.TIMED_OUT = 105;
		this.NOT_LOGGED_IN = 102;
		this.BAD_USERNAME = 103;
		this.BAD_PASSWORD = 104;
		this.LOGIN_STUDENT = 117;
		this.SIGNUP_STUDENT = 217;
		this.LOGIN_TEACHER = 113;
		this.LOGIN_SCHOOL = 114;

		//signup
		this.USERNAME_TAKEN_SCHOOL = 115;
		this.NAME_TAKEN_SCHOOL = 120;
		this.USERNAME_TAKEN_STUDENT = 118;

		//descriptions
		this.STANDARD_DESCRIPTION = 106;
		this.ITEM_DESCRIPTION = 107;
		this.PRACTICE_DESCRIPTION = 108;
		this.STUDENT_ITEM_STATS = 109;

		//scroll
		this.SCROLL = 112;

		//ITEM_ATTEMPTS
		this.ITEM_ATTEMPT_INSERT_CONFIRMATION = 161;
		this.ITEM_ATTEMPT_UPDATE_CONFIRMATION = 162;
		
		//EVALUATION_ATTEMPTS
		this.EVALUATION_ATTEMPT_INSERT_CONFIRMATION = 141;

		//going forward	
		this.mItemAttemptsArray = new Array();

		//item_attempts
		this.mItemTypesArray = new Array(); //from db

		//One normal
		this.mItemAttemptsTypeArrayOne = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayOne = new Array(); //from db
		
		//Three 2x
		this.mItemAttemptsTypeArrayThree = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThree = new Array(); //from db
		
		//Four 3x
		this.mItemAttemptsTypeArrayFour = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayFour = new Array(); //from db
		
		//Five 4x
		this.mItemAttemptsTypeArrayFive = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayFive = new Array(); //from db

		//Six 5x
		this.mItemAttemptsTypeArraySix = new Array(); //from db
		this.mItemAttemptsTransactionCodeArraySix = new Array(); //from db
		
		//Seven 6x
		this.mItemAttemptsTypeArraySeven = new Array(); //from db
		this.mItemAttemptsTransactionCodeArraySeven = new Array(); //from db

		//Eight 7x
		this.mItemAttemptsTypeArrayEight = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayEight = new Array(); //from db

		//Nine 8x
		this.mItemAttemptsTypeArrayNine = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayNine = new Array(); //from db

		//Ten 9x
		this.mItemAttemptsTypeArrayTen = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTen = new Array(); //from db

		//Twelve theizzy
		this.mItemAttemptsTypeArrayTwelve = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwelve = new Array(); //from db

		//Thirteen addsub
		this.mItemAttemptsTypeArrayThirteen = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirteen = new Array(); //from db
		
		//Fourteen terra nova 
		this.mItemAttemptsTypeArrayFourteen = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayFourteen = new Array(); //from db
		
		//Fifteen test 
		this.mItemAttemptsTypeArrayFifteen = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayFifteen = new Array(); //from db

		//algorithms
		this.mFirst = '';
		this.mLeastAsked = '';
		this.mLeastCorrect = '';
 
		//personal info
		this.mUsername = '';
		this.mFirstName = '';
		this.mLastName = '';

		/*********** LOGIN *******************
		this.mDataToRead = false;
		this.mLoggedIn = false;
		this.mBadUsername = false;
		this.mBadPassword = false;

		/*********** LEVEL *******************
		this.mRef_id = 'login';
		this.mProgression = 0;
		this.mStandard = '';
		this.mResponseArray = 0;
		this.mRawData = 0;
		this.mType = '';
		this.mQuestionTypeCurrent = 0;
		this.mQuestionTypeLast = 0;

		this.mData = 0;

		/*********** TIMERS *******************/
		this.mStateThresholdTime = 30000; 
		this.mStateEnterTime = 0; 

		/********** STATE FLAGS ************/
		this.mPracticeItemID = '3.oa.c.7_44';
		this.mEvaluationsID = 0;

		/********* HUD *******************/ 
        	this.mHud = new Hud(this);

		/********* STATES *******************/ 
		this.mCoreStateMachine = new StateMachine(this);

		//admin
                this.mGLOBAL_CORE_APPLICATION          = new GLOBAL_CORE_APPLICATION       (this);
                this.mINIT_CORE_APPLICATION            = new INIT_CORE_APPLICATION         (this);

		//login
                this.mLOGIN_STUDENT_APPLICATION        = new LOGIN_STUDENT_APPLICATION     (this);
                this.mLOGIN_STUDENT_WAIT_APPLICATION   = new LOGIN_STUDENT_WAIT_APPLICATION(this);
                this.mLOGIN_SCHOOL_APPLICATION         = new LOGIN_SCHOOL_APPLICATION      (this);
                this.mLOGIN_SCHOOL_WAIT_APPLICATION    = new LOGIN_SCHOOL_WAIT_APPLICATION (this);

		//signup
                this.mSIGNUP_STUDENT_APPLICATION       = new SIGNUP_STUDENT_APPLICATION    (this);
                this.mSIGNUP_STUDENT_WAIT_APPLICATION  = new SIGNUP_STUDENT_WAIT_APPLICATION    (this);
                this.mSIGNUP_SCHOOL_APPLICATION        = new SIGNUP_SCHOOL_APPLICATION     (this);
                this.mSIGNUP_SCHOOL_WAIT_APPLICATION   = new SIGNUP_SCHOOL_WAIT_APPLICATION     (this);

		//normal
                this.mNORMAL_CORE_APPLICATION          = new NORMAL_CORE_APPLICATION       (this);

		//practice
                this.mPRACTICE_APPLICATION             = new PRACTICE_APPLICATION          (this);
	
		//tables
                this.mTIMES_TABLES_TWO_APPLICATION      = new TIMES_TABLES_TWO_APPLICATION      (this);
                this.mTIMES_TABLES_THREE_APPLICATION    = new TIMES_TABLES_THREE_APPLICATION      (this);
                this.mTIMES_TABLES_FOUR_APPLICATION     = new TIMES_TABLES_FOUR_APPLICATION      (this);
                this.mTIMES_TABLES_FIVE_APPLICATION     = new TIMES_TABLES_FIVE_APPLICATION      (this);
                this.mTIMES_TABLES_SIX_APPLICATION      = new TIMES_TABLES_SIX_APPLICATION      (this);
                this.mTIMES_TABLES_SEVEN_APPLICATION    = new TIMES_TABLES_SEVEN_APPLICATION      (this);
                this.mTIMES_TABLES_EIGHT_APPLICATION    = new TIMES_TABLES_EIGHT_APPLICATION      (this);
                this.mTIMES_TABLES_NINE_APPLICATION     = new TIMES_TABLES_NINE_APPLICATION      (this);
                this.mTIMES_TABLES_THE_IZZY_APPLICATION = new TIMES_TABLES_THE_IZZY_APPLICATION      (this);
                this.mTIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION = new TIMES_TABLES_ADD_SUBTRACT_WITHIN_FIVE_APPLICATION      (this);
                this.mTERRA_NOVA_APPLICATION = new TERRA_NOVA_APPLICATION      (this);
                this.mTEST_APPLICATION = new TEST_APPLICATION      (this);
	
		//reports
                this.mREPORT_CORE_APPLICATION          = new REPORT_CORE_APPLICATION       (this);

                this.mCoreStateMachine.setGlobalState(this.mGLOBAL_CORE_APPLICATION);
                this.mCoreStateMachine.changeState(this.mINIT_CORE_APPLICATION);

		this.bapplication();	
        },

highestAchieved: function()
{	
	var highest = 0; 
	var askedArray = new Array();
	for (var a = 0; a < this.mItemTypesArray.length; a++)
	{
		askedArray.push(1);
	}

	var i = 0;
	while (i < this.mItemTypesArray.length)
	{
		var foundOne = false;
		var j = 0;
		while (j < this.mItemAttemptsTypeArrayOne.length && foundOne == false)
		{
			if (this.mItemTypesArray[i] == this.mItemAttemptsTypeArrayOne[j])
			{
				foundOne = true;
				askedArray[i] = 2;
			}					
			j++;
		}
		i++;
	}

	var streak = 0;
	var b = 0;
	while (b < askedArray.length && streak < 10)
	{
		if (askedArray[b] == 1)	
		{
			streak++
		}
		else
		{
			streak = 0;
		}
		if (b == parseInt(askedArray.length - 3))
		{
			streak = 20;
		}
		b++;
	}

	highest = this.mItemTypesArray[b];

	APPLICATION.mHud.setYellow('' + highest);
},
	
	calcScore: function()
	{
		var score = 0;
		var currentStreak = 0;
		var hiStreak = 0;
		var foundWrong = false;
		var unmastered = 0;
		
		if (parseInt(this.mEvaluationsID) == 1)
		{
			//alltime
			for (var i = 0; i < this.mItemTypesArray.length; i++)
			{
				var foundOne = false;
				var j = 0;
				while (j < this.mItemAttemptsTypeArrayOne.length && foundOne == false)
				{
					if (this.mItemTypesArray[i] == this.mItemAttemptsTypeArrayOne[j])
					{
						score++;	
						foundOne = true;
					}					
					j++;
				}
			}

			//unmastered if blank break
			var i = 0;
			var breakOut = false;
			APPLICATION.mHud.emptyTanSelect();
			while (i < this.mItemTypesArray.length && breakOut == false)
			{
				var attemptArray = new Array();;
				attemptArray.length = 0;
				var j = 0;	
				while (j < this.mItemAttemptsTypeArrayOne.length && attemptArray.length < 2)
				{
					if (this.mItemTypesArray[i] == this.mItemAttemptsTypeArrayOne[j])
					{
						attemptArray.push(this.mItemAttemptsTransactionCodeArrayOne[j]);	
					}
					j++;
				}
				//lets check array
				if (attemptArray.length == 0) //never asked break out
				{
					unmastered++;
					APPLICATION.mHud.fillTanSelect(this.mItemTypesArray[i]);
					breakOut = true;
				}
				else if (attemptArray.length == 1) //not enuf
				{
					APPLICATION.mHud.fillTanSelect(this.mItemTypesArray[i]);
					unmastered++;
				}
				else //you must have 2 
				{
					if (attemptArray[0] != 1 || attemptArray[1] != 1)
					{
						APPLICATION.mHud.fillTanSelect(this.mItemTypesArray[i]);
						unmastered++;
					}
				}	

				i++;
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArrayOne.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayOne[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}

		if (parseInt(this.mEvaluationsID) == 3)
		{
			//all time
			for (var i = 0; i < this.mItemAttemptsTypeArrayThree.length; i++)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayThree[i]) == 1)
				{
					hiStreak++;	
					if (parseInt(hiStreak) >= parseInt(score))
					{
						score = hiStreak;
					}
				}
				else
				{
					hiStreak = 0;
				}
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArrayThree.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayThree[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}
		
		if (parseInt(this.mEvaluationsID) == 4)
		{
			//all time
			for (var i = 0; i < this.mItemAttemptsTypeArrayFour.length; i++)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayFour[i]) == 1)
				{
					hiStreak++;	
					if (parseInt(hiStreak) >= parseInt(score))
					{
						score = hiStreak;
					}
				}
				else
				{
					hiStreak = 0;
				}
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArrayFour.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayFour[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}
		
		if (parseInt(this.mEvaluationsID) == 5)
		{
			//all time
			for (var i = 0; i < this.mItemAttemptsTypeArrayFive.length; i++)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayFive[i]) == 1)
				{
					hiStreak++;	
					if (parseInt(hiStreak) >= parseInt(score))
					{
						score = hiStreak;
					}
				}
				else
				{
					hiStreak = 0;
				}
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArrayFive.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayFive[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}
		
		if (parseInt(this.mEvaluationsID) == 6)
		{
			//all time
			for (var i = 0; i < this.mItemAttemptsTypeArraySix.length; i++)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArraySix[i]) == 1)
				{
					hiStreak++;	
					if (parseInt(hiStreak) >= parseInt(score))
					{
						score = hiStreak;
					}
				}
				else
				{
					hiStreak = 0;
				}
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArraySix.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArraySix[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}
		
		if (parseInt(this.mEvaluationsID) == 7)
		{
			//all time
			for (var i = 0; i < this.mItemAttemptsTypeArraySeven.length; i++)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArraySeven[i]) == 1)
				{
					hiStreak++;	
					if (parseInt(hiStreak) >= parseInt(score))
					{
						score = hiStreak;
					}
				}
				else
				{
					hiStreak = 0;
				}
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArraySeven.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArraySeven[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}
		
		if (parseInt(this.mEvaluationsID) == 8)
		{
			//all time
			for (var i = 0; i < this.mItemAttemptsTypeArrayEight.length; i++)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayEight[i]) == 1)
				{
					hiStreak++;	
					if (parseInt(hiStreak) >= parseInt(score))
					{
						score = hiStreak;
					}
				}
				else
				{
					hiStreak = 0;
				}
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArrayEight.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayEight[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}
		
		if (parseInt(this.mEvaluationsID) == 9)
		{
			//all time
			for (var i = 0; i < this.mItemAttemptsTypeArrayNine.length; i++)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayNine[i]) == 1)
				{
					hiStreak++;	
					if (parseInt(hiStreak) >= parseInt(score))
					{
						score = hiStreak;
					}
				}
				else
				{
					hiStreak = 0;
				}
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArrayNine.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayNine[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}
		
		if (parseInt(this.mEvaluationsID) == 10)
		{
			//all time
			for (var i = 0; i < this.mItemAttemptsTypeArrayTen.length; i++)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayTen[i]) == 1)
				{
					hiStreak++;	
					if (parseInt(hiStreak) >= parseInt(score))
					{
						score = hiStreak;
					}
				}
				else
				{
					hiStreak = 0;
				}
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArrayTen.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayTen[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}
		
		if (parseInt(this.mEvaluationsID) == 12)
		{
			//all time
			for (var i = 0; i < this.mItemAttemptsTypeArrayTwelve.length; i++)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayTwelve[i]) == 1)
				{
					hiStreak++;	
					if (parseInt(hiStreak) >= parseInt(score))
					{
						score = hiStreak;
					}
				}
				else
				{
					hiStreak = 0;
				}
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArrayTwelve.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayTwelve[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}
		
		if (parseInt(this.mEvaluationsID) == 13)
		{
			//all time
			for (var i = 0; i < this.mItemAttemptsTypeArrayThirteen.length; i++)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayThirteen[i]) == 1)
				{
					hiStreak++;	
					if (parseInt(hiStreak) >= parseInt(score))
					{
						score = hiStreak;
					}
				}
				else
				{
					hiStreak = 0;
				}
			}
			
			//latest streak
			var i = 0;	
			while (i < this.mItemAttemptsTypeArrayThirteen.length && foundWrong == false)
			{
				if (parseInt(this.mItemAttemptsTransactionCodeArrayThirteen[i]) == 1)
				{
					currentStreak++;	
					i++;
				}
				else
				{
					foundWrong = true;
				}
			}
		}

               	if (parseInt(this.mEvaluationsID) == 14)
                {
                        //all time
                        for (var i = 0; i < this.mItemAttemptsTypeArrayFourteen.length; i++)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFourteen[i]) == 1)
                                {
                                        hiStreak++;
                                        if (parseInt(hiStreak) >= parseInt(score))
                                        {
                                                score = hiStreak;
                                        }
                                }
                                else
                                {
                                        hiStreak = 0;
                                }
                        }

                        //latest streak
                        var i = 0;
                        while (i < this.mItemAttemptsTypeArrayFourteen.length && foundWrong == false)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFourteen[i]) == 1)
                                {
                                        currentStreak++;
                                        i++;
                                }
                                else
                                {
                                        foundWrong = true;
                                }
                        }
                }
               	
		if (parseInt(this.mEvaluationsID) == 15)
                {
                        //all time
                        for (var i = 0; i < this.mItemAttemptsTypeArrayFifteen.length; i++)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFifteen[i]) == 1)
                                {
                                        hiStreak++;
                                        if (parseInt(hiStreak) >= parseInt(score))
                                        {
                                                score = hiStreak;
                                        }
                                }
                                else
                                {
                                        hiStreak = 0;
                                }
                        }

                        //latest streak
                        var i = 0;
                        while (i < this.mItemAttemptsTypeArrayFifteen.length && foundWrong == false)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFifteen[i]) == 1)
                                {
                                        currentStreak++;
                                        i++;
                                }
                                else
                                {
                                        foundWrong = true;
                                }
                        }
                }



		this.mGame.setStreak(currentStreak);
		this.mGame.setUnmastered(unmastered);
		this.mGame.setScore(score); 
	},

	getFirst: function()
	{
		var first = '';
		var i = 0;

		while (i < this.mItemTypesArray.length && first == '')
		{
			var tempArray = new Array();
			var tempArray = [];
			var j = 0;
			while (j < this.mItemAttemptsTypeArrayOne.length && tempArray.length < 3)
			{
				if (this.mItemTypesArray[i] == this.mItemAttemptsTypeArrayOne[j])
				{
					tempArray.push(this.mItemAttemptsTransactionCodeArrayOne[j]);	
				}					
				j++;
			}
			if (tempArray.length < 2)
			{
				first = this.mItemTypesArray[i];  
			}
			else 
			{
				if (parseInt(tempArray[0]) == 1 && parseInt(tempArray[1]) == 1)
				{
					//do nothing
				}	
				else
				{
					first = this.mItemTypesArray[i];  
				}
			} 
			i++;
		}
		this.mFirst = first;
	},
	
     	getLeastAsked: function(typesArray,attemptArray,transactionCodeArray)
        {
                var id = '';
		var idCount = 1000;
                var i = 0;

                while (i < typesArray.length)
                {
                        var tempArray = new Array();
                        var tempArray = [];
                        var j = 0;
                        while (j < attemptArray.length)
                        {
                                if (typesArray[i] == attemptArray[j])
                                {
                                        tempArray.push(transactionCodeArray[j]);
                                }
                                j++;
                        }
                        if (tempArray.length > 0 && tempArray.length < idCount) //we have a new least id
                        {
                                id = typesArray[i];
				idCount = tempArray.length;
                        }
                        i++;
                }
                this.mLeastAsked = id;
        },

     	getLeastCorrect: function(typesArray,attemptArray,transactionCodeArray)
        {
                var id = '';
                var idCount = 1000;
                var i = 0;

                while (i < typesArray.length)
                {
                        var tempArray = new Array();
                        var tempArray = [];
                        var j = 0;
                        while (j < attemptArray.length)
                        {
                                if (typesArray[i] == attemptArray[j])
                                {
					if (parseInt(transactionCodeArray[j]) == 1)
					{
                                        	tempArray.push(transactionCodeArray[j]);
					}
                                }
                                j++;
                        }
                        if (tempArray.length > 1 && tempArray.length < idCount) //we have a new least Correct id
                        {
                                id = typesArray[i];
                                idCount = tempArray.length;
                        }
                        i++;
                }
                this.mLeastCorrect = id;
        },

        update: function()
        {
		this.mCoreStateMachine.update();
		for (i=0; i < this.mItemAttemptsArray.length; i++)
		{
			this.mItemAttemptsArray[i].update();
		}
        },
	
	parseResponse: function(response)
	{
                this.mResponseArray = response.split(",");
                var code = this.mResponseArray[0];
                var codeNumber = parseInt(code);
		if (codeNumber > 100 && codeNumber < 200)
		{
			//LOGIN
                        if (codeNumber == APPLICATION.LOGIN_STUDENT)
                        {
				APPLICATION.mDataToRead = true;
                        }
			
			if (codeNumber == APPLICATION.LOGIN_SCHOOL)
                        {
				APPLICATION.mDataToRead = true;
                        }

			//SIGNUP 
			if (codeNumber == APPLICATION.SIGNUP_STUDENT)
                        {
                                APPLICATION.mDataToRead = true;
                        }

                        if (codeNumber == APPLICATION.SIGNUP_SCHOOL)
                        {
                                APPLICATION.mDataToRead = true;
                        }

			if (codeNumber == APPLICATION.NOT_LOGGED_IN)
                        {
				this.mSent = false;		
			}
			if (codeNumber == APPLICATION.BAD_USERNAME)
                        {
				this.mBadUsername = true;
			}
			if (codeNumber == APPLICATION.BAD_PASSWORD)
                        {
				this.mBadPassword = true;
			}
                    	
			if (codeNumber == APPLICATION.USERNAME_TAKEN_STUDENT)
                        {
                                APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_STUDENT_APPLICATION);
                                var v = 'USERNAME TAKEN';
                                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
                                this.mSent = false;
                        }
                    	if (codeNumber == APPLICATION.USERNAME_TAKEN_SCHOOL)
                        {
                                APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_SCHOOL_APPLICATION);
                                var v = 'USERNAME TAKEN';
                                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
                                this.mSent = false;
                        }

                        if (codeNumber == APPLICATION.NAME_TAKEN_SCHOOL)
                        {
                                APPLICATION.mCoreStateMachine.changeState(APPLICATION.mSIGNUP_SCHOOL_APPLICATION);
                                var v = 'school name, city, state, zip combo taken';
                                APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
                                this.mSent = false;
                        }
                        
			if (codeNumber == APPLICATION.ITEM_ATTEMPT_INSERT_CONFIRMATION)
			{
				for (i=0; i < APPLICATION.mItemAttemptsArray.length; i++)
				{	
                			var datenow = parseInt(this.mResponseArray[1]);
					if (APPLICATION.mItemAttemptsArray[i].mDateNow == datenow)
					{
						APPLICATION.mItemAttemptsArray[i].mID = parseInt(this.mResponseArray[2]); 
					}
				}
			}
			
			if (codeNumber == APPLICATION.ITEM_ATTEMPT_UPDATE_CONFIRMATION)
			{
				for (i=0; i < APPLICATION.mItemAttemptsArray.length; i++)
				{	
                			var id = parseInt(this.mResponseArray[1]);
                			var confirmation = parseInt(this.mResponseArray[2]);
					if (APPLICATION.mItemAttemptsArray[i].mID == id)
					{
						APPLICATION.mItemAttemptsArray[i].mUpdateConfirmation = confirmation; 
					}
				}
			}

			if (codeNumber == APPLICATION.TIMED_OUT)
                        {
				var v = 'TIMED OUT PLEASE LOGIN AGAIN';
 				APPLICATION.mCoreStateMachine.changeState(application.mLOGIN_APPLICATION);
				APPLICATION.mGame.mServerLabel.setText('<span style="color: #f00;">' + v + '</span>');
				this.mSent = false;		
			}


			if (codeNumber == APPLICATION.STANDARD_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mStandardDescription = this.mResponseArray[1];
                                APPLICATION.mGame.mSheet.mItem.mStandardInfo.setText(this.mResponseArray[1]);
                        }
			if (codeNumber == APPLICATION.ITEM_DESCRIPTION)
                        {
                                APPLICATION.mGame.mSheet.mItem.mItemDescription = this.mResponseArray[1];
                                APPLICATION.mGame.mSheet.mItem.mItemInfo.setText(this.mResponseArray[1]);
                        }
			if (codeNumber == APPLICATION.SCROLL)
			{
				APPLICATION.mHud.setScroll(this.mResponseArray[1]); 
			}
		}
	},

        bapplication: function()
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../src/php/application/core_application.php",true);
                xmlhttp.send();
        },

        signupStudent: function(username,password,first_name,last_name)
        {
		APPLICATION.mSent = true;
        	var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=217&username=" + username + "&password=" + password + "&first_name=" + first_name + "&last_name=" + last_name,true);
                xmlhttp.send();
	},
        
	signupSchool: function(username,password,name,city,state,zip,email,student_code)
        {
		APPLICATION.mSent = true;
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=&username=" + username + "&password=" + password,true);
                //xmlhttp.open("POST","../../src/php/signup_school.php?username=" + username + "&password=" + password + "&name=" + name + "&city=" + city + "&state=" + state + "&zip=" + zip + "&email=" + email + "&student_code=" + student_code,true);
                xmlhttp.send();
        },

        loginStudent: function(username,password)
        {
        	var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
						//takes a bit....
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=117&username=" + username + "&password=" + password,true);
                xmlhttp.send();
        },

        loginSchool: function(username,password)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                                //takes a bit....
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../src/php/login_school.php?username=" + username + "&password=" + password,true);
                xmlhttp.send();
        },


        getScroll: function()
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/scroll.php",true);
                xmlhttp.send();
        },

        sendItemAttemptInsert: function(itemtypesid,question,answers,datenow,evaluations_id,score)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=" + evaluations_id + "&itemtypesid=" + itemtypesid + "&question=" + question + "&answers=" + answers + "&datenow=" + datenow + "&score=" + score,true);
                xmlhttp.send();
        },
      
       	sendItemAttemptUpdate: function(itemattemptid,transactioncode,answer)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=101&itemattemptid=" + itemattemptid + "&transactioncode=" + transactioncode + "&answer=" + answer,true);
                xmlhttp.send();
        },
 
       	getStandardDescription: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_standard_description.php?typeid=" + typeid,true);
                xmlhttp.send();
        },
	
	getItemDescription: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_item_description.php?typeid=" + typeid,true);
                xmlhttp.send();
        },

	getCoreDescription: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_core_description.php",true);
                xmlhttp.send();
        },
	
	getStudentItemStats: function(typeid)
        {
                var xmlhttp;
                if (window.XMLHttpRequest)
                {
                        xmlhttp=new XMLHttpRequest();
                }
                else
                {
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange=function()
                {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                        {
                                if (xmlhttp.responseText)
                                {
                                        if (typeof(xmlhttp.responseText)=="unknown")
                                        {
                                                return("");
                                        }
                                        else
                                        {
                                                APPLICATION.parseResponse(xmlhttp.responseText);
                                        }
                                }
                        }
                }
                xmlhttp.open("POST","../../web/php/get_student_item_stats.php",true);
                xmlhttp.send();
        },

	/**************** GAME DECIDER *******/
	// are we running the right game??
	gameDecider: function()
	{
		//if already have a game destroy it.
		if (this.mGame)
		{
			this.mGame.destructor();
			this.mGame = 0;
		}
		//make a new one
                this.mGame = new CoreGame(APPLICATION);
	}
});
