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

	getStartNumber: function()
	{
		var startNumber = 1; 
		for(i = 0; i < this.mApplication.mLevel; i++)
		{
			startNumber = startNumber + i;	
		} 	
		return startNumber;
	},

	createQuestions: function()
        {
 		this.parent();
		this.log('createQuestions');

                this.mQuiz.resetQuestionArray();

		if (this.mApplication.mLevel < 15)
		{		
                	this.setScoreNeeded(this.mApplication.mLevel);

			var startNumber = this.getStartNumber();		

			for (i = 0; i < this.mScoreNeeded; i++)
			{
				var a = startNumber - 1;	
				a = a + i;	
				var b = parseInt(startNumber + i); 
				var c = startNumber + 1;	
				c = c + i;	
				question = new Question('What comes next after ' + parseInt( parseInt(startNumber - 1)  + i) ,'' + parseInt(startNumber + i));  
				question.mAnswerPool.push(a);
				question.mAnswerPool.push(b);
				question.mAnswerPool.push(c);
				this.mQuiz.mQuestionArray.push(question);
				question.mRandomChoices = true;
			}
		}
 		if (this.mApplication.mLevel == 15)
                {
                        this.setScoreNeeded(10);
                        
			var startNumber = 10;

                        for (i = 0; i < this.mScoreNeeded; i++)
                        {
                                var a = parseInt(startNumber);
                                var b = startNumber + 10;
                                var c = startNumber + 20;
                                question = new Question('When counting by 10 what comes next after ' + startNumber, parseInt(startNumber + 10));
                                question.mAnswerPool.push(a);
                                question.mAnswerPool.push(b);
                                question.mAnswerPool.push(c);
                                this.mQuiz.mQuestionArray.push(question);
                                question.mRandomChoices = true;
				startNumber = startNumber + 10;
                        }
                }

		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
