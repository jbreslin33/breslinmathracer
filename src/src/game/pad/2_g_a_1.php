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
	includeSquare: function(question)
	{
                question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},
	includeRectangle: function(question)
	{
                question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},
	includePentagon: function(question)
	{
                question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
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
		this.includeSquare(question);
                
		//*************** question 3 
                var question = new Question('Does this shape have atleast 2 sides of equal length?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		this.includeRectangle(question);
		
		//*************** question 4 
                var question = new Question('Is this a pentDoes this shape have atleast 2 sides of equal length?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		this.includePentagon(question);

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
		this.mShapeArray.push(new Rectangle(50,50,300,250,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(100,50,300,250,this,this.mRaphael,0,0,.5,"#19070B",1,false));
 		this.mShapeArray.push(new Pentagon (this,this.mRaphael,300,300,350,250,400,300,400,350,350,350,.3,1,1,"none",.5,true));

	}
});
