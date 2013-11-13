var Pad = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.mQuiz = new Quiz(this);
        	this.mApplication.mHud.mGameName.setText('<font size="2">DUNGEON</font>');
	},

	update: function()
	{
		this.parent()
		if( this.mQuiz)
		{
			this.mQuiz.update();
		}
	},

	createWorld: function()
	{
		this.mScoreNeeded = this.mQuiz.mQuestionArray.length;

		this.createNumberPad();
		
		scoreText = '<font size="2"> Needed :' +  this.mScoreNeeded + '</font>';
		this.mApplication.mHud.mScoreNeeded.setText(scoreText);
	},

	createNumberPad: function()
	{

	}
});

