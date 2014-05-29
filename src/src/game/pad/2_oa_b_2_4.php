var g2_oa_b_2_4 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mThresholdTime = 6000;
	
		this.setScoreNeeded(21);
	},
  
	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 4 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 4 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('12 + 4 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 4 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 4 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('15 + 4 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('16 + 4 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('4 + 10 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('4 + 11 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('4 + 12 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('4 + 13 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('4 + 14 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('4 + 15 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('4 + 16 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('14 - 4 =','10'));
		this.mQuiz.mQuestionArray.push(new Question('15 - 4 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('16 - 4 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('17 - 4 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('18 - 4 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('19 - 4 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 4 =','16'));
		
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
