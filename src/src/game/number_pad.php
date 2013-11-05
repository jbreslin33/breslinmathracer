var NumberPad = new Class(
{

Extends: GameSimple,

	initialize: function()
	{
       		this.parent();
	
		//times	
		this.mThresholdTime = 2000;	
		this.mAnswerTime = 0;	
		this.mQuestionStartTime = 0;	
		this.mOutOfTime = false;		
		this.mStartGameHit = false;
		this.mUserAnswer = '';
		this.mQuizComplete = false;

		//hud question bar
		this.mHud.setQuestion(this.mQuiz.getQuestion().getQuestion());
		
		//question bar
		this.mNumQuestion = new Shape(100,50,300,100,this,"","","");
		this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
		this.mNumQuestion.mMesh.mGame = this;
		
		//answer text box 
		this.mNumAnswer = new Shape(100,50,400,100,this,"INPUT","","");
		this.mNumAnswer.mMesh.value = '';
		this.mNumAnswer.mMesh.mGame = this;
		this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
		this.mNumAnswer.mMesh.focus();

		//create number pad
		//Lock	
		this.mNumLock = new Shape(50,50,300,150,this,"BUTTON","","");
		this.mNumLock.mMesh.innerHTML = 'Lock';
		this.mNumLock.mMesh.mGame = this;
		this.mNumLock.mMesh.addEvent('click',this.numPadHit);
			
		//Division	
		this.mNumDivision = new Shape(50,50,350,150,this,"BUTTON","","");
		this.mNumDivision.mMesh.innerHTML = '/';
		this.mNumDivision.mMesh.mGame = this;
		this.mNumDivision.mMesh.addEvent('click',this.numPadHit);
		
		//Multiplication	
		this.mNumMultiplication= new Shape(50,50,400,150,this,"BUTTON","","");
		this.mNumMultiplication.mMesh.innerHTML = '*';
		this.mNumMultiplication.mMesh.mGame = this;
		this.mNumMultiplication.mMesh.addEvent('click',this.numPadHit);
		
		//Subtraction	
		this.mNumSubtraction = new Shape(50,50,450,150,this,"BUTTON","","");
		this.mNumSubtraction.mMesh.innerHTML = '-';
		this.mNumSubtraction.mMesh.mGame = this;
		this.mNumSubtraction.mMesh.addEvent('click',this.numPadHit);
		
		//7	
		this.mNumSeven = new Shape(50,50,300,200,this,"BUTTON","","");
		this.mNumSeven.mMesh.innerHTML = '7';
		this.mNumSeven.mMesh.mGame = this;
		this.mNumSeven.mMesh.addEvent('click',this.numPadHit);
			
		//8	
		this.mNumEight = new Shape(50,50,350,200,this,"BUTTON","","");
		this.mNumEight.mMesh.innerHTML = '8';
		this.mNumEight.mMesh.mGame = this;
		this.mNumEight.mMesh.addEvent('click',this.numPadHit);
		
		//9	
		this.mNumNine = new Shape(50,50,400,200,this,"BUTTON","","");
		this.mNumNine.mMesh.innerHTML = '9';
		this.mNumNine.mMesh.mGame = this;
		this.mNumNine.mMesh.addEvent('click',this.numPadHit);
		
		//Addition	
		this.mNumAddition = new Shape(50,100,450,200,this,"BUTTON","","");
		this.mNumAddition.mMesh.innerHTML = '+';
		this.mNumAddition.mMesh.mGame = this;
		this.mNumAddition.mMesh.addEvent('click',this.numPadHit);
		
		//4	
		this.mNumFour = new Shape(50,50,300,250,this,"BUTTON","","");
		this.mNumFour.mMesh.innerHTML = '4';
		this.mNumFour.mMesh.mGame = this;
		this.mNumFour.mMesh.addEvent('click',this.numPadHit);
			
		//5	
		this.mNumFive = new Shape(50,50,350,250,this,"BUTTON","","");
		this.mNumFive.mMesh.innerHTML = '5';
		this.mNumFive.mMesh.mGame = this;
		this.mNumFive.mMesh.addEvent('click',this.numPadHit);
		
		//6	
		this.mNumSix = new Shape(50,50,400,250,this,"BUTTON","","");
		this.mNumSix.mMesh.innerHTML = '6';
		this.mNumSix.mMesh.mGame = this;
		this.mNumSix.mMesh.addEvent('click',this.numPadHit);
		
		//1
		this.mNumOne = new Shape(50,50,300,300,this,"BUTTON","","");
		this.mNumOne.mMesh.innerHTML = '1';
		this.mNumOne.mMesh.mGame = this;
		this.mNumOne.mMesh.addEvent('click',this.numPadHit);
	
		//2	
		this.mNumTwo = new Shape(50,50,350,300,this,"BUTTON","","");
		this.mNumTwo.mMesh.innerHTML = '2';
		this.mNumTwo.mMesh.mGame = this;
		this.mNumTwo.mMesh.addEvent('click',this.numPadHit);
		
		//3	
		this.mNumThree = new Shape(50,50,400,300,this,"BUTTON","","");
		this.mNumThree.mMesh.innerHTML = '3';
		this.mNumThree.mMesh.mGame = this;
		this.mNumThree.mMesh.addEvent('click',this.numPadHit);
		
		//0	
		this.mNumZero = new Shape(100,50,300,350,this,"BUTTON","","");
		this.mNumZero.mMesh.innerHTML = '0';
		this.mNumZero.mMesh.mGame = this;
		this.mNumZero.mMesh.addEvent('click',this.numPadHit);
		
		//.	
		this.mNumDecimal = new Shape(50,50,400,350,this,"BUTTON","","");
		this.mNumDecimal.mMesh.innerHTML = '.';
		this.mNumDecimal.mMesh.mGame = this;
		this.mNumDecimal.mMesh.addEvent('click',this.numPadHit);
		
		//enter	
		this.mNumEnter = new Shape(50,100,450,300,this,"BUTTON","","");
		this.mNumEnter.mMesh.innerHTML = 'Enter';
		this.mNumEnter.mMesh.mGame = this;
		this.mNumEnter.mMesh.addEvent('click',this.numPadHit);
	},
	
	inputKeyHit: function(e)
	{
		if (e.key == 'enter')
		{
  			if (this.mGame.mStartGameHit == false)
                	{
                        	this.mGame.mUserAnswer = this.mGame.mNumAnswer.mMesh.value;
                        	if (this.mGame.mUserAnswer == this.mGame.mQuiz.getQuestion().getAnswer())
                        	{
                                	//this.mGame.incrementScore();
                                	this.mGame.mQuiz.correctAnswer();
                                	this.mGame.mQuestionStartTime = this.mGame.mTimeSinceEpoch;
                        	}
                        	else
                        	{
                                	this.mGame.mOutOfTime = true;
                                	alert('Try again. Correct Answer is:' + this.mGame.mQuiz.getQuestion().getAnswer());
                                	location.reload()
                        	}
                        	this.mGame.mStartGameHit = true;
                        	this.mGame.mNumAnswer.mMesh.value = '';
                	}
                	else if (this.mGame.mStartGameHit == true)
                	{
                        	this.mGame.mUserAnswer = this.mGame.mNumAnswer.mMesh.value;
                        	if (this.mGame.mUserAnswer == this.mGame.mQuiz.getQuestion().getAnswer())
                        	{
                                	//this.mGame.incrementScore();
                                	this.mGame.mQuiz.correctAnswer();
                                	this.mGame.mQuestionStartTime = this.mGame.mTimeSinceEpoch;
                        	}
                        	else
                        	{
                                	this.mGame.mOutOfTime = true;
                                	alert('Try again. Correct Answer is:' + this.mGame.mQuiz.getQuestion().getAnswer());
                                	location.reload()
                        	}
                        	this.mGame.mStartGameHit = true;
                        	this.mGame.mNumAnswer.mMesh.value = '';
			}
                	this.mGame.mNumQuestion.mMesh.innerHTML = this.mGame.mQuiz.getQuestion().getQuestion();
			this.mGame.mNumAnswer.mMesh.value = '';
		}				
	},

	numPadHit: function()
	{
		if (this.innerHTML != 'Enter')
		{
			this.mGame.mNumAnswer.mMesh.value = this.mGame.mNumAnswer.mMesh.value + '' + this.innerHTML;
		}
		
		if (this.innerHTML == 'Enter' && this.mGame.mStartGameHit == false)
		{
			this.mGame.mUserAnswer = this.mGame.mNumAnswer.mMesh.value;
			if (this.mGame.mUserAnswer == this.mGame.mQuiz.getQuestion().getAnswer())
			{
				//this.mGame.incrementScore();
				this.mGame.mQuiz.correctAnswer();
				this.mGame.mQuestionStartTime = this.mGame.mTimeSinceEpoch;	
			}
			else
			{
				this.mGame.mOutOfTime = true;
				alert('Try again. Correct Answer is:' + this.mGame.mQuiz.getQuestion().getAnswer());
				location.reload()
			}
			this.mGame.mStartGameHit = true;
			this.mGame.mNumAnswer.mMesh.value = '';
		}
		else if (this.innerHTML == 'Enter' && this.mGame.mStartGameHit == true)
		{
  			this.mGame.mUserAnswer = this.mGame.mNumAnswer.mMesh.value;
                        if (this.mGame.mUserAnswer == this.mGame.mQuiz.getQuestion().getAnswer())
                        {
                                //this.mGame.incrementScore();
                                this.mGame.mQuiz.correctAnswer();
                                this.mGame.mQuestionStartTime = this.mGame.mTimeSinceEpoch;
                        }
                        else
                        {
                                this.mGame.mOutOfTime = true;
                                alert('Try again. Correct Answer is:' + this.mGame.mQuiz.getQuestion().getAnswer());
                                location.reload()
                        }
                        this.mGame.mStartGameHit = true;
                        this.mGame.mNumAnswer.mMesh.value = '';
		}
		this.mGame.mNumQuestion.mMesh.innerHTML = this.mGame.mQuiz.getQuestion().getQuestion();
		this.mGame.mNumAnswer.mMesh.focus();
	},

	update: function()
	{
		if (this.mQuizComplete == false)
		{
			this.parent();

			if (this.mQuiz.isQuizComplete())
			{
				this.mQuizComplete = true;	
                		alert('Electrical Bananas! Next Level!');
				nextLevelUrl = '/src/database/goto_next_level.php';
				window.location = nextLevelUrl;
			}	

			if (this.mStartGameHit == true && this.mOutOfTime == false)
			{
				if (this.mTimeSinceEpoch > this.mQuestionStartTime + this.mThresholdTime)
				{
					this.mOutOfTime = true;
					alert('Out of time! Correct Answer is:' + this.mQuiz.getQuestion().getAnswer());
					location.reload()
				}		
			}
		}			
					
	},
});
