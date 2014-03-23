var k_g_b_5 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);

    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRedRectangle    = new Rectangle(this.mRaphael,10,10,50,50,0,1,1,"none",.5,true,'rectangle'); 
		this.mGreenRectangle  = new Rectangle(this.mRaphael,110,10,50,50,.3,1,1,"none",.5,true,'rectangle'); 
		this.mBlueRectangle   = new Rectangle(this.mRaphael,210,10,50,50,.6,1,1,"none",.5,true,'rectangle'); 
		this.mPurpleRectangle = new Rectangle(this.mRaphael,310,10,50,50,.8,1,1,"none",.5,true,'rectangle'); 

		this.mRedTriangle     = new Triangle (this.mRaphael,0,150,0,100,50,100,0,1,1,"none",.5,true,'triangle'); 
		this.mGreenTriangle   = new Triangle (this.mRaphael,100,150,150,100,150,150,.3,1,1,"none",.5,true,'triangle'); 
		this.mBlueTriangle    = new Triangle (this.mRaphael,200,150,250,100,300,150,.6,1,1,"none",.5,true,'triangle'); 
		this.mPurpleTriangle  = new Triangle (this.mRaphael,300,150,350,100,400,150,.8,1,1,"none",.5,true,'triangle'); 

		this.mRedCircle    = new Circle   (this.mRaphael,100,300,25,0,1,1,"none",.5,true,'circle'); 
		this.mGreenCircle  = new Circle   (this.mRaphael,210,300,25,.3,1,1,"none",.5,true,'circle'); 
		this.mBlueCircle   = new Circle   (this.mRaphael,320,300,25,.6,1,1,"none",.5,true,'circle'); 
		this.mPurpleCircle = new Circle   (this.mRaphael,430,300,25,.8,1,1,"none",.5,true,'circle'); 
	},

	createQuestions: function()
        {
		this.parent();
	
		//just the question array reset
		this.mQuiz.resetQuestionArray();

		var question = new Question('Play with shapes?', 'Nothing');
		this.mQuiz.mQuestionArray.push(question);
	
               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
	}
});
