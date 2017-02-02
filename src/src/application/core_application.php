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
		this.MILESTONES_COMPLETE = 139;

		//ITEM_ATTEMPTS
		this.ITEM_ATTEMPT_INSERT_CONFIRMATION = 161;
		this.ITEM_ATTEMPT_UPDATE_CONFIRMATION = 162;
		
		//EVALUATION_ATTEMPTS
		this.EVALUATION_ATTEMPT_INSERT_CONFIRMATION = 141;

		//going forward	
		this.mItemAttemptsArray = new Array();
		
		//item_attempts
		this.mItemTypesArray = new Array(); //from db


		//for standards live list
		this.mStandardsArray = new Array();

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
		
		//Eleven 
		this.mItemAttemptsTypeArrayEleven = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayEleven = new Array(); //from db

		//Twelve theizzy
		this.mItemAttemptsTypeArrayTwelve = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayTwelve = new Array(); //from db

		//Thirteen addsub
		this.mItemAttemptsTypeArrayThirteen = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirteen = new Array(); //from db
		
		//4.nbt.b.4 
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
		
		//ThirtyOne  
		this.mItemAttemptsTypeArrayThirtyOne = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirtyOne = new Array(); //from db
		
		//ThirtyTwo  
		this.mItemAttemptsTypeArrayThirtyTwo = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirtyTwo = new Array(); //from db
		
		//ThirtyThree  
		this.mItemAttemptsTypeArrayThirtyThree = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirtyThree = new Array(); //from db
		
		//ThirtyFour  
		this.mItemAttemptsTypeArrayThirtyFour = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirtyFour = new Array(); //from db
		
		//ThirtyFive  
		this.mItemAttemptsTypeArrayThirtyFive = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirtyFive = new Array(); //from db
		
		//ThirtySix  
		this.mItemAttemptsTypeArrayThirtySix = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirtySix = new Array(); //from db
		
		//ThirtySeven  
		this.mItemAttemptsTypeArrayThirtySeven = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirtySeven = new Array(); //from db
		
		//ThirtyEight  
		this.mItemAttemptsTypeArrayThirtyEight = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirtyEight = new Array(); //from db
		
		//ThirtyNine  
		this.mItemAttemptsTypeArrayThirtyNine = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayThirtyNine = new Array(); //from db
		
		//Forty  
		this.mItemAttemptsTypeArrayForty = new Array(); //from db
		this.mItemAttemptsTransactionCodeArrayForty = new Array(); //from db

		//add_game_A

		//algorithms
		this.mQuestionType = '';
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
		//this.mHighest = 0;
		this.mStandard = '';
		//this.mMilestonesStandard = '';
		//this.mMilestonesStandardElement = '';
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

		//main_menu
                this.mMAIN_MENU_APPLICATION          = new MAIN_MENU_APPLICATION       (this);

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
                this.mG4_OA_B_4_APPLICATION = new G4_OA_B_4_APPLICATION      (this);
                this.mG4_NBT_B_4_APPLICATION = new G4_NBT_B_4_APPLICATION      (this);
                this.mG4_NBT_B_5_APPLICATION = new G4_NBT_B_5_APPLICATION      (this);
                this.mG4_NBT_B_6_APPLICATION = new G4_NBT_B_6_APPLICATION      (this);
                this.mG4_NF_B_3_C_APPLICATION = new G4_NF_B_3_C_APPLICATION      (this);
                
		//5
                this.mG5_OA_A_1_APPLICATION = new G5_OA_A_1_APPLICATION      (this);
                this.mG5_NBT_B_5_APPLICATION = new G5_NBT_B_5_APPLICATION      (this);
                this.mG5_NBT_B_6_APPLICATION = new G5_NBT_B_6_APPLICATION      (this);
                this.mG5_NBT_B_7_APPLICATION = new G5_NBT_B_7_APPLICATION      (this);
                this.mG5_NF_A_1_APPLICATION = new G5_NF_A_1_APPLICATION      (this);
               
		//6 
		this.mG6_RP_APPLICATION = new G6_RP_APPLICATION      (this);
		this.mG6_NS_APPLICATION = new G6_NS_APPLICATION      (this);
		this.mG6_EE_APPLICATION = new G6_EE_APPLICATION      (this);
		this.mG6_G_APPLICATION = new G6_G_APPLICATION      (this);
		this.mG6_SP_APPLICATION = new G6_SP_APPLICATION      (this);
	
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
                this.mTEST_APPLICATION = new TEST_APPLICATION      (this);
                this.mTERRA_NOVA_TEST_APPLICATION = new TERRA_NOVA_TEST_APPLICATION      (this);
                this.mHOMEWORK_APPLICATION = new HOMEWORK_APPLICATION      (this);
                this.mTEST_PREP_APPLICATION = new TEST_PREP_APPLICATION      (this);

		//reports
                this.mREPORT_CORE_APPLICATION          = new REPORT_CORE_APPLICATION       (this);

                this.mCoreStateMachine.setGlobalState(this.mGLOBAL_CORE_APPLICATION);
                this.mCoreStateMachine.changeState(this.mINIT_CORE_APPLICATION);

		this.bapplication();	
        },
	
	updateAttemptTable: function()
	{
		var l = APPLICATION.mItemAttemptsArray.length; 	
		var i = l - 1; 	
		var c = 0;
		while (c < 10 && i >= 0)  
		{
			if (APPLICATION.mItemAttemptsArray[i].mTransactionCode == 2)  
			{
        			APPLICATION.mHud.mRowArray[c].cells[0].innerHTML = APPLICATION.mItemAttemptsArray[i].mQuestionTxt;
        			APPLICATION.mHud.mRowArray[c].cells[1].innerHTML = APPLICATION.mItemAttemptsArray[i].mUserAnswer;
				c++;
			}	
			if (APPLICATION.mItemAttemptsArray[i].mTransactionCode == 0)  
			{
        			APPLICATION.mHud.mRowArray[c].cells[0].innerHTML = APPLICATION.mItemAttemptsArray[i].mQuestionTxt;
        			APPLICATION.mHud.mRowArray[c].cells[1].innerHTML = APPLICATION.mItemAttemptsArray[i].mUserAnswer;
				c++;
			}
			i--;
		}
	},

	calcScore: function()
	{
		var questionNumber = this.mGame.mSheet.mCurrentElement + 1;
		
		if ( parseInt(this.mEvaluationsID) > 1 && parseInt(this.mEvaluationsID) < 41 )
		{

			if (APPLICATION.mGame.mSheet.mItem.mTransactionCode == 0)
			{
                              	APPLICATION.mGame.mSheet.mIncorrect++;
			}
			if (APPLICATION.mGame.mSheet.mItem.mTransactionCode == 1)
			{
                               	APPLICATION.mGame.mSheet.mCorrect++;
			}
			if (APPLICATION.mGame.mSheet.mItem.mTransactionCode == 2)
			{
                              	APPLICATION.mGame.mSheet.mIncorrect++;
			}

			APPLICATION.log('correct:' + APPLICATION.mGame.mSheet.mCorrect + ' el:' + APPLICATION.mGame.mSheet.mCurrentElement);
                        var grade = Math.floor((APPLICATION.mGame.mSheet.mCorrect / APPLICATION.mGame.mSheet.mCurrentElement) * 100);
                        APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        APPLICATION.mHud.setViolet('' + questionNumber + ':' + APPLICATION.mGame.mSheet.mIDArray.length);
                }
		//this.mGame.setScore(score); 
	},

	fillStandardsArray: function()
	{
		//prime pump
		this.mStandardsArray.push('k.cc.a.1');		
		
		i = 0;
		while (i < this.mItemTypesArray.length)
		{
			var present = this.mItemTypesArray[i];
                	var p = present.split("_");
			if (p[0] == this.mStandardsArray[this.mStandardsArray.length-1])
			{
				
			}
			else
			{
				this.mStandardsArray.push(p[0]);		
			}
			i++;
		}
		t = 0;	
		while (t < this.mStandardsArray.length)
		{
			//APPLICATION.log('standard:' + this.mStandardsArray[t]);
			t++;
		}
	},

	askFromARandomOldStandard: function()
	{
		var score = 0;
		var standard = '' 
		var questionType = '';
		var e = 0; 
		while (score < this.mStandardsArray.length && standard == '')
		{
			//get an array of the item types to check for the standard we are currently in this loop	
			//APPLICATION.log('CHECKING STANDARD:' + this.mStandardsArray[score]); 
			//APPLICATION.log('score:' + score); 
                	var tempTypeArray = new Array();
                	tempTypeArray = [];
			j = 0;
			while (j < this.mItemTypesArray.length) 
			{
                        	if (this.mItemTypesArray[j].includes("" + this.mStandardsArray[score]))
				{
					tempTypeArray.push(this.mItemTypesArray[j]);
				}
				j++;
			}	

			//get a sister array with a transaction code for every item type in the standarard we are in this loop
                	var transArray = new Array();
                	transArray = [];
			g = 0;

			//incorrectArray
                	var incorrectArray = new Array();
                	incorrectArray = [];

			while (g < tempTypeArray.length)
			{
				//APPLICATION.log('checking type:' + tempTypeArray[g]); 
				var c = 0;
				var gotType = ''; 
				while (c < this.mItemAttemptsTypeArrayOne.length && gotType == '' )
				{
					if (tempTypeArray[g] == this.mItemAttemptsTypeArrayOne[c])
					{
						gotType = this.mItemAttemptsTransactionCodeArrayOne[c];	
						transArray.push(gotType);	
						//APPLICATION.log('found type:' + tempTypeArray[g] + ' code:' + gotType); 

						//fill incorrect array
						if (this.mItemAttemptsTransactionCodeArrayOne[c] == 0)
						{
							incorrectArray.push(this.mItemAttemptsTypeArrayOne[c]);	
						}	
						else if (this.mItemAttemptsTransactionCodeArrayOne[c] == 2)
						{
							incorrectArray.push(this.mItemAttemptsTypeArrayOne[c]);	
						}
					}
					c++;
				}

				if (gotType == '') //this means student was never asked
				{
					transArray.push('2');	
					incorrectArray.push(tempTypeArray[g]);	
					//APPLICATION.log('type not found type:' + tempTypeArray[g] + ' code: 2'); 
				}
				g++;
			}
			
			//check percent
			var correct = 0;	
			var incorrect = 0;	
			var total = transArray.length;	
			for (y = 0; y < transArray.length; y++)
			{
				if (transArray[y] == 0)
				{
					incorrect++;
				}
				else if (transArray[y] == 2)
				{
					incorrect++;
				}	
				else if (transArray[y] == 1)
				{
					correct++;
				}
			} 
				
			var r = parseFloat(correct / total);				
			r = r * 100;
			var p = Math.round(r);			
			//APPLICATION.log('percent:' + p);
			//APPLICATION.log('size:' + incorrectArray.length); 

			//set hud
			APPLICATION.mHud.setCyan('' + 'grade:' + p + '%');
			APPLICATION.mHud.setViolet('' + correct + ':' + total);

			//while (g < tempTypeArray.length)

			if (p < 80)
			{
				standard = this.mStandardsArray[score]; 
			}
			score++;
		} //end getting standard


		//APPLICATION.log('score:' + score);
		var r = Math.floor(Math.random()*score);
		var oldStandard = this.mStandardsArray[r]; 
		//APPLICATION.log('oldStandard:' + oldStandard);
	
	
		var oldTempTypeArray = new Array();
                oldTempTypeArray = [];
                u = 0;
                while (u < this.mItemTypesArray.length)
                {
                	if (this.mItemTypesArray[u].includes("" + oldStandard))
                        {
                                oldTempTypeArray.push(this.mItemTypesArray[u]);
                        }
                        u++;
                }     
		
		var rt = Math.floor(Math.random()*oldTempTypeArray.length);
		//APPLICATION.log('oldType element:' + rt);
		//APPLICATION.log('oldType:' + oldTempTypeArray[rt]);
		var oldType = oldTempTypeArray[rt]; 

	
			//temp.......
		this.mQuestionType = oldType;
		

		if (this.mGame)
		{
			this.mGame.setScore(score); 
		}
		else
		{
			APPLICATION.mHud.mGreen.setText('<font size="1">Score: ' + score + '</font>');
		}

		this.mStandard = standard;

		//set hud
		APPLICATION.mHud.setYellow(standard);
	},

	getQuestionType: function(old)
	{
		var score = 0;
		var standard = '' 
		var questionType = '';
		while (score < this.mStandardsArray.length && standard == '')
		{
			//get an array of the item types to check for the standard we are currently in this loop	
			//APPLICATION.log('CHECKING STANDARD:' + this.mStandardsArray[score]); 
			//APPLICATION.log('score:' + score); 
                	var tempTypeArray = new Array();
                	tempTypeArray = [];
			j = 0;
			while (j < this.mItemTypesArray.length) 
			{
                        	if (this.mItemTypesArray[j].includes("" + this.mStandardsArray[score]))
				{
					tempTypeArray.push(this.mItemTypesArray[j]);
				}
				j++;
			}	

			//get a sister array with a transaction code for every item type in the standarard we are in this loop
                	var transArray = new Array();
                	transArray = [];
			g = 0;

			//incorrectArray
                	var incorrectArray = new Array();
                	incorrectArray = [];

			while (g < tempTypeArray.length)
			{
				//APPLICATION.log('checking type:' + tempTypeArray[g]); 
				var c = 0;
				var gotType = ''; 
				while (c < this.mItemAttemptsTypeArrayOne.length && gotType == '' )
				{
					if (tempTypeArray[g] == this.mItemAttemptsTypeArrayOne[c])
					{
						gotType = this.mItemAttemptsTransactionCodeArrayOne[c];	
						transArray.push(gotType);	
						//APPLICATION.log('found type:' + tempTypeArray[g] + ' code:' + gotType); 

						//fill incorrect array
						if (this.mItemAttemptsTransactionCodeArrayOne[c] == 0)
						{
							incorrectArray.push(this.mItemAttemptsTypeArrayOne[c]);	
						}	
						else if (this.mItemAttemptsTransactionCodeArrayOne[c] == 2)
						{
							incorrectArray.push(this.mItemAttemptsTypeArrayOne[c]);	
						}
					}
					c++;
				}

				if (gotType == '') //this means student was never asked
				{
					transArray.push('2');	
					incorrectArray.push(tempTypeArray[g]);	
					//APPLICATION.log('type not found type:' + tempTypeArray[g] + ' code: 2'); 
				}
				g++;
			}
			
			//check percent
			var correct = 0;	
			var incorrect = 0;	
			var total = transArray.length;	
			for (y = 0; y < transArray.length; y++)
			{
				if (transArray[y] == 0)
				{
					incorrect++;
				}
				else if (transArray[y] == 2)
				{
					incorrect++;
				}	
				else if (transArray[y] == 1)
				{
					correct++;
				}
			} 
				
			var r = parseFloat(correct / total);				
			r = r * 100;
			var p = Math.round(r);			
			//APPLICATION.log('percent:' + p);
			//APPLICATION.log('size:' + incorrectArray.length); 

			//set hud
			APPLICATION.mHud.setCyan('' + 'grade:' + p + '%');
			APPLICATION.mHud.setViolet('' + correct + ':' + total);

			//while (g < tempTypeArray.length)

			if (p < 80)
			{
				standard = this.mStandardsArray[score]; 
				if (old == 1)
				{
					var r = Math.floor(Math.random()*incorrectArray.length);
					this.mQuestionType = incorrectArray[r];
				}
				else if (old == 2)
				{
					var r = Math.floor(Math.random()*tempTypeArray.length);
					this.mQuestionType = tempTypeArray[r];
				}
				//APPLICATION.log('TYPE:' + this.mQuestionType); 
			}
			score++;
		}
		if (this.mGame)
		{
			this.mGame.setScore(score); 
		}
		else
		{
			APPLICATION.mHud.mGreen.setText('<font size="1">Score: ' + score + '</font>');
		}

		this.mStandard = standard;

		//set hud
		APPLICATION.mHud.setYellow(standard);
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
			if (codeNumber == APPLICATION.MILESTONES_COMPLETE)
			{
 				APPLICATION.mHud.emptyTanSelect();
				for (r=1; r < this.mResponseArray.length; r++)
				{
 					APPLICATION.mHud.fillTanSelect(this.mResponseArray[r]);
					//APPLICATION.log('r:' + this.mResponseArray[r]);
				}
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
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=114&username=" + username + "&password=" + password,true);
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
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=101&itemattemptid=" + itemattemptid + "&transactioncode=" + transactioncode + "&answer=" + answer + "&highest=" + APPLICATION.mStandard,true);
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
