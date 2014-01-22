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

	reset: function()
	{
		this.parent();
		
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
		} 
	},
	
	showQuestion: function()
	{
        	this.mQuiz.getQuestion().setChoices();
                this.mInputPad.showButtons();

		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }
                this.mShapeArray[this.mScore].setVisibility(false);

		this.mInputPad.showQuestion();	
		
		//show shape	
		this.mShapeArray[this.mScore].setVisibility(true);
	},
 
	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},
   
	createQuestions: function()
        {
		this.parent();
  	
		//answer pool
                this.mQuiz.mAnswerPool.push('tall');
                this.mQuiz.mAnswerPool.push('short');
                this.mQuiz.mAnswerPool.push('heavy');
                this.mQuiz.mAnswerPool.push('light');
/*
              	for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
               	{
                        this.mQuiz.mQuestionArray[d].destructor();
                        this.mQuiz.mQuestionArray[d] = 0;
                }
                this.mQuiz.mQuestionArray = 0;
                this.mQuiz.mQuestionArray = new Array();
*/	
		//tall
		var question = new Question('What is this?','tall');
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;
	
		//short	
		var question = new Question('What is this?','short');
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;

		//heavy
		var question = new Question('What is this?','heavy');
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		
		//light
		var question = new Question('What is this?','light');
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		
		//short	
		var question = new Question('What is this?','short');
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		
		//light
		var question = new Question('What is this?','light');
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		
		//heavy
		var question = new Question('What is this?','heavy');
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		
		//short	
		var question = new Question('What is this?','short');
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		
		//tall
		var question = new Question('What is this?','tall');
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		
		//light
		var question = new Question('What is this?','light');
		this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool = this.mQuiz.mAnswerPool;

		this.createQuestionShapes();
	},

	createQuestionShapes: function()
	{
                this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/attributes/giraffe.jpg","",""));
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/attributes/heavy.gif","",""));
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/attributes/feather.jpg","",""));
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/attributes/feather.jpg","",""));
                this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/attributes/heavy.gif","",""));
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(200,200,150,275,this,"/images/attributes/giraffe.jpg","",""));
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/attributes/feather.jpg","",""));
                	
		for (i = 0; i < this.mShapeArray.length; i++)
		{
			this.mShapeArray[i].setVisibility(false);
               		this.mShapeArray[i].mCollidable = false;
               		this.mShapeArray[i].mCollisionOn = false;
		}	
	},

	//state overides
	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        }

});
