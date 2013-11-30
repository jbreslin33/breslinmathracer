var Count_k_cc_a_3 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		//cursor
		document.body.style.cursor = 'default';	

		this.mApplication.mMouseMoveOn = false;

		this.mScoreNeeded = 10;

		this.mQuiz = new Quiz(this);
        	this.mApplication.mHud.mGameName.setText('<font size="2">PAD</font>');

		//clock shape
		this.mClockShape = 0;
		
		//memorize shape
		this.mMemorizeShape = 0;

		//answers 
                this.mThresholdTime = 3000;
                this.mAnswerTime = 0;
                this.mQuestionStartTime = this.mTimeSinceEpoch;
                this.mOutOfTime = false;

		//show correct 
		this.mCorrectAnswerStartTime = 0;
		this.mCorrectAnswerThresholdTime = 10000;

		//quiz	
                this.mUserAnswer = '';

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
        	this.mLEVEL_PASSED_PAD = new LEVEL_PASSED_PAD(this);
        	this.mSHOW_LEVEL_PASSED_PAD = new SHOW_LEVEL_PASSED_PAD(this);

        	this.mPadStateMachine.setGlobalState(this.mGLOBAL_PAD_GAME);
        	this.mPadStateMachine.changeState(this.mINIT_PAD_GAME);
	},

	destructor: function()
	{
		this.parent();
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
		this.createAdditionQuestions();
        },

	createAdditionQuestions: function()
	{
		var totalCountGoal       = parseInt(this.mScoreNeeded * 10);
		var totalCount           = 0;

		this.log('totalCountGoal:' + totalCountGoal);
		while (totalCount < totalCountGoal)
		{	
			//reset vars and arrays
			totalCount = 0;
			for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
			{
				this.mQuiz.mQuestionArray[d] = 0;
			} 
			this.mQuiz.mQuestionArray = 0;
			this.mQuiz.mQuestionArray = new Array();

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//random number to count from 0-20
				var objectsToCount = Math.floor((Math.random()*21));		
				this.mQuiz.mQuestionArray.push('' + objectsToCount, '' + objectsToCount);

				totalCount = parseInt(totalCount + objectsToCount);
				this.log('totalCount:' + totalCount);
			}
		}
	},
	
	createWorld: function()
	{
		this.parent();

		//clock Shape
		this.mClockShape = new Shape(197,185,370,275,this,"/images/symbols/clock.jpg","","");
		this.mShapeArray.push(this.mClockShape);
		this.mClockShape.setVisibility(false);
		
		//memorize Shape
		this.mMemorizeShape = new Shape(197,185,425,245,this,"/images/symbols/dontforget.gif","","");
		this.mShapeArray.push(this.mMemorizeShape);
		this.mMemorizeShape.setVisibility(false);

		this.createNumberPad();
		this.createCorrectAnswerBar();

	},
	
	hideNumberPad: function()
	{
  		//shapes and array
                for (i = 0; i < this.mNumberPadArray.length; i++)
		{
			this.mNumberPadArray[i].setVisibility(false);
		}
	},
	
	showNumberPad: function()
	{
  		//shapes and array
                for (i = 0; i < this.mNumberPadArray.length; i++)
		{
			this.mNumberPadArray[i].setVisibility(true);
		}
               	this.mNumAnswer.mMesh.focus();
	},

	destroyNumberPad: function()
	{
  		//shapes and array
                for (i = 0; i < this.mNumberPadArray.length; i++)
                {
                        //back to div
                        this.mNumberPadArray[i].mDiv.mDiv.removeChild(this.mNumberPadArray[i].mMesh);
                        document.body.removeChild(this.mNumberPadArray[i].mDiv.mDiv);
                	this.mNumberPadArray[i] = 0;
                }
                this.mNumberPadArray = 0;

	},

	inputKeyHit: function(e)
	{
		if (e.key == 'enter')
		{
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
               	}
	},

	numPadHit: function()
	{
		if (this.innerHTML != 'Enter')
		{
			APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '' + this.innerHTML;
		}
		
		if (this.innerHTML == 'Enter')
		{
			APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
		}
		APPLICATION.mGame.mNumAnswer.mMesh.focus();
	},

	createNumberPad: function()
	{
		//question bar
		if (!this.mNumQuestion)
		{
               		this.mNumQuestion = new Shape(100,50,300,100,this,"","","");
               		this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
               		this.mNumQuestion.mMesh.mGame = this;
			this.mNumberPadArray.push(this.mNumQuestion); 
		}

                //answer text box
		if (!this.mNumAnswer)
		{
               		this.mNumAnswer = new Shape(100,50,400,100,this,"INPUT","","");
               		this.mNumAnswer.mMesh.value = '';
               		this.mNumAnswer.mMesh.mGame = this;
               		this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
               		this.mNumAnswer.mMesh.focus();
			this.mNumberPadArray.push(this.mNumAnswer); 
		}
		
                //Lock
		if (!this.mNumLock)
		{
                	this.mNumLock = new Shape(50,50,300,150,this,"BUTTON","","");
                	this.mNumLock.mMesh.innerHTML = 'Lock';
                	this.mNumLock.mMesh.mGame = this;
                	this.mNumLock.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumLock); 
		}
		
		//Division
		if (!this.mNumDivision)
		{
                	this.mNumDivision = new Shape(50,50,350,150,this,"BUTTON","","");
                	this.mNumDivision.mMesh.innerHTML = '/';
                	this.mNumDivision.mMesh.mGame = this;
                	this.mNumDivision.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumDivision); 
		}

                //Multiplication
		if (!this.mNumMultiplication)
		{
                	this.mNumMultiplication= new Shape(50,50,400,150,this,"BUTTON","","");
                	this.mNumMultiplication.mMesh.innerHTML = '*';
                	this.mNumMultiplication.mMesh.mGame = this;
                	this.mNumMultiplication.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumMultiplication); 
		}

                //Subtraction
		if (!this.mNumSubtraction)
		{
                	this.mNumSubtraction = new Shape(50,50,450,150,this,"BUTTON","","");
                	this.mNumSubtraction.mMesh.innerHTML = '-';
                	this.mNumSubtraction.mMesh.mGame = this;
                	this.mNumSubtraction.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumSubtraction); 
		}

                //7
		if (!this.mNumSeven)
		{
                	this.mNumSeven = new Shape(50,50,300,200,this,"BUTTON","","");
                	this.mNumSeven.mMesh.innerHTML = '7';
                	this.mNumSeven.mMesh.mGame = this;
                	this.mNumSeven.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumSeven); 
		}

                //8
		if (!this.mNumEight)
		{
                	this.mNumEight = new Shape(50,50,350,200,this,"BUTTON","","");
                	this.mNumEight.mMesh.innerHTML = '8';
                	this.mNumEight.mMesh.mGame = this;
                	this.mNumEight.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumEight); 
		}

		//9
		if (!this.mNumNine)
		{
                	this.mNumNine = new Shape(50,50,400,200,this,"BUTTON","","");
                	this.mNumNine.mMesh.innerHTML = '9';
                	this.mNumNine.mMesh.mGame = this;
                	this.mNumNine.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumNine); 
		}

		//Addition
               	if (!this.mNumAddition)
		{ 
			this.mNumAddition = new Shape(50,100,450,200,this,"BUTTON","","");
                	this.mNumAddition.mMesh.innerHTML = '+';
                	this.mNumAddition.mMesh.mGame = this;
                	this.mNumAddition.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumAddition); 
		}
		
                //4
		if (!this.mNumFour)
		{
                	this.mNumFour = new Shape(50,50,300,250,this,"BUTTON","","");
                	this.mNumFour.mMesh.innerHTML = '4';
                	this.mNumFour.mMesh.mGame = this;
                	this.mNumFour.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumFour); 
		}
                
		//5
		if (!this.mNumFive)
		{
                	this.mNumFive = new Shape(50,50,350,250,this,"BUTTON","","");
                	this.mNumFive.mMesh.innerHTML = '5';
                	this.mNumFive.mMesh.mGame = this;
                	this.mNumFive.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumFive); 
		}

                //6
		if (!this.mNumSix)
		{
                	this.mNumSix = new Shape(50,50,400,250,this,"BUTTON","","");
                	this.mNumSix.mMesh.innerHTML = '6';
                	this.mNumSix.mMesh.mGame = this;
                	this.mNumSix.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumSix); 
		}

                //1
		if (!this.mNumOne)
		{
                	this.mNumOne = new Shape(50,50,300,300,this,"BUTTON","","");
                	this.mNumOne.mMesh.innerHTML = '1';
                	this.mNumOne.mMesh.mGame = this;
                	this.mNumOne.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumOne); 
		}

		//2
		if (!this.mNumTwo)
		{
                	this.mNumTwo = new Shape(50,50,350,300,this,"BUTTON","","");
                	this.mNumTwo.mMesh.innerHTML = '2';
                	this.mNumTwo.mMesh.mGame = this;
               		this.mNumTwo.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumTwo); 
		}

                //3
		if (!this.mNumThree)
		{	
                	this.mNumThree = new Shape(50,50,400,300,this,"BUTTON","","");
                	this.mNumThree.mMesh.innerHTML = '3';
                	this.mNumThree.mMesh.mGame = this;
               		this.mNumThree.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumThree); 
		}

                //0
		if (!this.mNumZero)
		{
                	this.mNumZero = new Shape(100,50,300,350,this,"BUTTON","","");
                	this.mNumZero.mMesh.innerHTML = '0';
                	this.mNumZero.mMesh.mGame = this;
                	this.mNumZero.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumZero); 
		}

                //.
		if (!this.mNumDecimal)
		{
                	this.mNumDecimal = new Shape(50,50,400,350,this,"BUTTON","","");
                	this.mNumDecimal.mMesh.innerHTML = '.';
               		this.mNumDecimal.mMesh.mGame = this;
                	this.mNumDecimal.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumDecimal); 
		}

                //enter
		if (!this.mNumEnter)
		{
               		this.mNumEnter = new Shape(50,100,450,300,this,"BUTTON","","");
               		this.mNumEnter.mMesh.innerHTML = 'Enter';
               		this.mNumEnter.mMesh.mGame = this;
               		this.mNumEnter.mMesh.addEvent('click',this.numPadHit);
			this.mNumberPadArray.push(this.mNumEnter); 
		}
	}
});
