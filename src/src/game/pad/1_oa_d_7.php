var g1_oa_d_7 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

		//score needed
		this.setScoreNeeded(20);	
	},
	
	createQuestions: function()
        {
  		this.parent();

		this.mQuiz.mAnswerPool.push('true');
		this.mQuiz.mAnswerPool.push('false');

		this.mQuiz.resetQuestionArray();

              	for (i = 0; i < this.mScoreNeeded; i++)
		{
			var equalOrNot = Math.floor((Math.random()*2));
			var addendA = 0;
			var addendB = 0;
			var sumReal = 100;
			var sumFake = 100;

			if (equalOrNot == 0)
			{
				while(sumReal > 10)
				{
					addendA = Math.floor((Math.random()*10)+1);
					addendB = Math.floor((Math.random()*10)+1);
					sumReal = parseInt(addendA + addendB);
				}
				var question = new Question('' + addendA + ' + ' + addendB + ' = ' + sumReal,'true');
				question.mAnswerPool = this.mQuiz.mAnswerPool;
				this.mQuiz.mQuestionArray.push(question);
			}
			else if (equalOrNot == 1)
			{
				while(sumReal > 10 || sumFake == sumReal )
				{
					addendA = Math.floor((Math.random()*10)+1);
					addendB = Math.floor((Math.random()*10)+1);
					sumReal = parseInt(addendA + addendB);
					sumFake = Math.floor((Math.random()*10)+1);
				}
				var question = new Question('' + addendA + ' + ' + addendB + ' = ' + sumFake,'false');
				question.mAnswerPool = this.mQuiz.mAnswerPool;
				this.mQuiz.mQuestionArray.push(question);
			}
		}
	}
});
