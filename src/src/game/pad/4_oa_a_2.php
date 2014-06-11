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

	includeCircles: function(question,letter,x,y)
	{
		for (i = 0; i < y; i++) 
		{
 			question.mShapeArray.push(this.mShapeArray[parseInt(i + 3 + this.mTotalGuiBars + this.mTotalInputBars)]);
		}
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
		this.includeLetters(question);
		this.includeCircles(question,'A',10,3);

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

		//A circles
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
		
		this.mShapeArray.push(new Circle   (5,40,220,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,40,235,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,40,250,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,40,265,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,40,280,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,40,295,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,40,310,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,40,325,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,40,340,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,40,355,this,this.mRaphael,0,1,1,"none",.5,false));	
		
		this.mShapeArray.push(new Circle   (5,55,220,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,55,235,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,55,250,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,55,265,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,55,280,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,55,295,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,55,310,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,55,325,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,55,340,this,this.mRaphael,0,1,1,"none",.5,false));	
		this.mShapeArray.push(new Circle   (5,55,355,this,this.mRaphael,0,1,1,"none",.5,false));	

	}
});
