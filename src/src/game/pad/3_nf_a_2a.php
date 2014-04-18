var g3_nf_a_2a = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(12);

    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
	
        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
        },
/*
	includeGraph: function(question)
	{
                question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(8 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(9 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(10 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(11 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(12 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(13 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(14 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(15 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(16 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(17 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(18 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(19 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(20 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(21 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(22 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(23 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(24 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(25 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(26 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},
*/
	includeGraph: function(question,numerator,denominator)
	{
		if (denominator == 2)
		{
                	question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
		} 
	},

	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();

        	//*************** question 1 
                var question = new Question('What is the value of V?', '1');
                question.mAnswerPool.push('0');
                question.mAnswerPool.push('2');
                question.mAnswerPool.push('3');
                question.mAnswerPool.push('4');
                this.mQuiz.mQuestionArray.push(question);
		this.includeGraph(question,2,2);

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
	
            	//************ setup
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,300,650,300,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,325,50,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,650,325,650,275,"#0000FF",false));
                //0
                shape = new Shape(5,5,55,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('0');

/*
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,300,650,300,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,325,50,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,100,325,100,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,150,325,150,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,200,325,200,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,250,325,250,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,300,325,300,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,350,325,350,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,400,325,400,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,450,325,450,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,500,325,500,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,550,325,550,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,600,325,600,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,650,325,650,275,"#0000FF",false));
*/
	}
});
