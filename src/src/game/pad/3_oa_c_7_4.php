var g3_oa_c_7_4 = new Class(
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

		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 1 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 2 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 3 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 4 =','24'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 5 =','30'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 6 =','36'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 7 =','42'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 8 =','48'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 9 =','54'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 10 =','60'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 6 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 6 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 6 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 6 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 6 =','24'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 6 =','30'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 6 =','36'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 6 =','42'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 6 =','48'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 6 =','54'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 6 =','60'));
		
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
  		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
