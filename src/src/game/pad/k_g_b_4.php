var k_g_b_4 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

		//score needed
		this.setScoreNeeded(20);

		//input pad
		this.mInputPad = new ButtonMultipleChoicePad(application);
	},

	createQuestions: function()
        {
		this.parent();
		
		this.mQuiz.resetQuestionPoolArray();

	       	//answer pool
                this.mQuiz.mAnswerPool.push('flat');
                this.mQuiz.mAnswerPool.push('solid');

		var question = new Question('What is this?','solid');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[2]);
		this.mQuiz.mQuestionPoolArray.push(question);
		
		var question = new Question('What is this?','solid');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[3]);
		this.mQuiz.mQuestionPoolArray.push(question);
		
		var question = new Question('What is this?','flat');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[4]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','solid');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[5]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','flat');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[6]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','flat');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[7]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','solid');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[8]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','flat');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[9]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','flat');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[10]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var totalFlat = 0;
		var totalSolid = 0;

		while (totalFlat < this.mScoreNeeded * .4 || totalSolid < this.mScoreNeeded * .4)
		{
			totalFlat = 0;
			totalSolid = 0;

			this.mQuiz.resetQuestionArray();
		
			for (i = 0; i < this.mScoreNeeded; i++)
			{
				var element = Math.floor((Math.random()*this.mQuiz.mQuestionPoolArray.length));			
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[element]);
				if (element == 0)
				{
					totalSolid++;
				}
				if (element == 1)
				{
					totalSolid++;
				}
				if (element == 2)
				{
					totalFlat++;
				}
				if (element == 3)
				{
					totalSolid++;
				}
				if (element == 4)
				{
					totalFlat++;
				}
				if (element == 5)
				{
					totalFlat++;
				}
				if (element == 6)
				{
					totalSolid++;
				}
				if (element == 7)
				{
					totalFlat++;
				}
				if (element == 8)
				{
					totalFlat++;
				}
			}	
		}  
	},

	createWorld: function()
	{
		this.parent();
		
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/cone.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/cube.jpg","",""));
		this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/circle.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/cylinder.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/hexagon.png","",""));
        	this.mShapeArray.push(new Shape(200,150,150,275,this,"/images/shapes/rectangle.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/sphere.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/square.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/triangle.png","",""));
	}
});
