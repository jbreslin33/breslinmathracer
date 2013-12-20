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

		if (this.mApplication.mLevel == 1)   
                {
			for (i = 0; i < 10; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 2)   
                {
			for (i = 10; i < 20; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 3)   
                {
			for (i = 20; i < 30; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 4)   
                {
			for (i = 30; i < 40; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 5)   
                {
			for (i = 40; i < 50; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 6)   
                {
			for (i = 50; i < 60; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 7)   
                {
			for (i = 60; i < 70; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 8)   
                {
			for (i = 70; i < 80; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 9)   
                {
			for (i = 80; i < 90; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 10)   
                {
			for (i = 90; i < 100; i++)
			{
				var question = i;
				var answer = parseInt(i + 1); 
                        	this.mQuiz.mQuestionArray.push(new Question('' + question, '' + answer));
			}
                }
		if (this.mApplication.mLevel == 11)   
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
