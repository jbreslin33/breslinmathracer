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
   		var elementCounter     = 0;
                
                for (i = 14.00; i <= 14.41; i = i + .01)
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
