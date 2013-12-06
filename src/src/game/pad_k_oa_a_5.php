var Pad_k_oa_a_5 = new Class(
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

		//add
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 1 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 2 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 1 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 2 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 1 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 3 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 1 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 4 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 3 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 2 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 0 =','0')); 
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 0 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 0 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 0 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 0 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 + 0 =','5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 1 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 2 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 3 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 4 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('0 + 5 =','5'));
		//21

		//subtract
		//0
                this.mQuiz.mQuestionPoolArray.push(new Question('0 - 0 =','0'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 - 1 =','0'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 - 2 =','0'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 3 =','0'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 4 =','0'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 5 =','0'));
		//27

		//1
                this.mQuiz.mQuestionPoolArray.push(new Question('1 - 0 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 - 1 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 2 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 3 =','1'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 4 =','1'));
		//32

		//2	
                this.mQuiz.mQuestionPoolArray.push(new Question('2 - 0 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 1 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 2 =','2'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 3 =','2'));
		//36

		//3
                this.mQuiz.mQuestionPoolArray.push(new Question('3 - 0 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 1 =','3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 2 =','3'));
		//39

		//4
                this.mQuiz.mQuestionPoolArray.push(new Question('4 - 0 =','4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 1 =','4'));
		//41

		//5
                this.mQuiz.mQuestionPoolArray.push(new Question('5 - 0 =','5'));
		//42


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
		if (this.mApplication.mNextLevelID == 14.21)
		{
			newQuestionElement = 21;	
		}		
		if (this.mApplication.mNextLevelID == 14.22)
		{
			newQuestionElement = 22;	
		}		
		if (this.mApplication.mNextLevelID == 14.23)
		{
			newQuestionElement = 23;	
		}		
		if (this.mApplication.mNextLevelID == 14.24)
		{
			newQuestionElement = 24;	
		}		
		if (this.mApplication.mNextLevelID == 14.25)
		{
			newQuestionElement = 25;	
		}		
		if (this.mApplication.mNextLevelID == 14.26)
		{
			newQuestionElement = 26;	
		}		
		if (this.mApplication.mNextLevelID == 14.27)
		{
			newQuestionElement = 27;	
		}		
		if (this.mApplication.mNextLevelID == 14.28)
		{
			newQuestionElement = 28;	
		}		
		if (this.mApplication.mNextLevelID == 14.29)
		{
			newQuestionElement = 29;	
		}		
		if (this.mApplication.mNextLevelID == 14.30)
		{
			newQuestionElement = 30;	
		}		
		if (this.mApplication.mNextLevelID == 14.31)
		{
			newQuestionElement = 31;	
		}		
		if (this.mApplication.mNextLevelID == 14.32)
		{
			newQuestionElement = 32;	
		}		
		if (this.mApplication.mNextLevelID == 14.33)
		{
			newQuestionElement = 33;	
		}		
		if (this.mApplication.mNextLevelID == 14.34)
		{
			newQuestionElement = 34;	
		}		
		if (this.mApplication.mNextLevelID == 14.35)
		{
			newQuestionElement = 35;	
		}		
		if (this.mApplication.mNextLevelID == 14.36)
		{
			newQuestionElement = 36;	
		}		
		if (this.mApplication.mNextLevelID == 14.37)
		{
			newQuestionElement = 37;	
		}		
		if (this.mApplication.mNextLevelID == 14.38)
		{
			newQuestionElement = 38;	
		}		
		if (this.mApplication.mNextLevelID == 14.39)
		{
			newQuestionElement = 39;	
		}		
		if (this.mApplication.mNextLevelID == 14.40)
		{
			newQuestionElement = 40;	
		}		
		if (this.mApplication.mNextLevelID == 14.41)
		{
			newQuestionElement = 41;	
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
