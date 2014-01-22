var Quiz = new Class(
{
        initialize: function(game)
        {
		//GAME
		this.mGame = game;

		//Question and Answer Array
		this.mQuestionArray = new Array();
		this.mQuestionPoolArray = new Array();
			
		//question
		this.mMarker = 0;
  
		//answer pool
                this.mAnswerPool = new Array();

        },

	destructor: function()
	{
		this.resetQuestionArray();
		this.resetQuestionPoolArray();
	},	
	
	reset: function()
	{
		this.destructor();
		
		//reset marker
		this.mMarker = 0;
	},

	resetQuestionArray: function()
	{
 		for (i = 0; i < this.mQuestionArray.length; i++)
                {
			this.mGame.log('this.mQuestionArray[i].destructor');
                        this.mQuestionArray[i].destructor();
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
                        this.mQuestionPoolArray[i].destructor();
			this.mQuestionPoolArray[i] = 0;
		}

		//destroy question pool array
		this.mQuestionPoolArray = 0;
                this.mQuestionPoolArray = new Array();
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
	}
});
