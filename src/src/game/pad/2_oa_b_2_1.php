var g2_oa_b_2_1 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mThresholdTime = 6000;
	},
  
	createQuestions: function()
        {
 		this.parent();

		//add 1
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 1 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 1 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 1 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 1 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 1 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 1 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 1 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 + 1 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 + 1 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 + 1 =','20'));

		//add 1  
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 10 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 11 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 12 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 13 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 14 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 16 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 17 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 18 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 19 =','20'));

		//1
		this.mQuiz.mQuestionPoolArray.push(new Question('12 - 1 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 - 1 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 1 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 1 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 1 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 1 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 1 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 1 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 1 =','19'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('buf','buf'));

		var totalNew           = 0;
		
		while (totalNew < this.mScoreNeeded * .4 || totalNew > this.mScoreNeeded * .6)
		{	
			//reset vars and arrays
			totalNew = 0;

			this.mQuiz.resetQuestionArray();		
		
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[parseInt(this.mApplication.mLevel-1)]);
					totalNew++;
				}	
				if (randomChance == 1)
				{
					var randomElement = Math.floor((Math.random()*parseInt(this.mApplication.mLevel-1)));		
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
				}
			}
		}
	}
});
