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
		this.mInputPad = 0;

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
 
	destroyShapes: function()
        {
		this.parent();
        },

	reset: function()
	{
		this.parent();
		this.log('Pad.reset');
		
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
		this.log('Pad.createQuestions');
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

		this.createCorrectAnswerBar();

	},

	showQuestion: function()
	{
		this.mInputPad.showQuestion();
	},
	
	showCorrectAnswerEnter: function()
	{
		this.showCorrectAnswer();
	},

	showCorrectAnswer: function()
	{
		this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
        	this.mInputPad.hide();
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
        	this.mInputPad.hide();
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
	
  	levelPassedEnter: function()
        {
        	this.mApplication.mLevelCompleted = true;

        	this.mInputPad.hide();

        	//correctAnswer
        	this.hideCorrectAnswerBar();
        	this.mCorrectAnswerBarHeader.mMesh.value = '';
        	this.mCorrectAnswerBarHeader.mMesh.innerHTML = 'LEVEL PASSED!!!!!!';
       	 	this.mCorrectAnswerBar.mMesh.value = '';
        	this.mCorrectAnswerBar.mMesh.innerHTML = 'HOORAY!';

        	//input pad
		this.mInputPad.reset();	

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
