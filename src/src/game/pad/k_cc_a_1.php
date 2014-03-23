var k_cc_a_1 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(10);
	},

        createNumQuestion: function()
        {
                this.parent();

                //question
                this.mNumQuestion.setPosition(280,180);
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
			countBy = 1;	
			startNumber = 0;
		}	

		if (this.mApplication.mLevel == 2)
		{
			countBy = 1;	
			startNumber = 10;
		}	
		
		if (this.mApplication.mLevel == 3)
		{
			countBy = 1;	
			startNumber = 20;
		}	
		
		if (this.mApplication.mLevel == 4)
		{
			countBy = 1;	
			startNumber = 30;
		}	
		
		if (this.mApplication.mLevel == 5)
		{
			countBy = 1;	
			startNumber = 40;
		}	
		
		if (this.mApplication.mLevel == 6)
		{
			countBy = 1;	
			startNumber = 50;
		}	
		if (this.mApplication.mLevel == 7)
		{
			countBy = 1;	
			startNumber = 60;
		}	
		if (this.mApplication.mLevel == 8)
		{
			countBy = 1;	
			startNumber = 70;
		}	
		if (this.mApplication.mLevel == 9)
		{
			countBy = 1;	
			startNumber = 80;
		}	
		if (this.mApplication.mLevel == 10)
		{
			countBy = 1;	
			startNumber = 90;
		}	
		if (this.mApplication.mLevel == 11)
		{
			countBy = 10;	
			startNumber = 0;
		}	
	
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			this.mQuiz.mQuestionArray.push(new Question('Count by ' + countBy + ' start at ' + parseInt(startNumber + countBy * i) ,'' + parseInt(startNumber + countBy + countBy * i)));
		}
		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
