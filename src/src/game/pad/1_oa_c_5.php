var g1_oa_c_5 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

                //input pad
		this.mInputPad = new LongQuestionNumberPad(application);
	},

	createQuestions: function()
        {
 		this.parent();

		this.mQuiz.resetQuestionArray();

		if (this.mApplication.mLevel == 1)
		{
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 ?','2'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 ?','4'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 ?','6'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 ?','8'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 ?','10'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 ?','12'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 ?','14'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 ?','16'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 16 ?','18'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 0 2 4 6 8 10 12 14 16 18 ?','20'));
		}
		else if (this.mApplication.mLevel == 2)
		{
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 ?','3'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 ?','5'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 ?','7'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 ?','9'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 ?','11'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 11 ?','13'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 11 13 ?','15'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 11 13 15 ?','17'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 11 13 15 17 ?','19'));
			this.mQuiz.mQuestionArray.push(new Question('Count by 2. 1 3 5 7 9 11 13 15 17 19 ?','21'));
		}
	}
});
