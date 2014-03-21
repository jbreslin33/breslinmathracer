var k_g_b_5 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);

		this.mRedTriangleX1 = 0;
		this.mRedTriangleY1 = 100;
		this.mRedTriangleX2 = 50;
		this.mRedTriangleY2 = 50;
		this.mRedTriangleX3 = 100;
		this.mRedTriangleY3 = 100;
		
		this.mRedTriangleLastMoveX = 0;
		this.mRedTriangleLastMoveY = 0;

		this.mRedTrianglePath = "M" + this.mRedTriangleX1 + "," + this.mRedTriangleY1 + " L" + this.mRedTriangleX2 + "," + this.mRedTriangleY2 + " L" + this.mRedTriangleX3 + "," + this.mRedTriangleY3 + " z";

    		this.mRaphael = Raphael(10, 35, 760, 405),

                this.mRedCircle = this.mRaphael.circle(100, 300, 50).attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: .5}),
                this.mGreenCircle = this.mRaphael.circle(210, 300, 50).attr({fill: "hsb(.3, 1, 1)", stroke: "none", opacity: .5}),
                this.mBlueCircle = this.mRaphael.circle(320, 300, 50).attr({fill: "hsb(.6, 1, 1)", stroke: "none", opacity: .5}),
                this.mPurpleCircle = this.mRaphael.circle(430, 300, 50).attr({fill: "hsb(.8, 1, 1)", stroke: "none", opacity: .5}),

		this.mRedRectangle = this.mRaphael.rect(10, 10, 50, 50).attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: .5}),

		this.mRedTriangle = this.mRaphael.path("" + this.mRedTrianglePath).attr({fill: "hsb(0, 1, 1)", stroke: "none", opacity: .5});

                this.mRaphael.set(this.mRedCircle, this.mGreenCircle, this.mBlueCircle, this.mPurpleCircle).drag(this.moveCircle, this.startCircle, this.upCircle);                
                this.mRaphael.set(this.mRedRectangle).drag(this.move, this.start, this.up);                
                this.mRaphael.set(this.mRedTriangle).drag(this.moveTriangle, this.startTriangle, this.up);                
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
	
	startTriangle: function()
	{
		APPLICATION.mGame.mRedTriangleLastMoveX = 0;
		APPLICATION.mGame.mRedTriangleLastMoveY = 0;
	},

	move: function(dx,dy)
	{
        	this.attr({x: this.ox + dx, y: this.oy + dy});
	},
	
	moveCircle: function(dx,dy)
	{
        	this.attr({cx: this.ox + dx, cy: this.oy + dy});
	},
	
	moveTriangle: function(dx,dy)
	{
		var deltaX = dx - APPLICATION.mGame.mRedTriangleLastMoveX;
		var deltaY = dy - APPLICATION.mGame.mRedTriangleLastMoveY;

		APPLICATION.mGame.mRedTriangleX1 += deltaX;
		APPLICATION.mGame.mRedTriangleY1 += deltaY;
		APPLICATION.mGame.mRedTriangleX2 += deltaX;
		APPLICATION.mGame.mRedTriangleY2 += deltaY;
		APPLICATION.mGame.mRedTriangleX3 += deltaX;
		APPLICATION.mGame.mRedTriangleY3 += deltaY;
		
		APPLICATION.mGame.mRedTrianglePath = "M" + APPLICATION.mGame.mRedTriangleX1 + "," + APPLICATION.mGame.mRedTriangleY1 + " L" + APPLICATION.mGame.mRedTriangleX2 + "," + APPLICATION.mGame.mRedTriangleY2 + " L" + APPLICATION.mGame.mRedTriangleX3 + "," + APPLICATION.mGame.mRedTriangleY3 + " z";
		this.attr({path:"" + APPLICATION.mGame.mRedTrianglePath});
		
		APPLICATION.mGame.mRedTriangleLastMoveX = dx;
		APPLICATION.mGame.mRedTriangleLastMoveY = dy;
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
