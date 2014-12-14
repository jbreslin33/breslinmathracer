/*
barebones item class. Should this even have a gui????? I think it should be an abstract class with just an question and answer. let those that implent/extend it provide the gui.
*/

var Item = new Class(
{
        initialize: function(sheet)
        {
		this.mStateLogs = false;		

		this.mSheet = sheet;

    		this.raphael = 0;
		
		this.mClock = 0;

		//answer control vars
		this.mChopWhiteSpace = true;
		this.mIgnoreCase = true;
		this.mStripCommas = true;
	
		//question
		this.mQuestion = '';

		//answer
		this.mAnswerArray = new Array();
		
		//tip
		this.mTipArray = new Array();

		//status	
		this.mStatus = 0; //notAttempted=0,correct=1,incorrect=2
		
		//stats
		this.mStreak = 0;
		
		//stats
		this.mProgressedTypeID = '';

		//userAnswer
		this.mUserAnswer = '';

  		//answer pool
                this.mAnswerPool = new Array();

		this.mShapeArray   = new Array();
		this.mQuestionShapeArray   = new Array();
       
		//type 
		this.mStandardDescription = '';
		this.mItemDescription = '';
		this.mPracticeDescription = '';
		this.mCoreDescription = '';
		this.mTimesTablesDescription = '';
		this.mType = 0; //uncategorized

		//times 
		this.mThresholdTime = 0;
                this.mAnswerTime = 0;
                this.mQuestionStartTime = 0;
                this.mOutOfTime = false;

                //times for show correct
                this.mCorrectAnswerStartTime = 0;
                this.mCorrectAnswerThresholdTime = 2000;

		//times for showContinueCorrect
                this.mShowContinueCorrectStartTime = 0;
                this.mShowContinueCorrectThresholdTime = 250;

		//continue button vars
		this.mContinueCorrect = false;
		this.mContinueIncorrect = false;
		this.mContinueCorrectButton = 0; 
		this.mContinueIncorrectButton = 0; 

		//show standards 
		this.mStandardInfo = 0;
		this.mShowStandard = false;
			
		//show types
		this.mItemInfo = 0;
		this.mShowItem = false;

		//show practice
		this.mPracticeInfo = 0;
		this.mPracticeInfoButton = 0;
		this.mLeavePracticeButton = 0;
		this.mShowPractice = false;

		//show coreStandard
		this.mCoreInfo = 0;
		this.mCoreInfoButton = 0;
		this.mShowCore = false;

		//show times tables
		this.mTimesTablesInfo = 0;
		this.mTimesTablesInfoButton = 0;
		this.mShowTimesTables = 0;

		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_ITEM   = new GLOBAL_ITEM  (this);
                this.mINIT_ITEM     = new INIT_ITEM    (this);

                //wait state
                this.mWAITING_ON_ANSWER_ITEM   = new WAITING_ON_ANSWER_ITEM(this);

		//correct states
                this.mCORRECT_ITEM = new CORRECT_ITEM(this);
                this.mCONTINUE_CORRECT = new CONTINUE_CORRECT(this);
               
		//incorrect states 
		this.mSHOW_CORRECT_ANSWER_ITEM = new SHOW_CORRECT_ANSWER_ITEM(this);
                this.mCONTINUE_INCORRECT = new CONTINUE_INCORRECT(this);
                this.mINCORRECT_ITEM = new INCORRECT_ITEM(this);

		//report states
                this.mSHOW_STANDARD = new SHOW_STANDARD(this);
                this.mSHOW_ITEM = new SHOW_ITEM(this);
                this.mSHOW_PRACTICE = new SHOW_PRACTICE(this);
                this.mSHOW_CORE = new SHOW_CORE(this);
                this.mSHOW_TIMES_TABLES = new SHOW_TIMES_TABLES(this);

		//out of time
                this.mOUT_OF_TIME_ITEM = new OUT_OF_TIME_ITEM(this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_ITEM);
                this.mStateMachine.changeState(this.mINIT_ITEM);
	},

	setTheFocus: function()
	{

	},

	addShape: function(shape)
	{
		this.mShapeArray.push(shape);
		this.mSheet.mGame.addShape(shape);	
	},
	
	addQuestionShape: function(shape)
	{
		this.mQuestionShapeArray.push(shape);
		this.addShape(shape);
	},

	removeShape: function(shape)
        {
		//remove from game array first..
		this.mSheet.mGame.removeShape(shape);	

               	//remove from this shape array 
		for (r = 0; r < this.mShapeArray.length; r++)
                {
                        if (shape == this.mShapeArray[r])
                        {
                                //first remove it from array...
                                this.mShapeArray.splice(r,1);
                        }
                }
        },

	createShapes: function()
        {
                //mContinueCorrectButton
                this.mContinueCorrectButton = new ContinueCorrectButton(150,50,650,400,this.mSheet.mGame,"BUTTON","","");
		this.mContinueCorrectButton.mMesh.innerHTML = 'CONTINUE';
                this.addShape(this.mContinueCorrectButton);
                
		//mContinueIncorrectButton
                this.mContinueIncorrectButton = new ContinueIncorrectButton(150,50,650,400,this.mSheet.mGame,"BUTTON","","");
		this.mContinueIncorrectButton.mMesh.innerHTML = 'CONTINUE';
                this.addShape(this.mContinueIncorrectButton);
		
		//mStandardInfo
                this.mStandardInfo = new Shape(700,350,400,225,this.mSheet.mGame,"","","");
                this.addShape(this.mStandardInfo);
		
		//mItemInfo
                this.mItemInfo = new Shape(700,350,400,225,this.mSheet.mGame,"","","");
                this.addShape(this.mItemInfo);

                //mPracticeInfo
                this.mPracticeInfo = new Shape(200,50,125,225,this.mSheet.mGame,"SELECT","","");
                this.addShape(this.mPracticeInfo);
                
		this.mPracticeInfoButton = new SubmitPracticeItemButton(200,50,350,225,this.mSheet.mGame,"BUTTON","","");
                this.mPracticeInfoButton.mMesh.innerHTML = 'PRACTICE ITEM';
                this.addShape(this.mPracticeInfoButton);
		
		this.mLeavePracticeButton = new LeavePracticeButton(200,50,575,225,this.mSheet.mGame,"BUTTON","","");
                this.mLeavePracticeButton.mMesh.innerHTML = 'LEAVE PRACTICE';
                this.addShape(this.mLeavePracticeButton);

		//CORE
                //mCoreInfo
                this.mCoreInfo = new Shape(200,50,125,225,this.mSheet.mGame,"SELECT","","");
                this.addShape(this.mCoreInfo);

                this.mCoreInfoButton = new SubmitCoreItemButton(200,50,350,225,this.mSheet.mGame,"BUTTON","","");
                this.mCoreInfoButton.mMesh.innerHTML = 'CORE ITEM';
                this.addShape(this.mCoreInfoButton);
                
		//TIMES TABLES
		//mTimesInfo
                this.mTimesTablesInfo = new Shape(200,50,125,225,this.mSheet.mGame,"SELECT","","");
                this.addShape(this.mTimesTablesInfo);

		//just fill it here...
		for (i=2; i < 10; i++)
		{
  			var option = document.createElement("option");
                	option.value = '' + i;
                	option.text = '' + i;
                	this.mTimesTablesInfo.mMesh.appendChild(option);
		}
                
		this.mTimesTablesInfoButton = new SubmitTimesTablesInfoButton(200,50,350,225,this.mSheet.mGame,"BUTTON","","");
                this.mTimesTablesInfoButton.mMesh.innerHTML = 'TIMES TABLES';
                this.addShape(this.mTimesTablesInfoButton);



	},

       	//this will clean up all shapes in this item and it will take this items shapes out of game array
	destroyShapes: function()
        {
		this.mSheet.mGame.destroyShapes();

                //shapes and array
                while (this.mShapeArray.length > 0)
                {
			shape = this.mShapeArray[0];	

			//remove from item shape array
			this.removeShape(shape);
                }
                this.mShapeArray = 0;
                this.mShapeArray = new Array();
			
		if (this.mClock)
		{
			this.mClock.destroy();
		}
        },

	destructor: function()
	{
		this.destroyShapes();
	},

	update: function()
        {
		if (this.mSheet)
		{
                	//state machine
                	this.mStateMachine.update();

			if (this.mClock)
			{
				this.mClock.update();
			}
		}

		//lets make screen red if they are over a certain U score
		var str = APPLICATION.mHud.mItemTypeStats.getText();	
		var strArray = str.split("U="); 
		var s = strArray[1];
		var u = 0;
		if (s.length == 8) //single digits
		{
			u = parseInt(s[0]); 			
		}
		if (s.length == 9) //double digits
		{
			u = parseInt(s[0] + s[1]); 			
		}
		if (s.length == 10) //trip digits
		{
			u = parseInt(s[0] + s[1] + s[2]); 			
		}
	
		if (u > 5)
		{	
			document.body.style.backgroundColor="red";
		}
		else if (u < 6 && u > 2)//3,4,5
		{	
			document.body.style.backgroundColor="orange";
		}
		if (u < 3) 
		{
			document.body.style.backgroundColor="#848484";
		}
        },

	setUserAnswer: function(userAnswer)
	{
		//strip all whitespace
		var answer = userAnswer;	

		if (this.mChopWhiteSpace == true)
		{
			answer = answer.replace(/ /g,'');	
		}

		//to lowercase	
		if (this.mIgnoreCase == true)
		{
			answer = answer.toLowerCase();	
		}

		//strip commas
		if (this.mStripCommas == true)
		{
			answer = answer.replace(/,/g,'');	
		}
		

		this.mUserAnswer = answer;
	},
	
	checkUserAnswer: function()
	{
		correctAnswerFound = false;
		for (i = 0; i <  this.mAnswerArray.length; i++)
		{
			if (this.mUserAnswer == this.mAnswerArray[i])
			{
				correctAnswerFound = true;	
			} 
		}
		if (correctAnswerFound == false)
		{
			this.mSheet.setTypeWrong(this.mType);
		}
		return correctAnswerFound;
	},

	getType: function()
	{
		return this.mType;
	},

	set: function(question,answer)
	{
		this.mQuestion = question;
		this.mAnswer = answer;
		this.mSolved = false;
	},
	
	setQuestion: function(question)
	{
		this.mQuestion = question;
	},

	setAnswer: function(answer,slot)
	{
		this.mAnswerArray[slot] = answer;
	},	
	
	setShowAnswer: function(showAnswer)
	{
		this.mShowAnswer = answer;
	},

	setSolved: function(b)
	{
		this.mSolved = b;
	},
	
	getSolved: function()
	{
		return this.mSolved;
	},
	
	getQuestion: function()
	{
		return this.mQuestion;
	},

	getAnswer: function(index)
	{
		if (index == null)
		{
			return this.mAnswerArray[0];	
		}
		return this.mAnswerArray[index];
	},

	getAnswerTwo: function()
	{
		return this.mAnswerArray[1];
	},
	
	getShowAnswer: function()
	{
		return this.mShowAnswer;
	},

	hideShapes: function()
	{
   		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }
	},
	
	showShapes: function()
	{
   		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(true);
                }
	},
	
	//ajax here??
	showStandard: function()
	{	
		if (this.mStandardDescription == '')
		{
			APPLICATION.getStandardDescription(this.mType);
		}
		
		this.mStandardInfo.setVisibility(true);
	},
	
	hideStandard: function()
	{	
		this.mStandardInfo.setVisibility(false);
	},
	
	showItem: function()
	{	
		if (this.mItemDescription == '')
		{
			APPLICATION.getItemDescription(this.mType);
		}
		
		this.mItemInfo.setVisibility(true);
	},

	hideItem: function()
	{	
		this.mItemInfo.setVisibility(false);
	},
	
       	showPractice: function()
        {      
                if (this.mPracticeDescription == '')
                {
                        APPLICATION.getPracticeDescription(this.mType);
                }

		if (APPLICATION.mRef_id == 'practice')
		{
                	this.mLeavePracticeButton.setVisibility(true);
		}
		else
		{
               		this.mPracticeInfo.setVisibility(true);
               		this.mPracticeInfoButton.setVisibility(true);
		}
        },

        showCore: function()
        {
                if (this.mCoreDescription == '')
                {
                        APPLICATION.getCoreDescription(this.mType);
                }
                this.mCoreInfo.setVisibility(true);
                this.mCoreInfoButton.setVisibility(true);
        },
        
	showTimesTables: function()
        {
                this.mTimesTablesInfo.setVisibility(true);
                this.mTimesTablesInfoButton.setVisibility(true);
        },

        hidePractice: function()
        {      
                this.mPracticeInfo.setVisibility(false);
                this.mPracticeInfoButton.setVisibility(false);
                this.mLeavePracticeButton.setVisibility(false);
        },

        hideCore: function()
        {
                this.mCoreInfo.setVisibility(false);
                this.mCoreInfoButton.setVisibility(false);
        },

        hideTimesTables: function()
        {
                this.mTimesTablesInfo.setVisibility(false);
                this.mTimesTablesInfoButton.setVisibility(false);
        },

	showAnswerInputs: function()
	{

	},
	
	hideUserAnswer: function()
	{

	},

	showUserAnswer: function()
	{

	},
	
	hideAnswerInputs: function()
	{

	},
	
	showCorrectAnswer: function()
	{

	},

	hideCorrectAnswer: function()
	{

	},
	
	showContinueCorrect: function()
	{
	
	},
	
	hideContinueCorrect: function()
	{
	},
	
	showContinueIncorrect: function()
	{
		this.mContinueIncorrectButton.setVisibility(true);
	},
	
	hideContinueIncorrect: function()
	{
		this.mContinueIncorrectButton.setVisibility(false);
	},

	createQuestionShapes: function()
	{

	},	

	showQuestion: function()
	{

	},
	
	hideQuestion: function()
	{
	},
	
	showQuestionShapes: function()
	{
   		for (i = 0; i < this.mQuestionShapeArray.length; i++)
                {
                        this.mQuestionShapeArray[i].setVisibility(true);
                }
	},

	hideQuestionShapes: function()
	{
   		for (i = 0; i < this.mQuestionShapeArray.length; i++)
                {
                        this.mQuestionShapeArray[i].setVisibility(false);
                }  
	},

	fillPracticeSelect: function()
	{
		var array = this.mPracticeDescription.split(":");

                for (var i = 0; i < array.length; i++)
                {
			var option = document.createElement("option");
    			option.value = array[i];
    			option.text = array[i];
    			this.mPracticeInfo.mMesh.appendChild(option);		
		}
	},
     
	fillCoreSelect: function()
        {
                var array = this.mCoreDescription.split(":");

                for (var i = 0; i < array.length; i++)
                {
                        var option = document.createElement("option");
                        option.value = array[i];
                        option.text = array[i];
                        this.mCoreInfo.mMesh.appendChild(option);
                }
        }

});
