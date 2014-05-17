var k_cc_a_1 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(1);
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

		this.setScoreNeeded(1);

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
			startNumber = 0;
		}	
		if (this.mApplication.mLevel == 2)
		{
			startNumber = 1; 
		}	
		if (this.mApplication.mLevel == 3)
		{
			startNumber = 2; 
		}	
		if (this.mApplication.mLevel == 4)
		{
			startNumber = 3; 
		}	
		if (this.mApplication.mLevel == 5)
		{
			startNumber = 4; 
		}	
		if (this.mApplication.mLevel == 6)
		{
			startNumber = 5; 
		}	
		if (this.mApplication.mLevel == 7)
		{
			startNumber = 6; 
		}	
		if (this.mApplication.mLevel == 8)
		{
			startNumber = 7; 
		}	
		if (this.mApplication.mLevel == 9)
		{
			startNumber = 8; 
		}	
		if (this.mApplication.mLevel == 10)
		{
			startNumber = 9; 
		}	
		if (this.mApplication.mLevel == 11)
		{
			startNumber = 10; 
		}	
		if (this.mApplication.mLevel == 12)
		{
			startNumber = 11; 
		}	
		if (this.mApplication.mLevel == 13)
		{
			startNumber = 12; 
		}	
		if (this.mApplication.mLevel == 14)
		{
			startNumber = 13; 
		}	
		if (this.mApplication.mLevel == 15)
		{
			startNumber = 14; 
		}	
		if (this.mApplication.mLevel == 16)
		{
			startNumber = 15; 
		}	
		if (this.mApplication.mLevel == 17)
		{
			startNumber = 16; 
		}	
		if (this.mApplication.mLevel == 18)
		{
			startNumber = 17; 
		}	
		if (this.mApplication.mLevel == 19)
		{
			startNumber = 18; 
		}	
		if (this.mApplication.mLevel == 20)
		{
			startNumber = 19; 
		}	
		if (this.mApplication.mLevel == 21)
		{
			startNumber = 20; 
		}	

		if (this.mApplication.mLevel == 22)
		{
			this.setScoreNeeded(10);
			startNumber = 21;
		}	
		
		if (this.mApplication.mLevel == 23)
		{
			this.setScoreNeeded(10);
			startNumber = 31;
		}	
		
		if (this.mApplication.mLevel == 24) 
		{
			this.setScoreNeeded(10);
			startNumber = 41;
		}	
		
		if (this.mApplication.mLevel == 25)
		{
			this.setScoreNeeded(10);
			startNumber = 51;
		}	
		if (this.mApplication.mLevel == 26)
		{
			this.setScoreNeeded(10);
			startNumber = 61;
		}	
		if (this.mApplication.mLevel == 27)
		{
			this.setScoreNeeded(10);
			startNumber = 71;
		}	
		if (this.mApplication.mLevel == 28)
		{
			this.setScoreNeeded(10);
			startNumber = 81;
		}	
		if (this.mApplication.mLevel == 29)
		{
			this.setScoreNeeded(10);
			startNumber = 91;
		}	
		if (this.mApplication.mLevel == 30)
		{
			this.setScoreNeeded(10);
			countBy = 10;	
			startNumber = 0;
		}	
	
		for (i = 0; i < this.mScoreNeeded; i++)
		{
			this.mQuiz.mQuestionArray.push(new Question('When counting by ' + countBy + ' what comes after ' + parseInt(startNumber + countBy * i) + '?','' + parseInt(startNumber + countBy + countBy * i)));
		}
		this.mQuiz.mQuestionArray.push(new Question('buf','buf'));
	}
});
