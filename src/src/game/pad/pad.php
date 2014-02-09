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

		//state machine
                this.mPadStateMachine = new StateMachine(this);

                this.mSHOW_CORRECT_ANSWER = new SHOW_CORRECT_ANSWER(this);
                this.mWAITING_ON_ANSWER_FIRST_TIME   = new WAITING_ON_ANSWER_FIRST_TIME(this);
                this.mWAITING_ON_ANSWER   = new WAITING_ON_ANSWER(this);
                this.mCORRECT_ANSWER_PAD_GAME = new CORRECT_ANSWER_PAD_GAME(this);
                this.mSHOW_CORRECT_ANSWER = new SHOW_CORRECT_ANSWER(this);
                this.mSHOW_CORRECT_ANSWER_OUT_OF_TIME = new SHOW_CORRECT_ANSWER_OUT_OF_TIME(this);

                this.mPadStateMachine.setGlobalState(0);
                this.mPadStateMachine.changeState(this.mINIT_GAME);

   		this.mTimer = new ClockTimer(application);
	},

	reset: function()
	{
		this.parent();
		
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
		this.mTimer.update();
        },

	createUniverse: function()
        {
                this.createWorld();
                this.createQuestions();
        },
   
	//states
	resetGameEnter: function()
	{
		this.reset();
        	this.mPadStateMachine.changeState(this.mWAITING_ON_ANSWER_FIRST_TIME);
	},

	waitingOnAnswerFirstTimeEnter: function()
	{
        	if (this.mInputPad.mNumAnswer)
        	{
               		this.mInputPad.mNumAnswer.mMesh.value = '';
                	this.mInputPad.mNumAnswer.mMesh.innerHTML =  '';
        	}
	
        	//show inputPad
        	this.mInputPad.show();

        	//correctAnswer
        	//this.hideGuiBar();

        	//user answer
        	this.mUserAnswer = '';

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
	
	waitingOnAnswerFirstTimeExecute: function()
	{
		//if you have an answer...
        	if (this.mUserAnswer != '')
        	{
                	if (this.mUserAnswer == this.mQuiz.getQuestion().getAnswer())
                	{
                        	this.mPadStateMachine.changeState(this.mCORRECT_ANSWER_PAD_GAME);
                	}
                	else
                	{
                        	this.mPadStateMachine.changeState(this.mSHOW_CORRECT_ANSWER);
                	}
		}
        },
	
	waitingOnAnswerEnter: function()
	{
		this.waitingOnAnswerFirstTimeEnter();

        	//times
        	this.mQuestionStartTime = this.mTimeSinceEpoch; //restart timer
	},

	waitingOnAnswerExecute: function()
	{
		this.waitingOnAnswerFirstTimeExecute();

        	//check time
        	if (this.mTimeSinceEpoch > this.mQuestionStartTime + this.mThresholdTime)
        	{
                	this.mOutOfTime = true;
                	this.mPadStateMachine.changeState(this.mSHOW_CORRECT_ANSWER_OUT_OF_TIME);
        	}
	},

	showCorrectAnswerEnter: function()
	{
		this.showCorrectAnswer();
	},

	showCorrectAnswer: function()
	{
		this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;

                this.mShapeArray[1].setPosition(400,125);
                this.mShapeArray[1].setVisibility(true);
        	this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();

        	this.mShapeArray[9].setVisibility(true);
        	
		this.mInputPad.hide();
	},

	showCorrectAnswerOutOfTimeEnter: function()
	{
		this.showCorrectAnswerOutOfTime();
	},

	showCorrectAnswerOutOfTime: function()
	{
		this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
		
		this.mShapeArray[0].setPosition(400,125);
		this.mShapeArray[0].mMesh.innerHTML = 'GO FASTER!';
        	this.mShapeArray[0].setVisibility(true);
	 	
		this.mShapeArray[1].setPosition(400,150);
        	this.mShapeArray[1].setVisibility(true);
        	this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();
        
		//frantic clock	
		this.mShapeArray[8].setVisibility(true);

        	this.mInputPad.hide();
	},
	
	showCorrectAnswerExit: function()
	{ 
		this.hideGuiBar();
	},
  
	showCorrectAnswerOutOfTimeExit: function()
	{ 
		this.hideGuiBar();
	}
});
