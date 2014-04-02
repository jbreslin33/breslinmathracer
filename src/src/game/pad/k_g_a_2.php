var k_g_a_2 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		//score needed
		this.setScoreNeeded(40);
	},
  
	createNumQuestion: function()
        {
                this.parent();
                this.mNumQuestion.setPosition(100,60,380,-90);
        },


	createQuestions: function()
        {
		this.parent();
		
		this.mQuiz.resetQuestionPoolArray();
                this.mQuiz.resetQuestionPoolArray();

		var question = new Question('What is this?','cone');
 		question.mAnswerPool.push('triangle');
 		question.mAnswerPool.push('square');
 		question.mAnswerPool.push('rectangle');

		question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars)]);
		this.mQuiz.mQuestionPoolArray.push(question);
		
		var question = new Question('What is this?','cube');
 		question.mAnswerPool.push('triangle');
 		question.mAnswerPool.push('cone');
 		question.mAnswerPool.push('circle');
		question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars) + 1]);
		this.mQuiz.mQuestionPoolArray.push(question);
		
		var question = new Question('What is this?','circle');
 		question.mAnswerPool.push('triangle');
 		question.mAnswerPool.push('cone');
 		question.mAnswerPool.push('square');
		question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars) + 2]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','cylinder');
 		question.mAnswerPool.push('triangle');
 		question.mAnswerPool.push('cone');
 		question.mAnswerPool.push('square');
		question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars) + 3]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','hexagon');
 		question.mAnswerPool.push('triangle');
 		question.mAnswerPool.push('cone');
 		question.mAnswerPool.push('square');
		question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars) + 4]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','rectangle');
 		question.mAnswerPool.push('triangle');
 		question.mAnswerPool.push('cone');
 		question.mAnswerPool.push('square');
		question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars) + 5]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','sphere');
 		question.mAnswerPool.push('triangle');
 		question.mAnswerPool.push('cone');
 		question.mAnswerPool.push('square');
		question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars) + 6]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','square');
 		question.mAnswerPool.push('triangle');
 		question.mAnswerPool.push('cone');
 		question.mAnswerPool.push('circle');
		question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars) + 7]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var question = new Question('What is this?','triangle');
 		question.mAnswerPool.push('square');
 		question.mAnswerPool.push('cone');
 		question.mAnswerPool.push('circle');
		question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars) + 8]);
		this.mQuiz.mQuestionPoolArray.push(question);

		var totalCones = 0;
		var totalCubes = 0;
		var totalCircles = 0;
		var totalCylinders = 0;
		var totalHexagons = 0;
		var totalRectangles = 0;
		var totalSpheres = 0;
		var totalSquares = 0;
		var totalTriangles = 0;

		while (totalCones < 3 || totalCubes < 3 || totalCircles < 3 || totalCylinders < 3 || totalHexagons < 3 || totalRectangles < 3 || totalSpheres < 3 || totalSquares < 3 || totalTriangles < 3)
		{
			totalCones = 0;
			totalCubes = 0;
			totalCircles = 0;
			totalCylinders = 0;
			totalHexagons = 0;
			totalRectangles = 0;
			totalSpheres = 0;
			totalSquares = 0;
			totalTriangles = 0;

			this.mQuiz.resetQuestionArray();
		
			for (i = 0; i < this.mScoreNeeded; i++)
			{
				var element = Math.floor((Math.random()*this.mQuiz.mQuestionPoolArray.length));			
				this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[element]);
				if (element == 0)
				{
					totalCones++;
				}
				if (element == 1)
				{
					totalCubes++;
				}
				if (element == 2)
				{
					totalCircles++;
				}
				if (element == 3)
				{
					totalCylinders++;
				}
				if (element == 4)
				{
					totalHexagons++;
				}
				if (element == 5)
				{
					totalRectangles++;
				}
				if (element == 6)
				{
					totalSpheres++;
				}
				if (element == 7)
				{
					totalSquares++;
				}
				if (element == 8)
				{
					totalTriangles++;
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
