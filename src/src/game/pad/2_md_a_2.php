var g2_md_a_2 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);
    		this.mRaphael = Raphael(10, 35, 760, 405);

		this.mRectangleArray = new Array();	
		this.mRulerArray     = new Array();	
	},
       
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setPosition(100,80);
        },

	createQuestions: function()
        {
		this.parent();
		
		//just the question array reset
		this.mQuiz.resetQuestionArray();

		for (i = 0; i < this.mScoreNeeded; i++)
		{
			//get random heights.
			var redHeightCode = Math.floor((Math.random()*6)+1);
			var redHeight = parseInt(redHeightCode * 50);  
					
			var question = new Question('What is the length of the red shape in inches?', redHeightCode);
			this.mQuiz.mQuestionArray.push(question);
			
			question.mShapeArray.push(this.mRectangleArray[i]);
			this.mRectangleArray[i].setSize(50,redHeight);

			question.mShapeArray.push(this.mRulerArray[i]);
			this.mRulerArray[i].addToQuestion(question);
		}
               	
		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	},

	createWorld: function()
	{
		this.parent();
		
		for (i = 0; i < this.mScoreNeeded; i++)
		{
                        //red shape to measure
                        var redRectangle = new Rectangle(50,50,600,100,this,this.mRaphael,0,1,1,"none",.5,true);
                        this.mShapeArray.push(redRectangle);
			this.mRectangleArray.push(redRectangle);

                        //the ruler
                        var ruler = new RulerCentimeter(50,300,300,50,this,this.mRaphael,.6,1,1,"none",.5,true);
                        this.mShapeArray.push(ruler);
			this.mRulerArray.push(ruler);
		}
	}
});
