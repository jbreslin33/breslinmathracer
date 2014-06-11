var g4_oa_a_2 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(12);

    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
        
	createNumQuestion: function()
        {
		this.parent();
                this.mNumQuestion.setSize(250,200);
                this.mNumQuestion.setPosition(140,140);
        },

	createInput: function()
	{
		this.parent();
		this.mButtonA.setPosition(375,100);
		this.mButtonB.setPosition(525,100);
		this.mButtonC.setPosition(675,100);
	},

        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
        },

	includeLetters: function(question)
	{
 		question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
 		question.mShapeArray.push(this.mShapeArray[parseInt(1 + this.mTotalGuiBars + this.mTotalInputBars)]);
 		question.mShapeArray.push(this.mShapeArray[parseInt(2 + this.mTotalGuiBars + this.mTotalInputBars)]);
	},

	
	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();

        	//*************** question 1 
                var question = new Question('A teacher put the kids desks in 5 rows with 7 desks in each row. How could we show this problem in pictures?', 'A');
                question.mAnswerPool.push('A');
                question.mAnswerPool.push('B');
                question.mAnswerPool.push('C');
                this.mQuiz.mQuestionArray.push(question);
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
		this.includeLetters(question);

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
		//A
                shape = new Shape(5,5,50,200,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('A');

		//B
                shape = new Shape(5,5,350,200,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('B');

		//C
                shape = new Shape(5,5,650,200,this,"","","");
                this.mShapeArray.push(shape);
                shape.setText('C');

		this.mShapeArray.push(new Circle   (5,25,220,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,25,235,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,25,250,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,25,265,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,25,280,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,25,295,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,25,310,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,25,325,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,25,340,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,25,355,this,this.mRaphael,0,1,1,"none",.5,false));	

	}
});
