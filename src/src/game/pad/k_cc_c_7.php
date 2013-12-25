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
	
		//answers 
                this.mThresholdTime = 10000;

                //input pad
                this.mInputPad = new ButtonChoicePad(application,application.mGame);
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
                        this.mCompareBarA = new Shape(150,50,250,100,this,"","","");
                        this.mCompareBarA.mMesh.innerHTML = '';
                }
                //comparaBarB
                if (!this.mCompareBarB)
                {
                        this.mCompareBarB = new Shape(150,50,500,100,this,"","","");
                        this.mCompareBarB.mMesh.innerHTML = '';
                }
        },
  
	destroyShapes: function()
        {
                this.parent();

                this.mCompareBarA.mDiv.mDiv.removeChild(this.mCompareBarA.mMesh);
                document.body.removeChild(this.mCompareBarA.mDiv.mDiv);
                this.mCompareBarA = 0;
                
		this.mCompareBarB.mDiv.mDiv.removeChild(this.mCompareBarB.mMesh);
                document.body.removeChild(this.mCompareBarB.mDiv.mDiv);
                this.mCompareBarB = 0;
        },

	showQuestion: function()
        {
                this.mCompareBarA.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getVariableA();;
                this.mCompareBarB.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getVariableB();;
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
	},
});
