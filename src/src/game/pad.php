var Pad = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.mScoreNeeded = 20;

		this.mQuiz = new Quiz(this);
        	this.mApplication.mHud.mGameName.setText('<font size="2">PAD</font>');

		
		//answers 
                this.mThresholdTime = 2000;
                this.mAnswerTime = 0;
                this.mQuestionStartTime = this.mTimeSinceEpoch;
                this.mOutOfTime = false;

		//show correct 
		this.mCorrectAnswerStartTime = 0;
		this.mCorrectAnswerThresholdTime = 5000;
		this.mCorrectAnswerBarHeader = 0;
		this.mCorrectAnswerBar = 0;
	
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
		//start creating questions to use randomly	

		//0 to 5
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 1 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 2 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 1 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 2 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 1 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 3 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 1 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 4 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 + 1 =','6'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 5 =','6'));
                this.mQuiz.mQuestionPoolArray.push(new Question('6 + 1 =','7'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 6 =','7'));
                this.mQuiz.mQuestionPoolArray.push(new Question('7 + 1 =','8'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 7 =','8'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 1 =','9'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 8 =','9'));
                this.mQuiz.mQuestionPoolArray.push(new Question('9 + 1 =','10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 9 =','10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 3 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 2 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 3 =','6'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 4 =','7'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 3 =','7'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 4 =','8'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 5 =','9'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 + 4 =','9'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 + 5 =','10'));

		//0
                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 0 =','0'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 0 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 1 =','1'));

		//10		
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 0 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 10 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 1 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 10 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 1 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 11 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 1 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 12 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 1 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 13 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 1 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 14 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 1 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 15 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 1 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 16 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 + 1 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 17 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 + 1 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 18 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 + 1 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 19 =','20'));
               

		//9 
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 2 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 9 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 3 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 9 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 4 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 9 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 5 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 9 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 6 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 9 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 7 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 9 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 8 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 9 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 9 =','18'));


		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 10 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 9 =','19'));




                this.mQuiz.mQuestionPoolArray.push(new Question('10 + 1 =','11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('10 + 2 =','12'));
                this.mQuiz.mQuestionPoolArray.push(new Question('10 + 2 =','12'));

		var offset = parseInt(this.mApplication.mNextLevelID - 99); 
		for (s = 0; s < this.mScoreNeeded; s++)
		{	
			//50% chance of asking newest question
			var randomChance = Math.floor((Math.random()*2));		
			if (randomChance == 0)
			{
				var randomElement = Math.floor((Math.random()*offset));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
			}	
			if (randomChance == 1)
			{
				var randomElement = Math.floor((Math.random()*offset));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
			}
		}
	},
	
	createWorld: function()
	{
		//scoreText = '<font size="2"> Needed :' +  this.mScoreNeeded + '</font>';
		//this.mApplication.mHud.mScoreNeeded.setText(scoreText);
		//this.mApplication.mHud.mLevel.setText('<font size="2"> Level : ' + APPLICATION.mNextLevelID + '</font>');

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

	showCorrectAnswerBar: function()
	{
		this.mCorrectAnswerBarHeader.setVisibility(true);
		this.mCorrectAnswerBar.setVisibility(true);
	},
	
	hideCorrectAnswerBar: function()
	{
		this.mCorrectAnswerBar.setVisibility(false);
		this.mCorrectAnswerBarHeader.setVisibility(false);
	},
	
	destroyCorrectAnswerBar: function()
	{
                this.mCorrectAnswerBar.mDiv.mDiv.removeChild(this.mCorrectAnswerBar.mMesh);
                document.body.removeChild(this.mCorrectAnswerBar.mDiv.mDiv);
                this.mCorrectAnswerBar = 0;
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

	createCorrectAnswerBar: function()
	{
		//question bar header
               	this.mCorrectAnswerBarHeader = new Shape(150,50,300,50,this,"","","");
               	this.mCorrectAnswerBarHeader.mMesh.innerHTML = 'Header:';
		
		//question bar
               	this.mCorrectAnswerBar = new Shape(150,50,300,100,this,"","","");
               	this.mCorrectAnswerBar.mMesh.innerHTML = '';
		
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
