var g3_g_a_1 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(27);

    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
	
        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();
                //this.mShapeArray[1].setVePosition(100,80);
                this.mShapeArray[9].setVisibility(false);
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
	includeHexagon: function(question)
	{
                question.mShapeArray.push(this.mShapeArray[parseInt(4 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},
	includeCube: function(question)
	{
                question.mShapeArray.push(this.mShapeArray[parseInt(5 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},
	includeParallelogram: function(question)
	{
                question.mShapeArray.push(this.mShapeArray[parseInt(6 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},
	includeRhombus: function(question)
	{
                question.mShapeArray.push(this.mShapeArray[parseInt(7 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},

	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();
		
		//*************** question 1 
                var question = new Question('Which is a quadrateral?', 'trapezoid');
                question.mAnswerPool.push('trapezoid');
                question.mAnswerPool.push('hexagon');
                question.mAnswerPool.push('cube');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 2 
                var question = new Question('Which is a quadrateral?', 'rhombus');
                question.mAnswerPool.push('rhombus');
                question.mAnswerPool.push('circle');
                question.mAnswerPool.push('triangle');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 3 
                var question = new Question('Which is a quadrateral?', 'parallelogram');
                question.mAnswerPool.push('parallelogram');
                question.mAnswerPool.push('sphere');
                question.mAnswerPool.push('triangle');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 4 
                var question = new Question('Which is a quadrateral?', 'rectangle');
                question.mAnswerPool.push('rectangle');
                question.mAnswerPool.push('pentagon');
                question.mAnswerPool.push('triangle');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 5 
                var question = new Question('Which is a quadrateral?', 'square');
                question.mAnswerPool.push('square');
                question.mAnswerPool.push('circle');
                question.mAnswerPool.push('hexagon');
                this.mQuiz.mQuestionArray.push(question);
	
		//*************** question 6 
                var question = new Question('Which is not a quadrateral?', 'cube');
                question.mAnswerPool.push('cube');
                question.mAnswerPool.push('rectangle');
                question.mAnswerPool.push('square');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 7 
                var question = new Question('Which is not a quadrateral?', 'sphere');
                question.mAnswerPool.push('sphere');
                question.mAnswerPool.push('trapezoid');
                question.mAnswerPool.push('rhombus');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 8 
                var question = new Question('Which is not a quadrateral?', 'hexagon');
                question.mAnswerPool.push('hexagon');
                question.mAnswerPool.push('square');
                question.mAnswerPool.push('rhombus');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 9 
                var question = new Question('Which is not a quadrateral?', 'pentagon');
                question.mAnswerPool.push('pentagon');
                question.mAnswerPool.push('rectangle');
                question.mAnswerPool.push('parallelogram');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 10 
                var question = new Question('Which is not a quadrateral?', 'circle');
                question.mAnswerPool.push('circle');
                question.mAnswerPool.push('rhombus');
                question.mAnswerPool.push('parallelogram');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 11 
                var question = new Question('Which is not a quadrateral?', 'triangle');
                question.mAnswerPool.push('triangle');
                question.mAnswerPool.push('square');
                question.mAnswerPool.push('rectangle');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 12 
                var question = new Question('How many sides does a quadrateral have?', '4');
                question.mAnswerPool.push('3');
                question.mAnswerPool.push('4');
                question.mAnswerPool.push('5');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 13 
                var question = new Question('Is a sphere a quadralateral?', 'NO');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 14 
                var question = new Question('Is a circle a quadralateral?', 'NO');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 15 
                var question = new Question('Is a cube a quadralateral?', 'NO');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 16 
                var question = new Question('Is a pentagon a quadralateral?', 'NO');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
	
		//*************** question 17 
                var question = new Question('Is a hexagon a quadralateral?', 'NO');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
	
		//*************** question 18 
                var question = new Question('Is a triangle a quadralateral?', 'NO');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 19 
                var question = new Question('Is a trapezoid a quadralateral?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 20 
                var question = new Question('Is a rhombus a quadralateral?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 21 
                var question = new Question('Is a parallelogram a quadralateral?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 22 
                var question = new Question('Is a rectangle a quadralateral?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);

		//*************** question 23 
                var question = new Question('Is a square a quadralateral?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		
		//*************** question 24 
                var question = new Question('Is this a quadralateral?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		this.includeRhombus(question);
		
		//*************** question 25 
                var question = new Question('Is this a quadralateral?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		this.includeParallelogram(question);
		
		//*************** question 26 
                var question = new Question('Is this a quadralateral?', 'NO');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		this.includeTriangle(question);
		
		//*************** question 27
                var question = new Question('Is this a quadralateral?', 'YES');
                question.mAnswerPool.push('NO');
                question.mAnswerPool.push('YES');
                this.mQuiz.mQuestionArray.push(question);
		this.includeRectangle(question);

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
	
            	//************ setup
 		this.mShapeArray.push(new Triangle (this,this.mRaphael,300,300,350,250,350,300,.3,1,1,"none",.5,true));
		this.mShapeArray.push(new Rectangle(50,50,300,250,this,this.mRaphael,0,0,.5,"#19070B",1,false));
		this.mShapeArray.push(new Rectangle(100,50,300,250,this,this.mRaphael,0,0,.5,"#19070B",1,false));
 		this.mShapeArray.push(new Pentagon (this,this.mRaphael,300,300,350,250,400,300,375,350,325,350,.3,1,1,"none",.5,true));
 		this.mShapeArray.push(new Hexagon  (this,this.mRaphael,300,300, 325,250, 375,250, 400,300, 375,350, 325, 350,.3,1,1,"none",.5,true));
  		this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/cube.jpg","",""));
 		this.mShapeArray.push(new Parallelogram  (this,this.mRaphael, 300,300, 325,250, 475,250, 450,300 ,.3,1,1,"none",.5,true));
 		this.mShapeArray.push(new Rhombus  (this,this.mRaphael, 300,300, 400,250, 500,250, 400,300 ,.3,1,1,"none",.5,true));
	}
});
