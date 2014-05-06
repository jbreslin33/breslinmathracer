var g2_oa_b_2_7 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mThresholdTime = 6000;
	
		this.setScoreNeeded(12);
	},
  
	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 7 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 7 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('12 + 7 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 7 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('7 + 10 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('7 + 11 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('7 + 12 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('7 + 13 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('17 - 7 =','10'));
		this.mQuiz.mQuestionArray.push(new Question('18 - 7 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('19 - 7 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 7 =','13'));
		
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
