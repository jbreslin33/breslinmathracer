var g3_oa_c_7g = new Class(
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

		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 8 =','56'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 7 =','42'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 7 =','56'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 9 =','63'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 6 =','42'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 7 =','63'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 7 =','28'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 7 =','21'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 3 =','21'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 4 =','28'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 7 =','35'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 7 =','49'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 5 =','35'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 7 =','70'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 7 =','49'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 10 =','70'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 7 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 7 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 2 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 7 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 1 =','7'));
		
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
