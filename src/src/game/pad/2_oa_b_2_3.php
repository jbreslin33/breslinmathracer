var g2_oa_b_2_3 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mThresholdTime = 6000;
	
		this.setScoreNeeded(27);
	},
  
	createQuestions: function()
        {
 		this.parent();
                
		this.mQuiz.resetQuestionArray();

		//add 1
		this.mQuiz.mQuestionArray.push(new Question('10 + 2 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('11 + 2 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('12 + 2 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('13 + 2 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('14 + 2 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('15 + 2 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('16 + 2 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('17 + 2 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('18 + 2 =','20'));

		//add 1  
		this.mQuiz.mQuestionArray.push(new Question('2 + 10 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 11 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 12 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 13 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 14 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 15 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 16 =','18'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 17 =','19'));
		this.mQuiz.mQuestionArray.push(new Question('2 + 18 =','20'));

		//1
		this.mQuiz.mQuestionArray.push(new Question('12 - 2 =','10'));
		this.mQuiz.mQuestionArray.push(new Question('13 - 2 =','11'));
		this.mQuiz.mQuestionArray.push(new Question('14 - 2 =','12'));
		this.mQuiz.mQuestionArray.push(new Question('15 - 2 =','13'));
		this.mQuiz.mQuestionArray.push(new Question('16 - 2 =','14'));
		this.mQuiz.mQuestionArray.push(new Question('17 - 2 =','15'));
		this.mQuiz.mQuestionArray.push(new Question('18 - 2 =','16'));
		this.mQuiz.mQuestionArray.push(new Question('19 - 2 =','17'));
		this.mQuiz.mQuestionArray.push(new Question('20 - 2 =','18'));
		
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
