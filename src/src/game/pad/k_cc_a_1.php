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
		this.log('createQuestions');

                this.mQuiz.resetQuestionArray();
		
		if (this.mApplication.mLevel == 1)
		{
			question = new Question('What comes next after 0?','1');  
			question.mAnswerPool.push('0');
			question.mAnswerPool.push('1');
			question.mAnswerPool.push('2');
			this.mQuiz.mQuestionArray.push(question);
			question.mRandomChoices = true;
		}	
		if (this.mApplication.mLevel == 2)
		{
                        this.setScoreNeeded(this.mApplication.mLevel);
			var L = parseInt(this.mApplication.mLevel); 
			for (i = 0; i < this.mScoreNeeded; i++)
			{
				var a = L - 1;	
				a = a + i;	
				var b = parseInt(L + i); 
				var c = L + 1;	
				c = c + i;	
				question = new Question('What comes next after ' + parseInt( parseInt(L - 1)  + i) ,'' + parseInt(L + i));  
				question.mAnswerPool.push(a);
				question.mAnswerPool.push(b);
				question.mAnswerPool.push(c);
				this.mQuiz.mQuestionArray.push(question);
				question.mRandomChoices = true;
			}
		}	
    		if (this.mApplication.mLevel == 3)
                {
                        this.setScoreNeeded(this.mApplication.mLevel);
                        var L = parseInt(this.mApplication.mLevel);
                        for (i = 0; i < this.mScoreNeeded; i++)
                        {
                                var a = L - 1;
                                a = a + i;
                                var b = parseInt(L + i);
                                var c = L + 1;
                                c = c + i;
                                question = new Question('What comes next after ' + parseInt( parseInt(L - 1)  + i) ,'' + parseInt(L + i));
                                question.mAnswerPool.push(a);
                                question.mAnswerPool.push(b);
                                question.mAnswerPool.push(c);
                                this.mQuiz.mQuestionArray.push(question);
                                question.mRandomChoices = true;
                        }
                }
		if (this.mApplication.mLevel == 4)
                {
                        this.setScoreNeeded(this.mApplication.mLevel);
                        var L = parseInt(this.mApplication.mLevel);
                        for (i = 0; i < this.mScoreNeeded; i++)
                        {
                                var a = L - 1;
                                a = a + i;
                                var b = parseInt(L + i);
                                var c = L + 1;
                                c = c + i;
                                question = new Question('What comes next after ' + parseInt( parseInt(L - 1)  + i) ,'' + parseInt(L + i));
                                question.mAnswerPool.push(a);
                                question.mAnswerPool.push(b);
                                question.mAnswerPool.push(c);
                                this.mQuiz.mQuestionArray.push(question);
                                question.mRandomChoices = true;
                        }
                }
 		if (this.mApplication.mLevel == 5)
                {
                        this.setScoreNeeded(this.mApplication.mLevel);
                        var L = parseInt(this.mApplication.mLevel);
                        for (i = 0; i < this.mScoreNeeded; i++)
                        {
                                var a = L - 1;
                                a = a + i;
                                var b = parseInt(L + i);
                                var c = L + 1;
                                c = c + i;
                                question = new Question('What comes next after ' + parseInt( parseInt(L - 1)  + i) ,'' + parseInt(L + i));
                                question.mAnswerPool.push(a);
                                question.mAnswerPool.push(b);
                                question.mAnswerPool.push(c);
                                this.mQuiz.mQuestionArray.push(question);
                                question.mRandomChoices = true;
                        }
                }
 		if (this.mApplication.mLevel == 6)
                {
                        this.setScoreNeeded(this.mApplication.mLevel);
                        var L = parseInt(this.mApplication.mLevel);
                        for (i = 0; i < this.mScoreNeeded; i++)
                        {
                                var a = L - 1;
                                a = a + i;
                                var b = parseInt(L + i);
                                var c = L + 1;
                                c = c + i;
                                question = new Question('What comes next after ' + parseInt( parseInt(L - 1)  + i) ,'' + parseInt(L + i));
                                question.mAnswerPool.push(a);
                                question.mAnswerPool.push(b);
                                question.mAnswerPool.push(c);
                                this.mQuiz.mQuestionArray.push(question);
                                question.mRandomChoices = true;
                        }
                }



		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
