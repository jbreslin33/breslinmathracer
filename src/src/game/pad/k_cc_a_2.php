var k_cc_a_2 = new Class(
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

		if (this.mApplication.mLevel < 15)
		{		
                	this.setScoreNeeded(this.mApplication.mLevel);

			var startNumber = Math.floor(Math.random()*99);	

			for (i = 0; i < this.mScoreNeeded; i++)
			{
				var a = 0;
				var b = 0;
				var c = 0;
				correctAnswerLetter = Math.floor(Math.random()*3);	
				correctAnswer = parseInt(startNumber + i); 
				incorrectAnswerStart = correctAnswer - 3; 
				while (a == b || a == c || b == c || a < 0 || b < 0 || c < 0)
				{	
					if (correctAnswerLetter == 0)
					{
						a = correctAnswer; 
						b = incorrectAnswerStart + Math.floor(Math.random()*6);	
						c = incorrectAnswerStart + Math.floor(Math.random()*6);	
					}	
					if (correctAnswerLetter == 1)
					{
						a = incorrectAnswerStart + Math.floor(Math.random()*6);	
						b = correctAnswer; 
						c = incorrectAnswerStart + Math.floor(Math.random()*6);	
					}	
					if (correctAnswerLetter == 2)
					{
						a = incorrectAnswerStart + Math.floor(Math.random()*6);	
						b = incorrectAnswerStart + Math.floor(Math.random()*6);	
						c = correctAnswer; 
					}	
				}	
				question = new Question('What comes next after ' + parseInt( parseInt(startNumber - 1)  + i) ,'' + parseInt(startNumber + i));  
				question.mAnswerPool.push(a);
				question.mAnswerPool.push(b);
				question.mAnswerPool.push(c);
				this.mQuiz.mQuestionArray.push(question);
			}
		}
		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
