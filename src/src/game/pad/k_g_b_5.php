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
    		var R = Raphael(0, 0, "100%", "100%"),
                    r = R.circle(100, 100, 50).attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: .5}),
                    g = R.circle(210, 100, 50).attr({fill: "hsb(.3, 1, 1)", stroke: "none", opacity: .5}),
                    b = R.circle(320, 100, 50).attr({fill: "hsb(.6, 1, 1)", stroke: "none", opacity: .5}),
                    p = R.circle(430, 100, 50).attr({fill: "hsb(.8, 1, 1)", stroke: "none", opacity: .5});
                var start = function () {
                    this.ox = this.attr("cx");
                    this.oy = this.attr("cy");
                    this.animate({r: 70, opacity: .25}, 500, ">");
                },
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
