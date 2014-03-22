var k_g_b_6 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);

    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRedTriangle     = new Triangle (this.mRaphael,0,150,0,100,50,100,0,1,1,"none",.5); 
		this.mGreenTriangle   = new Triangle (this.mRaphael,100,150,150,100,150,150,.3,1,1,"none",.5); 

		this.mRaphael.set(this.mRedTriangle.mPolygon).drag(this.mRedTriangle.move, this.mRedTriangle.start, this.mRedTriangle.up);                
		this.mRaphael.set(this.mGreenTriangle.mPolygon).drag(this.mGreenTriangle.move, this.mGreenTriangle.start, this.mGreenTriangle.up);                
	},

	update: function()
	{
		this.parent();
	},

	createQuestions: function()
        {
		this.parent();
   
		this.mQuiz.mAnswerPool.push('YES');
                this.mQuiz.mAnswerPool.push('NO');
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();

		var question = new Question('Can you join the red and green triangles together to form a square?', 'Yes');
		question.mAnswerPool = this.mQuiz.mAnswerPool;
		this.mQuiz.mQuestionArray.push(question);
	
               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
	}
});
