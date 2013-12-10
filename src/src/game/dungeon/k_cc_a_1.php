var k_cc_a_1 = new Class(
{

Extends: Dungeon,

	initialize: function(application)
	{
       		this.parent(application);
	},

	createQuestions: function()
	{
		this.parent();

		if (this.mApplication.mNextLevelID == 1)   
                {
			for (i = 0; i < 10; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 1.01)   
                {
			for (i = 10; i < 20; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 1.02)   
                {
			for (i = 20; i < 30; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 1.03)   
                {
			for (i = 30; i < 40; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 1.04)   
                {
			for (i = 40; i < 50; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 1.05)   
                {
			for (i = 50; i < 60; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 1.06)   
                {
			for (i = 60; i < 70; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 1.07)   
                {
			for (i = 70; i < 80; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 1.08)   
                {
			for (i = 80; i < 90; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 1.09)   
                {
			for (i = 90; i < 100; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mNextLevelID == 1.10)   
                {
                       	this.mQuiz.mQuestionArray.push(new Question('0','10'));
                       	this.mQuiz.mQuestionArray.push(new Question('10','20'));
                       	this.mQuiz.mQuestionArray.push(new Question('20','30'));
                       	this.mQuiz.mQuestionArray.push(new Question('30','40'));
                       	this.mQuiz.mQuestionArray.push(new Question('40','50'));
                       	this.mQuiz.mQuestionArray.push(new Question('50','60'));
                       	this.mQuiz.mQuestionArray.push(new Question('60','70'));
                       	this.mQuiz.mQuestionArray.push(new Question('70','80'));
                       	this.mQuiz.mQuestionArray.push(new Question('80','90'));
                       	this.mQuiz.mQuestionArray.push(new Question('90','100'));
                }
	}
});
