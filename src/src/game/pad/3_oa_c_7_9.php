var g3_oa_c_7_9 = new Class(
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

		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 7 =','63'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 6 =','54'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 9 =','63'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 9 =','54'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 8 =','72'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 4 =','36'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 9 =','72'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 9 =','36'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 9 =','81'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 3 =','27'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 9 =','81'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 9 =','27'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 5 =','45'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 2 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 9 =','45'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 9 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 10 =','90'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 9 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 9 =','90'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 1 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 9 =','9'));
		
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
