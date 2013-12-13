var k_cc_c_6 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//count shape array
		this.mCountShapeArrayA = new Array();
		this.mCountShapeArrayB = new Array();
	
        	this.mApplication.mHud.mGameName.setText('<font size="2">COMPARE</font>');

		//answers 
                this.mThresholdTime = 10000;
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
  
	destroyShapesAndArray: function()
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
 
	createNumberPad: function()
        {
                //question bar
                if (!this.mNumQuestion)
                {
                        this.mNumQuestion = new Shape(100,50,300,100,this,"","","");
                        if (this.mQuiz)
                        {
                                if (this.mQuiz.getQuestion())
                                {
                                        this.mNumQuestion.mMesh.innerHTML = this.mQuiz.getQuestion().getQuestion();
                                }
                        }
                        this.mNumQuestion.mMesh.mGame = this;
                        this.mNumberPadArray.push(this.mNumQuestion);
			this.mNumQuestion.setVisibility(false);
                }

                //answer text box
                if (!this.mNumAnswer)
                {
                        this.mNumAnswer = new Shape(100,50,400,100,this,"INPUT","","");
                        this.mNumAnswer.mMesh.value = '';
                        this.mNumAnswer.mMesh.mGame = this;
                        this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
                        this.mNumAnswer.mMesh.focus();
                        this.mNumberPadArray.push(this.mNumAnswer);
			this.mNumAnswer.setVisibility(false);
                }

		//BUTTONS
                if (!this.mButtonA)
		{
			this.mButtonA = new Shape(150,50,300,100,this,"BUTTON","","");
 			this.mButtonA.mMesh.innerHTML = 'is equal to';
                	this.mButtonA.mMesh.mGame = this;
                	this.mButtonA.mMesh.addEvent('click',this.numPadHit);
                	this.mNumberPadArray.push(this.mButtonA);
		}
                if (!this.mButtonB)
		{
			this.mButtonB = new Shape(150,50,300,200,this,"BUTTON","","");
 			this.mButtonB.mMesh.innerHTML = 'is greater than';
                	this.mButtonB.mMesh.mGame = this;
                	this.mButtonB.mMesh.addEvent('click',this.numPadHit);
                	this.mNumberPadArray.push(this.mButtonB);
		}
                if (!this.mButtonC)
		{
			this.mButtonC = new Shape(150,50,300,300,this,"BUTTON","","");
 			this.mButtonC.mMesh.innerHTML = 'is less than';
                	this.mButtonC.mMesh.mGame = this;
                	this.mButtonC.mMesh.addEvent('click',this.numPadHit);
                	this.mNumberPadArray.push(this.mButtonC);
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
		this.mNumAnswer.setVisibility(false);

		//A
		for (i = 0; i < this.mCountShapeArrayA.length; i++)
		{
			this.mCountShapeArrayA[i].setVisibility(false);
		}	

                this.log('show variableA:' + this.mQuiz.getQuestion().getVariableA());
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getVariableA()); v++)
		{
			this.mCountShapeArrayA[v].setVisibility(true);
		}	
	
		//B	
		for (i = 0; i < this.mCountShapeArrayB.length; i++)
		{
			this.mCountShapeArrayB[i].setVisibility(false);
		}	

                this.log('show variableB:' + this.mQuiz.getQuestion().getVariableB());
		for (v = 0; v < parseInt(this.mQuiz.getQuestion().getVariableB()); v++)
		{
			this.mCountShapeArrayB[v].setVisibility(true);
		}	
	},
 
	numPadHit: function()
        {
        	APPLICATION.mGame.mNumAnswer.mMesh.value = APPLICATION.mGame.mNumAnswer.mMesh.value + '' + this.innerHTML;
                APPLICATION.mGame.mUserAnswer = APPLICATION.mGame.mNumAnswer.mMesh.value;
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
				var objectsToCountA = Math.floor((Math.random()*21));		
				var objectsToCountB = Math.floor((Math.random()*21));		
				var comparison = '';
				if (objectsToCountA == objectsToCountB)
				{
					comparison = 'is equal to';
				}
				if (objectsToCountA > objectsToCountB)
				{
					comparison = 'is greater than';
				}
				if (objectsToCountA < objectsToCountB)
				{
					comparison = 'is less than';
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
		
                this.log('create variableA:' + this.mQuiz.getQuestion().getVariableA());
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
                
                for (i = 0; i < this.mCountShapeArrayB.length; i++)
                {
                        this.mCountShapeArrayB[i].setVisibility(false);
                }
                
                this.log('create variableB:' + this.mQuiz.getQuestion().getVariableB());
                for (v = 0; v < parseInt(this.mQuiz.getQuestion().getVariableB()); v++)
                {       
                        this.mCountShapeArrayB[v].setVisibility(true);
                }
	}
});
