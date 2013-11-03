var Helicopter = new Class(
{

Extends: Game,

        initialize: function(skill)
        {
                //application
                this.parent(skill);
        },

	update: function()
	{
		this.parent();

 		if (this.mQuiz)
        	{
			
        		if (this.mQuiz.isQuizComplete())
                	{
                        	this.mOn = false;
                               	this.setFeedback("YOU WIN!!!");
                               	window.location = "../../../database/goto_next_level.php"
			}
                }
        },

	resetGame: function()
	{
		this.parent();

		//let's reset all quiz stuff right here.
                if (this.mQuiz)
		{ 
			this.mQuiz.reset();

			//set text of control object
			this.mControlObject.setText(0);
		}
	},
	
	evaluateCollision: (function(col1,col2)
        {
	        this.parent(col1,col2);

		//if you get hit with a chaser then reset game or maybe lose a life 
                if (col1.mMessage == "controlObject" && col2.mMessage == "chaser")
                {
                        //feedback
                        this.setFeedback("Try again.");

                        //this deletes and then recreates everthing.
                        this.resetGame();
                }

		//you ran into a question shape lets resolve it	
		if (col1.mMessage == "controlObject" && col2.mMessage == "question")
		{
                        if (col1.mInnerHTML == col2.mQuestion.getAnswer()) 
                        {
                        	if (this.mQuiz)
				{ 
					this.mQuiz.correctAnswer();
			       	}	
				col2.mCollisionOn = false;
                                col2.setVisibility(false);

                                //feedback
                                this.setFeedback("Correct!");
                        }
                        else
                        {
                                //feedback
                                this.setFeedback("Try again.");

                                //this deletes and then recreates everthing.
                                this.resetGame();
                        }
                }

 	}).protect(),

	checkKeys: (function()
        {
                this.parent();
                if (mApplication.mKey0 == true)
                {
                        this.mControlObject.setText("0");
                }
                if (mApplication.mKey1 == true)
                {
                        this.mControlObject.setText("1");
                }
                if (mApplication.mKey2 == true)
                {
                        this.mControlObject.setText("2");
                }
                if (mApplication.mKey3 == true)
                {
                        this.mControlObject.setText("3");
                }
                if (mApplication.mKey4 == true)
                {
                        this.mControlObject.setText("4");
                }
                if (mApplication.mKey5 == true)
                {
                        this.mControlObject.setText("5");
                }
                if (mApplication.mKey6 == true)
                {
                        this.mControlObject.setText("6");
                }
                if (mApplication.mKey7 == true)
                {
                        this.mControlObject.setText("7");
                }
                if (mApplication.mKey8 == true)
                {
                        this.mControlObject.setText("8");
                }
                if (mApplication.mKey9 == true)
                {
                        this.mControlObject.setText("9");
                }

        }).protect()

});



