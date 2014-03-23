var k_g_b_5 = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.setScoreNeeded(1);

    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRedRectangle    = new Rectangle(50,50,10,10,this,this.mRaphael,0,1,1,"none",.5,true); 
		this.mGreenRectangle  = new Rectangle(50,50,100,10,this,this.mRaphael,.3,1,1,"none",.5,true); 
		this.mBlueRectangle   = new Rectangle(50,50,200,10,this,this.mRaphael,.6,1,1,"none",.5,true); 
		this.mPurpleRectangle = new Rectangle(50,50,300,10,this,this.mRaphael,.8,1,1,"none",.5,true); 

		this.mRedTriangle     = new Triangle (0,0,0,150,this,this.mRaphael,0,150,0,100,50,100,0,1,1,"none",.5,true); 
		this.mGreenTriangle   = new Triangle (0,0,100,150,this,this.mRaphael,100,150,150,100,150,150,.3,1,1,"none",.5,true); 
		this.mBlueTriangle    = new Triangle (0,0,200,150,this,this.mRaphael,200,150,250,100,300,150,.6,1,1,"none",.5,true); 
		this.mPurpleTriangle  = new Triangle (0,0,300,150,this,this.mRaphael,300,150,350,100,400,150,.8,1,1,"none",.5,true); 

		this.mRedCircle    = new Circle   (25,100,300,this,this.mRaphael,0,1,1,"none",.5,true); 
		this.mGreenCircle  = new Circle   (25,210,300,this,this.mRaphael,.3,1,1,"none",.5,true); 
		this.mBlueCircle   = new Circle   (25,310,300,this,this.mRaphael,.6,1,1,"none",.5,true); 
		this.mPurpleCircle = new Circle   (25,410,300,this,this.mRaphael,.8,1,1,"none",.5,true); 

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
