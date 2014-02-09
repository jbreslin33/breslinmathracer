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
	}
});
