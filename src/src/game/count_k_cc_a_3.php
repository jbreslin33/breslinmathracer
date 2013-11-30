var Count_k_cc_a_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//count shape array
		this.mCountShapeArray = new Array();
	
        	this.mApplication.mHud.mGameName.setText('<font size="2">COUNT</font>');

		//answers 
                this.mThresholdTime = 10000;
	},

	reset: function()
	{
		this.parent();
		
		for (i = 0; i < this.mCountShapeArray.length; i++)
		{
			this.mCountShapeArray[i].setVisibility(false);
		} 
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getQuestion()); v++)
		{
			this.log('setting vis:' + v);
			this.mCountShapeArray[v].setVisibility(true);
		}	
	},

	showNumberPad: function()
	{
		this.parent();

		//set question invis...
		this.mNumQuestion.setVisibility(false);

		for (i = 0; i < this.mCountShapeArray.length; i++)
		{
			this.mCountShapeArray[i].setVisibility(false);
		}	

		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getQuestion()); v++)
		{
			this.log('setting vis:' + v);
			this.mCountShapeArray[v].setVisibility(true);
		}	
	},
   
	createQuestions: function()
        {
		this.parent();
		
		var totalCountGoal       = parseInt(this.mScoreNeeded * 10);
		var totalCount           = 0;

		this.log('totalCountGoal:' + totalCountGoal);
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
				this.log('totalCount:' + totalCount);
			}
		}
		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,25,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,75,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,125,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,175,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,225,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,250,this,"/images/bus/kid.png","",""));
                	
		this.mCountShapeArray.push(new ShapeVictory(50,50,50,25,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,75,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,125,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,175,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,225,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,50,250,this,"/images/bus/kid.png","",""));

		for (i = 0; i < this.mCountShapeArray.length; i++)
		{
			this.mCountShapeArray[i].setVisibility(false);
		}	
		
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getQuestion()); v++)
		{
			this.mCountShapeArray[v].setVisibility(true);
		}	
	}
});
