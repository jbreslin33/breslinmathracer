var g2_oa_b_2_5 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mThresholdTime = 6000;
	
		this.setScoreNeeded(18);
	},
  
	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 5 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 5 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('12 + 5 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 5 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 5 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('15 + 5 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('5 + 10 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('5 + 11 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('5 + 12 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('5 + 13 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('5 + 14 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('5 + 15 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('15 - 5 =','10'));
		this.mQuiz.mQuestionArray.push(new Question('16 - 5 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('17 - 5 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('18 - 5 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('19 - 5 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 5 =','15'));
		
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
