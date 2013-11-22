var Pad = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.mScoreNeeded = 10;

		this.mQuiz = new Quiz(this);
        	this.mApplication.mHud.mGameName.setText('<font size="2">PAD</font>');
                this.mWorkingOnLevel = this.mApplication.mLevelID;

 		//times
                this.mThresholdTime = 2000;
                this.mAnswerTime = 0;
                this.mQuestionStartTime = this.mTimeSinceEpoch;
                this.mOutOfTime = false;
                this.mStartGameHit = false;
                this.mUserAnswer = '';
		this.mQuizComplete = false;
		this.mAlertPause = false;

		this.mPadStateMachine = new StateMachine(this);
        	this.mINIT_PAD_GAME       = new INIT_PAD_GAME(this);
        	this.mWAITING_ON_ANSWER   = new WAITING_ON_ANSWER(this);
        	this.mSHOW_CORRECT_ANSWER = new SHOW_CORRECT_ANSWER(this);
        	this.mPadStateMachine.setGlobalState(0);
        	this.mPadStateMachine.changeState(this.mINIT_PAD_GAME);
	},

//states
/*
init

SHOW_CORRECT_ANSWER ..hideNumberPad showCorrectANswer
WAITING_ON_ANSWER ...hideCorrectAnswer showNumberPad...

*/	
	update: function()
        {
  		this.parent()
                if (this.mWorkingOnLevel != this.mApplication.mNextLevelID)
                {
                        this.mWorkingOnLevel = this.mApplication.mNextLevelID;
                        this.createQuestions();
                }

                if( this.mQuiz)
                {
                        this.mQuiz.update();
                }

                if (this.mQuiz.isQuizComplete())
                {
			this.mQuizComplete = true;
			this.mApplication.mLevelCompleted = true;
                        alert('Electrical Bananas! Next Level!');
                }

		if (this.mAlertPause == false)
		{
                	if (this.mStartGameHit == true && this.mOutOfTime == false)
                	{
                		if (this.mTimeSinceEpoch > this.mQuestionStartTime + this.mThresholdTime)
                		{
                                	this.mOutOfTime = true;
                                	alert('Out of time! Correct Answer is:' + this.mQuiz.getQuestion().getAnswer());
					this.resetGame();
                        	}
			}
                }
  		
		this.mPadStateMachine.update();
        },
   
	createQuestions: function()
        {
                this.mQuiz.mQuestionArray = 0; //delete array
                this.mQuiz.mQuestionArray = new Array(); //new array
               
		this.createAdditionQuestions();
 
                this.createWorld();
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

                if (this.mWorkingOnLevel == 14)
		{
			this.log('mWorkingOnLevel!!!! 14');
			for (i = 0; i < this.mScoreNeeded; i++)
			{	
				randomElement = Math.floor((Math.random()*1));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
				this.log(this.mQuiz.mQuestionArray[i].getQuestion());
			}
		}
                if (this.mWorkingOnLevel == 14.01)
		{
			for (i = 0; i < this.mScoreNeeded; i++)
			{	
				randomElement = Math.floor((Math.random()*2));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
			}
		}
                if (this.mWorkingOnLevel == 14.02)
		{
			for (i = 0; i < this.mScoreNeeded; i++)
			{	
				randomElement = Math.floor((Math.random()*3));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
			}
		}
                if (this.mWorkingOnLevel == 14.03)
		{
			for (i = 0; i < this.mScoreNeeded; i++)
			{	
				randomElement = Math.floor((Math.random()*4));		
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
			}
		}
                if (this.mWorkingOnLevel == 14.04)
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
	
	resetGame: function()
	{
		this.createWorld();
		this.setScore(0);
  
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

	createNumberPad: function()
	{
		//question bar
		if (!this.mNumQuestion)
		{
                	this.mNumQuestion = new Shape(100,50,300,100,this,"","","");
                	this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
                	this.mNumQuestion.mMesh.mGame = this;
		}

                //answer text box
		if (!this.mNumAnswer)
		{
                	this.mNumAnswer = new Shape(100,50,400,100,this,"INPUT","","");
                	this.mNumAnswer.mMesh.value = '';
                	this.mNumAnswer.mMesh.mGame = this;
                	this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
                	this.mNumAnswer.mMesh.focus();
		}

                //Lock
		if (!this.mNumLock)
		{
                	this.mNumLock = new Shape(50,50,300,150,this,"BUTTON","","");
                	this.mNumLock.mMesh.innerHTML = 'Lock';
                	this.mNumLock.mMesh.mGame = this;
                	this.mNumLock.mMesh.addEvent('click',this.numPadHit);
		}
		
		//Division
		if (!this.mNumDivision)
		{
                	this.mNumDivision = new Shape(50,50,350,150,this,"BUTTON","","");
                	this.mNumDivision.mMesh.innerHTML = '/';
                	this.mNumDivision.mMesh.mGame = this;
                	this.mNumDivision.mMesh.addEvent('click',this.numPadHit);
		}

                //Multiplication
		if (!this.mNumMultiplication)
		{
                	this.mNumMultiplication= new Shape(50,50,400,150,this,"BUTTON","","");
                	this.mNumMultiplication.mMesh.innerHTML = '*';
                	this.mNumMultiplication.mMesh.mGame = this;
                	this.mNumMultiplication.mMesh.addEvent('click',this.numPadHit);
		}

                //Subtraction
		if (!this.mNumSubtraction)
		{
                	this.mNumSubtraction = new Shape(50,50,450,150,this,"BUTTON","","");
                	this.mNumSubtraction.mMesh.innerHTML = '-';
                	this.mNumSubtraction.mMesh.mGame = this;
                	this.mNumSubtraction.mMesh.addEvent('click',this.numPadHit);
		}

                //7
		if (!this.mNumSeven)
		{
                	this.mNumSeven = new Shape(50,50,300,200,this,"BUTTON","","");
                	this.mNumSeven.mMesh.innerHTML = '7';
                	this.mNumSeven.mMesh.mGame = this;
                	this.mNumSeven.mMesh.addEvent('click',this.numPadHit);
		}

                //8
		if (!this.mNumEight)
		{
                	this.mNumEight = new Shape(50,50,350,200,this,"BUTTON","","");
                	this.mNumEight.mMesh.innerHTML = '8';
                	this.mNumEight.mMesh.mGame = this;
                	this.mNumEight.mMesh.addEvent('click',this.numPadHit);
		}

		//9
		if (!this.mNumNine)
		{
                	this.mNumNine = new Shape(50,50,400,200,this,"BUTTON","","");
                	this.mNumNine.mMesh.innerHTML = '9';
                	this.mNumNine.mMesh.mGame = this;
                	this.mNumNine.mMesh.addEvent('click',this.numPadHit);
		}

		//Addition
		if (!this.mNumAddition)
		{
                	this.mNumAddition = new Shape(50,100,450,200,this,"BUTTON","","");
                	this.mNumAddition.mMesh.innerHTML = '+';
                	this.mNumAddition.mMesh.mGame = this;
                	this.mNumAddition.mMesh.addEvent('click',this.numPadHit);
		}

                //4
		if (!this.mNumFour)
		{
                	this.mNumFour = new Shape(50,50,300,250,this,"BUTTON","","");
                	this.mNumFour.mMesh.innerHTML = '4';
                	this.mNumFour.mMesh.mGame = this;
                	this.mNumFour.mMesh.addEvent('click',this.numPadHit);
		}

                //5
		if (!this.mNumFive)
		{
                	this.mNumFive = new Shape(50,50,350,250,this,"BUTTON","","");
                	this.mNumFive.mMesh.innerHTML = '5';
                	this.mNumFive.mMesh.mGame = this;
                	this.mNumFive.mMesh.addEvent('click',this.numPadHit);
		}

                //6
		if (!this.mNumSix)
		{
                	this.mNumSix = new Shape(50,50,400,250,this,"BUTTON","","");
                	this.mNumSix.mMesh.innerHTML = '6';
                	this.mNumSix.mMesh.mGame = this;
                	this.mNumSix.mMesh.addEvent('click',this.numPadHit);
		}

                //1
		if (!this.mNumOne)
		{
                	this.mNumOne = new Shape(50,50,300,300,this,"BUTTON","","");
                	this.mNumOne.mMesh.innerHTML = '1';
                	this.mNumOne.mMesh.mGame = this;
                	this.mNumOne.mMesh.addEvent('click',this.numPadHit);
		}

		//2
		if (!this.mNumTwo)
		{
                	this.mNumTwo = new Shape(50,50,350,300,this,"BUTTON","","");
                	this.mNumTwo.mMesh.innerHTML = '2';
                	this.mNumTwo.mMesh.mGame = this;
               		this.mNumTwo.mMesh.addEvent('click',this.numPadHit);
		}

                //3
		if (!this.mNumThree)
		{
                	this.mNumThree = new Shape(50,50,400,300,this,"BUTTON","","");
                	this.mNumThree.mMesh.innerHTML = '3';
                	this.mNumThree.mMesh.mGame = this;
                	this.mNumThree.mMesh.addEvent('click',this.numPadHit);
		}

                //0
		if (!this.mNumZero)
		{
                	this.mNumZero = new Shape(100,50,300,350,this,"BUTTON","","");
                	this.mNumZero.mMesh.innerHTML = '0';
                	this.mNumZero.mMesh.mGame = this;
                	this.mNumZero.mMesh.addEvent('click',this.numPadHit);
		}

                //.
		if (!this.mNumDecimal)
		{
                	this.mNumDecimal = new Shape(50,50,400,350,this,"BUTTON","","");
                	this.mNumDecimal.mMesh.innerHTML = '.';
               		this.mNumDecimal.mMesh.mGame = this;
                	this.mNumDecimal.mMesh.addEvent('click',this.numPadHit);
		}

                //enter
		if (!this.mNumEnter)
		{
                	this.mNumEnter = new Shape(50,100,450,300,this,"BUTTON","","");
                	this.mNumEnter.mMesh.innerHTML = 'Enter';
                	this.mNumEnter.mMesh.mGame = this;
                	this.mNumEnter.mMesh.addEvent('click',this.numPadHit);
		}

	},
	inputKeyHit: function(e)
	{
		if (e.key == 'enter')
		{
  			if (APPLICATION.mGame.mStartGameHit == false)
                	{
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
					APPLICATION.mGame.resetGame();
                        	}
                        	APPLICATION.mGame.mStartGameHit = true;
                        	APPLICATION.mGame.mNumAnswer.mMesh.value = '';
                	}
                	else if (APPLICATION.mGame.mStartGameHit == true)
                	{
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
					APPLICATION.mGame.resetGame();
                        	}
                        	APPLICATION.mGame.mStartGameHit = true;
                        	APPLICATION.mGame.mNumAnswer.mMesh.value = '';
			}
                	if (APPLICATION.mGame.mQuiz)
			{
                		APPLICATION.mGame.mNumQuestion.mMesh.innerHTML = APPLICATION.mGame.mQuiz.getQuestion().getQuestion();
			}
			APPLICATION.mGame.mNumAnswer.mMesh.value = '';
		}				
	},

	numPadHit: function()
	{
		if (this.innerHTML != 'Enter')
		{
			APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '' + this.innerHTML;
		}
		
		if (this.innerHTML == 'Enter' && APPLICATION.mGame.mStartGameHit == false)
		{
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
				APPLICATION.mGame.resetGame();
			}
			APPLICATION.mGame.mStartGameHit = true;
			APPLICATION.mGame.mNumAnswer.mMesh.value = '';
		}
		else if (this.innerHTML == 'Enter' && APPLICATION.mGame.mStartGameHit == true)
		{
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
				APPLICATION.mGame.resetGame();
                        }
                        APPLICATION.mGame.mStartGameHit = true;
                        APPLICATION.mGame.mNumAnswer.mMesh.value = '';
		}
               	if (APPLICATION.mGame.mQuiz)
		{
               		APPLICATION.mGame.mNumQuestion.mMesh.innerHTML = APPLICATION.mGame.mQuiz.getQuestion().getQuestion();
		}
		APPLICATION.mGame.mNumAnswer.mMesh.focus();
	}

});

