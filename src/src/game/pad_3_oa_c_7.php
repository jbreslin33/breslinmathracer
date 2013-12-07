var Pad_3_oa_c_7 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
		this.mApplication.mHud.mGameName.setText('<font size="2">MULTIPLY AND DIVIDE</font>');
	},

	createQuestions: function()
        {
 		this.parent();

		//0
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 0 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 0 =','0'));

		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 1 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 2 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 3 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 4 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 5 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 6 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 7 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 8 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 9 =','0'));
		this.mQuiz.mQuestionPoolArray.push(new Question('0 X 10 =','0'));

		//1
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 1 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 2 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 3 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 4 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 5 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 6 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 7 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 8 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 9 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 10 =','10'));
		
		this.mQuiz.mQuestionPoolArray.push(new Question('1 X 1 =','1'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 1 =','2'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 1 =','3'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 1 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 1 =','5'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 1 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 1 =','7'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 1 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 1 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 1 =','10'));

		//2
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 2 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 3 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 4 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 5 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 6 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 7 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 8 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 9 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 10 =','20'));

		this.mQuiz.mQuestionPoolArray.push(new Question('2 X 2 =','4'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 2 =','6'));
		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 2 =','8'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 2 =','10'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 2 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 2 =','14'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 2 =','16'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 2 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 2 =','20'));

		//3
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 3 =','9'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 4 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 5 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 6 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 7 =','21'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 8 =','24'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 9 =','27'));
		this.mQuiz.mQuestionPoolArray.push(new Question('3 X 10 =','30'));

		this.mQuiz.mQuestionPoolArray.push(new Question('4 X 3 =','12'));
		this.mQuiz.mQuestionPoolArray.push(new Question('5 X 3 =','15'));
		this.mQuiz.mQuestionPoolArray.push(new Question('6 X 3 =','18'));
		this.mQuiz.mQuestionPoolArray.push(new Question('7 X 3 =','21'));
		this.mQuiz.mQuestionPoolArray.push(new Question('8 X 3 =','24'));
		this.mQuiz.mQuestionPoolArray.push(new Question('9 X 3 =','27'));
		this.mQuiz.mQuestionPoolArray.push(new Question('10 X 3 =','30'));

		//4




		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
		var totalNew           = 0;
		var newQuestionElement = 0;
		var elementCounter     = 0;	
		
		for (i = 48.000; i <= 48.303; i = i + .001)
		{
			if (this.mApplication.mNextLevelID == i)
			{
				newQuestionElement = elementCounter;	
			}			
			elementCounter++;
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
