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
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 1 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 5 =','6'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 2 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 5 =','7'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 3 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 5 =','8'));

		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 4 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 + 5 =','9'));

		this.mQuiz.mQuestionPoolArray.push(new Question('5 + 5 =','10'));
		//9

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
		//19

		//7
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 0 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 7 =','7'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 1 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 7 =','8'));

		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 2 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 7 =','9'));

		this.mQuiz.mQuestionPoolArray.push(new Question('7 + 3 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 + 7 =','10'));
		//27

		//8
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 0 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 8 =','8'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 1 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 8 =','9'));

		this.mQuiz.mQuestionPoolArray.push(new Question('8 + 2 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 + 8 =','10'));
		//33

		//9
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 0 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 9 =','9'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + 1 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 + 9 =','10'));
		//37

		//10
		this.mQuiz.mQuestionPoolArray.push(new Question('10 + 0 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 + 10 =','10'));
		//39

		//0
		this.mQuiz.mQuestionPoolArray.push(new Question('6 - 6 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 - 7 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 - 8 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 - 9 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 - 10 =','0'));
		//44
	
		//1
		this.mQuiz.mQuestionPoolArray.push(new Question('10 - 9 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 - 8 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 - 7 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 - 6 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 - 5 =','1'));
		//49

		//2
		this.mQuiz.mQuestionPoolArray.push(new Question('6 - 4 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 - 5 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 - 6 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 - 7 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 - 8 =','2'));
		//54

		//3
		this.mQuiz.mQuestionPoolArray.push(new Question('6 - 3 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 - 4 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 - 5 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 - 6 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 - 7 =','3'));
		//59

		//4
		this.mQuiz.mQuestionPoolArray.push(new Question('6 - 2 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 - 3 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 - 4 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 - 5 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 - 6 =','4'));
		//64

		//5
		this.mQuiz.mQuestionPoolArray.push(new Question('6 - 1 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 - 2 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 - 3 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 - 4 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 - 5 =','5'));
		//69

		//6	
		this.mQuiz.mQuestionPoolArray.push(new Question('7 - 1 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 - 2 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 - 3 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 - 4 =','6'));
		//73

		//7
		this.mQuiz.mQuestionPoolArray.push(new Question('8 - 1 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 - 2 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 - 3 =','7'));
		//76

		//8
		this.mQuiz.mQuestionPoolArray.push(new Question('9 - 1 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 - 2 =','8'));
		//78

		//9
		this.mQuiz.mQuestionPoolArray.push(new Question('10 - 1 =','9'));
		//79



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
		if (this.mApplication.mNextLevelID == 30.41)
		{
			newQuestionElement = 41;	
		}		
		if (this.mApplication.mNextLevelID == 30.42)
		{
			newQuestionElement = 42;	
		}		
		if (this.mApplication.mNextLevelID == 30.43)
		{
			newQuestionElement = 43;	
		}		
		if (this.mApplication.mNextLevelID == 30.44)
		{
			newQuestionElement = 44;	
		}		
		if (this.mApplication.mNextLevelID == 30.45)
		{
			newQuestionElement = 45;	
		}		
		if (this.mApplication.mNextLevelID == 30.46)
		{
			newQuestionElement = 46;	
		}		
		if (this.mApplication.mNextLevelID == 30.47)
		{
			newQuestionElement = 47;	
		}		
		if (this.mApplication.mNextLevelID == 30.48)
		{
			newQuestionElement = 48;	
		}		
                if (this.mApplication.mNextLevelID == 30.49)
		{
			newQuestionElement = 49;	
		}	

                if (this.mApplication.mNextLevelID == 30.50)
		{
			newQuestionElement = 50;	
		}		
		if (this.mApplication.mNextLevelID == 30.51)
		{
			newQuestionElement = 51;	
		}		
		if (this.mApplication.mNextLevelID == 30.52)
		{
			newQuestionElement = 52;	
		}		
		if (this.mApplication.mNextLevelID == 30.53)
		{
			newQuestionElement = 53;	
		}		
		if (this.mApplication.mNextLevelID == 30.54)
		{
			newQuestionElement = 54;	
		}		
		if (this.mApplication.mNextLevelID == 30.55)
		{
			newQuestionElement = 55;	
		}		
		if (this.mApplication.mNextLevelID == 30.56)
		{
			newQuestionElement = 56;	
		}		
		if (this.mApplication.mNextLevelID == 30.57)
		{
			newQuestionElement = 57;	
		}		
		if (this.mApplication.mNextLevelID == 30.58)
		{
			newQuestionElement = 58;	
		}		
                if (this.mApplication.mNextLevelID == 30.59)
		{
			newQuestionElement = 59;	
		}
                if (this.mApplication.mNextLevelID == 30.60)
		{
			newQuestionElement = 60;	
		}		
		if (this.mApplication.mNextLevelID == 30.61)
		{
			newQuestionElement = 61;	
		}		
		if (this.mApplication.mNextLevelID == 30.62)
		{
			newQuestionElement = 62;	
		}		
		if (this.mApplication.mNextLevelID == 30.63)
		{
			newQuestionElement = 63;	
		}		
		if (this.mApplication.mNextLevelID == 30.64)
		{
			newQuestionElement = 64;	
		}		
		if (this.mApplication.mNextLevelID == 30.65)
		{
			newQuestionElement = 65;	
		}		
		if (this.mApplication.mNextLevelID == 30.66)
		{
			newQuestionElement = 66;	
		}		
		if (this.mApplication.mNextLevelID == 30.67)
		{
			newQuestionElement = 67;	
		}		
		if (this.mApplication.mNextLevelID == 30.68)
		{
			newQuestionElement = 68;	
		}		
                if (this.mApplication.mNextLevelID == 30.69)
		{
			newQuestionElement = 69;	
		}	
               if (this.mApplication.mNextLevelID == 30.70)
		{
			newQuestionElement = 70;	
		}		
		if (this.mApplication.mNextLevelID == 30.71)
		{
			newQuestionElement = 71;	
		}		
		if (this.mApplication.mNextLevelID == 30.72)
		{
			newQuestionElement = 72;	
		}		
		if (this.mApplication.mNextLevelID == 30.73)
		{
			newQuestionElement = 73;	
		}		
		if (this.mApplication.mNextLevelID == 30.74)
		{
			newQuestionElement = 74;	
		}		
		if (this.mApplication.mNextLevelID == 30.75)
		{
			newQuestionElement = 75;	
		}		
		if (this.mApplication.mNextLevelID == 30.76)
		{
			newQuestionElement = 76;	
		}		
		if (this.mApplication.mNextLevelID == 30.77)
		{
			newQuestionElement = 77;	
		}		
		if (this.mApplication.mNextLevelID == 30.78)
		{
			newQuestionElement = 78;	
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
