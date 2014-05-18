var g2_oa_b_2_1 = new Class(
{
Extends: NumberPad,
	initialize: function(application)
	{
       		this.parent(application);
		this.mThresholdTime = 6000;
		this.setScoreNeeded(28);
	},
  
	createQuestions: function()
        {
 		this.parent();
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 1 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 1 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('12 + 1 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('13 + 1 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 1 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('15 + 1 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('16 + 1 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('17 + 1 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('18 + 1 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('19 + 1 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('1 + 10 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('1 + 11 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('1 + 12 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('1 + 13 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('1 + 14 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('1 + 16 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('1 + 17 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('1 + 18 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('1 + 19 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('12 - 1 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('13 - 1 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('14 - 1 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('15 - 1 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('16 - 1 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('17 - 1 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('18 - 1 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('19 - 1 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 1 =','19'));
		
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
