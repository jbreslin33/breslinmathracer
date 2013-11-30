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
	
	hideNumberPad: function()
	{
		this.parent();
		this.mNumQuestion.setVisibility(false);
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
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,25,250,this,"/images/bus/kid.png","",""));
                	
                this.mCountShapeArray.push(new ShapeVictory(50,50,75,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,75,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,75,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,75,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,75,250,this,"/images/bus/kid.png","",""));
                
		this.mCountShapeArray.push(new ShapeVictory(50,50,125,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,125,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,125,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,125,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,125,250,this,"/images/bus/kid.png","",""));
		
		this.mCountShapeArray.push(new ShapeVictory(50,50,175,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,175,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,175,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,175,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArray.push(new ShapeVictory(50,50,175,250,this,"/images/bus/kid.png","",""));

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
