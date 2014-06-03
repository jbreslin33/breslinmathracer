var g2_oa_b_2_4 = new Class(
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
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 4 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 4 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 4 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 4 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 4 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 4 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 4 =','20'));

		//add 1  
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 10 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 11 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 12 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 13 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 14 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 15 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 16 =','20'));

		//1
		this.mQuiz.mQuestionPoolArray.push(new Question('14 - 4 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 - 4 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 - 4 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 - 4 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 - 4 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('19 - 4 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('20 - 4 =','16'));
 
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
