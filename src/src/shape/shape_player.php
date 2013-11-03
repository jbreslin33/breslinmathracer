var Player = new Class(
{

Extends: QuestionShape,

	initialize: function(width,height,spawnX,spawnY,game,question,src,backgroundColor,message)
        {
		this.parent(width,height,spawnX,spawnY,game,question,src,backgroundColor,message)
        },

	update: function(delta)
	{
		this.parent(delta);

		//set players question to current question
                this.setQuestion(this.mGame.mQuiz.getQuestion());
	},	
	
	correctAnswer: function()
	{

	},
	
	incorrectAnswer: function()
	{
	}
});
