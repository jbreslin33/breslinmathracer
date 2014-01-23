var k_md_a_2 = new Class(
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

	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},
	
	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        },
   
	createQuestions: function()
        {
		this.parent();
 		
		//answer pool
                this.mQuiz.mAnswerPool.push('is more tall than');
                this.mQuiz.mAnswerPool.push('is more short than');
                this.mQuiz.mAnswerPool.push('is more heavy than');
                this.mQuiz.mAnswerPool.push('is more light than');

		this.mQuiz.resetQuestionArray();	

		//1 tall
		var question = new Question('','is more tall than');
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
                question.mShapeArray.push(this.mShapeArray[0]);
                question.mShapeArray.push(this.mShapeArray[5]);
                this.mQuiz.mQuestionArray.push(question);
	
		//2 short	
		var question = new Question('','is more short than');
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
                question.mShapeArray.push(this.mShapeArray[1]);
                question.mShapeArray.push(this.mShapeArray[4]);
                this.mQuiz.mQuestionArray.push(question);

		//3 heavy
		var question = new Question('','is more heavy than');
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
                question.mShapeArray.push(this.mShapeArray[2]);
                question.mShapeArray.push(this.mShapeArray[7]);
                this.mQuiz.mQuestionArray.push(question);
		
		//4 light
		var question = new Question('','is more light than');
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
                question.mShapeArray.push(this.mShapeArray[3]);
                question.mShapeArray.push(this.mShapeArray[6]);
                this.mQuiz.mQuestionArray.push(question);
    		
		//1 tall
                var question = new Question('','is more tall than');
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
                question.mShapeArray.push(this.mShapeArray[0]);
                question.mShapeArray.push(this.mShapeArray[5]);
                this.mQuiz.mQuestionArray.push(question);

                //2 short
                var question = new Question('','is more short than');
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
                question.mShapeArray.push(this.mShapeArray[1]);
                question.mShapeArray.push(this.mShapeArray[4]);
                this.mQuiz.mQuestionArray.push(question);

                //3 heavy
                var question = new Question('','is more heavy than');
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
                question.mShapeArray.push(this.mShapeArray[2]);
                question.mShapeArray.push(this.mShapeArray[7]);
                this.mQuiz.mQuestionArray.push(question);

                //4 light
                var question = new Question('','is more light than');
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[2]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[3]);
                question.mShapeArray.push(this.mShapeArray[3]);
                question.mShapeArray.push(this.mShapeArray[6]);
                this.mQuiz.mQuestionArray.push(question);
	
    		//1 tall
                var question = new Question('','is more tall than');
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
                question.mShapeArray.push(this.mShapeArray[0]);
                question.mShapeArray.push(this.mShapeArray[5]);
                this.mQuiz.mQuestionArray.push(question);

                //2 short
                var question = new Question('','is more short than');
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[0]);
                question.mAnswerPool.push(this.mQuiz.mAnswerPool[1]);
                question.mShapeArray.push(this.mShapeArray[1]);
                question.mShapeArray.push(this.mShapeArray[4]);
                this.mQuiz.mQuestionArray.push(question);
	},

	createQuestionShapes: function()
	{
		this.destroyShapes();

                this.mShapeArray.push(new Shape(200,200,150,305,this,"/images/attributes/giraffe.jpg","",""));
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(200,200,150,305,this,"/images/attributes/heavy.gif","",""));
                this.mShapeArray.push(new Shape(50,50,150,400,this,"/images/attributes/feather.jpg","",""));

                this.mShapeArray.push(new Shape(200,200,600,305,this,"/images/attributes/giraffe.jpg","",""));
                this.mShapeArray.push(new Shape(50,50,550,400,this,"/images/bus/kid.png","",""));
                this.mShapeArray.push(new Shape(200,200,600,305,this,"/images/attributes/heavy.gif","",""));
                this.mShapeArray.push(new Shape(50,50,600,400,this,"/images/attributes/feather.jpg","",""));
	}
});
