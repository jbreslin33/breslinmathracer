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
	
	includeGraph: function(question,numerator,denominator)
	{
		if (denominator == 2)
		{
                	question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);
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
	
               	//denominator 2 
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,300,650,300,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,325,50,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,650,325,650,275,"#0000FF",false));

                //0
                shape = new Shape(5,5,55,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('0');
                
		//0
                shape = new Shape(5,5,655,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('1');
                
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,350,325,350,275,"#0000FF",false));
                	
	}
});
