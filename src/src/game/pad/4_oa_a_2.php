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
                this.mNumQuestion.setSize(650,200);
                this.mNumQuestion.setPosition(350,140);
        },

	createInput: function()
	{
		this.parent();
		this.mButtonA.setPosition(105,200);
		this.mButtonB.setPosition(385,200);
		this.mButtonC.setPosition(660,200);
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

	createArrayQuestion: function(textA,textB,textC)
        {
                var a = 0;
                var b = 0;
                var c = 0;
                var d = 0;
                var e = 0;
                var f = 0;

                while ((a * b) == (c * d) || (a * b) == (e * f))
                {
                        a = Math.floor((Math.random()*9)+1);
                        b = Math.floor((Math.random()*9)+1);
                        c = Math.floor((Math.random()*9)+1);
                        d = Math.floor((Math.random()*9)+1);
                        e = Math.floor((Math.random()*9)+1);
                        f = Math.floor((Math.random()*9)+1);
                }
                var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC + ' We could write the expression: ' + a + ' x ' + b + ' to represent this. How would we best represent this expression in a picture?', 'A');
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
        },

	createArrayQuestionTwo: function(textA,textB,textC)
	{
                //*************** question 1
                var a = Math.floor((Math.random()*9)+1);
                var b = Math.floor((Math.random()*9)+1);
                
		var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC + ' We could write the expression: ' + a + ' x ' + b + ' to represent this. Which of these expressions also represent the situation?', 'A');
                var correctLetterNumber = Math.floor(Math.random()*3);
                question.setAnswer('' + b + ' x ' + a,0);
                if (correctLetterNumber == 0)
                {
                	question.mAnswerPool.push('' + question.getAnswer());
                	question.mAnswerPool.push('' + b + ' + ' + a);
                	question.mAnswerPool.push('' + b + ' - ' + a);
                }
                if (correctLetterNumber == 1)
                {
                	question.mAnswerPool.push('' + b + ' + ' + a);
                	question.mAnswerPool.push('' + question.getAnswer());
                	question.mAnswerPool.push('' + b + ' - ' + a);
                }
                if (correctLetterNumber == 2)
                {
                	question.mAnswerPool.push('' + b + ' + ' + a);
                	question.mAnswerPool.push('' + b + ' - ' + a);
                	question.mAnswerPool.push('' + question.getAnswer());
                }
                this.mQuiz.mQuestionArray.push(question);
	},		
      
	createArrayQuestionThree: function(textA,textB,textC)
	{
                var a = Math.floor((Math.random()*9)+1);
                var b = Math.floor((Math.random()*9)+1);

                var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC + ' Which equation would represent this situation?', 'A');
                var correctLetterNumber = Math.floor(Math.random()*3);
                question.setAnswer('' + a + ' x ' + b + ' = ' + parseInt(a*b),0);
                if (correctLetterNumber == 0)
                {
                	question.mAnswerPool.push('' + question.getAnswer());
                	question.mAnswerPool.push('' + b + ' - ' + a + ' = ' + parseInt(b+a));
                	question.mAnswerPool.push('' + b + ' * ' + b + ' = ' + parseInt(b*b));
                }
                if (correctLetterNumber == 1)
                {
                	question.mAnswerPool.push('' + a + ' x ' + a + ' = ' + parseInt(a*a));
                	question.mAnswerPool.push('' + question.getAnswer());
                	question.mAnswerPool.push('' + b + ' + ' + a + ' = ' + parseInt(b+a));
                }
                if (correctLetterNumber == 2)
                {
                	question.mAnswerPool.push('' + a + ' x ' + a + ' = ' + parseInt(a*a));
                	question.mAnswerPool.push('' + b + ' + ' + a + ' = ' + parseInt(b+a));
                	question.mAnswerPool.push('' + question.getAnswer());
                }
                this.mQuiz.mQuestionArray.push(question);
	},		
   
	createArrayQuestionFour: function(textA,textB,textC)
        {
                var a = 0;
                var b = 0;
                var c = 0;
                var d = 0;
                var e = 0;
                var f = 0;

                while ((a * b) == (c * d) || (a * b) == (e * f))
                {
                        a = Math.floor((Math.random()*9)+1);
                        b = Math.floor((Math.random()*9)+1);
                        c = Math.floor((Math.random()*9)+1);
                        d = Math.floor((Math.random()*9)+1);
                        e = Math.floor((Math.random()*9)+1);
                        f = Math.floor((Math.random()*9)+1);
                }
                var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC + ' Which picture captures this situation?', 'A');
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
        },
 
	createArrayQuestionFive: function(textA,textB,textC)
        {
                var a = Math.floor((Math.random()*100)+1);
                var b = Math.floor((Math.random()*8)+2);

                var question = new Question(textA + ' ' + a + ' ' + textB + ' ' + b + ' ' + textC, 'A');
                var correctLetterNumber = Math.floor(Math.random()*3);
                question.setAnswer('' + a + ' / ' + b + ' = ' + parseInt(a/b),0);
                if (correctLetterNumber == 0)
                {
                        question.mAnswerPool.push('' + question.getAnswer());
                        question.mAnswerPool.push('' + a + ' - ' + b + ' = ' + parseInt(a-b));
                        question.mAnswerPool.push('' + a + ' * ' + b + ' = ' + parseInt(a*b));
                }
                if (correctLetterNumber == 1)
                {
                        question.mAnswerPool.push('' + a + ' x ' + b + ' = ' + parseInt(a*b));
                        question.mAnswerPool.push('' + question.getAnswer());
                        question.mAnswerPool.push('' + a + ' + ' + b + ' = ' + parseInt(a+b));
                }
                if (correctLetterNumber == 2)
                {
                        question.mAnswerPool.push('' + a + ' x ' + b + ' = ' + parseInt(a*b));
                        question.mAnswerPool.push('' + a + ' + ' + b + ' = ' + parseInt(a+b));
                        question.mAnswerPool.push('' + question.getAnswer());
                }
                this.mQuiz.mQuestionArray.push(question);
        },

	
	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();

		//level 1	
		this.createArrayQuestionFive('Dave collected','pokemon cards. Dave collected','times as many cards as Mike. Which equation would tell us how many cards Mike collected?');
		this.createArrayQuestionThree('Ava and Fred played soccer. Ava scored','goals. Ava scored','times as many goals as Fred.');
		this.createArrayQuestionFour('Jim has','times as many balls as Steve. Steve has','balls.');
		this.createArrayQuestionFour('Steve has','balls. Jim has','times as many balls as Steve.');
		this.createArrayQuestionTwo('A school had','class rooms. It had','students in each class.');
		this.createArrayQuestionThree('A school had','class rooms. It had','students in each class.');
		this.createArrayQuestion('A soccer league had','teams. There were','playes on each team.');

		//level 2
		this.createArrayQuestionFive('Dave collected','pokemon cards. Dave collected','times as many cards as Mike. Which equation would tell us how many cards Mike collected?');
		this.createArrayQuestionThree('Ava and Fred played soccer. Ava scored','goals. Ava scored','times as many goals as Fred.');
		this.createArrayQuestionFour('Jim has','times as many balls as Steve. Steve has','balls.');
		this.createArrayQuestionFour('Steve has','balls. Jim has','times as many balls as Steve.');
		this.createArrayQuestionThree('A school had','class rooms. It had','students in each class.');
		this.createArrayQuestionTwo('Mike had','buckets. He had','fish in each bucket.');
		this.createArrayQuestion('A teacher put the kids desk in','rows with','desks in each row.');

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
		b = 280;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,25+b,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,40+b,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,55+b,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,70+b,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,85+b,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,100+b,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,115+b,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,130+b,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,145+b,y,this,this.mRaphael,0,1,1,"none",.5,false));
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
		c = 560;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,25+c,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,40+c,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,55+c,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,70+c,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,85+c,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,100+c,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,115+c,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,130+c,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,145+c,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
 		y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mShapeArray.push(new Circle   (5,160+c,y,this,this.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
	}
});
