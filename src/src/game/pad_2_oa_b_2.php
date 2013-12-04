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

		//14
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 1 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 2 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 2 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 3 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 4 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 5 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 6 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 7 =','14'));

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 13 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 12 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 11 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 10 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 9 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 8 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 7 =','14'));

		//15
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 1 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 2 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 3 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 4 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 5 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 6 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 7 =','15'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 14 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 13 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 12 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 11 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 10 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 9 =','15'));

		//16
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 1 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 2 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 3 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 4 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 5 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 6 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 7 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 8 =','16'));

		//17
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 1 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 2 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 3 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 4 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 5 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 6 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 7 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 8 =','17'));

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 16 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 15 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 14 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 13 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 12 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 11 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 10 =','17'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 9 =','17'));
	
		//18	
		this.mQuiz.mQuestionPoolArray.push(new Question('17 + 1 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 2 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 3 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 4 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 5 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 6 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 7 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 8 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 9 =','18'));

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 17 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 16 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 15 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 14 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 13 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 12 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 11 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 10 =','18'));

		//19
		this.mQuiz.mQuestionPoolArray.push(new Question('18 + 1 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 + 2 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 3 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 4 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 5 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 6 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 7 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 8 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 9 =','19'));

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 18 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 17 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 16 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 15 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 14 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 13 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 12 =','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 11=','19'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 10 =','19'));

		//20
		this.mQuiz.mQuestionPoolArray.push(new Question('19 + 1 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('18 + 2 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('17 + 3 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('16 + 4 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('15 + 5 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('14 + 6 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('13 + 7 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('12 + 8 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('11 + 9 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 10 =','20'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 19 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 18 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 17 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 16 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 15 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 + 14 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 13 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 12 =','20'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 11 =','20'));


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
