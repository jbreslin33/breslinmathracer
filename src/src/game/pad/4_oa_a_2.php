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
		if (letter == 'A')
		{
			if (x > 0)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mShapeArray[parseInt(i + 3 + this.mTotalGuiBars + this.mTotalInputBars)]);
				}
			}
			if (x > 1)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mShapeArray[parseInt(i + 13 + this.mTotalGuiBars + this.mTotalInputBars)]);
				}
			}
			if (x > 2)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mShapeArray[parseInt(i + 23 + this.mTotalGuiBars + this.mTotalInputBars)]);
				}
			}
			if (x > 3)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mShapeArray[parseInt(i + 33 + this.mTotalGuiBars + this.mTotalInputBars)]);
				}
			}
			if (x > 4)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mShapeArray[parseInt(i + 43 + this.mTotalGuiBars + this.mTotalInputBars)]);
				}
			}
			if (x > 5)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mShapeArray[parseInt(i + 53 + this.mTotalGuiBars + this.mTotalInputBars)]);
				}
			}
			if (x > 6)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mShapeArray[parseInt(i + 63 + this.mTotalGuiBars + this.mTotalInputBars)]);
				}
			}
			if (x > 7)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mShapeArray[parseInt(i + 73 + this.mTotalGuiBars + this.mTotalInputBars)]);
				}
			}
			if (x > 8)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mShapeArray[parseInt(i + 83 + this.mTotalGuiBars + this.mTotalInputBars)]);
				}
			}
			if (x > 9)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mShapeArray[parseInt(i + 93 + this.mTotalGuiBars + this.mTotalInputBars)]);
				}
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
                var question = new Question('A teacher put the kids desks in 5 rows with 7 desks in each row. How could we show this problem in pictures?', 'A');
                question.mAnswerPool.push('A');
                question.mAnswerPool.push('B');
                question.mAnswerPool.push('C');
                this.mQuiz.mQuestionArray.push(question);
		this.includeLetters(question);
		this.includeCircles(question,'A',6,9);

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
	
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mShapeArray.push(new Circle   (5,25,y,this,this.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mShapeArray.push(new Circle   (5,40,y,this,this.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mShapeArray.push(new Circle   (5,55,y,this,this.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mShapeArray.push(new Circle   (5,70,y,this,this.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mShapeArray.push(new Circle   (5,85,y,this,this.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mShapeArray.push(new Circle   (5,100,y,this,this.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mShapeArray.push(new Circle   (5,115,y,this,this.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mShapeArray.push(new Circle   (5,130,y,this,this.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mShapeArray.push(new Circle   (5,145,y,this,this.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mShapeArray.push(new Circle   (5,160,y,this,this.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
	}
});
