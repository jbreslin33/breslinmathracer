var g4_oa_a_3 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(1);
	},

        createInput: function()
        {
                this.parent();
                this.mButtonA.setPosition(135,290);
                this.mButtonB.setPosition(385,290);
                this.mButtonC.setPosition(635,290);
                
		this.mButtonA.setSize(240,220);
		this.mButtonB.setSize(240,220);
		this.mButtonC.setSize(240,220);
        },

        createNumQuestion: function()
        {
                this.parent();
                this.mNumQuestion.setSize(650,200);
                this.mNumQuestion.setPosition(350,140);
        },

	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(200,200);
   		this.mShapeArray[1].setPosition(200,200);
        },

	makeTypeA: function()
	{
		question = new Question('There are 9 blue pencils in a desk drawer. There are 8 more red pencils than blue pencils, and there are twice as many green pencils as red pencils. How many pencils are there altogether?','Find the number of red pencils: 9+8=17. Find the number of green pencils: 2x17=34. Find the total number of pencils: 9+17+34=60.'); 
 		question.mAnswerPool.push('Find the number of red pencils: 9+8=17. Find the number of green pencils: 2+7=9. Find the total number of pencils: 9+17+9=35.');
               	question.mAnswerPool.push('Find the number green pencils: 9+8=17. Find the number of red pencils: 2x8=16. Find the total number of pencils: 9+17+16=42');
                question.mAnswerPool.push('Find the number of red pencils: 9+8=17. Find the number of green pencils: 2x17=34. Find the total number of pencils: 9+17+34=60.');

                this.mQuiz.mQuestionArray.push(question);
	},	

	createQuestions: function()
        {
 		this.parent();

                this.mQuiz.resetQuestionArray();

		this.makeTypeA();	

/*
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
*/
		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
