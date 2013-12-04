var Pad_2_oa_b_2 = new Class(
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

		//11
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 1 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 2 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 4 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 5 =','11'));
	
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 10 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 9 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 8 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 7 =','11'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 6 =','11'));
	
		//12	
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 1 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 2 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 3 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 4 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 5 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 6 =','12'));

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 11 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 10 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 9 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 8 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 7 =','12'));

		//13
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 1 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 2 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 3 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 4 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 5 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 6 =','13'));

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 12 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 11 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 10 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 9 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 8 =','13'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 7 =','13'));



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
