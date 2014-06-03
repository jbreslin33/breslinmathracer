var g2_oa_b_2_9 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mThresholdTime = 6000;
	
		this.setScoreNeeded(6);
	},
  
	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 9 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 9 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('9 + 10 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('9 + 11 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('19 - 9 =','10'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 9 =','11'));
	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
 
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
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[this.mApplication.mLevel - 1]);
                                        totalNew++;
                                }
                                if (randomChance == 1)
                                {
                                        var randomElement = Math.floor((Math.random()*parseInt(this.mApplication.mLevel - 1)));
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
                                }
                        }
                }
	
	}
});
