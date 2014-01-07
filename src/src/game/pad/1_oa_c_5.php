var g1_oa_c_6 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

                //input pad
		this.mInputPad = new LongQuestionNumberPad(application);
	},

	createQuestions: function()
        {
 		this.parent();

		if (this.mApplication.mLevel == 1)
		{
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 ?','2'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 ?','4'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 ?','6'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 ?','8'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 ?','10'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 ?','12'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 ?','14'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 ?','16'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 16 ?','18'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 16 18 ?','20'));
		}
		else if (this.mApplication.mLevel == 2)
		{
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 ?','2'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 ?','4'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 ?','6'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 ?','8'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 ?','10'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 ?','12'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 ?','14'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 ?','16'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 16 ?','18'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 16 18 ?','20'));
		}

                
		while (totalNew < totalNewGoal)
		{	
			//reset vars and arrays
			totalNew = 0;
			for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
			{
				this.mQuiz.mQuestionArray[d] = 0;
			} 
			this.mQuiz.mQuestionArray = 0;
			this.mQuiz.mQuestionArray = new Array();

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[newQuestionElement]);
					totalNew++;
				}	
				if (randomChance == 1)
				{
					var randomElement = Math.floor((Math.random()*newQuestionElement));		
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
				}
			}
		}
	}
});
