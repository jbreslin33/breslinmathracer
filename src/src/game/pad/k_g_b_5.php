var k_g_b_5 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);

    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRedRectangle = new Rectangle(this.mRaphael,10,10,50,50,0,1,1,"none",.5); 
		this.mTriangle     = new Triangle (this.mRaphael,0,100,50,50,100,100,0,1,1,"none",.5); 
		this.mRedCircle    = new Circle   (this.mRaphael,100,300,50,0,1,1,"none",.5); 
		this.mGreenCircle  = new Circle   (this.mRaphael,210,300,50,.3,1,1,"none",.5); 
		this.mBlueCircle   = new Circle   (this.mRaphael,320,300,50,.6,1,1,"none",.5); 
		this.mPurpleCircle = new Circle   (this.mRaphael,430,300,50,.8,1,1,"none",.5); 

                this.mRaphael.set(this.mRedRectangle).drag(this.move, this.start, this.up);                

                this.mRaphael.set(this.mRedRectangle.mPolygon).drag(this.mRedRectangle.move, this.mRedRectangle.start, this.mRedRectangle.up);                
                this.mRaphael.set(this.mRedCircle.mCircle).drag(this.mRedCircle.move, this.mRedCircle.start, this.mRedCircle.up);                
                this.mRaphael.set(this.mGreenCircle.mCircle).drag(this.mGreenCircle.move, this.mGreenCircle.start, this.mGreenCircle.up);                
                this.mRaphael.set(this.mBlueCircle.mCircle).drag(this.mBlueCircle.move, this.mBlueCircle.start, this.mBlueCircle.up);                
                this.mRaphael.set(this.mPurpleCircle.mCircle).drag(this.mPurpleCircle.move, this.mPurpleCircle.start, this.mPurpleCircle.up);                

                this.mRaphael.set(this.mTriangle.mPath).drag(this.mTriangle.move, this.mTriangle.start, this.mTriangle.up);                
	},

	start: function()
	{
        	this.ox = this.attr("x");
                this.oy = this.attr("y");
	},
	
	move: function(dx,dy)
	{
        	this.attr({x: this.ox + dx, y: this.oy + dy});
	},
	
	up: function()
	{
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
	}
});
