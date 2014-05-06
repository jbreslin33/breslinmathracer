var g2_oa_b_2_9 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mThresholdTime = 6000;
	
		this.setScoreNeeded(6);
	},
  
	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 9 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 9 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('9 + 10 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('9 + 11 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('19 - 9 =','10'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 9 =','11'));
		
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
