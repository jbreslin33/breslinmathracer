var k_cc_b_4a = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.mApplication.mMouseMoveOn = false;	
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
	}
});
