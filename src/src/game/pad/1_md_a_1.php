var g1_md_a_1 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(2);

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
   
		this.mQuiz.mAnswerPool.push('Red Green Blue');
		this.mQuiz.mAnswerPool.push('Red Blue Green');
                this.mQuiz.mAnswerPool.push('Green Blue Red');
                this.mQuiz.mAnswerPool.push('Green Red Blue');
                this.mQuiz.mAnswerPool.push('Blue Red Green');
                this.mQuiz.mAnswerPool.push('Blue Green Red');

		var question = new Question('Order shapes by length from shortest to longest.', 'Red Green Blue');
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		this.mQuiz.mQuestionArray.push(question);

		this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(100,50);
		question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);

		var question = new Question('Order shapes by length from shortest to longest.', 'Red Green Blue');
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);
	
               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();

		this.mShapeArray.push(new Rectangle(50,50,475,310,this,this.mRaphael,0,1,1,"none",.5,true));
                this.mShapeArray.push(new Rectangle(50,50,575,310,this,this.mRaphael,.3,1,1,"none",.5,true));
                this.mShapeArray.push(new Rectangle(50,50,675,310,this,this.mRaphael,.6,1,1,"none",.5,true));
		
		this.mShapeArray.push(new Rectangle(50,50,210,210,this,this.mRaphael,0,1,1,"none",.5,true));
                this.mShapeArray.push(new Rectangle(50,50,300,310,this,this.mRaphael,.3,1,1,"none",.5,true));
                this.mShapeArray.push(new Rectangle(50,50,410,310,this,this.mRaphael,.3,1,1,"none",.5,true));
	}
});
