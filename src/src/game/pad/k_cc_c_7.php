var k_cc_c_7 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

                //input pad
                this.mInputPad = new ButtonMultipleChoicePad(application);
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
				this.mShapeArray[s].mMesh.innerHTML = '' + objectsToCountA;
				this.log('A:' + objectsToCountA);
				question.mShapeArray.push(this.mShapeArray[s]);
				
				this.mShapeArray[s+10].mMesh.innerHTML = '' + objectsToCountB;
				this.log('B:' + objectsToCountB);
				question.mShapeArray.push(this.mShapeArray[s+10]);
				
			}
		}
	},
	
	createQuestionShapes: function()
	{
		//A
		this.mShapeArray.push(new Shape(150,50,250,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,250,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,250,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,250,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,250,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,250,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,250,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,250,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,250,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,250,100,this,"","",""));
		//B
		this.mShapeArray.push(new Shape(150,50,500,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,500,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,500,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,500,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,500,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,500,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,500,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,500,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,500,100,this,"","",""));
		this.mShapeArray.push(new Shape(150,50,500,100,this,"","",""));
	}
});
