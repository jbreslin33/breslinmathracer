var NumberPad2Box = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	},

        showQuestion: function()
        {
              	//set all shapes invisible to start semi-clean
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        //this.mShapeArray[i].setVisibility(false);
                }

                if (this.mApplication.mGame.mQuiz)
                {
                        if (this.mApplication.mGame.mQuiz.getQuestion())
                        {
                                this.mQuiz.getQuestion().showShapes();
                                this.mQuiz.getQuestion().setChoices();
                                this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
                        }
                }
               
		//show input pad 
		for (i = this.mTotalGuiBars; i < parseInt(this.mTotalGuiBars + this.mTotalInputBars); i++)
                {
			//console.log(i);
                        this.mShapeArray[i].setVisibility(true);
                }
		
		if (this.mNumAnswer)
		{
                	this.mNumAnswer.mMesh.focus();
			APPLICATION.mGame.mInputFocusField = APPLICATION.mGame.mNumAnswer.mMesh;
		}

		if (this.mQuiz.getQuestion().mHeadingArray.length == 1)
		{	
		this.mNumAnswer2.setVisibility(false);
		this.mNumAnswerHeading2.setVisibility(false);

		this.mNumAnswerHeading1.mMesh.innerHTML = this.mQuiz.getQuestion().mHeadingArray[0];
		}
		else if (this.mQuiz.getQuestion().mHeadingArray.length > 1)
		{	
	
		this.mNumAnswerHeading1.mMesh.innerHTML = this.mQuiz.getQuestion().mHeadingArray[0];
		this.mNumAnswerHeading2.mMesh.innerHTML = this.mQuiz.getQuestion().mHeadingArray[1];
		}
		else
		{	
		this.mNumAnswer2.setVisibility(false);
		this.mNumAnswerHeading2.setVisibility(false);

		}
        },

	inputFocus: function()
        {
                APPLICATION.mGame.mInputFocusField = this;
        },


        inputKeyHit: function(e)
        {
                if (e.key == 'enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			APPLICATION.mGame.mUserAnswer2 = APPLICATION.mGame.mNumAnswer2.mMesh.value;
                }
        },

        numPadHit: function()
        {
                if (this.innerHTML == 'Enter')
                {
                        APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
			APPLICATION.mGame.mUserAnswer2 = APPLICATION.mGame.mNumAnswer2.mMesh.value;
                }
                else
                {
			APPLICATION.mGame.mInputFocusField.value = 		  					APPLICATION.mGame.mInputFocusField.value + '' + this.innerHTML;
                }
        },

	createWorld: function()
        {
		this.parent();

		//this.createInput();
	},



	//firstTime 
	firstTimeEnter: function()
        {
                if (this.mNumAnswer)
                {
                        this.mNumAnswer.mMesh.value = '';
                        this.mNumAnswer.mMesh.innerHTML =  '';
                }

		if (this.mNumAnswer2)
                {
                        this.mNumAnswer2.mMesh.value = '';
                        this.mNumAnswer2.mMesh.innerHTML =  '';
                }


                //user answer1
                this.mUserAnswer = '';

		//user answer2
                this.mUserAnswer2 = '';

                //numberPad
                if (this.mQuiz)
                {
                        if (!this.mQuiz.getQuestion())
                        {
                                this.log('NO QUESTIONS: calling createQuestions');
                                this.createQuestions();
                        }
                }
                else
                {
                        this.log('NO QUIZ');
                }

                //show question
                this.showQuestion();
        },

	firstTimeExecute: function()
        {
		var correct = false;
                //if you have an answer...
                if (this.mUserAnswer != '')
                {
			if (this.mQuiz == 0)
			{
				return;
			}
			
                        if (this.mUserAnswer == this.mQuiz.getQuestion().mAnswerArray[0])
			{
			   correct = true;
                           this.mStateMachine.changeState(this.mCORRECT_ANSWER);

			   if (this.mQuiz.getQuestion().mHeadingArray.length > 0)
			   {
                               	if (this.mUserAnswer2 != this.mQuiz.getQuestion().mAnswerArray[1])
				{
					correct = false;                       
				}
			   }
			}
				
		

			if (correct == false)
			{
                                this.mStateMachine.changeState(this.mSHOW_CORRECT_ANSWER);
                        }
			
			if (this.mFirstTimeAnswer == false)
			{
				this.mFirstTimeAnswer = true;
				this.mApplication.sendLevelAttempt();
			}
                }
        },

	//showCorrectAnswer
       	showCorrectAnswerEnter: function()
        {
        	this.mApplication.mFailedAttempts++;

        	if (this.mApplication.mFailedAttempts > this.mFailedAttemptsThreshold)
        	{
                	this.mApplication.mFailedAttempts = 0;
			this.mApplication.mStateMachine.changeState(this.mApplication.mREWIND_TO_PREVIOUS_LEVEL_APPLICATION);
        	}
        	else
        	{
                	//just update failed attempts by one on javascript and server and db.
                	this.mApplication.sendFailedAttempt();
        	}
	
		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }

                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;

                this.mShapeArray[1].setPosition(400,175);
		this.mShapeArray[1].setSize(300,100);
                this.mShapeArray[1].setVisibility(true);
                this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer() + ' Remainder ' + this.mQuiz.getQuestion().getAnswerTwo();

                this.mShapeArray[9].setVisibility(true);

		//show question shapes
 		this.mQuiz.getQuestion().showShapes();

		this.tip();
	},


        
	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(100,50,325,95,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	createInput: function()
	{
                //question
                this.createNumQuestion();

                //answer1
                this.mNumAnswer = new Shape(100,30,425,100,this,"INPUT","","");
                this.mNumAnswer.mMesh.value = '';
                this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
		this.mNumAnswer.mMesh.addEvent('click',this.inputFocus);
                this.mShapeArray.push(this.mNumAnswer);

		//answer2
                this.mNumAnswer2 = new Shape(100,30,525,100,this,"INPUT","","");
                this.mNumAnswer2.mMesh.value = '';
                this.mNumAnswer2.mMesh.addEvent('keypress',this.inputKeyHit);
		this.mNumAnswer2.mMesh.addEvent('click',this.inputFocus);
                this.mShapeArray.push(this.mNumAnswer2);

		this.mNumAnswerHeading1 = new Shape(100,20,425,0,this,"","","");
                this.mNumAnswerHeading1.mMesh.innerHTML = ' ';
		this.mShapeArray.push(this.mNumAnswerHeading1);

		this.mNumAnswerHeading2 = new Shape(100,20,525,0,this,"","","");
                this.mNumAnswerHeading2.mMesh.innerHTML = ' ';
		this.mShapeArray.push(this.mNumAnswerHeading2);

                //Lock
                this.mNumLock = new Shape(50,50,300,150,this,"BUTTON","","");
                this.mNumLock.mMesh.innerHTML = 'Lock';
                this.mNumLock.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumLock);

                //Division
                this.mNumDivision = new Shape(50,50,350,150,this,"BUTTON","","");
                this.mNumDivision.mMesh.innerHTML = '/';
                this.mNumDivision.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumDivision);

                //Multiplication
                this.mNumMultiplication= new Shape(50,50,400,150,this,"BUTTON","","");
                this.mNumMultiplication.mMesh.innerHTML = '*';
                this.mNumMultiplication.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumMultiplication);

                //Subtraction
                this.mNumSubtraction = new Shape(50,50,450,150,this,"BUTTON","","");
                this.mNumSubtraction.mMesh.innerHTML = '-';
                this.mNumSubtraction.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumSubtraction);

                //7
                this.mNumSeven = new Shape(50,50,300,200,this,"BUTTON","","");
                this.mNumSeven.mMesh.innerHTML = '7';
                this.mNumSeven.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumSeven);

                //8
                this.mNumEight = new Shape(50,50,350,200,this,"BUTTON","","");
                this.mNumEight.mMesh.innerHTML = '8';
                this.mNumEight.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumEight);

                //9
                this.mNumNine = new Shape(50,50,400,200,this,"BUTTON","","");
                this.mNumNine.mMesh.innerHTML = '9';
                this.mNumNine.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumNine);

                //Addition
                this.mNumAddition = new Shape(50,100,450,225,this,"BUTTON","","");
                this.mNumAddition.mMesh.innerHTML = '+';
                this.mNumAddition.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumAddition);

                //4
                this.mNumFour = new Shape(50,50,300,250,this,"BUTTON","","");
                this.mNumFour.mMesh.innerHTML = '4';
                this.mNumFour.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumFour);

                //5
                this.mNumFive = new Shape(50,50,350,250,this,"BUTTON","","");
                this.mNumFive.mMesh.innerHTML = '5';
                this.mNumFive.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumFive);

                //6
                this.mNumSix = new Shape(50,50,400,250,this,"BUTTON","","");
                this.mNumSix.mMesh.innerHTML = '6';
                this.mNumSix.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumSix);

                //1
                this.mNumOne = new Shape(50,50,300,300,this,"BUTTON","","");
                this.mNumOne.mMesh.innerHTML = '1';
                this.mNumOne.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumOne);

                //2
                this.mNumTwo = new Shape(50,50,350,300,this,"BUTTON","","");
                this.mNumTwo.mMesh.innerHTML = '2';
                this.mNumTwo.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumTwo);

                //3
                this.mNumThree = new Shape(50,50,400,300,this,"BUTTON","","");
                this.mNumThree.mMesh.innerHTML = '3';
                this.mNumThree.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumThree);

                //0
                this.mNumZero = new Shape(100,50,325,350,this,"BUTTON","","");
                this.mNumZero.mMesh.innerHTML = '0';
                this.mNumZero.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumZero);

                //.
                this.mNumDecimal = new Shape(50,50,400,350,this,"BUTTON","","");
                this.mNumDecimal.mMesh.innerHTML = '.';
                this.mNumDecimal.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumDecimal);

                //enter
                this.mNumEnter = new Shape(50,100,450,325,this,"BUTTON","","");
                this.mNumEnter.mMesh.innerHTML = 'Enter';
                this.mNumEnter.mMesh.addEvent('click',this.numPadHit);
                this.mShapeArray.push(this.mNumEnter);

		this.mTotalInputBars = this.mShapeArray.length - this.mTotalGuiBars;

                //set all pad shapes invisible to start semi-clean
                for (i = this.mTotalGuiBars; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                        this.mShapeArray[i].mCollidable = false;
                        this.mShapeArray[i].mCollisionOn = false;
                }
        }
});
