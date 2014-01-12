var g1_nbt_a_1 = new Class(
{

Extends: Dungeon,

	initialize: function(application)
	{
       		this.parent(application);
	},

	createQuestions: function()
	{
		this.parent();

		if (this.mApplication.mLevel == 1)   
                {
			for (i = 93; i < 103; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 2)   
                {
			for (i = 97; i < 107; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 3)   
                {
			for (i = 105; i < 115; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 4)   
                {
			for (i = 103; i < 113; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 5)   
                {
			for (i = 110; i < 120; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 6)   
                {
			for (i = 110; i < 120; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
	}
});
