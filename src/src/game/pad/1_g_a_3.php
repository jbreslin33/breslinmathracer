var g1_g_a_3 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);

    		this.mRaphael = Raphael(10, 35, 760, 405);
	},
	
        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
        },

	createQuestions: function()
        {
		this.parent();
		
		//just the question array reset
		this.mQuiz.resetQuestionArray();
		this.mQuiz.resetQuestionPoolArray();
   
		var question = new Question('Can you drag the triangles and rectangle together to form a parallelogram?', 'YES');
		question.mAnswerPool[0] = 'FOURTHS';
		question.mAnswerPool[1] = 'HALVES';
		this.mQuiz.mQuestionArray.push(question);
		question.mShapeArray.push(this.mShapeArray[parseInt(0 + this.mTotalGuiBars + this.mTotalInputBars)]);
		
               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

		this.mQuiz.randomize(10);
	},

	createWorld: function()
	{
		this.parent();
		
		this.mShapeArray.push(new Rectangle(50,50,210,210,this,this.mRaphael,.6,1,1,"none",.5,true));
	}
});
