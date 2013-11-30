var Count_k_cc_a_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//count shape array
		this.mCountShapeArray = new Array();
	
		//cursor
		document.body.style.cursor = 'default';	

		this.mApplication.mMouseMoveOn = false;

        	this.mApplication.mHud.mGameName.setText('<font size="2">COUNT</font>');

		//answers 
                this.mThresholdTime = 10000;

		//state machine
		this.mCountStateMachine = new StateMachine(this);

        	this.mGLOBAL_COUNT_GAME     = new GLOBAL_COUNT_GAME(this);
        	this.mINIT_COUNT_GAME       = new INIT_COUNT_GAME(this);
        	this.mRESET_COUNT_GAME      = new RESET_COUNT_GAME(this);
        	this.mSHOW_CORRECT_ANSWER = new SHOW_CORRECT_ANSWER(this);
        	this.mWAITING_ON_ANSWER_FIRST_TIME   = new WAITING_ON_ANSWER_FIRST_TIME(this);
        	this.mWAITING_ON_ANSWER   = new WAITING_ON_ANSWER(this);
        	this.mCORRECT_ANSWER_COUNT_GAME = new CORRECT_ANSWER_COUNT_GAME(this);
        	this.mSHOW_CORRECT_ANSWER = new SHOW_CORRECT_ANSWER(this);
        	this.mSHOW_CORRECT_ANSWER_OUT_OF_TIME = new SHOW_CORRECT_ANSWER_OUT_OF_TIME(this);
        	this.mLEVEL_PASSED_COUNT = new LEVEL_PASSED_COUNT(this);
        	this.mSHOW_LEVEL_PASSED_COUNT = new SHOW_LEVEL_PASSED_COUNT(this);

        	this.mCountStateMachine.setGlobalState(this.mGLOBAL_COUNT_GAME);
        	this.mCountStateMachine.changeState(this.mINIT_COUNT_GAME);
	},

	destructor: function()
	{
		this.parent();
	},

	reset: function()
	{
		this.parent();
		
		for (i = 0; i < this.mCountShapeArray.length; i++)
		{
			this.mCountShapeArray.setVisibility(false);
		} 
	},

	update: function()
        {
  		this.parent()
		this.mCountStateMachine.update();
        },

	showNumberPad: function()
	{
		this.parent();
		
	},
   
	createQuestions: function()
        {
 		this.mQuiz.reset();
		
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

		this.createQuestionShapes();
		
	},

	creaetQuestionShapes: function()
	{
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,25,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,75,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,125,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,175,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,225,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,250,this,"/images/bus/kid.png","",""));
                	
		this.mCountShapeArray.push(new ShapeVictory(50,50,50,25,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,75,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,125,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,175,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,225,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,250,this,"/images/bus/kid.png","",""));
	},
	
	createWorld: function()
	{
		this.parent();
	}
});
