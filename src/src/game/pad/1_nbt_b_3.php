var g1_nbt_b_3 = new Class(
{

Extends: MultipleChoicePadImages,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;
		
		this.setScoreNeeded(20);
	},

	showQuestion: function()
        {
		this.parent();

		if (this.mButtonA.mMesh.innerHTML == 'is greater than')
		{
			this.mButtonA.setSrc('/images/symbols/greater_than.png');
		}
		if (this.mButtonA.mMesh.innerHTML == 'is equal to')
		{
			this.mButtonA.setSrc('/images/symbols/equal.png');
		}
		if (this.mButtonA.mMesh.innerHTML == 'is less than')
		{
			this.mButtonA.setSrc('/images/symbols/less_than.png');
		}

                if (this.mButtonB.mMesh.innerHTML == 'is greater than')
                {
                        this.mButtonB.setSrc('/images/symbols/greater_than.png');
                }
                if (this.mButtonB.mMesh.innerHTML == 'is equal to')
                {
                        this.mButtonB.setSrc('/images/symbols/equal.png');
                }
                if (this.mButtonB.mMesh.innerHTML == 'is less than')
                {
                        this.mButtonB.setSrc('/images/symbols/less_than.png');
                }

                if (this.mButtonC.mMesh.innerHTML == 'is greater than')
                {
                        this.mButtonC.setSrc('/images/symbols/greater_than.png');
                }
                if (this.mButtonC.mMesh.innerHTML == 'is equal to')
                {
                        this.mButtonC.setSrc('/images/symbols/equal.png');
                }
                if (this.mButtonC.mMesh.innerHTML == 'is less than')
                {
                        this.mButtonC.setSrc('/images/symbols/less_than.png');
                }
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
				this.mShapeArray[ parseInt( s*2 + this.mTotalGuiBars ) ].mMesh.innerHTML = '' + objectsToCountA;
				question.mShapeArray.push(this.mShapeArray[parseInt((s*2) + this.mTotalGuiBars)]);
				
				this.mShapeArray[parseInt((s*2) + this.mTotalGuiBars + 1)].mMesh.innerHTML = '' + objectsToCountB;
				question.mShapeArray.push(this.mShapeArray[parseInt((s*2) + this.mTotalGuiBars + 1)]);
			}
		}
	},
	
	createWorld: function()
	{
		this.parent();

		for (i=0; i < this.mScoreNeeded; i++)
		{	
			this.mShapeArray.push(new Shape(150,50,300,100,this,"","",""));
			this.mShapeArray.push(new Shape(150,50,550,100,this,"","",""));
		}
	}
});
