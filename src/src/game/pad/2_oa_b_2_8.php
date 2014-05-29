var g2_oa_b_2_8 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mThresholdTime = 6000;
	
		this.setScoreNeeded(9);
	},
  
	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 8 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 8 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('12 + 8 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('8 + 10 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('8 + 11 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('8 + 12 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('18 - 8 =','10'));
		this.mQuiz.mQuestionArray.push(new Question('19 - 8 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 8 =','12'));
		
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
