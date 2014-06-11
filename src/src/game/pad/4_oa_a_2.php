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
       
		if (letter == 'B')
                {
                        if (x > 0)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 103 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 1)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 113 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 2)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 123 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 3)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 133 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 4)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 143 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 5)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 153 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
			if (x > 6)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 163 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 7)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 173 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 8)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 183 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 9)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 193 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
		}
     
		if (letter == 'C')
                {
                        if (x > 0)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 203 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 1)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 213 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 2)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 223 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 3)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 233 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 4)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 243 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 5)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 253 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 6)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 263 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
			if (x > 7)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 273 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 8)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 283 + this.mTotalGuiBars + this.mTotalInputBars)]);
                                }
                        }
                        if (x > 9)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mShapeArray[parseInt(i + 293 + this.mTotalGuiBars + this.mTotalInputBars)]);
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
		var a = Math.floor((Math.random()*9)+1);
		var b = Math.floor((Math.random()*9)+1);
		var c = Math.floor((Math.random()*9)+1);
		var d = Math.floor((Math.random()*9)+1);
		var e = Math.floor((Math.random()*9)+1);
		var f = Math.floor((Math.random()*9)+1);
                var question = new Question('A teacher put the kids desks in ' + a + ' rows with ' + b + ' desks in each row. How could we show this problem in pictures?', 'A');
		var correctLetterNumber = Math.floor(Math.random()*3);
		if (correctLetterNumber == 0)
		{
			question.setAnswer('A',0);
			this.includeCircles(question,'A',a,b);
			this.includeCircles(question,'B',c,d);
			this.includeCircles(question,'C',e,f);
			
		}
		if (correctLetterNumber == 1)
		{
			question.setAnswer('B',0);
			this.includeCircles(question,'A',c,d);
			this.includeCircles(question,'B',a,b);
			this.includeCircles(question,'C',e,f);
		}
		if (correctLetterNumber == 2)
		{
			question.setAnswer('C',0);
			this.includeCircles(question,'A',c,d);
			this.includeCircles(question,'B',e,f);
			this.includeCircles(question,'C',a,b);
		}
                question.mAnswerPool.push('A');
                question.mAnswerPool.push('B');
                question.mAnswerPool.push('C');
                this.mQuiz.mQuestionArray.push(question);
        	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
		
		//random	
		//this.mQuiz.randomize(10);
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
 		
		//B circles
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,325,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,340,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,355,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,370,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,385,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,400,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,415,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,430,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,445,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
 		y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,460,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
 
		//C circles
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,625,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,640,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,655,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,670,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,685,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,700,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,715,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,730,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,745,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
 		y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,760,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
	}
});
