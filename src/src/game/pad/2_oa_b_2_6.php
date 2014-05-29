var g2_oa_b_2_6 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mThresholdTime = 6000;
	
		this.setScoreNeeded(15);
	},
  
	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 6 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 6 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('12 + 6 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 6 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 6 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('6 + 10 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('6 + 11 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('6 + 12 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('6 + 13 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('6 + 14 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('16 - 6 =','10'));
		this.mQuiz.mQuestionArray.push(new Question('17 - 6 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('18 - 6 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('19 - 6 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 6 =','14'));
		
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
