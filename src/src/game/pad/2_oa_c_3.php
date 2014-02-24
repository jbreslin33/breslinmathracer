var g2_oa_c_3 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(20);
	
		//answers 
                this.mThresholdTime = 60000;
	},

      	createNumQuestion: function()
        {
                this.parent();

                //question
                this.mNumQuestion.setSize(120,50);
                this.mNumQuestion.setPosition(380,10);
        },

	createQuestions: function()
        {
		this.parent();

                //answer pool
                this.mQuiz.mAnswerPool.push('odd');
                this.mQuiz.mAnswerPool.push('even');
		
		var totalCount = 0;

	//	while (totalCount < parseInt(this.mScoreNeeded * 7) || totalCount > parseInt(this.mScoreNeeded * 13))
	//	{	
			//reset vars and arrays
	//		totalCount = 0;

			//just the question array reset
			this.mQuiz.resetQuestionArray();
			this.log('create the quesetoins');
                	for (i = 0; i < this.mScoreNeeded; i++)
                	{
			
				var question;
				var objectsToCount = Math.floor((Math.random()*21));		
				
				if (objectsToCount%2 == 0)
				{
                        		question = new Question('Odd or Even?', '' + this.mQuiz.mAnswerPool[1]);
					this.log('even');
				}
				else
				{
                        		question = new Question('Odd or Even?', '' + this.mQuiz.mAnswerPool[0]);
					this.log('odd');
				}
				
                        	question.mAnswerPool = this.mQuiz.mAnswerPool;
				for (i = 0; i < objectsToCount; i++)
                        	{
                                	question.mShapeArray.push(this.mShapeArray[parseInt(i + this.mTotalGuiBars + this.mTotalInputBars)]);
                        	}
                        	this.mQuiz.mQuestionArray.push(question);
	//			totalCount = parseInt(totalCount + objectsToCount);
                	}
	//	}
			//loop thru and make potential questions
	},

	createWorld: function()
	{
		this.parent();

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
	}
});
