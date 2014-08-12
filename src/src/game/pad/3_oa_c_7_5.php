var g3_oa_c_7_5 = new Class(
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

		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 7 =','35'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 6 =','30'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 5 =','35'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 5 =','30'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 8 =','40'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 5 =','45'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 5 =','40'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 9 =','45'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 5 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 3 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 4 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 5 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 5 =','50'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 5 =','25'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 10 =','50'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 5 =','25'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 2 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 5 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 1 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 5 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 5 =','0'));
		
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
