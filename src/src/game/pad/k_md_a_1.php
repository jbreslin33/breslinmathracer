var k_md_a_1 = new Class(
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
                this.mQuiz.mAnswerPool.push('tall');
                this.mQuiz.mAnswerPool.push('short');
                this.mQuiz.mAnswerPool.push('heavy');
                this.mQuiz.mAnswerPool.push('light');

		this.mQuiz.resetQuestionArray();

		//tall
		var question = new Question('What is this?','tall');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[0]);
		this.mQuiz.mQuestionArray.push(question);
	
		//short	
		var question = new Question('What is this?','short');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[1]);
		this.mQuiz.mQuestionArray.push(question);

		//heavy
		var question = new Question('What is this?','heavy');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[2]);
		this.mQuiz.mQuestionArray.push(question);
		
		//light
		var question = new Question('What is this?','light');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[3]);
		this.mQuiz.mQuestionArray.push(question);
		
		//tall
		var question = new Question('What is this?','tall');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[0]);
		this.mQuiz.mQuestionArray.push(question);
	
		//short	
		var question = new Question('What is this?','short');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[1]);
		this.mQuiz.mQuestionArray.push(question);

		//heavy
		var question = new Question('What is this?','heavy');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[2]);
		this.mQuiz.mQuestionArray.push(question);
		
		//light
		var question = new Question('What is this?','light');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[3]);
		this.mQuiz.mQuestionArray.push(question);
		
		//tall
		var question = new Question('What is this?','tall');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[0]);
		this.mQuiz.mQuestionArray.push(question);
	
		//short	
		var question = new Question('What is this?','short');
		question.mAnswerPool = this.mQuiz.mAnswerPool;	
		question.mShapeArray.push(this.mShapeArray[1]);
		this.mQuiz.mQuestionArray.push(question);
	},

	createQuestionShapes: function()
	{
		this.destroyShapes();

                this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/attributes/giraffe.jpg","",""));
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/attributes/heavy.gif","",""));
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/attributes/feather.jpg","",""));
	}
});
