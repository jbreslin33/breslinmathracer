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
		this.mSheetArray = new Array();
		this.mItemArray = new Array();
		this.mItemAttemptsArray = new Array();
		
		//item_attempts
		this.mItemTypesArray = new Array(); //from db

		//evals
		this.mEvaluationsItemTypesArray = new Array();
		this.mEvaluationsItemTypesQuestionsArray = new Array();
		this.mEvaluationsItemTypesEvaluationsIDArray = new Array();
		this.mEvaluationsItemTypesItemTypesArray = new Array();


		//for standards live list
		this.mStandardsArray = new Array();

		//item attempts array from db
		this.mItemAttemptsEvaluationsIDArray   = new Array(); //from db
		this.mItemAttemptsTypeArray            = new Array(); //from db
		this.mItemAttemptsTransactionCodeArray = new Array(); //from db
		
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
		this.mStandard = '';
		this.mCoreGradesID = 0;
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
                
		this.mLOGIN_TEAM_APPLICATION        = new LOGIN_TEAM_APPLICATION     (this);
                this.mLOGIN_TEAM_WAIT_APPLICATION   = new LOGIN_TEAM_WAIT_APPLICATION(this);

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
		if (this.mGame)
		{
			if (this.mGame.mSheet)
			{
				var questionNumber = this.mGame.mSheet.mCurrentElement + 2;
				//var questionNumber = this.mGame.mSheet.mCurrentElement;
		
				if ( (parseInt(this.mEvaluationsID) > 1 && parseInt(this.mEvaluationsID) < 41) || (parseInt(this.mEvaluationsID) > 1000 && parseInt(this.mEvaluationsID) < 1500)  )
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
				
					var grade = 0;
					var total = 0;
					total = parseInt(APPLICATION.mGame.mSheet.mIncorrect) + parseInt(APPLICATION.mGame.mSheet.mCorrect)  
					if (total != 0)
					{
                        			grade = Math.floor((APPLICATION.mGame.mSheet.mCorrect / total) * 100);
					}
                        		APPLICATION.mHud.setCyan('' + 'grade:' + grade + '%');
                        		APPLICATION.mHud.setViolet('' + questionNumber + ':' + APPLICATION.mGame.mSheet.mIDArray.length);
				}
                	}
		}
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
                var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
		var score = 0;
		var standard = '' 
		var questionType = '';
		var e = 0; 
		while (score < this.mStandardsArray.length && standard == '')
		{
                    	var grade = this.mStandardsArray[score].charAt(0);
                        var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
                        if (grade == 'k')
                        {
                                grade = 0;
                        }
                        if (grade >= realGrade)
                        {

				//get an array of the item types to check for the standard we are currently in this loop	
                		var tempTypeArray = new Array();
                		tempTypeArray = [];
				j = 0;
				while (j < this.mItemTypesArray.length) 
				{
                    			var grade = this.mStandardsArray[score].charAt(0);
                        		var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
                        		if (grade == 'k')
                        		{
                                		grade = 0;
                        		}
                        		if (grade >= realGrade)
                        		{
                        			if (this.mItemTypesArray[j].includes("" + this.mStandardsArray[score]))
						{
							tempTypeArray.push(this.mItemTypesArray[j]);
						}
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
                    			var grade = this.mStandardsArray[score].charAt(0);
                        		var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
                        		if (grade == 'k')
                        		{
                                		grade = 0;
                        		}
                        		if (grade >= realGrade)
                        		{
						var c = 0;
						var gotType = ''; 
						while (c < this.mItemAttemptsTypeArray.length && gotType == '' )
						{
                    					var grade = this.mStandardsArray[score].charAt(0);
                        				var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
                        				if (grade == 'k')
                        				{
                                				grade = 0;
                        				}
                        				if (grade >= realGrade)
                        				{
								if (tempTypeArray[g] == this.mItemAttemptsTypeArray[c])
								{
									gotType = this.mItemAttemptsTransactionCodeArray[c];	
									transArray.push(gotType);	

									//fill incorrect array
									if (this.mItemAttemptsTransactionCodeArray[c] == 0)
									{
										incorrectArray.push(this.mItemAttemptsTypeArray[c]);	
									}		
									else if (this.mItemAttemptsTransactionCodeArray[c] == 2)
									{
										incorrectArray.push(this.mItemAttemptsTypeArray[c]);	
									}
								}
							}
							c++;
						}

						if (gotType == '') //this means student was never asked
						{
                    					var grade = this.mStandardsArray[score].charAt(0);
                        				var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
                        				if (grade == 'k')
                        				{
                                				grade = 0;
                        				}
                        				if (grade >= realGrade)
                        				{
								transArray.push('2');	
								incorrectArray.push(tempTypeArray[g]);	
							}
						}
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

				//set hud
				APPLICATION.mHud.setCyan('' + 'grade:' + p + '%');
				APPLICATION.mHud.setViolet('' + correct + ':' + total);

				if (p < 80)
				{
					standard = this.mStandardsArray[score]; 
				}
			}
			score++;
		} //end getting standard


		var r = Math.floor(Math.random()*score);
		var oldStandard = this.mStandardsArray[r]; 
	
		var oldTempTypeArray = new Array();
                oldTempTypeArray = [];
                u = 0;
                while (u < this.mItemTypesArray.length)
                {
                    	var grade = this.mStandardsArray[score].charAt(0);
                       	var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
                       	if (grade == 'k')
                       	{
                       		grade = 0;
                       	}
                       	if (grade >= realGrade)
                        {
                		if (this.mItemTypesArray[u].includes("" + oldStandard))
                        	{
                                	oldTempTypeArray.push(this.mItemTypesArray[u]);
                        	}
			}
                        u++;
                }     
		
		var rt = Math.floor(Math.random()*oldTempTypeArray.length);
		var oldType = oldTempTypeArray[rt]; 
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

	getQuestionTypeFromGrade: function(old)
	{
		APPLICATION.log('getQuestionType:');
		var score = 0;
		var standard = '' 
		var questionType = '';
		while (score < this.mStandardsArray.length && standard == '')
		{
			var grade = this.mStandardsArray[score].charAt(0);  
			var realGrade = parseInt(APPLICATION.mCoreGradesID - 1); 
			if (grade == 'k') 
			{
				grade = 0;
			}
			if (grade >= realGrade)
			{

			
			//get an array of the item types to check for the standard we are currently in this loop	
			APPLICATION.log('CHECKING STANDARD:' + this.mStandardsArray[score]); 
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
				while (c < this.mItemAttemptsTypeArray.length && gotType == '' )
				{
					if (tempTypeArray[g] == this.mItemAttemptsTypeArray[c])
					{
						gotType = this.mItemAttemptsTransactionCodeArray[c];	
						transArray.push(gotType);	
						//APPLICATION.log('found type:' + tempTypeArray[g] + ' code:' + gotType); 

						//fill incorrect array
						if (this.mItemAttemptsTransactionCodeArray[c] == 0)
						{
							incorrectArray.push(this.mItemAttemptsTypeArray[c]);	
						}	
						else if (this.mItemAttemptsTransactionCodeArray[c] == 2)
						{
							incorrectArray.push(this.mItemAttemptsTypeArray[c]);	
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

	getQuestionType: function(old)
	{
		APPLICATION.log('getQuestionType:');
		var score = 0;
		var standard = '' 
		var questionType = '';
		while (score < this.mStandardsArray.length && standard == '')
		{
			//get an array of the item types to check for the standard we are currently in this loop	
			APPLICATION.log('CHECKING STANDARD:' + this.mStandardsArray[score]); 
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
				while (c < this.mItemAttemptsTypeArray.length && gotType == '' )
				{
					if (tempTypeArray[g] == this.mItemAttemptsTypeArray[c])
					{
						gotType = this.mItemAttemptsTransactionCodeArray[c];	
						transArray.push(gotType);	
						//APPLICATION.log('found type:' + tempTypeArray[g] + ' code:' + gotType); 

						//fill incorrect array
						if (this.mItemAttemptsTransactionCodeArray[c] == 0)
						{
							incorrectArray.push(this.mItemAttemptsTypeArray[c]);	
						}	
						else if (this.mItemAttemptsTransactionCodeArray[c] == 2)
						{
							incorrectArray.push(this.mItemAttemptsTypeArray[c]);	
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
                var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
		//get first standard wrong...
		var s = this.mFirst.split("_");
		var standard = s[0];  

                var tempTypeArray = new Array();
		tempTypeArray = [];
                
		for (i=0; i < typesArray.length; i++)
		{
                        var grade = typesArray[i].charAt(0);
                        var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
                        if (grade == 'k')
                        {
                                grade = 0;
                        }
                        if (grade >= realGrade)
                        {

				if (typesArray[i].includes("" + standard))
				{
					tempTypeArray.push(typesArray[i]);
				}
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
                var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
                var id = '';
		var idCount = 1000;
                var i = 0;

                while (i < typesArray.length)
                {
                        var grade = typesArray[i].charAt(0);
                        if (grade == 'k')
                        {
                                grade = 0;
                        }
                        if (grade >= realGrade)
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
                var realGrade = parseInt(APPLICATION.mCoreGradesID - 1);
                var id = '';
                var idCount = 1000;
                var i = 0;

                while (i < typesArray.length)
                {
                       	var grade = typesArray[i].charAt(0);
                        if (grade == 'k')
                        {
                                grade = 0;
                        }
                        if (grade >= realGrade)
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

        loginTeam: function(username,password)
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
                xmlhttp.open("POST","../../src/php/application/core_application.php?code=119&username=" + username + "&password=" + password,true);
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
