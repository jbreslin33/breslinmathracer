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
			if (numerator == 0)
			{
                		question.mShapeArray.push(this.mShapeArray[parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars)]);
                		question.mShapeArray.push(this.mShapeArray[parseInt(9 + this.mTotalGuiBars + this.mTotalInputBars)]);
			}
			if (numerator == 1)
			{
                		question.mShapeArray.push(this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)]);
			}
			if (numerator == 2)
			{
                		question.mShapeArray.push(this.mShapeArray[parseInt(8 + this.mTotalGuiBars + this.mTotalInputBars)]);
                		question.mShapeArray.push(this.mShapeArray[parseInt(9 + this.mTotalGuiBars + this.mTotalInputBars)]);
			}
		} 
		if (denominator == 3)
		{
                	question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(3 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(10 + this.mTotalGuiBars + this.mTotalInputBars)]);
                	question.mShapeArray.push(this.mShapeArray[parseInt(11 + this.mTotalGuiBars + this.mTotalInputBars)]);
                    	
			if (numerator == 0)
                        {
                                question.mShapeArray.push(this.mShapeArray[parseInt(16 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                question.mShapeArray.push(this.mShapeArray[parseInt(17 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        }
                        if (numerator == 1)
                        {
                                question.mShapeArray.push(this.mShapeArray[parseInt(13 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        }
                        if (numerator == 2)
                        {
                                question.mShapeArray.push(this.mShapeArray[parseInt(12 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        }
                        if (numerator == 3)
                        {
                                question.mShapeArray.push(this.mShapeArray[parseInt(12 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                question.mShapeArray.push(this.mShapeArray[parseInt(13 + this.mTotalGuiBars + this.mTotalInputBars)]);
                        }
		}
	},

	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();

        	//*************** question 1 
                var question = new Question('What is the value of V?', '0/2');
                question.mAnswerPool.push('1/2');
                question.mAnswerPool.push('2/2');
                question.mAnswerPool.push('0/3');
                this.mQuiz.mQuestionArray.push(question);
		this.includeGraph(question,0,2);

        	//*************** question 2 
                var question = new Question('What is the value of V?', '1/2');
                question.mAnswerPool.push('0/2');
                question.mAnswerPool.push('2/2');
                question.mAnswerPool.push('1/3');
                this.mQuiz.mQuestionArray.push(question);
		this.includeGraph(question,1,2);

        	//*************** question 3 
                var question = new Question('What is the value of V?', '2/2');
                question.mAnswerPool.push('0/2');
                question.mAnswerPool.push('1/2');
                question.mAnswerPool.push('2/3');
                this.mQuiz.mQuestionArray.push(question);
		this.includeGraph(question,2,2);
        	
		//*************** question 4 
                var question = new Question('What is the value of V?', '0/3');
                question.mAnswerPool.push('1/3');
                question.mAnswerPool.push('2/3');
                question.mAnswerPool.push('3/3');
                this.mQuiz.mQuestionArray.push(question);
		this.includeGraph(question,0,3);

		//*************** question 5 
                var question = new Question('What is the value of V?', '1/3');
                question.mAnswerPool.push('0/3');
                question.mAnswerPool.push('2/3');
                question.mAnswerPool.push('3/3');
                this.mQuiz.mQuestionArray.push(question);
		this.includeGraph(question,1,3);

		//*************** question 6 
                var question = new Question('What is the value of V?', '2/3');
                question.mAnswerPool.push('0/3');
                question.mAnswerPool.push('1/3');
                question.mAnswerPool.push('3/3');
                this.mQuiz.mQuestionArray.push(question);
		this.includeGraph(question,2,3);

		//*************** question 7 
                var question = new Question('What is the value of V?', '3/3');
                question.mAnswerPool.push('0/3');
                question.mAnswerPool.push('1/3');
                question.mAnswerPool.push('2/3');
                this.mQuiz.mQuestionArray.push(question);
		this.includeGraph(question,3,3);


		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		//this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
	
               	//*********  denominator 2 
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,300,650,300,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,325,50,275,"#0000FF",false));
                this.mShapeArray.push(new LineOne  (this,this.mRaphael,650,325,650,275,"#0000FF",false));

                //0
                shape = new Shape(5,5,55,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('0');
                
		//1
                shape = new Shape(5,5,655,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('1');
                
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,350,325,350,275,"#0000FF",false));
		
		//V at 0/2
                shape = new Shape(5,5,55,255,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('V');
		
		//V at 1/2 
                shape = new Shape(5,5,355,255,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('V');
		
		//V at 2/2 
                shape = new Shape(5,5,655,255,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('V');
		
		// 1/2 at 1/2 
                shape = new Shape(5,5,355,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('1/2');
               	
		//*********  denominator 3 
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,250,325,250,275,"#0000FF",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,450,325,450,275,"#0000FF",false));
                
 		//V at 0/3
                shape = new Shape(5,5,55,255,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('V');

                //V at 1/3
                shape = new Shape(5,5,255,255,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('V');

                //V at 2/3
                shape = new Shape(5,5,455,255,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('V');
                
		//V at 3/3
                shape = new Shape(5,5,655,255,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('V');
		
		// 1/3 at 1/3
                shape = new Shape(5,5,255,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('1/3');
		
		// 2/3 at 2/3
                shape = new Shape(5,5,455,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('2/3');

	
	}
});
