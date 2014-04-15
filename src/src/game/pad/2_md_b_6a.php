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

		//*********** question 1
		var question = new Question('If A equals 0 and B equals 1, what does C equal?', '2');
		question.mAnswerPool.push('0');
		question.mAnswerPool.push('1'); 
		question.mAnswerPool.push('3'); 
		question.mAnswerPool.push('4'); 
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);
		question.mShapeArray.push(this.mShapeArray[parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars)]);
               
        	//*************** question2 
                var question = new Question('If A equals 0 and B equals 1, what does C equal?', '2');
                question.mAnswerPool.push('0');
                question.mAnswerPool.push('1');
                question.mAnswerPool.push('3');
                question.mAnswerPool.push('4');
                this.mQuiz.mQuestionArray.push(question);
                question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);
                question.mShapeArray.push(this.mShapeArray[parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars)]);

	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		//this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
	
	
		//***********Question 1		
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,300,650,300,"#0000FF",false)); 
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,325,50,275,"#0000FF",false)); 
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,100,325,100,275,"#0000FF",false)); 
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,150,325,150,275,"#0000FF",false)); 

		//0
		shape = new Shape(5,5,55,275,this,"","","");	
		this.mShapeArray.push(shape);	
		shape.setText('A');
		
		//1
		shape = new Shape(5,5,105,275,this,"","","");	
		this.mShapeArray.push(shape);	
		shape.setText('B');
		
		//2
		shape = new Shape(5,5,155,275,this,"","","");	
		this.mShapeArray.push(shape);	
		shape.setText('C');
	
            	//************Question 2 
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,300,650,300,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,325,50,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,100,325,100,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,150,325,150,275,"#0000FF",false));

                //0
                shape = new Shape(5,5,55,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('A');

                //1
                shape = new Shape(5,5,105,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('B');

                //2
                shape = new Shape(5,5,155,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('C');
	
	}
});
