var Circles = new Class(
{
	initialize: function(game)
	{
		this.mGame = game;	
	},
        
	includeCircles: function(question,letter,x,y)
	{
		if (letter == 'A')
		{
			if (x > 0)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 3 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
				}
			}
			if (x > 1)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 13 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
				}
			}
			if (x > 2)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 23 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
				}
			}
			if (x > 3)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 33 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
				}
			}
			if (x > 4)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 43 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
				}
			}
			if (x > 5)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 53 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
				}
			}
			if (x > 6)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 63 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
				}
			}
			if (x > 7)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 73 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
				}
			}
			if (x > 8)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 83 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
				}
			}
			if (x > 9)	
			{
				for (i = 0; i < y; i++) 
				{
 					question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 93 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
				}
			}
		}
       
		if (letter == 'B')
                {
                        if (x > 0)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 103 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 1)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 113 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 2)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 123 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 3)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 133 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 4)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 143 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 5)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 153 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
			if (x > 6)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 163 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 7)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 173 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 8)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 183 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 9)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 193 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
		}
     
		if (letter == 'C')
                {
                        if (x > 0)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 203 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 1)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 213 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 2)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 223 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 3)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 233 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 4)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 243 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 5)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 253 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 6)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 263 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
			if (x > 7)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 273 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 8)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 283 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
                        if (x > 9)
                        {
                                for (i = 0; i < y; i++)
                                {
                                        question.mShapeArray.push(this.mGame.mShapeArray[parseInt(i + 293 + this.mGame.mTotalGuiBars + this.mGame.mTotalInputBars)]);
                                }
                        }
		}
	},

	createWorld: function()
	{
		//A
                shape = new Shape(5,5,50,200,this.mGame,"","","");
                this.mGame.mShapeArray.push(shape);
                shape.setText('A');

		//B
                shape = new Shape(5,5,350,200,this.mGame,"","","");
                this.mGame.mShapeArray.push(shape);
                shape.setText('B');

		//C
                shape = new Shape(5,5,650,200,this.mGame,"","","");
                this.mGame.mShapeArray.push(shape);
                shape.setText('C');

		//A circles
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mGame.mShapeArray.push(new Circle   (5,25,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mGame.mShapeArray.push(new Circle   (5,40,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mGame.mShapeArray.push(new Circle   (5,55,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mGame.mShapeArray.push(new Circle   (5,70,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mGame.mShapeArray.push(new Circle   (5,85,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mGame.mShapeArray.push(new Circle   (5,100,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mGame.mShapeArray.push(new Circle   (5,115,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mGame.mShapeArray.push(new Circle   (5,130,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mGame.mShapeArray.push(new Circle   (5,145,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
		y = 220; 	
		for (i = 0; i < 10; i++)
		{
			this.mGame.mShapeArray.push(new Circle   (5,160,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));	
			y = y + 15;	
		}
 		
		//B circles
                y = 220;
		b = 280;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,25+b,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,40+b,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,55+b,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,70+b,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,85+b,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,100+b,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,115+b,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,130+b,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,145+b,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
 		y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,460,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
 
		//C circles
                y = 220;
		c = 560;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,25+c,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,40+c,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,55+c,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,70+c,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,85+c,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,100+c,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,115+c,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,130+c,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
                y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,145+c,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
 		y = 220;
                for (i = 0; i < 10; i++)
                {
                        this.mGame.mShapeArray.push(new Circle   (5,160+c,y,this.mGame,this.mGame.mRaphael,0,1,1,"none",.5,false));
                        y = y + 15;
                }
	}
});
