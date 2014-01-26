var k_md_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

		//scoreNeeded
		this.setScoreNeeded(20);

		//input pad
		this.mInputPad = new ButtonMultipleChoicePad(application);
	},

	createQuestions: function()
        {
		this.parent();
		
		this.mQuiz.resetQuestionPoolArray();

	       	//answer pool
                this.mQuiz.mAnswerPool.push('tall');
                this.mQuiz.mAnswerPool.push('short');
                this.mQuiz.mAnswerPool.push('heavy');
                this.mQuiz.mAnswerPool.push('light');

		//tall
		var question = new Question('What is this?','tall');
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);	
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);	
		question.mShapeArray.push(this.mShapeArray[2]);
                this.mQuiz.mQuestionPoolArray.push(question);

		//short	
		var question = new Question('What is this?','short');
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
                question.mShapeArray.push(this.mShapeArray[3]);
                this.mQuiz.mQuestionPoolArray.push(question);

		//heavy
		var question = new Question('What is this?','heavy');
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
                question.mShapeArray.push(this.mShapeArray[4]);
                this.mQuiz.mQuestionPoolArray.push(question);
		
		//light
		var question = new Question('What is this?','light');
		question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
                question.mShapeArray.push(this.mShapeArray[5]);
                this.mQuiz.mQuestionPoolArray.push(question);

		var totalTall = 0;
		var totalShort = 0;
		var totalHeavy = 0;
		var totalLight = 0;
	
		while(totalTall < 3  || totalShort < 3 || totalHeavy < 3 || totalLight < 3)
		{
			this.mQuiz.resetQuestionArray();
			for (i=0; i < this.mScoreNeeded; i++)
			{
				var element = Math.floor((Math.random()*this.mQuiz.mQuestionPoolArray.length));
                		this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[element]);
				if (element == 0)
				{
					totalTall++;	
				}
				if (element == 1)
				{
					totalShort++;	
				}
				if (element == 2)
				{
					totalHeavy++;	
				}
				if (element == 3)
				{
					totalLight++;	
				}
			} 
		}	
	},

	createWorld: function()
	{
		this.parent();

                this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/attributes/giraffe.jpg","",""));
                this.mShapeArray.push(new Shape(50,50,150,375,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/attributes/heavy.gif","",""));
                this.mShapeArray.push(new Shape(50,50,150,375,this,"/images/attributes/feather.jpg","",""));
	}
});
