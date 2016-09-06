var CoreApplication = new Class(
{
Extends: Application,
	initialize: function()
        {
		this.parent();

		//logging
		this.mStateLogs = true; 
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
		this.LOGIN_SCHOOL = 114;
		this.SIGNUP_STUDENT = 217;
		this.SIGNUP_SCHOOL = 218;
		this.LOGIN_TEACHER = 113;

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
		
		//Sixteen TerraNovaTest 
		this.mItemAttemptsTypeArraySixteen = new Array(); //from db
		this.mItemAttemptsTransactionCodeArraySixteen = new Array(); //from db
		
		//Seventeen Homework
		this.mItemAttemptsTypeArraySeventeen = new Array(); //from db
		this.mItemAttemptsTransactionCodeArraySeventeen = new Array(); //from db
		
		//Eighteen TerraNovaHomework
		this.mItemAttemptsTypeArrayEighteen = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayEighteen = new Array(); //from db
		
		//Nineteen TerraNovaHomework
		this.mItemAttemptsTypeArrayNineteen = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayNineteen = new Array(); //from db
		
		//Twenty BasicSkills4th 
		this.mItemAttemptsTypeArrayTwenty = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwenty = new Array(); //from db
		
		//TwentyOne BasicSkills5th 
		this.mItemAttemptsTypeArrayTwentyOne = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwentyOne = new Array(); //from db
		
		//TwentyTwo BasicSkills3rd 
		this.mItemAttemptsTypeArrayTwentyTwo = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwentyTwo = new Array(); //from db
		
		//TwentyThree BasicSkills2nd 
		this.mItemAttemptsTypeArrayTwentyThree = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwentyThree = new Array(); //from db
		
		//TwentyFour BasicSkills1st 
		this.mItemAttemptsTypeArrayTwentyFour = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwentyFour = new Array(); //from db
		
		//TwentyFive BasicSkillsK 
		this.mItemAttemptsTypeArrayTwentyFive = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwentyFive = new Array(); //from db
		
		//TwentySix MakeTen 
		this.mItemAttemptsTypeArrayTwentySix = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwentySix = new Array(); //from db
		
		//TwentySeven AddSubtractWithinTen 
		this.mItemAttemptsTypeArrayTwentySeven = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwentySeven = new Array(); //from db
		
		//TwentyEight AddSubtractWithinTwenty 
		this.mItemAttemptsTypeArrayTwentyEight = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwentyEight = new Array(); //from db
		
		//TwentyNine Properties 
		this.mItemAttemptsTypeArrayTwentyNine = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwentyNine = new Array(); //from db
		
		//Thirty Properties 
		this.mItemAttemptsTypeArrayThirty = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirty = new Array(); //from db
		
		//ThirtyOne Properties 
		this.mItemAttemptsTypeArrayThirtyOne = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirtyOne = new Array(); //from db
		
		//add_game_A

		//algorithms
		this.mFirst = '';
		this.mSameStandard = '';
		this.mLeastAsked = '';
		this.mLeastAskedHalf = '';
		this.mLeastCorrect = '';
		this.mLeastCorrectHalf = '';
 
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
		this.mHighest = 0;
		this.mStandard = '';
		this.mMilestonesStandard = '';
		this.mMilestonesStandardElement = '';
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
		this.mEvaluationsAttemptsID = 0;

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
               
		//K 
		this.mK_CC_APPLICATION = new K_CC_APPLICATION      (this);
                this.mK_OA_A_4_APPLICATION = new K_OA_A_4_APPLICATION      (this);
                this.mK_OA_A_5_APPLICATION = new K_OA_A_5_APPLICATION      (this);

		//1
                this.mG1_OA_B_3_APPLICATION = new G1_OA_B_3_APPLICATION      (this);
                this.mG1_OA_C_6_APPLICATION = new G1_OA_C_6_APPLICATION      (this);
                this.mG1_NBT_APPLICATION = new G1_NBT_APPLICATION      (this);

		//2
                this.mG2_OA_B_2_APPLICATION = new G2_OA_B_2_APPLICATION      (this);
                this.mG2_NBT_APPLICATION = new G2_NBT_APPLICATION      (this);

		//3
                this.mG3_OA_C_7_APPLICATION = new G3_OA_C_7_APPLICATION      (this);
                this.mG3_NBT_APPLICATION = new G3_NBT_APPLICATION      (this);

		//4
                this.mBASIC_SKILLS_FOURTH_APPLICATION = new BASIC_SKILLS_FOURTH_APPLICATION      (this);
                this.mBASIC_SKILLS_FOURTH_BOSS_LEVEL_APPLICATION = new BASIC_SKILLS_FOURTH_BOSS_LEVEL_APPLICATION      (this);

		//5
                this.mBASIC_SKILLS_FIFTH_APPLICATION = new BASIC_SKILLS_FIFTH_APPLICATION      (this);
                this.mBASIC_SKILLS_FIFTH_BOSS_LEVEL_APPLICATION = new BASIC_SKILLS_FIFTH_BOSS_LEVEL_APPLICATION      (this);
	
		//tables
                this.mTIMES_TABLES_TWO_APPLICATION      = new TIMES_TABLES_TWO_APPLICATION      (this);
                this.mTIMES_TABLES_THREE_APPLICATION    = new TIMES_TABLES_THREE_APPLICATION      (this);
                this.mTIMES_TABLES_FOUR_APPLICATION     = new TIMES_TABLES_FOUR_APPLICATION      (this);
                this.mTIMES_TABLES_FIVE_APPLICATION     = new TIMES_TABLES_FIVE_APPLICATION      (this);
                this.mTIMES_TABLES_SIX_APPLICATION      = new TIMES_TABLES_SIX_APPLICATION      (this);
                this.mTIMES_TABLES_SEVEN_APPLICATION    = new TIMES_TABLES_SEVEN_APPLICATION      (this);
                this.mTIMES_TABLES_EIGHT_APPLICATION    = new TIMES_TABLES_EIGHT_APPLICATION      (this);
                this.mTIMES_TABLES_NINE_APPLICATION     = new TIMES_TABLES_NINE_APPLICATION      (this);
                this.mTIMES_TABLES_THE_SUPER_IZZY_APPLICATION = new TIMES_TABLES_THE_SUPER_IZZY_APPLICATION      (this);

               	//tests 
		this.mTERRA_NOVA_APPLICATION = new TERRA_NOVA_APPLICATION      (this);
                this.mTEST_APPLICATION = new TEST_APPLICATION      (this);
                this.mTERRA_NOVA_TEST_APPLICATION = new TERRA_NOVA_TEST_APPLICATION      (this);
                this.mHOMEWORK_APPLICATION = new HOMEWORK_APPLICATION      (this);
                this.mTERRA_NOVA_HOMEWORK_APPLICATION = new TERRA_NOVA_HOMEWORK_APPLICATION      (this);

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
	this.mHighest = highest;
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
				
				if (attemptArray.length > 1) //asked twice or more...
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
			this.mGame.setUnmastered(unmastered);
		}

		if (parseInt(this.mEvaluationsID) == 3)
		{
                	var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayThree[i]) == 0)
                                {
                                       	incorrect++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayThree[i]) == 1)
                                {
                                       	correct++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayThree[i]) == 2)
                                {
                                       	incorrect++;
                                }
                                i++;
			}
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		if (parseInt(this.mEvaluationsID) == 4)
		{
                	var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFour[i]) == 0)
                                {
                                       	incorrect++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFour[i]) == 1)
                                {
                                       	correct++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFour[i]) == 2)
                                {
                                       	incorrect++;
                                }
                                i++;
			}
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 5)
		{
                	var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFive[i]) == 0)
                                {
                                       	incorrect++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFive[i]) == 1)
                                {
                                       	correct++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFive[i]) == 2)
                                {
                                       	incorrect++;
                                }
                                i++;
			}
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 6)
		{
                	var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArraySix[i]) == 0)
                                {
                                       	incorrect++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArraySix[i]) == 1)
                                {
                                       	correct++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArraySix[i]) == 2)
                                {
                                       	incorrect++;
                                }
                                i++;
			}
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 7)
		{
                	var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArraySeven[i]) == 0)
                                {
                                       	incorrect++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArraySeven[i]) == 1)
                                {
                                       	correct++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArraySeven[i]) == 2)
                                {
                                       	incorrect++;
                                }
                                i++;
			}
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 8)
		{
                	var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayEight[i]) == 0)
                                {
                                       	incorrect++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayEight[i]) == 1)
                                {
                                       	correct++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayEight[i]) == 2)
                                {
                                       	incorrect++;
                                }
                                i++;
			}
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 9)
		{
                	var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayNine[i]) == 0)
                                {
                                       	incorrect++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayNine[i]) == 1)
                                {
                                       	correct++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayNine[i]) == 2)
                                {
                                       	incorrect++;
                                }
                                i++;
			}
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 10)
		{
                	var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTen[i]) == 0)
                                {
                                       	incorrect++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTen[i]) == 1)
                                {
                                       	correct++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTen[i]) == 2)
                                {
                                       	incorrect++;
                                }
                                i++;
			}
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
	
		if (parseInt(this.mEvaluationsID) == 12)
		{
                	var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwelve[i]) == 0)
                                {
                                       	incorrect++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwelve[i]) == 1)
                                {
                                       	correct++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwelve[i]) == 2)
                                {
                                       	incorrect++;
                                }
                                i++;
			}
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
		}
		
		if (parseInt(this.mEvaluationsID) == 13)
		{
                	var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayThirteen[i]) == 0)
                                {
                                       	incorrect++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayThirteen[i]) == 1)
                                {
                                       	correct++;
                                }
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayThirteen[i]) == 2)
                                {
                                       	incorrect++;
                                }
                                i++;
			}
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
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
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayFifteen[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 16)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArraySixteen[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 17)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArraySeventeen[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 18)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayEighteen[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 19)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayNineteen[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 20)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwenty[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 21)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwentyOne[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 22)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwentyTwo[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 23)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwentyThree[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 24)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwentyFour[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 25)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwentyFive[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 26)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwentySix[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 27)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwentySeven[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 28)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwentyEight[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }
		
		if (parseInt(this.mEvaluationsID) == 29)
                {
                        var i = 0;
			var correct = 0;
			var incorrect = 0;
			var grade = 0; 

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayTwentyNine[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
				i++;
                        }
			grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
			APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
			APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }

                if (parseInt(this.mEvaluationsID) == 30)
                {
                        var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayThirty[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
                                i++;
                        }
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }

                if (parseInt(this.mEvaluationsID) == 31)
                {
                        var i = 0;
                        var correct = 0;
                        var incorrect = 0;
                        var grade = 0;

                        while (i < this.mGame.mSheet.mCurrentElement)
                        {
                                if (parseInt(this.mItemAttemptsTransactionCodeArrayThirtyOne[i]) == 1)
                                {
                                        correct++;
                                }
                                else
                                {
                                        incorrect++;
                                }
                                i++;
                        }
                        grade = Math.floor((correct / this.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + this.mGame.mSheet.mCurrentElement + ':' + this.mGame.mSheet.mIDArray.length);
                }



		//add_game_C

		this.mGame.setScore(score); 
	},

	getMilestonesStandardElement: function()
	{
		APPLICATION.log('mMilestonesStandard:' + this.mMilestonesStandard);
		var i = 0;
		var milestonesElement = 0;
		while (i < this.mItemTypesArray.length && milestonesElement == 0)
		{
			if (this.mItemTypesArray[i].includes("" + this.mMilestonesStandard))
			{
				milestonesElement = i;
				this.mMilestonesStandardElement = milestonesElement;
			}
			i++;
		}
		APPLICATION.log('el:' + this.mMilestonesStandardElement);
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
			
			//fill up 0,1 or 2 elements in tempArray 
			while (j < this.mItemAttemptsTypeArrayOne.length && tempArray.length < 3)
			{
				if (this.mItemTypesArray[i] == this.mItemAttemptsTypeArrayOne[j])
				{
					tempArray.push(this.mItemAttemptsTransactionCodeArrayOne[j]);	
				}					
				j++;
			}
			if (i < this.mMilestonesStandardElement)
			{
				if (tempArray.length == 0)
				{
					//do nothing free pass
				}
				if (tempArray.length == 1)
				{
					if (parseInt(tempArray[0]) == 1)
					{
						//do nothing free pass asked 1 and got it right	
					}
					else
					{
						first = this.mItemTypesArray[i]; //asked once and got it wrong  
					}
				}
				if (tempArray.length > 1)
				{
					APPLICATION.log('f');
					if (parseInt(tempArray[0]) == 1 && parseInt(tempArray[1]) == 1)
					{
						//do nothing
					}		
					else
					{
						first = this.mItemTypesArray[i];  
					}
				} 
			}
			else //greater or equal
			{
				if (tempArray.length < 2)
				{
					first = this.mItemTypesArray[i];  
				}
				else //this should not change you got asked twice its right so dont ask wrong ask 
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
			}
			i++;
		}
		this.mFirst = first;
	},

        getSameStandard: function(typesArray,attemptArray,transactionCodeArray)
        {
		//get first standard wrong...
		var s = this.mFirst.split("_");
		var standard = s[0];  

                var tempTypeArray = new Array();
		tempTypeArray = [];
                
		for (i=0; i < typesArray.length; i++)
		{
			if (typesArray[i].includes("" + standard))
			{
				tempTypeArray.push(typesArray[i]);
			}
		}

		var id = '';

		while(id == '')
		{
			var r = Math.floor(Math.random()*tempTypeArray.length);
                        for (i=0; i < attemptArray.length; i++)
			{
				if (attemptArray[i].includes("" + tempTypeArray[r]))
				{
					id = tempTypeArray[r];
				}
			}
		}
                this.mSameStandard = id;
		APPLICATION.log('this.mSameStandard:' + this.mSameStandard);
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
     	
	getLeastAskedHalf: function(typesArray,attemptArray,transactionCodeArray)
        {
                var id = '';
		var idCount = 1000;
                var i = parseInt(APPLICATION.mGame.mScore / 2);

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
                this.mLeastAskedHalf = id;
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
     	
	getLeastCorrectHalf: function(typesArray,attemptArray,transactionCodeArray)
        {
                var id = '';
                var idCount = 1000;
                var i = parseInt(APPLICATION.mGame.mScore / 2);

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
                this.mLeastCorrectHalf = id;
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
		code.trim();
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
						APPLICATION.mEvaluationsAttemptsID = parseInt(this.mResponseArray[3]); 
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
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=218&username=" + username + "&password=" + password + "&name=" + name + "&city=" + city + "&state=" + state + "&zip=" + zip + "&email=" + email + "&student_code=" + student_code,true);
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
                xmlhttp.open("POST","../../src/php/login_school.php?code=114&username=" + username + "&password=" + password,true);
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

        sendItemAttemptInsert: function(itemtypesid,question,answers,datenow,evaluations_id,score,unmastered)
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
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=" + evaluations_id + "&itemtypesid=" + itemtypesid + "&question=" + question + "&answers=" + answers + "&datenow=" + datenow + "&score=" + score + "&unmastered=" + unmastered,true);
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
                //xmlhttp.open("POST","../../src/php/application/core_application.php?code=101&itemattemptid=" + itemattemptid + "&transactioncode=" + transactioncode + "&answer=" + answer,true);
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=101&itemattemptid=" + itemattemptid + "&transactioncode=" + transactioncode + "&answer=" + answer + "&highest=" + APPLICATION.mHighest,true);
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
