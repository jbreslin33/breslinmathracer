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


		if (this.mApplication.mNextLevelID == 30)
		{
			newQuestionElement = 0;	
		}		
		if (this.mApplication.mNextLevelID == 30.01)
		{
			newQuestionElement = 1;	
		}		
		if (this.mApplication.mNextLevelID == 30.02)
		{
			newQuestionElement = 2;	
		}		
		if (this.mApplication.mNextLevelID == 30.03)
		{
			newQuestionElement = 3;	
		}		
		if (this.mApplication.mNextLevelID == 30.04)
		{
			newQuestionElement = 4;	
		}		
		if (this.mApplication.mNextLevelID == 30.05)
		{
			newQuestionElement = 5;	
		}		
		if (this.mApplication.mNextLevelID == 30.06)
		{
			newQuestionElement = 6;	
		}		
		if (this.mApplication.mNextLevelID == 30.07)
		{
			newQuestionElement = 7;	
		}		
		if (this.mApplication.mNextLevelID == 30.08)
		{
			newQuestionElement = 8;	
		}		
		if (this.mApplication.mNextLevelID == 30.09)
		{
			newQuestionElement = 9;	
		}		
		if (this.mApplication.mNextLevelID == 30.10)
		{
			newQuestionElement = 10;	
		}		
		if (this.mApplication.mNextLevelID == 30.11)
		{
			newQuestionElement = 11;	
		}		
		if (this.mApplication.mNextLevelID == 30.12)
		{
			newQuestionElement = 12;	
		}		
		if (this.mApplication.mNextLevelID == 30.13)
		{
			newQuestionElement = 13;	
		}		
		if (this.mApplication.mNextLevelID == 30.14)
		{
			newQuestionElement = 14;	
		}		
		if (this.mApplication.mNextLevelID == 30.15)
		{
			newQuestionElement = 15;	
		}		
		if (this.mApplication.mNextLevelID == 30.16)
		{
			newQuestionElement = 16;	
		}		
		if (this.mApplication.mNextLevelID == 30.17)
		{
			newQuestionElement = 17;	
		}		
		if (this.mApplication.mNextLevelID == 30.18)
		{
			newQuestionElement = 18;	
		}		
		if (this.mApplication.mNextLevelID == 30.19)
		{
			newQuestionElement = 19;	
		}		
		if (this.mApplication.mNextLevelID == 30.20)
		{
			newQuestionElement = 20;	
		}		
		if (this.mApplication.mNextLevelID == 30.21)
		{
			newQuestionElement = 21;	
		}		
		if (this.mApplication.mNextLevelID == 30.22)
		{
			newQuestionElement = 22;	
		}		
		if (this.mApplication.mNextLevelID == 30.23)
		{
			newQuestionElement = 23;	
		}		
		if (this.mApplication.mNextLevelID == 30.24)
		{
			newQuestionElement = 24;	
		}		
		if (this.mApplication.mNextLevelID == 30.25)
		{
			newQuestionElement = 25;	
		}		
		if (this.mApplication.mNextLevelID == 30.26)
		{
			newQuestionElement = 26;	
		}		
		if (this.mApplication.mNextLevelID == 30.27)
		{
			newQuestionElement = 27;	
		}		
		if (this.mApplication.mNextLevelID == 30.28)
		{
			newQuestionElement = 28;	
		}		
		if (this.mApplication.mNextLevelID == 30.29)
		{
			newQuestionElement = 29;	
		}		
		if (this.mApplication.mNextLevelID == 30.30)
		{
			newQuestionElement = 30;	
		}		
		if (this.mApplication.mNextLevelID == 30.31)
		{
			newQuestionElement = 31;	
		}		
		if (this.mApplication.mNextLevelID == 30.32)
		{
			newQuestionElement = 32;	
		}		
		if (this.mApplication.mNextLevelID == 30.33)
		{
			newQuestionElement = 33;	
		}		
		if (this.mApplication.mNextLevelID == 30.34)
		{
			newQuestionElement = 34;	
		}		
		if (this.mApplication.mNextLevelID == 30.35)
		{
			newQuestionElement = 35;	
		}		
		if (this.mApplication.mNextLevelID == 30.36)
		{
			newQuestionElement = 36;	
		}		
		if (this.mApplication.mNextLevelID == 30.37)
		{
			newQuestionElement = 37;	
		}		
		if (this.mApplication.mNextLevelID == 30.38)
		{
			newQuestionElement = 38;	
		}		
		if (this.mApplication.mNextLevelID == 30.39)
		{
			newQuestionElement = 39;	
		}		
		if (this.mApplication.mNextLevelID == 30.40)
		{
			newQuestionElement = 40;	
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
