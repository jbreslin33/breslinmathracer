var k_g_b_4 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 60000;

		//score needed
		this.setScoreNeeded(20);
	},

	createQuestions: function()
        {
		this.parent();
		
		this.mQuiz.resetQuestionPoolArray();

		if (this.mApplication.mLevel <= 5)
		{
	       		//answer pool
                	this.mQuiz.mAnswerPool.push('0');
                	this.mQuiz.mAnswerPool.push('1');
                	this.mQuiz.mAnswerPool.push('2');
                	this.mQuiz.mAnswerPool.push('3');
                	this.mQuiz.mAnswerPool.push('4');
                	this.mQuiz.mAnswerPool.push('5');
                	this.mQuiz.mAnswerPool.push('6');
                	this.mQuiz.mAnswerPool.push('7');
                	this.mQuiz.mAnswerPool.push('8');
                	this.mQuiz.mAnswerPool.push('9');
                	this.mQuiz.mAnswerPool.push('10');
                	this.mQuiz.mAnswerPool.push('11');
                	this.mQuiz.mAnswerPool.push('12');

			//cube	
			var question = new Question('How many sides?','12');
			question.mAnswerPool = this.mQuiz.mAnswerPool;	
			question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars + 1)]);
			this.mQuiz.mQuestionPoolArray.push(question);
	
			//hexagon
			var question = new Question('How many sides?','6');
			question.mAnswerPool = this.mQuiz.mAnswerPool;	
			question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars + 4)]);
			this.mQuiz.mQuestionPoolArray.push(question);

			//rectangle
			var question = new Question('How many sides?','4');
			question.mAnswerPool = this.mQuiz.mAnswerPool;	
			question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars + 5)]);
			this.mQuiz.mQuestionPoolArray.push(question);

			//square
			var question = new Question('How many sides?','4');
			question.mAnswerPool = this.mQuiz.mAnswerPool;	
			question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars + 7)]);
			this.mQuiz.mQuestionPoolArray.push(question);

			//triangle
			var question = new Question('How many sides?','3');
			question.mAnswerPool = this.mQuiz.mAnswerPool;	
			question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars + 8)]);
			this.mQuiz.mQuestionPoolArray.push(question);

                	var totalCubes = 0;
                	var totalHexagons = 0;
                	var totalRectangles = 0;
                	var totalSquares = 0;
                	var totalTriangles = 0;

                	while (totalCubes < 2 || totalHexagons < 2 || totalRectangles < 2 || totalSquares < 2 || totalTriangles < 2)
                	{
                        	totalCubes = 0;
                        	totalHexagons = 0;
                        	totalRectangles = 0;
                        	totalSquares = 0;
                        	totalTriangles = 0;
                      	
				this.mQuiz.resetQuestionArray();

                        	for (i = 0; i < this.mScoreNeeded; i++)
                        	{
                                	var element = Math.floor((Math.random()*this.mQuiz.mQuestionPoolArray.length));
                                	this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[element]);
                                
                                	if (element == 0)
                                	{
                                        	totalCubes++;
                                	}
                                	if (element == 1)
                                	{
                                        	totalHexagons++;
                                	}
                                	if (element == 2)
                                	{
                                        	totalRectangles++;
                                	}
                                	if (element == 3)
                                	{
                                        	totalSquares++;
                               		}
                                	if (element == 4)
                                	{
                                        	totalTriangles++;
                                	}
                        	}
			}	
		}  

	        if (this.mApplication.mLevel >= 6)
                {
                        //answer pool
                        this.mQuiz.mAnswerPool.push('0');
                        this.mQuiz.mAnswerPool.push('1');
                        this.mQuiz.mAnswerPool.push('2');
                        this.mQuiz.mAnswerPool.push('3');
                        this.mQuiz.mAnswerPool.push('4');
                        this.mQuiz.mAnswerPool.push('5');
                        this.mQuiz.mAnswerPool.push('6');
                        this.mQuiz.mAnswerPool.push('7');
                        this.mQuiz.mAnswerPool.push('8');
                        this.mQuiz.mAnswerPool.push('9');
                        this.mQuiz.mAnswerPool.push('10');
                        this.mQuiz.mAnswerPool.push('11');
                        this.mQuiz.mAnswerPool.push('12');

                        //cube
                        var question = new Question('How many corners?','12');
                        question.mAnswerPool = this.mQuiz.mAnswerPool;
			question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars + 1)]);
                        this.mQuiz.mQuestionPoolArray.push(question);

                        //hexagon
                        var question = new Question('How many corners?','6');
                        question.mAnswerPool = this.mQuiz.mAnswerPool;
			question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars + 4)]);
                        this.mQuiz.mQuestionPoolArray.push(question);

                        //rectangle
                        var question = new Question('How many corners?','4');
                        question.mAnswerPool = this.mQuiz.mAnswerPool;
			question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars + 5)]);
                        this.mQuiz.mQuestionPoolArray.push(question);

                        //square
                        var question = new Question('How many corners?','4');
                        question.mAnswerPool = this.mQuiz.mAnswerPool;
			question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars + 7)]);
                        this.mQuiz.mQuestionPoolArray.push(question);

                        //triangle
                        var question = new Question('How many corners?','3');
                        question.mAnswerPool = this.mQuiz.mAnswerPool;
			question.mShapeArray.push(this.mShapeArray[parseInt(this.mTotalGuiBars + this.mTotalInputBars + 8)]);
                        this.mQuiz.mQuestionPoolArray.push(question);

	                var totalCubes = 0;
                        var totalHexagons = 0;
                        var totalRectangles = 0;
                        var totalSquares = 0;
                        var totalTriangles = 0;

                        while (totalCubes < 2 || totalHexagons < 2 || totalRectangles < 2 || totalSquares < 2 || totalTriangles < 2)
                        {
                                totalCubes = 0;
                                totalHexagons = 0;
                                totalRectangles = 0;
                                totalSquares = 0;
                                totalTriangles = 0;

                                this.mQuiz.resetQuestionArray();

                                for (i = 0; i < this.mScoreNeeded; i++)
                                {
                                        var element = Math.floor((Math.random()*this.mQuiz.mQuestionPoolArray.length));
                                        this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[element]);

                                        if (element == 0)
                                        {
                                                totalCubes++;
                                        }
                                        if (element == 1)
                                        {
                                                totalHexagons++;
                                        }
                                        if (element == 2)
                                        {
                                                totalRectangles++;
                                        }
                                        if (element == 3)
                                        {
                                                totalSquares++;
                                        }
                                        if (element == 4)
                                        {
                                                totalTriangles++;
                                        }
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
