var k_cc_c_7 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//instead we need 2 widgets....
		this.mCompareBarA = 0;									
		this.mCompareBarB = 0;									
		this.createCompareBars();
	
        	this.mApplication.mHud.mGameName.setText('<font size="2">COMPARE</font>');

		//answers 
                this.mThresholdTime = 10000;
	},

	reset: function()
	{
		this.parent();

                this.mCompareBarA.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getVariableA();;
                this.mCompareBarB.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getVariableB();;
	},
 
	createCompareBars: function()
        {
                //comparaBarA
                if (!this.mCompareBarA)
                {
                        this.mCompareBarA = new Shape(150,50,100,50,this,"","","");
                        this.mCompareBarA.mMesh.innerHTML = '';
                }
                //comparaBarB
                if (!this.mCompareBarB)
                {
                        this.mCompareBarB = new Shape(150,50,400,50,this,"","","");
                        this.mCompareBarB.mMesh.innerHTML = '';
                }
        },
  
	destroyShapesAndArray: function()
        {
                this.parent();

                this.mCompareBarA.mDiv.mDiv.removeChild(this.mCompareBarA.mMesh);
                document.body.removeChild(this.mCompareBarA.mDiv.mDiv);
                this.mCompareBarA = 0;
                
		this.mCompareBarB.mDiv.mDiv.removeChild(this.mCompareBarB.mMesh);
                document.body.removeChild(this.mCompareBarB.mDiv.mDiv);
                this.mCompareBarB = 0;
        },
 
	createNumberPad: function()
        {
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

                //question bar
                if (!this.mNumQuestion)
                {
                        this.mNumQuestion = new Shape(100,50,300,50,this,"","","");
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
                        this.mNumAnswer = new Shape(100,50,400,50,this,"INPUT","","");
                        this.mNumAnswer.mMesh.value = '';
                        this.mNumAnswer.mMesh.mGame = this;
                        this.mNumAnswer.mMesh.addEvent('keypress',this.inputKeyHit);
                        this.mNumAnswer.mMesh.focus();
                        this.mNumberPadArray.push(this.mNumAnswer);
			this.mNumAnswer.setVisibility(false);
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

        showCorrectAnswerOutOfTime: function()
        {
                this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
        },

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
                this.mCompareBarA.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getVariableA();;
                this.mCompareBarB.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getVariableB();;
	},
});
