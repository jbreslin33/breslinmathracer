var Quiz = new Class(
{
        initialize: function(game)
        {
		//GAME
		this.mGame = game;

		//Question and Answer Array
		this.mQuestionArray = new Array();
			
		//question
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

	reset: function()
	{
		//reset marker
		this.mMarker = 0;
                
		//update question 
		this.mGame.mApplication.mHud.mQuestion.setText('<font size="2"> Question: ' + this.mQuestionArray[this.mMarker].getQuestion() + '</font>');

		for (i = 0; i < this.mQuestionArray.length; i++)
		{
			this.mQuestionArray[i].setSolved(false);	
		}
	}

});


