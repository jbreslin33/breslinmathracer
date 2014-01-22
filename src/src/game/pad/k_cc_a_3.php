var k_cc_a_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//count shape array
		this.mCountShapeArray = new Array();
	
		//answers 
                this.mThresholdTime = 60000;
	
		//input pad
		this.mInputPad = new NumberPad(application);
	},

	//class overides
	reset: function()
	{
		this.parent();
                
		for (i = 0; i < this.mCountShapeArray.length; i++)
		{
			this.mCountShapeArray[i].setVisibility(false);
		} 
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getQuestion()); v++)
		{
			this.mCountShapeArray[v].setVisibility(true);
		}	
	},
	
	destroyShapes: function()
	{
		this.parent();

		//shapes and array
                for (i = 0; i < this.mCountShapeArray.length; i++)
                {
                        //back to div
                        this.mCountShapeArray[i].mDiv.mDiv.removeChild(this.mCountShapeArray[i].mMesh);
                        document.body.removeChild(this.mCountShapeArray[i].mDiv.mDiv);
                        this.mCountShapeArray[i] = 0;
                }
                this.mCountShapeArray = 0;
	},

	showQuestion: function()
	{
		for (i = 0; i < this.mCountShapeArray.length; i++)
                {
                        this.mCountShapeArray[i].setVisibility(false);
                }

		this.mQuiz.getQuestion().showShapes();
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

		for (i = 0; i < this.mCountShapeArray.length; i++)
		{
			this.mCountShapeArray[i].setVisibility(false);
		}	

		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getQuestion()); v++)
		{
			this.mCountShapeArray[v].setVisibility(true);
		}	
	},
   
	createQuestions: function()
        {
		this.parent();
		
		this.createQuestionShapes();
		
		var totalCountGoal       = parseInt(this.mScoreNeeded * 10);
		var totalCount           = 0;

		while (totalCount < totalCountGoal)
		{	
			//reset vars and arrays
			totalCount = 0;

			this.mQuiz.resetQuestionArray();

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//random number to count from 0-20
				var objectsToCount = Math.floor((Math.random()*21));		
				var question = new Question('' + objectsToCount, '' + objectsToCount);
				for (i = 0; i < objectsToCount; i++)
				{
					question.mShapeArray.push(this.mCountShapeArray[i]);
				}
				this.mQuiz.mQuestionArray.push(question);

				totalCount = parseInt(totalCount + objectsToCount);
			}
		}
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
	},

	//state overides
	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},

	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        },

});
