var g2_oa_b_2_7 = new Class(
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
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 7 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 7 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 7 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 7 =','20'));

		//add 1  
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 10 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 11 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 12 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 13 =','20'));

		//1
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 7 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 7 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 7 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 7 =','13'));

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
