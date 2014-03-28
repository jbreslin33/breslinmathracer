var g1_g_a_1 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(3);

    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
	
        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
        },

	createQuestions: function()
        {
		this.parent();
	
		if (this.mApplication.mLevel < 11)	
		{
			//just the question array reset
			this.mQuiz.resetQuestionArray();
			this.mQuiz.resetQuestionPoolArray();
   
			var question = new Question('What makes this a triangle?', 'It has 3 sides');
			question.mAnswerPool.push('It is green');
			question.mAnswerPool.push('It has 3 sides'); 
			this.mQuiz.mQuestionArray.push(question);
			question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);

			var question = new Question('Is this a triangle?', 'no');
			question.mAnswerPool.push('yes');
			question.mAnswerPool.push('no'); 
			this.mQuiz.mQuestionArray.push(question);
			question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
			
			var question = new Question('What makes this a square?', 'It has 4 equal sides');
			question.mAnswerPool.push('It has 4 sides');
			question.mAnswerPool.push('It has 4 equal sides');
			this.mQuiz.mQuestionArray.push(question);
			question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
	
               		//buffer
                	this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		}
	},

	createWorld: function()
	{
		this.parent();
		
		if (this.mApplication.mLevel < 11)	
		{
			this.mShapeArray.push(new Triangle   (this,this.mRaphael,300,300,350,250,350,300,.3,1,1,"none",.5,true)); 
 			this.mShapeArray.push(new Rectangle(50,50,300,310,this,this.mRaphael,.3,1,1,"none",.5,true));
 			this.mShapeArray.push(new Rectangle(50,50,300,310,this,this.mRaphael,.3,1,1,"none",.5,true));
		}
	}
});
