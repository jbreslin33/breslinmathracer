var k_cc_b_4a = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//count shape array
		this.mCountShapeArrayA = new Array();
		this.mCountShapeArrayB = new Array();

		//answers 
                this.mThresholdTime = 10000;

                //input pad
                this.mInputPad = new ButtonChoicePad(application,application.mGame);
	},

	reset: function()
	{
		this.parent();
	
		//A	
		for (i = 0; i < this.mCountShapeArrayA.length; i++)
		{
			this.mCountShapeArrayA[i].setVisibility(false);
		} 
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getVariableA()); v++)
		{
			this.mCountShapeArrayA[v].setVisibility(true);
		}	
	
		//B	
		for (i = 0; i < this.mCountShapeArrayB.length; i++)
		{
			this.mCountShapeArrayB[i].setVisibility(false);
		} 
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getVariableB()); v++)
		{
			this.mCountShapeArrayB[v].setVisibility(true);
		}	
	},
  
	destroyShapes: function()
        {
                this.parent();

                //shapes and array
		//A
                for (i = 0; i < this.mCountShapeArrayA.length; i++)
                {
                        //back to div
                        this.mCountShapeArrayA[i].mDiv.mDiv.removeChild(this.mCountShapeArrayA[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayA[i].mDiv.mDiv);
                        this.mCountShapeArrayA[i] = 0;
                }
                this.mCountShapeArrayA = 0;
               
		//B 
		for (i = 0; i < this.mCountShapeArrayB.length; i++)
                {
                        //back to div
                        this.mCountShapeArrayB[i].mDiv.mDiv.removeChild(this.mCountShapeArrayB[i].mMesh);
                        document.body.removeChild(this.mCountShapeArrayB[i].mDiv.mDiv);
                        this.mCountShapeArrayB[i] = 0;
                }
                this.mCountShapeArrayB = 0;
        },

	// you need to show a kid with a number name mount... 
	showQuestion: function()
	{
		//A
		for (i = 0; i < this.mCountShapeArrayA.length; i++)
		{
			this.mCountShapeArrayA[i].setVisibility(false);
		}	

		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getVariableA()); v++)
		{
			this.mCountShapeArrayA[v].setVisibility(true);
		}	
	
		//B	
		for (i = 0; i < this.mCountShapeArrayB.length; i++)
		{
			this.mCountShapeArrayB[i].setVisibility(false);
		}	

		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getVariableB()); v++)
		{
			this.mCountShapeArrayB[v].setVisibility(true);
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
                this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
        },

	//questions
	createQuestions: function()
        {
		this.parent();
		
		var totalCountGoal       = parseInt(this.mScoreNeeded * 10);
		var totalCount           = 0;
		var greaterThans = 0;
		var lessThans = 0;
		var equalTos = 0;

		while (totalCount < totalCountGoal || greaterThans < 2 || lessThans < 2 || equalTos < 2)
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
				var objectsToCountA = Math.floor((Math.random()*21));		
				var objectsToCountB = Math.floor((Math.random()*21));		
				var comparison = '';
				if (objectsToCountA == objectsToCountB)
				{
					comparison = 'is equal to';
					equalTos++;
				}
				if (objectsToCountA > objectsToCountB)
				{
					comparison = 'is greater than';
					greaterThans++;
				}
				if (objectsToCountA < objectsToCountB)
				{
					comparison = 'is less than';
					lessThans++;
				}

				var question = new QuestionCompare('Compare', '' + comparison, objectsToCountA, objectsToCountB);

				this.mQuiz.mQuestionArray.push(question);

				totalCount = parseInt(totalCount + objectsToCountA);
				
			}
		}
		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
		//A
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,25,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,25,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,25,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,25,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,25,250,this,"/images/bus/kid.png","",""));
                	
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,75,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,75,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,75,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,75,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,75,250,this,"/images/bus/kid.png","",""));
                
		this.mCountShapeArrayA.push(new ShapeVictory(50,50,125,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,125,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,125,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,125,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,125,250,this,"/images/bus/kid.png","",""));
		
		this.mCountShapeArrayA.push(new ShapeVictory(50,50,175,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,175,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,175,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,175,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayA.push(new ShapeVictory(50,50,175,250,this,"/images/bus/kid.png","",""));

		for (i = 0; i < this.mCountShapeArrayA.length; i++)
		{
			this.mCountShapeArrayA[i].setVisibility(false);
		}	
		
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getVariableA()); v++)
		{
			this.mCountShapeArrayA[v].setVisibility(true);
		}	

		//B
		this.mCountShapeArrayB.push(new ShapeVictory(50,50,525,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,525,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,525,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,525,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,525,250,this,"/images/bus/kid.png","",""));
                        
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,575,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,575,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,575,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,575,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,575,250,this,"/images/bus/kid.png","",""));
                
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,625,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,625,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,625,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,625,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,625,250,this,"/images/bus/kid.png","",""));
                
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,675,50,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,675,100,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,675,150,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,675,200,this,"/images/bus/kid.png","",""));
                this.mCountShapeArrayB.push(new ShapeVictory(50,50,675,250,this,"/images/bus/kid.png","",""));
	}
});
