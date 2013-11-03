var Quiz = new Class(
{
        initialize: function(scoreNeeded)
        {
		//GAME
		this.mGame = 0;

		//Question and Answer Array
		this.mQuestionArray = new Array();
			
		//score
                this.mScoreNeeded = scoreNeeded;

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
	
		this.mGame.mHud.mQuestion.setText('<font size="2"> Question: ' + this.mQuestionArray[this.mMarker].getQuestion() + '</font>');
	},
	
	getScoreNeeded: function()
	{
		return this.mScoreNeeded;
	},

	isQuizComplete: function()
	{
		if (this.mGame.getScore() >= this.getScoreNeeded())
		{
			return true;
		}
		else
		{
			return false;
		}
	},

	setScoreNeeded: function(scoreNeeded)
	{
		this.mScoreNeeded = scoreNeeded;
		this.mGame.mHud.mScoreNeeded.setText('<font size="2"> Needed: ' + this.mScoreNeeded + '</font>');
	},

	reset: function()
	{
		//reset marker
		this.mMarker = 0;
                
		//update question 
		this.mGame.mHud.mQuestion.setText('<font size="2"> Question: ' + this.mQuestionArray[this.mMarker].getQuestion() + '</font>');

		for (i = 0; i < this.mQuestionArray.length; i++)
		{
			this.mQuestionArray[i].setSolved(false);	
		}
	}

});


