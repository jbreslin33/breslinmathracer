var Pad = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.mScoreNeeded = 10;

		this.mQuiz = new Quiz(this);
        	this.mApplication.mHud.mGameName.setText('<font size="2">PAD</font>');

 		//times
                this.mThresholdTime = 2000;
                this.mAnswerTime = 0;
                this.mQuestionStartTime = this.mTimeSinceEpoch;
                this.mOutOfTime = false;
                this.mStartGameHit = false;
                this.mUserAnswer = '';
		this.mQuizComplete = false;
		this.mAlertPause = false;
		
		//number pad
		this.mNumberPadArray = new Array();

		//state machine
		this.mPadStateMachine = new StateMachine(this);

        	this.mGLOBAL_PAD_GAME     = new GLOBAL_PAD_GAME(this);
        	this.mINIT_PAD_GAME       = new INIT_PAD_GAME(this);
        	this.mRESET_PAD_GAME      = new RESET_PAD_GAME(this);
        	this.mSHOW_CORRECT_ANSWER = new SHOW_CORRECT_ANSWER(this);
        	this.mWAITING_ON_ANSWER   = new WAITING_ON_ANSWER(this);
        	this.mSHOW_CORRECT_ANSWER = new SHOW_CORRECT_ANSWER(this);

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
                this.mThresholdTime = 2000;
                this.mAnswerTime = 0;
                this.mQuestionStartTime = this.mTimeSinceEpoch;
                this.mOutOfTime = false;
                this.mStartGameHit = false;
                this.mUserAnswer = '';
                this.mQuizComplete = false;
		this.mAlertPause = false;
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
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 1 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 2 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 1 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 1 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 1 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 + 1 =','6'));

                if (this.mApplication.mNextLevelID == 14)
		{
			for (i = 0; i < this.mScoreNeeded; i++)
			{	
				randomElement = Math.floor((Math.random()*1));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
				this.log(this.mQuiz.mQuestionArray[i].getQuestion());
			}
		}
                if (this.mApplication.mNextLevelID == 14.01)
		{
			for (i = 0; i < this.mScoreNeeded; i++)
			{	
				randomElement = Math.floor((Math.random()*2));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
			}
		}
                if (this.mApplication.mNextLevelID == 14.02)
		{
			for (i = 0; i < this.mScoreNeeded; i++)
			{	
				randomElement = Math.floor((Math.random()*3));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
			}
		}
                if (this.mApplication.mNextLevelID == 14.03)
		{
			for (i = 0; i < this.mScoreNeeded; i++)
			{	
				randomElement = Math.floor((Math.random()*4));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
			}
		}
                if (this.mApplication.mNextLevelID == 14.04)
		{
			for (i = 0; i < this.mScoreNeeded; i++)
			{	
				randomElement = Math.floor((Math.random()*5));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
			}
		}
	},
	
	createWorld: function()
	{
		scoreText = '<font size="2"> Needed :' +  this.mScoreNeeded + '</font>';
		this.mApplication.mHud.mScoreNeeded.setText(scoreText);
		this.mApplication.mHud.mLevel.setText('<font size="2"> Level : ' + APPLICATION.mNextLevelID + '</font>');

		this.createNumberPad();
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
                        APPLICATION.mGame.mStartGameHit = true;

                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
                       	if (APPLICATION.mGame.mUserAnswer == APPLICATION.mGame.mQuiz.getQuestion().getAnswer())
                       	{
                               	APPLICATION.mGame.mQuiz.correctAnswer();
                               	APPLICATION.mGame.mQuestionStartTime = APPLICATION.mGame.mTimeSinceEpoch;
                       	}
                       	else
                       	{
				APPLICATION.mGame.mAlertPause = true;	
                               	alert('Try again. Correct Answer is:' + APPLICATION.mGame.mQuiz.getQuestion().getAnswer());
				APPLICATION.mGame.reset();
                       	}
                       	APPLICATION.mGame.mStartGameHit = true;
                       	APPLICATION.mGame.mNumAnswer.mMesh.value = '';
               	}

               	if (APPLICATION.mGame.mQuiz)
		{
               		APPLICATION.mGame.mNumQuestion.mMesh.innerHTML = APPLICATION.mGame.mQuiz.getQuestion().getQuestion();
		}
		APPLICATION.mGame.mNumAnswer.mMesh.value = '';
	},

	numPadHit: function()
	{
		if (this.innerHTML != 'Enter')
		{
			APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '' + this.innerHTML;
		}
		
		if (this.innerHTML == 'Enter')
		{
			APPLICATION.mGame.mStartGameHit = true;
			APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;

			if (APPLICATION.mGame.mUserAnswer == APPLICATION.mGame.mQuiz.getQuestion().getAnswer())
			{
				//APPLICATION.mGame.incrementScore();
				APPLICATION.mGame.mQuiz.correctAnswer();
				APPLICATION.mGame.mQuestionStartTime = APPLICATION.mGame.mTimeSinceEpoch;	
			}
			else
			{
				APPLICATION.mGame.mAlertPause = true;	
				alert('Try again. Correct Answer is:' + APPLICATION.mGame.mQuiz.getQuestion().getAnswer());
				APPLICATION.mGame.reset();
			}
			APPLICATION.mGame.mNumAnswer.mMesh.value = '';
		}
               	
		if (APPLICATION.mGame.mQuiz)
		{
               		APPLICATION.mGame.mNumQuestion.mMesh.innerHTML = APPLICATION.mGame.mQuiz.getQuestion().getQuestion();
		}
		APPLICATION.mGame.mNumAnswer.mMesh.focus();
	},

	createNumberPad: function()
	{
		//question bar
               	this.mNumQuestion = new Shape(100,50,300,100,this,"","","");
               	this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
               	this.mNumQuestion.mMesh.mGame = this;
		this.mNumberPadArray.push(this.mNumQuestion); 

                //answer text box
               	this.mNumAnswer = new Shape(100,50,400,100,this,"INPUT","","");
               	this.mNumAnswer.mMesh.value = '';
               	this.mNumAnswer.mMesh.mGame = this;
               	this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
               	this.mNumAnswer.mMesh.focus();
		this.mNumberPadArray.push(this.mNumAnswer); 

                //Lock
                this.mNumLock = new Shape(50,50,300,150,this,"BUTTON","","");
                this.mNumLock.mMesh.innerHTML = 'Lock';
                this.mNumLock.mMesh.mGame = this;
                this.mNumLock.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumLock); 
		
		//Division
                this.mNumDivision = new Shape(50,50,350,150,this,"BUTTON","","");
                this.mNumDivision.mMesh.innerHTML = '/';
                this.mNumDivision.mMesh.mGame = this;
                this.mNumDivision.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumDivision); 

                //Multiplication
                this.mNumMultiplication= new Shape(50,50,400,150,this,"BUTTON","","");
                this.mNumMultiplication.mMesh.innerHTML = '*';
                this.mNumMultiplication.mMesh.mGame = this;
                this.mNumMultiplication.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumMultiplication); 

                //Subtraction
                this.mNumSubtraction = new Shape(50,50,450,150,this,"BUTTON","","");
                this.mNumSubtraction.mMesh.innerHTML = '-';
                this.mNumSubtraction.mMesh.mGame = this;
                this.mNumSubtraction.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumSubtraction); 

                //7
                this.mNumSeven = new Shape(50,50,300,200,this,"BUTTON","","");
                this.mNumSeven.mMesh.innerHTML = '7';
                this.mNumSeven.mMesh.mGame = this;
                this.mNumSeven.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumSeven); 

                //8
                this.mNumEight = new Shape(50,50,350,200,this,"BUTTON","","");
                this.mNumEight.mMesh.innerHTML = '8';
                this.mNumEight.mMesh.mGame = this;
                this.mNumEight.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumEight); 

		//9
                this.mNumNine = new Shape(50,50,400,200,this,"BUTTON","","");
                this.mNumNine.mMesh.innerHTML = '9';
                this.mNumNine.mMesh.mGame = this;
                this.mNumNine.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumNine); 

		//Addition
                this.mNumAddition = new Shape(50,100,450,200,this,"BUTTON","","");
                this.mNumAddition.mMesh.innerHTML = '+';
                this.mNumAddition.mMesh.mGame = this;
                this.mNumAddition.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumAddition); 
		
                //4
                this.mNumFour = new Shape(50,50,300,250,this,"BUTTON","","");
                this.mNumFour.mMesh.innerHTML = '4';
                this.mNumFour.mMesh.mGame = this;
                this.mNumFour.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumFour); 
                
		//5
                this.mNumFive = new Shape(50,50,350,250,this,"BUTTON","","");
                this.mNumFive.mMesh.innerHTML = '5';
                this.mNumFive.mMesh.mGame = this;
                this.mNumFive.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumFive); 

                //6
                this.mNumSix = new Shape(50,50,400,250,this,"BUTTON","","");
                this.mNumSix.mMesh.innerHTML = '6';
                this.mNumSix.mMesh.mGame = this;
                this.mNumSix.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumSix); 

                //1
                this.mNumOne = new Shape(50,50,300,300,this,"BUTTON","","");
                this.mNumOne.mMesh.innerHTML = '1';
                this.mNumOne.mMesh.mGame = this;
                this.mNumOne.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumOne); 

		//2
                this.mNumTwo = new Shape(50,50,350,300,this,"BUTTON","","");
                this.mNumTwo.mMesh.innerHTML = '2';
                this.mNumTwo.mMesh.mGame = this;
               	this.mNumTwo.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumTwo); 

                //3
                this.mNumThree = new Shape(50,50,400,300,this,"BUTTON","","");
                this.mNumThree.mMesh.innerHTML = '3';
                this.mNumThree.mMesh.mGame = this;
               	this.mNumThree.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumThree); 

                //0
                this.mNumZero = new Shape(100,50,300,350,this,"BUTTON","","");
                this.mNumZero.mMesh.innerHTML = '0';
                this.mNumZero.mMesh.mGame = this;
                this.mNumZero.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumZero); 

                //.
                this.mNumDecimal = new Shape(50,50,400,350,this,"BUTTON","","");
                this.mNumDecimal.mMesh.innerHTML = '.';
               	this.mNumDecimal.mMesh.mGame = this;
                this.mNumDecimal.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumDecimal); 

                //enter
               	this.mNumEnter = new Shape(50,100,450,300,this,"BUTTON","","");
               	this.mNumEnter.mMesh.innerHTML = 'Enter';
               	this.mNumEnter.mMesh.mGame = this;
               	this.mNumEnter.mMesh.addEvent('click',this.numPadHit);
		this.mNumberPadArray.push(this.mNumEnter); 
	}
});
