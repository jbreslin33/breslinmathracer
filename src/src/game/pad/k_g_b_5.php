var k_g_b_5 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);

    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRedRectangle    = new Rectangle(this.mRaphael,10,10,50,50,0,1,1,"none",.5); 
		this.mGreenRectangle  = new Rectangle(this.mRaphael,110,10,50,50,0,1,1,"none",.5); 
		this.mBlueRectangle   = new Rectangle(this.mRaphael,210,10,50,50,0,1,1,"none",.5); 
		this.mPurpleRectangle = new Rectangle(this.mRaphael,310,10,50,50,0,1,1,"none",.5); 

		this.mRedTriangle  = new Triangle (this.mRaphael,0,150,50,100,100,150,0,1,1,"none",.5); 

		this.mRedCircle    = new Circle   (this.mRaphael,100,300,25,0,1,1,"none",.5); 
		this.mGreenCircle  = new Circle   (this.mRaphael,210,300,25,.3,1,1,"none",.5); 
		this.mBlueCircle   = new Circle   (this.mRaphael,320,300,25,.6,1,1,"none",.5); 
		this.mPurpleCircle = new Circle   (this.mRaphael,430,300,25,.8,1,1,"none",.5); 

                this.mRaphael.set(this.mRedRectangle).drag(this.mRedRectangle.move, this.mRedRectangle.start, this.mRedRectangle.up);                

                this.mRaphael.set(this.mRedRectangle.mPolygon).drag(this.mRedRectangle.move, this.mRedRectangle.start, this.mRedRectangle.up);                
                this.mRaphael.set(this.mGreenRectangle.mPolygon).drag(this.mGreenRectangle.move, this.mGreenRectangle.start, this.mGreenRectangle.up);                
                this.mRaphael.set(this.mBlueRectangle.mPolygon).drag(this.mBlueRectangle.move, this.mBlueRectangle.start, this.mBlueRectangle.up);                
                this.mRaphael.set(this.mPurpleRectangle.mPolygon).drag(this.mPurpleRectangle.move, this.mPurpleRectangle.start, this.mPurpleRectangle.up);                
                this.mRaphael.set(this.mRedCircle.mPolygon).drag(this.mRedCircle.move, this.mRedCircle.start, this.mRedCircle.up);                
                this.mRaphael.set(this.mGreenCircle.mPolygon).drag(this.mGreenCircle.move, this.mGreenCircle.start, this.mGreenCircle.up);                
                this.mRaphael.set(this.mBlueCircle.mPolygon).drag(this.mBlueCircle.move, this.mBlueCircle.start, this.mBlueCircle.up);                
                this.mRaphael.set(this.mPurpleCircle.mPolygon).drag(this.mPurpleCircle.move, this.mPurpleCircle.start, this.mPurpleCircle.up);                

                this.mRaphael.set(this.mRedTriangle.mPolygon).drag(this.mRedTriangle.move, this.mRedTriangle.start, this.mRedTriangle.up);                
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
