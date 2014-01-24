var k_g_a_2 = new Class(
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
                this.mQuiz.mAnswerPool.push('cone');
                this.mQuiz.mAnswerPool.push('cube');
                this.mQuiz.mAnswerPool.push('circle');
                this.mQuiz.mAnswerPool.push('cylinder');
                this.mQuiz.mAnswerPool.push('hexagon');
                this.mQuiz.mAnswerPool.push('rectangle');
                this.mQuiz.mAnswerPool.push('sphere');
                this.mQuiz.mAnswerPool.push('square');
                this.mQuiz.mAnswerPool.push('triangle');

		this.mQuiz.resetQuestionArray();

		var question = new Question('What is this?','cone');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[0]);
		this.mQuiz.mQuestionArray.push(question);
		
		var question = new Question('What is this?','cube');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[1]);
		this.mQuiz.mQuestionArray.push(question);
		
		var question = new Question('What is this?','circle');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[2]);
		this.mQuiz.mQuestionArray.push(question);

		var question = new Question('What is this?','cylinder');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[3]);
		this.mQuiz.mQuestionArray.push(question);

		var question = new Question('What is this?','hexagon');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[4]);
		this.mQuiz.mQuestionArray.push(question);

		var question = new Question('What is this?','rectangle');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[5]);
		this.mQuiz.mQuestionArray.push(question);

		var question = new Question('What is this?','sphere');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[6]);
		this.mQuiz.mQuestionArray.push(question);

		var question = new Question('What is this?','square');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[7]);
		this.mQuiz.mQuestionArray.push(question);

		var question = new Question('What is this?','triangle');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[8]);
		this.mQuiz.mQuestionArray.push(question);

		var question = new Question('What is this?','cone');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[0]);
		this.mQuiz.mQuestionArray.push(question);
	},

	createQuestionShapes: function()
	{
		this.destroyShapes();

        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/cone.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/cube.jpg","",""));
		this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/circle.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/cylinder.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/hexagon.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/rectangle.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/sphere.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/square.png","",""));
        	this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/shapes/triangle.png","",""));
	}
});
