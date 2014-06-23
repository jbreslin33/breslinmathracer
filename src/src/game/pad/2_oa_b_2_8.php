var g2_oa_b_2_8 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		this.mThresholdTime = 6000;
		this.setScoreNeeded(10);
	},
  
	createQuestions: function()
        {
 		this.parent();
                
		//add 1
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 8 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 8 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 8 =','20'));

		//add 1  
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 10 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 11 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 12 =','20'));

		//1
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 8 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 8 =','12'));
	
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
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[this.mApplication.mLevel]);
                                        totalNew++;
                                }
                                if (randomChance == 1)
                                {
                                        var randomElement = Math.floor((Math.random()*parseInt(this.mApplication.mLevel)));
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
                                }
                        }
                }
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
