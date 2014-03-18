var k_g_b_5 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);
		this.mRaphael = Raphael(0, 0, "100%", "100%");	
                this.mRed    = this.mRaphael.circle(100, 100, 50);
                this.mGreen  = this.mRaphael.circle(210, 100, 50);
                this.mBlue   = this.mRaphael.circle(320, 100, 50);
                this.mPurple = this.mRaphael.circle(430, 100, 50);

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

	start: function()
	{
                    this.ox = this.attr("cx");
                    this.oy = this.attr("cy");
                    this.animate({r: 70, opacity: .25}, 500, ">");

	},

	move: function(dx,dy)
	{
        	this.attr({cx: this.ox + dx, cy: this.oy + dy});
	},	

	createWorld: function()
	{
		this.parent();
                move = function (dx, dy) {
                    this.attr({cx: this.ox + dx, cy: this.oy + dy});
                },
                up = function () {
                    this.animate({r: 50, opacity: .5}, 500, ">");
                };
                R.set(r, g, b, p).drag(move, start, up);

                this.mShapeArray.push(new Shape(50,50,175,250,this,"/images/bus/kid.png","",""));
	}
});
