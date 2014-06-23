var g3_oa_c_7_8 = new Class(
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

		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 7 =','56'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 9 =','72'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 8 =','56'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 8 =','72'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 4 =','32'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 3 =','24'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 8 =','32'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 8 =','24'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 6 =','48'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 8 =','64'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 8 =','48'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 8 =','64'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 2 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 5 =','40'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 8 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 8 =','40'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 10 =','80'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 8 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 8 =','80'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 1 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 8 =','0'));
		
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
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[parseInt(this.mApplication.mLevel)]);
                                        totalNew++;
                                }
                                if (randomChance == 1)
                                {
                                        var randomElement = Math.floor((Math.random()*parseInt(this.mApplication.mLevel)));           
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
                                }
                        }
                }
  		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
