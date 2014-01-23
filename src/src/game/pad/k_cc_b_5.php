var k_cc_b_5 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

                //input pad
                this.mInputPad = new NumberPad(application);
	},

	//questions
	createQuestions: function()
        {
		this.parent();
          
		//just the question array reset
                this.mQuiz.resetQuestionArray();

		for (i = 0; i < this.mScoreNeeded; i++)
		{
			var numberToCount = Math.floor((Math.random()*10)+1);	
			var question = new Question('How Many?', '' + numberToCount);
                        question.mAnswerPool = this.mQuiz.mAnswerPool;
                        
			for (s = 0; s < parseInt(numberToCount); s++)
                        {
                                question.mShapeArray.push(this.mShapeArray[s]);
			}

			this.mQuiz.mQuestionArray.push(question);
		}
	},
	
	createQuestionShapes: function()
        {
		//scattered
		if (this.mApplication.mLevel < 5)
		{
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
		
		else
		{
		//rectangle	
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
	}
	
});
