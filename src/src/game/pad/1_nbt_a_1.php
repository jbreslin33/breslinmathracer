var g1_nbt_a_1 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(20);
	},

        createNumQuestion: function()
        {
                this.parent();

                //question
                this.mNumQuestion.setPosition(295,25);
                this.mNumQuestion.setSize(125,20);
        },

	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(200,200);
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.parent();

                this.mShapeArray[0].setPosition(400,50);

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(200,200);
        },

	createQuestions: function()
        {
 		this.parent();

                this.mQuiz.resetQuestionArray();
		
		var countBy = 1;	
		var startNumber = 0;
 		    				
		if (this.mApplication.mLevel == 1)
		{
			startNumber = 85;
		}	

		if (this.mApplication.mLevel == 2)
		{
			startNumber = 95;
		}	
		
		if (this.mApplication.mLevel == 3)
		{
			startNumber = 93;
		}	
		
		if (this.mApplication.mLevel == 4)
		{
			startNumber = 89;
		}	
		
		if (this.mApplication.mLevel == 5)
		{
			startNumber = 96;
		}	
		
		if (this.mApplication.mLevel == 6)
		{
			startNumber = 98;
		}	
	
		for (i = 0; i < this.mScoreNeeded; i++)
		{
		      //this.mQuiz.mQuestionArray.push(new Question('Count by ' + countBy + ':      ' + parseInt(startNumber + countBy * i) ,'' + parseInt(startNumber + countBy + countBy * i)));
 			this.mQuiz.mQuestionArray.push(new Question('When counting by ' + countBy + ' what comes after ' + parseInt(startNumber + countBy * i) + '?','' + parseInt(startNumber + countBy + countBy * i)));
		}
	}
});
