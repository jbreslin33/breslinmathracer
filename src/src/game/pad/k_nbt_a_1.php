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
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 2 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 3 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 4 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 5 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 6 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 7 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 8 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 9 =','19'));
		//9

		//extra
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 9 =','19'));

		var totalNew           = 0;

		while (totalNew < this.mScoreNeeded * .4 || totalNew > this.mScoreNeeded * .6)
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
