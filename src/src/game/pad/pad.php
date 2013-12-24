var Pad = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		//cursor
		document.body.style.cursor = 'default';	

		this.mApplication.mMouseMoveOn = false;

		this.setScoreNeeded(10);

		//other pad
		this.mNumberPad = new NumberPad(application,this);

		//number pad
		this.mNumberPadArray = new Array();

		//state machine
                this.mPadStateMachine = new StateMachine(this);

                this.mGLOBAL_PAD_GAME     = new GLOBAL_PAD_GAME(this);
                this.mINIT_PAD_GAME       = new INIT_PAD_GAME(this);
                this.mRESET_PAD_GAME      = new RESET_PAD_GAME(this);
                this.mSHOW_CORRECT_ANSWER = new SHOW_CORRECT_ANSWER(this);
                this.mWAITING_ON_ANSWER_FIRST_TIME   = new WAITING_ON_ANSWER_FIRST_TIME(this);
                this.mWAITING_ON_ANSWER   = new WAITING_ON_ANSWER(this);
                this.mCORRECT_ANSWER_PAD_GAME = new CORRECT_ANSWER_PAD_GAME(this);
                this.mSHOW_CORRECT_ANSWER = new SHOW_CORRECT_ANSWER(this);
                this.mSHOW_CORRECT_ANSWER_OUT_OF_TIME = new SHOW_CORRECT_ANSWER_OUT_OF_TIME(this);

                this.mPadStateMachine.setGlobalState(this.mGLOBAL_PAD_GAME);
                this.mPadStateMachine.changeState(this.mINIT_PAD_GAME);

	},

	destructor: function()
	{
		this.parent();
	},
 
	destroyShapesAndArray: function()
        {
		this.parent();
                //shapes and array
                for (i = 0; i < this.mNumberPadArray.length; i++)
                {
                        //back to div
                        this.mNumberPadArray[i].mDiv.mDiv.removeChild(this.mNumberPadArray[i].mMesh);
                        document.body.removeChild(this.mNumberPadArray[i].mDiv.mDiv);
                        this.mNumberPadArray[i] = 0;
                }
                this.mShapeArray = 0;

                this.destroyCorrectAnswerBar();
        },

	reset: function()
	{
		this.parent();
		
		this.createQuestions();
		this.createWorld();
  
		//times
                this.mAnswerTime = 0;
                this.mQuestionStartTime = this.mTimeSinceEpoch;
                this.mOutOfTime = false;
                this.mUserAnswer = '';
		this.mCorrectAnswerStartTime = 0;
	},

	update: function()
        {
  		this.parent()
		this.mPadStateMachine.update();
        },
   
	createQuestions: function()
        {
 		this.mQuiz.reset();
	},
	
	createWorld: function()
	{
		this.parent();

		//clock Shape
		if (!this.mClockShape)
		{
			this.mClockShape = new Shape(197,185,370,275,this,"/images/symbols/clock.jpg","","");
			this.mShapeArray.push(this.mClockShape);
			this.mClockShape.setVisibility(false);
		}
		
		//memorize Shape
		if (!this.mMemorizeShape)
		{	
			this.mMemorizeShape = new Shape(197,185,425,245,this,"/images/symbols/dontforget.gif","","");
			this.mShapeArray.push(this.mMemorizeShape);
			this.mMemorizeShape.setVisibility(false);
		}

		this.createNumberPad();
		this.createCorrectAnswerBar();

	},

	showAnswer: function()
	{
		this.mNumberPad.mNumQuestion.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion(); 
	},
	
	showCorrectAnswerEnter: function()
	{
		this.showCorrectAnswer();
	},

	showCorrectAnswer: function()
	{
		this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
        	this.mNumberPad.hide();
        	this.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();
        	this.showCorrectAnswerBar();
        	this.mMemorizeShape.setVisibility(true);
	},

	showCorrectAnswerOutOfTimeEnter: function()
	{
		this.showCorrectAnswerOutOfTime();
	},

	showCorrectAnswerOutOfTime: function()
	{
		this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
        	this.mNumberPad.hide();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();
        	this.showCorrectAnswerBar();
       	 	this.showClockShape();
	},
	
	showCorrectAnswerExit: function()
	{ 
		this.hideCorrectAnswerBar();
        	this.mMemorizeShape.setVisibility(false);
	},
  
	showCorrectAnswerOutOfTimeExit: function()
	{ 
		this.hideCorrectAnswerBar();
        	this.mClockShape.setVisibility(false);
	},
	
	createNumberPad: function()
	{
                //Lock
		if (!this.mNumLock)
		{
                	this.mNumLock = new Shape(50,50,300,150,this,"BUTTON","","");
                	this.mNumLock.mMesh.innerHTML = 'Lock';
                	this.mNumLock.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumLock); 
		}
		
		//Division
		if (!this.mNumDivision)
		{
                	this.mNumDivision = new Shape(50,50,350,150,this,"BUTTON","","");
                	this.mNumDivision.mMesh.innerHTML = '/';
                	this.mNumDivision.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumDivision); 
		}

                //Multiplication
		if (!this.mNumMultiplication)
		{
                	this.mNumMultiplication= new Shape(50,50,400,150,this,"BUTTON","","");
                	this.mNumMultiplication.mMesh.innerHTML = '*';
                	this.mNumMultiplication.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumMultiplication); 
		}

                //Subtraction
		if (!this.mNumSubtraction)
		{
                	this.mNumSubtraction = new Shape(50,50,450,150,this,"BUTTON","","");
                	this.mNumSubtraction.mMesh.innerHTML = '-';
                	this.mNumSubtraction.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumSubtraction); 
		}

                //7
		if (!this.mNumSeven)
		{
                	this.mNumSeven = new Shape(50,50,300,200,this,"BUTTON","","");
                	this.mNumSeven.mMesh.innerHTML = '7';
                	this.mNumSeven.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumSeven); 
		}

                //8
		if (!this.mNumEight)
		{
                	this.mNumEight = new Shape(50,50,350,200,this,"BUTTON","","");
                	this.mNumEight.mMesh.innerHTML = '8';
                	this.mNumEight.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumEight); 
		}

		//9
		if (!this.mNumNine)
		{
                	this.mNumNine = new Shape(50,50,400,200,this,"BUTTON","","");
                	this.mNumNine.mMesh.innerHTML = '9';
                	this.mNumNine.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumNine); 
		}

		//Addition
               	if (!this.mNumAddition)
		{ 
			this.mNumAddition = new Shape(50,100,450,200,this,"BUTTON","","");
                	this.mNumAddition.mMesh.innerHTML = '+';
                	this.mNumAddition.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumAddition); 
		}
		
                //4
		if (!this.mNumFour)
		{
                	this.mNumFour = new Shape(50,50,300,250,this,"BUTTON","","");
                	this.mNumFour.mMesh.innerHTML = '4';
                	this.mNumFour.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumFour); 
		}
                
		//5
		if (!this.mNumFive)
		{
                	this.mNumFive = new Shape(50,50,350,250,this,"BUTTON","","");
                	this.mNumFive.mMesh.innerHTML = '5';
                	this.mNumFive.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumFive); 
		}

                //6
		if (!this.mNumSix)
		{
                	this.mNumSix = new Shape(50,50,400,250,this,"BUTTON","","");
                	this.mNumSix.mMesh.innerHTML = '6';
                	this.mNumSix.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumSix); 
		}

                //1
		if (!this.mNumOne)
		{
                	this.mNumOne = new Shape(50,50,300,300,this,"BUTTON","","");
                	this.mNumOne.mMesh.innerHTML = '1';
                	this.mNumOne.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumOne); 
		}

		//2
		if (!this.mNumTwo)
		{
                	this.mNumTwo = new Shape(50,50,350,300,this,"BUTTON","","");
                	this.mNumTwo.mMesh.innerHTML = '2';
               		this.mNumTwo.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumTwo); 
		}

                //3
		if (!this.mNumThree)
		{	
                	this.mNumThree = new Shape(50,50,400,300,this,"BUTTON","","");
                	this.mNumThree.mMesh.innerHTML = '3';
               		this.mNumThree.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumThree); 
		}

                //0
		if (!this.mNumZero)
		{
                	this.mNumZero = new Shape(100,50,300,350,this,"BUTTON","","");
                	this.mNumZero.mMesh.innerHTML = '0';
                	this.mNumZero.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumZero); 
		}

                //.
		if (!this.mNumDecimal)
		{
                	this.mNumDecimal = new Shape(50,50,400,350,this,"BUTTON","","");
                	this.mNumDecimal.mMesh.innerHTML = '.';
                	this.mNumDecimal.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumDecimal); 
		}

                //enter
		if (!this.mNumEnter)
		{
               		this.mNumEnter = new Shape(50,100,450,300,this,"BUTTON","","");
               		this.mNumEnter.mMesh.innerHTML = 'Enter';
               		this.mNumEnter.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumEnter); 
		}
	},

  	levelPassedEnter: function()
        {
        	this.mApplication.mLevelCompleted = true;

        	this.mNumberPad.hide();

        	//correctAnswer
        	this.hideCorrectAnswerBar();
        	this.mCorrectAnswerBarHeader.mMesh.value = '';
        	this.mCorrectAnswerBarHeader.mMesh.innerHTML = 'LEVEL PASSED!!!!!!';
       	 	this.mCorrectAnswerBar.mMesh.value = '';
        	this.mCorrectAnswerBar.mMesh.innerHTML = 'HOORAY!';

        	//number pad
        	this.mNumAnswer.mMesh.value = '';
        	this.mNumAnswer.mMesh.innerHTML = '';

        	this.mNumQuestion.mMesh.value = '';
        	this.mNumQuestion.mMesh.innerHTML = '';

        	//user answer
        	this.mUserAnswer = '';

        	//times
        	this.mQuestionStartTime = this.mTimeSinceEpoch; //restart timer
        },

        levelPassedExecute: function()
        {
  		//just wait here until what???
        	if (this.mApplication.mAdvanceToNextLevelConfirmation)
        	{
                	this.mPadStateMachine.changeState(this.mSHOW_LEVEL_PASSED);
        	}
        },

        levelPassedExit: function()
        {

        },

        showLevelPassedEnter: function()
        {
		this.parent();
        },
        showLevelPassedExecute: function()
        {
   		if (this.mTimeSinceEpoch > this.mShowLevelPassedStartTime + this.mShowLevelPassedThresholdTime)
        	{
                	this.mPadStateMachine.changeState(this.mINIT_PAD_GAME);
        	}
        },
        showLevelPassedExit: function()
        {
		this.parent();
        }
});
