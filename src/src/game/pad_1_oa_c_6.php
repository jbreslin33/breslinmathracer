var Pad_1_oa_c_6 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
		this.mApplication.mHud.mGameName.setText('<font size="2">ADD</font>');
	},

	createQuestions: function()
        {
 		this.parent();

		//5
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 0 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 5 =','5'));

		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 1 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 5 =','6'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 2 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 5 =','7'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 3 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 5 =','8'));

		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 4 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 5 =','9'));

		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 5 =','10'));

		//6
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 6 =','6'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 1 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 6 =','7'));

		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 2 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 6 =','8'));

		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 3 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 6 =','9'));

		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 4 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 6 =','10'));

		//7
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 0 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 7 =','7'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 1 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 7 =','8'));

		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 2 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 7 =','9'));

		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 3 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 7 =','10'));

		//8
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 0 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 8 =','8'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 1 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 8 =','9'));

		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 1 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 9 =','10'));

		//9
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 0 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 9 =','9'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 1 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 10 =','10'));

		//10
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 0 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 10 =','10'));

		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
		var totalNew           = 0;
		var newQuestionElement = 0;

		if (this.mApplication.mNextLevelID == 14)
		{
			newQuestionElement = 0;	
		}		
		if (this.mApplication.mNextLevelID == 14.01)
		{
			newQuestionElement = 1;	
		}		
		if (this.mApplication.mNextLevelID == 14.02)
		{
			newQuestionElement = 2;	
		}		
		if (this.mApplication.mNextLevelID == 14.03)
		{
			newQuestionElement = 3;	
		}		
		if (this.mApplication.mNextLevelID == 14.04)
		{
			newQuestionElement = 4;	
		}		
		if (this.mApplication.mNextLevelID == 14.05)
		{
			newQuestionElement = 5;	
		}		
		if (this.mApplication.mNextLevelID == 14.06)
		{
			newQuestionElement = 6;	
		}		
		if (this.mApplication.mNextLevelID == 14.07)
		{
			newQuestionElement = 7;	
		}		
		if (this.mApplication.mNextLevelID == 14.08)
		{
			newQuestionElement = 8;	
		}		
		if (this.mApplication.mNextLevelID == 14.09)
		{
			newQuestionElement = 9;	
		}		
		if (this.mApplication.mNextLevelID == 14.10)
		{
			newQuestionElement = 10;	
		}		
		if (this.mApplication.mNextLevelID == 14.11)
		{
			newQuestionElement = 11;	
		}		
		if (this.mApplication.mNextLevelID == 14.12)
		{
			newQuestionElement = 12;	
		}		
		if (this.mApplication.mNextLevelID == 14.13)
		{
			newQuestionElement = 13;	
		}		
		if (this.mApplication.mNextLevelID == 14.14)
		{
			newQuestionElement = 14;	
		}		
		if (this.mApplication.mNextLevelID == 14.15)
		{
			newQuestionElement = 15;	
		}		
		if (this.mApplication.mNextLevelID == 14.16)
		{
			newQuestionElement = 16;	
		}		
		if (this.mApplication.mNextLevelID == 14.17)
		{
			newQuestionElement = 17;	
		}		
		if (this.mApplication.mNextLevelID == 14.18)
		{
			newQuestionElement = 18;	
		}		
		if (this.mApplication.mNextLevelID == 14.19)
		{
			newQuestionElement = 19;	
		}		
		if (this.mApplication.mNextLevelID == 14.20)
		{
			newQuestionElement = 20;	
		}		

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
	}
});
