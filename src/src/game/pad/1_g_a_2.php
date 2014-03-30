var g1_g_a_2 = new Class(
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
		
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();
   
		this.mQuiz.mAnswerPool.push('YES');
                this.mQuiz.mAnswerPool.push('NO');

		var question = new Question('Can you drag the triangles and rectangle together to form a parallelogram?', 'YES');
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
		
		var question = new Question('Can you drag the triangles and rectangle together to form a rectangle?', 'YES');
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);
		
		var question = new Question('Can you drag the triangles and rectangle together to form a trapezoid?', 'YES');
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(8 + this.mTotalGuiBars + this.mTotalInputBars)]);


	
               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));


		this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
		
		this.mShapeArray.push(new Triangle   (this,this.mRaphael,200,300,200,250,250,250,0,1,1,"none",.5,true)); 
		this.mShapeArray.push(new Triangle   (this,this.mRaphael,300,300,350,250,350,300,.3,1,1,"none",.5,true)); 
		this.mShapeArray.push(new Rectangle(50,50,210,210,this,this.mRaphael,.6,1,1,"none",.5,true));
		
		this.mShapeArray.push(new Triangle   (this,this.mRaphael,200,300,200,250,250,250,0,1,1,"none",.5,true)); 
		this.mShapeArray.push(new Triangle   (this,this.mRaphael,300,300,350,250,350,300,.3,1,1,"none",.5,true)); 
		this.mShapeArray.push(new Rectangle(50,50,210,210,this,this.mRaphael,.6,1,1,"none",.5,true));
		
		this.mShapeArray.push(new Triangle   (this,this.mRaphael,200,300,200,250,250,300,0,1,1,"none",.5,true)); 
		this.mShapeArray.push(new Triangle   (this,this.mRaphael,300,300,350,250,350,300,.3,1,1,"none",.5,true)); 
		this.mShapeArray.push(new Rectangle(50,50,210,210,this,this.mRaphael,.6,1,1,"none",.5,true));

	}
});
