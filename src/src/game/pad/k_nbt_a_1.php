var k_nbt_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

                //input pad
                this.mInputPad = new NumberPad(application);

		this.setScoreNeeded(20);
	},

	createQuestions: function()
        {
 		this.parent();

		//add
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 1 =','11'));
//		this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = '10 + 1 is like 0 + 1.';

		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 2 =','12'));
//		this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = '10 + 2 is like 0 + 2.';

		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 3 =','13'));
//		this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = '10 + 3 is like 0 + 3.';
		
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 4 =','14'));
//		this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = '10 + 4 is like 0 + 4.';
		
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 5 =','15'));
//		this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = '10 + 5 is like 0 + 5.';

		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 6 =','16'));
//		this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = '10 + 6 is like 0 + 6.';

		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 7 =','17'));
//		this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = '10 + 7 is like 0 + 7.';
		
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 8 =','18'));
//		this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = '10 + 8 is like 0 + 8.';

		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 9 =','19'));
//		this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = '10 + 9 is like 0 + 9.';

		//extra
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 9 =','19'));
//		this.mQuiz.mQuestionPoolArray[0].mTipArray[0] = '10 + 9 is like 0 + 9.';

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
