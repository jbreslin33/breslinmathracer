var g2_md_b_6a = new Class(
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
                question.mShapeArray.push(this.mShapeArray[parseInt(27 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},

	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();

        	//*************** question 1 
                var question = new Question('What is the value of the green line?', '1');
                question.mAnswerPool.push('0');
                question.mAnswerPool.push('2');
                question.mAnswerPool.push('3');
                question.mAnswerPool.push('4');
                this.mQuiz.mQuestionArray.push(question);
		this.includeGraph(question);

                //*************** question 2 
                var question = new Question('What is the value of the green line?', '2');
                question.mAnswerPool.push('0');
                question.mAnswerPool.push('1');
                question.mAnswerPool.push('3');
                question.mAnswerPool.push('4');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

                //*************** question 3 
                var question = new Question('What is the value of the green line?', '3');
                question.mAnswerPool.push('1');
                question.mAnswerPool.push('2');
                question.mAnswerPool.push('4');
                question.mAnswerPool.push('5');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

                //*************** question 4 
                var question = new Question('What is the value of the green line?', '4');
                question.mAnswerPool.push('2');
                question.mAnswerPool.push('3');
                question.mAnswerPool.push('5');
                question.mAnswerPool.push('6');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

                //*************** question 5 
                var question = new Question('What is the value of the green line?', '5');
                question.mAnswerPool.push('3');
                question.mAnswerPool.push('4');
                question.mAnswerPool.push('6');
                question.mAnswerPool.push('7');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

                //*************** question 6 
                var question = new Question('What is the value of the green line?', '6');
                question.mAnswerPool.push('4');
                question.mAnswerPool.push('5');
                question.mAnswerPool.push('7');
                question.mAnswerPool.push('8');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

                //*************** question 7 
                var question = new Question('What is the value of the green line?', '7');
                question.mAnswerPool.push('5');
                question.mAnswerPool.push('6');
                question.mAnswerPool.push('8');
                question.mAnswerPool.push('9');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

                //*************** question 8   
                var question = new Question('What is the value of the green line?', '8');
                question.mAnswerPool.push('6');
                question.mAnswerPool.push('7');
                question.mAnswerPool.push('9');
                question.mAnswerPool.push('10');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

                //*************** question 9 
                var question = new Question('What is the value of the green line?', '9');
                question.mAnswerPool.push('7');
                question.mAnswerPool.push('8');
                question.mAnswerPool.push('10');
                question.mAnswerPool.push('11');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

                //*************** question 10
                var question = new Question('What is the value of the green line?', '10');
                question.mAnswerPool.push('8');
                question.mAnswerPool.push('9');
                question.mAnswerPool.push('11');
                question.mAnswerPool.push('12');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

                //*************** question 11
                var question = new Question('What is the value of the green line?', '11');
                question.mAnswerPool.push('9');
                question.mAnswerPool.push('10');
                question.mAnswerPool.push('12');
                question.mAnswerPool.push('13');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

                //*************** question 12
                var question = new Question('What is the value of the green line?', '12');
                question.mAnswerPool.push('10');
                question.mAnswerPool.push('11');
                question.mAnswerPool.push('13');
                question.mAnswerPool.push('14');
                this.mQuiz.mQuestionArray.push(question);
                this.includeGraph(question);

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		//this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
	
            	//************ setup
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

                //0
                shape = new Shape(5,5,55,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('0');

                //1
                shape = new Shape(5,5,105,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('1');

                //2
                shape = new Shape(5,5,155,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('2');
                
		//3
                shape = new Shape(5,5,205,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('3');
               
		//4
                shape = new Shape(5,5,255,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('4');

		//5
                shape = new Shape(5,5,305,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('5');

		//6
                shape = new Shape(5,5,355,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('6');

		//7
                shape = new Shape(5,5,405,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('7');

		//8
                shape = new Shape(5,5,455,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('8');

		//9
                shape = new Shape(5,5,505,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('9');

		//10
                shape = new Shape(5,5,555,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('10');

		//11
                shape = new Shape(5,5,605,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('11');
		
		//12
                shape = new Shape(5,5,655,275,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('12');
 
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,100,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,150,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,200,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,250,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,300,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,350,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,400,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,450,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,500,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,550,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,600,287,"#00FF00",false));
		this.mShapeArray.push(new LineOne  (this,this.mRaphael,50,287,650,287,"#00FF00",false));
                
	
	}
});
