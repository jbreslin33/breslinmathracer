var k_g_b_5 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);

    		this.mRaphael = Raphael(10, 35, 760, 405);

                this.mRedCircle = this.mRaphael.circle(100, 300, 50).attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: .5});
                this.mGreenCircle = this.mRaphael.circle(210, 300, 50).attr({fill: "hsb(.3, 1, 1)", stroke: "none", opacity: .5});
                this.mBlueCircle = this.mRaphael.circle(320, 300, 50).attr({fill: "hsb(.6, 1, 1)", stroke: "none", opacity: .5});
                this.mPurpleCircle = this.mRaphael.circle(430, 300, 50).attr({fill: "hsb(.8, 1, 1)", stroke: "none", opacity: .5});

		this.mRedRectangle = this.mRaphael.rect(10, 10, 50, 50).attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: .5});

		this.mTriangle = new Triangle(this.mRaphael,0,100,50,50,100,100); 

                this.mRaphael.set(this.mRedCircle, this.mGreenCircle, this.mBlueCircle, this.mPurpleCircle).drag(this.moveCircle, this.startCircle, this.upCircle);                
                this.mRaphael.set(this.mRedRectangle).drag(this.move, this.start, this.up);                
                this.mRaphael.set(this.mTriangle.mPath).drag(this.mTriangle.move, this.mTriangle.start, this.mTriangle.up);                
	},

	start: function()
	{
        	this.ox = this.attr("x");
                this.oy = this.attr("y");
	},
	
	startCircle: function()
	{
        	this.ox = this.attr("cx");
                this.oy = this.attr("cy");
                this.animate({r: 70, opacity: .25}, 500, ">");
	},
	
	move: function(dx,dy)
	{
        	this.attr({x: this.ox + dx, y: this.oy + dy});
	},
	
	moveCircle: function(dx,dy)
	{
        	this.attr({cx: this.ox + dx, cy: this.oy + dy});
	},
	
	up: function()
	{
	},

	upCircle: function()
	{
        	this.animate({r: 50, opacity: .5}, 500, ">");
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
