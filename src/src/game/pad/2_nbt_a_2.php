var g2_nbt_a_2 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(10);

		this.mThresholdTime = 6000;
	},

        createNumQuestion: function()
        {
                this.parent();

                //question
                this.mNumQuestion.setPosition(140,140);
                this.mNumQuestion.setSize(200,200);
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
		
		var countBy = 0;	
		var startNumber = 0;
 		    				
		if (this.mApplication.mLevel == 1)
		{
			countBy = 5;	
			startNumber = 0;
		}	
		if (this.mApplication.mLevel == 2)
		{
			countBy = 5;	
			startNumber = 50;
		}	
	
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			this.mQuiz.mQuestionArray.push(new Question('Count by ' + countBy + ':      ' + parseInt(startNumber + countBy * i) ,'' + parseInt(startNumber + countBy + countBy * i)));
		}
	}
});
