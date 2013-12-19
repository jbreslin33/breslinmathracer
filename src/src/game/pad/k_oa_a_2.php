var k_oa_a_2 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
		this.mApplication.mHud.mGameName.setText('<font size="2">ADD</font>');

		//Ben had 2 toys. Jane gave him 2 more toys. How many toys does ben have now? 
		
		this.mAdditionArray = new Array();

		this.mAdditionArray.
	
		this.mNameA = '';
		this.mNameB = '';
	
		this.mNameArrayA = new Array();
		this.mNameArrayB = new Array();
	
		this.mNameArrayA[0] = 'Joe'; 
		this.mNameArrayA[1] = 'Tom'; 
		
		this.mNameArrayB[0] = 'Sally'; 
		this.mNameArrayB[1] = 'Jane'; 

		this.mObjectArrayB[0][0] = 'Apple'; 
		this.mObjectArrayB[0][1] = 'Apples'; 
		this.mObjectArrayB[1][1] = 'Cats'; 

		this.mAddendA = 0;
		this.mAddendB = 0';
	
		this.mSubtrahendA = 0;
		this.mSubtrahendB = 0;

		this.mSign = '';
		
	
	},

	createQuestions: function()
        {
 		this.parent();
	
                for (i = 0; i < this.mScoreNeeded; i++)
		{
			//let's get name a and b
			this.mNameA = this.mRandNameArrayA[Math.floor((Math.random()*2))];		
			this.mNameB = this.mRandNameArrayB[Math.floor((Math.random()*2))];		

			var mRandomSign = Math.floor((Math.random()*2));		
			if (mRandomSign == 0)
			{
				//do addition 
					
					
			}
			else
			{

			}
		}
		 

		//var randomChance = Math.floor((Math.random()*2));		

                //this.mQuiz.mQuestionPoolArray.push(new Question('5 - 0 =','5'));
/*

		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
		var totalNew           = 0;
		var newQuestionElement = 0;
   		var elementCounter     = 0;
                
                for (i = 14.00; i <= 14.41; i = i + .01)
                {
                        if (this.mApplication.mNextLevelID == i)
                        {
                                newQuestionElement = elementCounter;
                        }
                        elementCounter++;
                }
*/
/*
		while (totalNew < totalNewGoal)
		{	
			//reset vars and arrays
			totalNew = 0;
			for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
			{
				this.mQuiz.mQuestionArray[d] = 0;
			} 
			this.mQuiz.mQuestionArray = 0;
			this.mQuiz.mQuestionArray = new Array();

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[newQuestionElement]);
					totalNew++;
				}	
				if (randomChance == 1)
				{
					var randomElement = Math.floor((Math.random()*newQuestionElement));		
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
				}
			}
		}
*/
	}
});
