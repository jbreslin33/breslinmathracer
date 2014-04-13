var g2_md_b_6a = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(5);

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

		var question = new Question('This blue shape has 4 sides, is it a rectangle?', 'no');
		question.mAnswerPool.push('yes');
		question.mAnswerPool.push('no'); 
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mTipArray[0] = 'A rectangle has 4 sides that touch.';
			
		var question = new Question('This blue shape has three sides, is it a triangle?', 'no');
		question.mAnswerPool.push('yes');
		question.mAnswerPool.push('no'); 
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mTipArray[0] = 'A triangle has 3 sides that touch.';
   
		var question = new Question('What makes this a triangle?', 'It has 3 sides that touch');
		question.mAnswerPool.push('It is green');
		question.mAnswerPool.push('It has 3 sides that touch'); 
		question.mAnswerPool.push('It has 3 sides'); 
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)]);

		var question = new Question('Is this a triangle?', 'no');
		question.mAnswerPool.push('yes');
		question.mAnswerPool.push('no'); 
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(8 + this.mTotalGuiBars + this.mTotalInputBars)]);
			
		var question = new Question('What makes this a square?', 'It has 4 equal sides that touch');
		question.mAnswerPool.push('It has 4 sides');
		question.mAnswerPool.push('It has 4 equal sides');
		question.mAnswerPool.push('It has 4 equal sides that touch');
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(9 + this.mTotalGuiBars + this.mTotalInputBars)]);
	
               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		//this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
		
		if (this.mApplication.mLevel < 11)	
		{
			this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,300,650,300,"#0000FF",false)); 
			this.mShapeArray.push(new LineOne  (this,this.mRaphael,100,250,150,250,"#0000FF",false)); 
			this.mShapeArray.push(new LineOne  (this,this.mRaphael,150,250,150,300,"#0000FF",false)); 
			this.mShapeArray.push(new LineOne  (this,this.mRaphael,150,300,125,300,"#0000FF",false)); 

			this.mShapeArray.push(new LineOne  (this,this.mRaphael,100,300,150,250,"#0000FF",false)); 
			this.mShapeArray.push(new LineOne  (this,this.mRaphael,150,250,150,300,"#0000FF",false)); 
			this.mShapeArray.push(new LineOne  (this,this.mRaphael,150,300,125,300,"#0000FF",false)); 

			this.mShapeArray.push(new Triangle (this,this.mRaphael,100,300,150,250,150,300,.3,1,1,"none",.5,false)); 
 			this.mShapeArray.push(new Rectangle(50,50,100,310,this,this.mRaphael,.3,1,1,"none",.5,false));
 			this.mShapeArray.push(new Rectangle(50,50,100,310,this,this.mRaphael,.3,1,1,"none",.5,false));
		}
	}
});
