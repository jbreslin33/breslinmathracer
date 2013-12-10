var Dungeon_k_cc_a_2 = new Class(
{

Extends: Dungeon,

	initialize: function(application)
	{
       		this.parent(application);
	},

	createQuestions: function()
	{
		this.parent();

		if (this.mApplication.mNextLevelID == 2)   
                {
			for (i = 3; i < 13; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 2.01)   
                {
			for (i = 37; i < 47; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 2.02)   
                {
			for (i = 55; i < 65; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 2.03)   
                {
			for (i = 83; i < 93; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 2.04)   
                {
			for (i = 76; i < 86; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 2.05)   
                {
			for (i = 47; i < 57; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
	}
});
