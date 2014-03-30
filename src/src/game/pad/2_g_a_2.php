var g2_g_a_2 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);
    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
       
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
   
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//get random heights.
			var redHeightCode = Math.floor((Math.random()*5)+1);
			var redWidthCode  = Math.floor((Math.random()*5)+1);
			redHeightCode = 5;
			redWidthCode = 5;
			var redHeight     = parseInt(redHeightCode * 50);  
			var redWidth      = parseInt(redWidthCode * 50);  
					
			var question = new Question('What is the Area of the red rectangle in green blocks?', parseInt(redHeightCode * redWidthCode));
			this.mQuiz.mQuestionArray.push(question);
		
			var s = 21;
	
			this.mShapeArray[parseInt(i * s + 0 + this.mTotalGuiBars + this.mTotalInputBars)].setSize(redWidth,redHeight);
			
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 0 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 1 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 2 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 3 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 4 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 5 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 6 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 7 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 8 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 9 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 10 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 11 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 12 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 13 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 14 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 15 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 16 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 17 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 18 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 19 + this.mTotalGuiBars + this.mTotalInputBars)]);
			question.mShapeArray.push(this.mShapeArray[parseInt(i * s + 20 + this.mTotalGuiBars + this.mTotalInputBars)]);
			
		}
               	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
		
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//red
			this.mShapeArray.push(new Rectangle(50,50,350,25,this,this.mRaphael,0,1,1,"none",.5,true));

			//greens
                	this.mShapeArray.push(new Rectangle(50,50,220,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,220,240,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,220,180,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,220,120,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,220,60,this,this.mRaphael,.3,1,1,"none",.5,true));


                	this.mShapeArray.push(new Rectangle(50,50,280,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,340,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,400,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,460,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,520,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,580,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	this.mShapeArray.push(new Rectangle(50,50,640,300,this,this.mRaphael,.3,1,1,"none",.5,true));
                	
			this.mShapeArray.push(new Rectangle(50,50,620,240,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,620,180,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,620,120,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,620,60,this,this.mRaphael,.3,1,1,"none",.5,true));

			this.mShapeArray.push(new Rectangle(50,50,680,240,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,680,180,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,680,120,this,this.mRaphael,.3,1,1,"none",.5,true));
			this.mShapeArray.push(new Rectangle(50,50,680,60,this,this.mRaphael,.3,1,1,"none",.5,true));
		}
	}
});
