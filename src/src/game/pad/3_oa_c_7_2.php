var g3_oa_c_7_2 = new Class(
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

		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 9 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 8 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 2 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 2 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 7 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 2 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 2 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 6 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 10 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 2 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 4 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 2 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 2 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 5 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 2 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 2 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 3 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 2 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 1 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 2 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 2 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 0 =','0'));
		
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
