var k_g_b_6 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(2);

    		this.mRaphael = Raphael(10, 35, 760, 405);
	},

	update: function()
	{
		this.parent();
	},

	createQuestions: function()
        {
		this.parent();
		
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();
   
		this.mQuiz.mAnswerPool.push('YES');
                this.mQuiz.mAnswerPool.push('NO');

		var question = new Question('Can you join the red and green triangles together to form a square?', 'YES');
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);

		var question = new Question('Can you join the red and green squares together to form a rectangle?', 'YES');
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
	
               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
		
		this.mShapeArray.push(new Triangle   (0,0,0,150,this,this.mRaphael,0,150,0,100,50,100,0,1,1,"none",.5,true)); 
		this.mShapeArray.push(new Triangle   (0,0,100,150,this,this.mRaphael,100,150,150,100,150,150,.3,1,1,"none",.5,true)); 
            
		this.mShapeArray.push(new Rectangle(50,50,10,10,this,this.mRaphael,0,1,1,"none",.5,true));
                this.mShapeArray.push(new Rectangle(50,50,100,10,this,this.mRaphael,.3,1,1,"none",.5,true));

	}
});
