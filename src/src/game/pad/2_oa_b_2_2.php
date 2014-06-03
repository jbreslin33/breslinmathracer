var g2_oa_b_2_2 = new Class(
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
                
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 2 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 2 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('12 + 2 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('13 + 2 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 2 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('15 + 2 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('16 + 2 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('17 + 2 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('18 + 2 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('2 + 10 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 11 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 12 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 13 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 14 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 15 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 16 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 17 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 18 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('12 - 2 =','10'));
		this.mQuiz.mQuestionArray.push(new Question('13 - 2 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('14 - 2 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('15 - 2 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('16 - 2 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('17 - 2 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('18 - 2 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('19 - 2 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 2 =','18'));
	
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
