var Quiz = new Class(
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
		var size = this.mQuestionArray.length - 1;
	
		for (i=0; i < degree; i++)
		{
			var swapElementNumberA = Math.floor((Math.random()*size));
			var swapElementNumberB = Math.floor((Math.random()*size));

			var tempQuestionA = this.mQuestionArray[swapElementNumberA];	
			var tempQuestionB = this.mQuestionArray[swapElementNumberB];	
			
			this.mQuestionArray[swapElementNumberA] = tempQuestionB;
			this.mQuestionArray[swapElementNumberB] = tempQuestionA;
		}
	}
});
