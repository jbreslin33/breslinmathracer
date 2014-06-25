/*
 A Sheet should contain items(questions) it should facilitate randomizing, ordering items. it should deal with advancing levels....and other application related things.   
*/
var Sheet = new Class(
{
        initialize: function(game)
        {
		//GAME
		this.mGame = game;

		//Question and Answer Array
		this.mQuestionArray = new Array();
		this.mQuestionPoolArray = new Array();
                this.mAnswerPool = new Array();
			
		//question
		this.mMarker = 0;

		//states
                this.mStateMachine = new StateMachine(this);

                this.mGLOBAL_SHEET       = new GLOBAL_SHEET(this);
                this.mINIT_SHEET         = new INIT_SHEET         (this);
                this.mRESET_SHEET        = new RESET_SHEET        (this);
                this.mNORMAL_SHEET       = new NORMAL_SHEET       (this);
                this.mLEVEL_PASSED_SHEET = new LEVEL_PASSED_SHEET (this);

                this.mStateMachine.setGlobalState(this.mGLOBAL_GAME);
                this.mStateMachine.changeState(this.mINIT_GAME);

        },

	destructor: function()
	{
		this.resetQuestionArray();		
		this.resetQuestionPoolArray();		
		this.resetAnswerPool();		
	},	

	resetQuestionArray: function()
	{
		//destroy questions
		for (i = 0; i < this.mQuestionArray.length; i++)
		{
			this.mQuestionArray[i] = 0;
		}

		//destroy question array
		this.mQuestionArray = 0;
		this.mQuestionArray = new Array();
	},

	resetQuestionPoolArray: function()
	{
		//destroy question pool
		for (i = 0; i < this.mQuestionPoolArray.length; i++)
		{
			this.mQuestionPoolArray[i] = 0;
		}
		//destroy question pool array
		this.mQuestionPoolArray = 0;
		this.mQuestionPoolArray = new Array();
	},
	
	resetAnswerPool: function()
	{
		//destroy answer pool
                for (i = 0; i < this.mAnswerPool.length; i++)
                {
                        this.mAnswerPool[i] = 0;
                }
                //destroy answer pool array
                this.mAnswerPool = 0;
                this.mAnswerPool = new Array();
	},
	
	reset: function()
	{
		this.destructor();
		
		//reset marker
		this.mMarker = 0;
	},
 	
	//returns question object	
	getQuestion: function()
	{
		return this.mQuestionArray[this.mMarker];
	},

	//returns question object	
	getSpecificQuestion: function(i)
	{
		return this.mQuestionArray[i];
	},
	
	correctAnswer: function()
	{
        	this.mGame.incrementScore();
		this.mMarker++;
		//this.mGame.mHud.mQuestion.setText('<font size="2"> Question: ' + this.mQuestionArray[this.mMarker].getQuestion() + '</font>');
	},
	
	isQuizComplete: function()
	{
		if (this.mGame.getScore() >= this.mGame.mScoreNeeded)
		{
			return true;
		}
		else
		{
			return false;
		}
	},

	randomize: function(degree)
	{
		size = this.mQuestionArray.length - 1;
	
		for (i=0; i < degree; i++)
		{
			swapElementNumberA = Math.floor((Math.random()*size));
			swapElementNumberB = Math.floor((Math.random()*size));

			tempQuestionA = this.mQuestionArray[swapElementNumberA];	
			tempQuestionB = this.mQuestionArray[swapElementNumberB];	
			
			this.mQuestionArray[swapElementNumberA] = tempQuestionB;
			this.mQuestionArray[swapElementNumberB] = tempQuestionA;
		}

		// when done swap the mTypeWrong to first spot. 
		if (this.mGame.mTypeWrong != '')
		{
			APPLICATION.log('this.mGame.mTypeWrong:' + this.mGame.mTypeWrong);	
			for (i = 0; i < size; i++)
			{
				if (this.mQuestionArray[i].getType() == this.mGame.mTypeWrong)
				{
					APPLICATION.log('swap type:' + this.mQuestionArray[i].getType()); 	
					wrongQuestion = this.mQuestionArray[i]; 
					questionInFirstSlot = this.mQuestionArray[0]; 
					this.mQuestionArray[0] = wrongQuestion;
					this.mQuestionArray[i] = questionInFirstSlot; 
				}
			}
		}		
	}
});
