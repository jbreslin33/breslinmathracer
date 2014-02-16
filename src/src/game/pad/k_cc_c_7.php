var k_cc_c_7 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;
		
		this.setScoreNeeded(20);
	},

	createQuestions: function()
        {
		this.parent();

		//answer pool
                this.mQuiz.mAnswerPool.push('is greater than');
                this.mQuiz.mAnswerPool.push('is equal to');
                this.mQuiz.mAnswerPool.push('is less than');
		
		var greaterThans = 0;
		var lessThans = 0;
		var equalTos = 0;

		while (greaterThans < 2 || lessThans < 2 || equalTos < 2)
		{	
			this.mQuiz.resetQuestionArray();

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

				var question = new QuestionCompare('Compare?', '' + comparison, objectsToCountA, objectsToCountB);
				this.mQuiz.mQuestionArray.push(question);
				question.mAnswerPool = this.mQuiz.mAnswerPool;	

				//add shapes
				this.mShapeArray[ parseInt( s*2 + this.mTotalGuiBars + this.mTotalInputBars) ].mMesh.innerHTML = '' + objectsToCountA;
				question.mShapeArray.push(this.mShapeArray[parseInt((s*2) + this.mTotalGuiBars + this.mTotalInputBars)]);
				
				this.mShapeArray[parseInt((s*2) + this.mTotalGuiBars + this.mTotalInputBars + 1 )].mMesh.innerHTML = '' + objectsToCountB;
				question.mShapeArray.push(this.mShapeArray[parseInt((s*2) + this.mTotalGuiBars + this.mTotalInputBars + 1)]);
			}
		}
	},
 
	createNumQuestion: function()
        {
                //question
                if (!this.mNumQuestion)
                {
                        this.mNumQuestion = new Shape(100,50,-330,-40,this,"","","");
                        this.mShapeArray.push(this.mNumQuestion);
                }
        },
	
	createWorld: function()
	{
		this.parent();

		for (i=0; i < this.mScoreNeeded; i++)
		{	
			this.mShapeArray.push(new Shape(10,10,225,125,this,"","",""));
			this.mShapeArray.push(new Shape(10,10,500,125,this,"","",""));
		}
	}
});
