var k_cc_b_5 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

		//input pad
		this.mInputPad = new NumberPad(application,application.mGame);
	},

	reset: function()
	{
		this.parent();
		
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
		} 
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getQuestion()); v++)
		{
			this.mShapeArray[v].setVisibility(true);
		}	
	},
	
	destroyShapes: function()
	{
		this.parent();

		//shapes and array
                for (i = 0; i < this.mShapeArray.length; i++)
                {
                        //back to div
                        this.mShapeArray[i].mDiv.mDiv.removeChild(this.mShapeArray[i].mMesh);
                        document.body.removeChild(this.mShapeArray[i].mDiv.mDiv);
                        this.mShapeArray[i] = 0;
                }
                this.mShapeArray = 0;
	},

	showQuestion: function()
	{
		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }
                for (v = 0; v < parseInt(this.mQuiz.getQuestion().getQuestion()); v++)
                {
                        this.mShapeArray[v].setVisibility(true);
                }

		//right here randomly arrange them.
		var arrangeType = Math.floor((Math.random()*3));		
		arrangeType = 1;
		if (arrangeType == 0)
		{
			//do default
		}
		
		if (arrangeType == 1)
		{
			for (i = 0; i < this.mShapeArray.length; i++)
			{	
				if (i < 5)
				{
          				//collision on or off
                			this.mShapeArray[i].mCollidable = false;
                			this.mShapeArray[i].mCollisionOn = false;
					this.mShapeArray[i].setPosition(parseInt(i * 50 + 50), 50)	
				}
				if (i >= 5 && i < 11)
				{
          				//collision on or off
                			this.mShapeArray[i].mCollidable = false;
                			this.mShapeArray[i].mCollisionOn = false;
					this.mShapeArray[i].setPosition(50,parseInt(i * 50 - 135))	
				}
				if (i >= 11 && i < 15)
				{
          				//collision on or off
                			this.mShapeArray[i].mCollidable = false;
                			this.mShapeArray[i].mCollisionOn = false;
					this.mShapeArray[i].setPosition(parseInt(i * 50 - 450 ), 365)	
				}
				if (i >= 15 && i < 20)
				{
          				//collision on or off
                			this.mShapeArray[i].mCollidable = false;
                			this.mShapeArray[i].mCollisionOn = false;
					this.mShapeArray[i].setPosition(250,parseInt(i * 50 - 635))	
				}
			}
		}
	},
 
	hideNumberPad: function()
	{
		this.parent();
		this.mInputPad.mNumQuestion.setVisibility(false);
	},

	showNumberPad: function()
	{
		this.parent();

		//set question invis...
		this.mInputPad.mNumQuestion.setVisibility(false);

		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
		}	

		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getQuestion()); v++)
		{
			this.mShapeArray[v].setVisibility(true);
		}	
	},

	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},
   
	createQuestions: function()
        {
		this.parent();
		
		var totalCountGoal       = parseInt(this.mScoreNeeded * 10);
		var totalCount           = 0;

		while (totalCount < totalCountGoal)
		{	
			//reset vars and arrays
			totalCount = 0;
			for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
			{
				this.mQuiz.mQuestionArray[d] = 0;
			} 
			this.mQuiz.mQuestionArray = 0;
			this.mQuiz.mQuestionArray = new Array();

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//random number to count from 0-20
				var objectsToCount = Math.floor((Math.random()*21));		
				var question = new Question('' + objectsToCount, '' + objectsToCount);
				this.mQuiz.mQuestionArray.push(question);

				totalCount = parseInt(totalCount + objectsToCount);
			}
		}
		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
                this.mShapeArray.push(new Shape(50,50,25,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,25,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,25,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,25,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,25,250,this,"/images/bus/kid.png","",""));
                	
                this.mShapeArray.push(new Shape(50,50,75,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,250,this,"/images/bus/kid.png","",""));
                
		this.mShapeArray.push(new Shape(50,50,125,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,250,this,"/images/bus/kid.png","",""));
		
		this.mShapeArray.push(new Shape(50,50,175,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,250,this,"/images/bus/kid.png","",""));

		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
		}	
		
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getQuestion()); v++)
		{
			this.mShapeArray[v].setVisibility(true);
		}	
	},

	//state overides
	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        },

});
