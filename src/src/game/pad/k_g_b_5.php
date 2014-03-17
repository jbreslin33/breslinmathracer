var k_g_b_5 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);
	},

	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();

		var question = new Question('What?', 'Nothing');
		this.mQuiz.mQuestionArray.push(question);
	
               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();

                this.mShapeArray.push(new Shape(50,50,175,250,this,"/images/bus/kid.png","",""));
	}
});
