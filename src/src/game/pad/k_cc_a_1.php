var k_cc_a_1 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(1);
	},

        createNumQuestion: function()
        {
                this.parent();

                //question
                this.mNumQuestion.setPosition(165,135);
                this.mNumQuestion.setSize(225,20);
        },

	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(200,200);
   		this.mShapeArray[1].setPosition(200,200);
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.parent();

		this.setScoreNeeded(1);

                this.mShapeArray[0].setPosition(400,50);

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(200,200);
        },

	createQuestions: function()
        {
 		this.parent();

                this.mQuiz.resetQuestionArray();
		
		var countBy = 1;	
		var startNumber = 0;
 		    				
		if (this.mApplication.mLevel > 0)
		{
			//startNumber = 0;
			question = new Question('What comes next after 0?','1');  
			question.mAnswerPool.push('0');
			question.mAnswerPool.push('1');
			question.mAnswerPool.push('2');
			this.mQuiz.mQuestionArray.push(question);
		}	
/*
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			this.mQuiz.mQuestionArray.push(new Question('When counting by ' + countBy + ' what comes after ' + parseInt(startNumber + countBy * i) + '?','' + parseInt(startNumber + countBy + countBy * i)));
		}
*/
		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
