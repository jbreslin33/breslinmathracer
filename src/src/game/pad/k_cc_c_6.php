var k_cc_c_6 = new Class(
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
				question.mAnswerPool = this.mQuiz.mAnswerPool;	
				this.mQuiz.mQuestionArray.push(question);

				//add shapes
				for (a = 0; a < objectsToCountA; a++)
				{
					question.mShapeArray.push(this.mShapeArray[parseInt(a + this.mTotalGuiBars)])
				}
				for (b = 0; b < objectsToCountB; b++)
				{
					question.mShapeArray.push(this.mShapeArray[parseInt(b + this.mTotalGuiBars + 20)])
				}
			}
		}
	},
	
	createWorld: function()
	{
		this.parent();

		//A
                this.mShapeArray.push(new Shape(50,50,25,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,25,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,25,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,25,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,25,250,this,"/images/bus/kid.png","",""));
                	
                this.mShapeArray.push(new Shape(50,50,75,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,75,250,this,"/images/bus/kid.png","",""));
                
		this.mShapeArray.push(new Shape(50,50,125,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,125,250,this,"/images/bus/kid.png","",""));
		
		this.mShapeArray.push(new Shape(50,50,175,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,175,250,this,"/images/bus/kid.png","",""));

		//B
		this.mShapeArray.push(new Shape(50,50,525,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,525,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,525,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,525,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,525,250,this,"/images/bus/kid.png","",""));
                        
                this.mShapeArray.push(new Shape(50,50,575,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,575,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,575,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,575,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,575,250,this,"/images/bus/kid.png","",""));
                
                this.mShapeArray.push(new Shape(50,50,625,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,625,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,625,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,625,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,625,250,this,"/images/bus/kid.png","",""));
                
                this.mShapeArray.push(new Shape(50,50,675,50,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,675,100,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,675,150,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,675,200,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,675,250,this,"/images/bus/kid.png","",""));
	}
});
