var g2_oa_b_2_3 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mThresholdTime = 6000;
	
		this.setScoreNeeded(24);
	},
  
	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 3 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 3 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('12 + 3 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('13 + 3 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 3 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('15 + 3 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('16 + 3 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('17 + 3 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('3 + 10 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('3 + 11 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('3 + 12 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('3 + 13 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('3 + 14 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('3 + 15 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('3 + 16 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('3 + 17 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('13 - 3 =','10'));
		this.mQuiz.mQuestionArray.push(new Question('14 - 3 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('15 - 3 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('16 - 3 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('17 - 3 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('18 - 3 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('19 - 3 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 3 =','17'));
		
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
