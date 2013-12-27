var g1_oa_c_6 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

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
   		var elementCounter     = 0;
                
                for (i = 0; i <= 78; i++)
                {
                        if (this.mApplication.mLevel == i)
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
