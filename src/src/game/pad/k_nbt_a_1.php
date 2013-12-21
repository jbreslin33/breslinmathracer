var k_nbt_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	},

	createQuestions: function()
        {
 		this.parent();

		//add
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 1 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 2 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 3 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 4 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 5 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 6 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 7 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 8 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 9 =','19'));
		//9


		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
		var totalNew           = 0;
		var newQuestionElement = 0;
   		var elementCounter     = 0;
                
                for (i = 0; i <= 8; i++)
                {
                        if (this.mApplication.mLevel == i)
                        {
                                newQuestionElement = elementCounter;
                        }
                        elementCounter++;
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
