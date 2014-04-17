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
	includeRectangle: function(question)
	{
                question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
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

                //*************** question 2 
                var question = new Question('Does this shape have exactly 4 angles?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		this.includeRectangle(question);

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		//this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
	
            	//************ setup
 		this.mShapeArray.push(new Triangle (this,this.mRaphael,300,300,350,250,350,300,.3,1,1,"none",.5,true));
		this.mShapeArray.push(new Rectangle(50,50,50,200,this,this.mRaphael,0,0,.5,"#19070B",1,false));

	}
});
