var k_g_b_5 = new Class(
{

Extends: Game,

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

		// Creates canvas 320 × 200 at 10, 50
		var paper = Raphael(10, 50, 320, 200);

		// Creates circle at x = 50, y = 40, with radius 10
		var circle = paper.circle(50, 40, 10);

		// Sets the fill attribute of the circle to red (#f00)
		circle.attr("fill", "#f00");

		// Sets the stroke attribute of the circle to white
		circle.attr("stroke", "#fff");

                this.mShapeArray.push(new Shape(50,50,175,250,this,"/images/bus/kid.png","",""));
	}
});
