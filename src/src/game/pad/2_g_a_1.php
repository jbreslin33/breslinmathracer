var g2_g_a_1 = new Class(
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

	includeTriangle: function(question)
	{
                question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},

	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();

        	//*************** question 1 
                var question = new Question('Does this shape have exactly 3 angles?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		this.includeTriangle(question);
		//question.mShapeArray.push(this.mShapeArray[parseInt(27 + this.mTotalGuiBars + this.mTotalInputBars)]);

                //*************** question 2 
/*
                var question = new Question('What is the value of the green line?', '2');
                question.mAnswerPool.push('0');
                question.mAnswerPool.push('1');
                question.mAnswerPool.push('3');
                question.mAnswerPool.push('4');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(28 + this.mTotalGuiBars + this.mTotalInputBars)]);
*/
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		//this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
	
            	//************ setup
                //this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,300,650,300,"#0000FF",false));
 		this.mShapeArray.push(new Triangle   (this,this.mRaphael,300,300,350,250,350,300,.3,1,1,"none",.5,true));
	}
});
