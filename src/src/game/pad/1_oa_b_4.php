var k_oa_b_4 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	       	
		//input pad
                this.mInputPad = new NumberPad(application);
	},

	createQuestions: function()
        {
 		this.parent();

		//add
                this.mQuiz.mQuestionPoolArray.push(new Question('9 + ? = 10','1','9 + 1 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + ? = 10','2','8 + 2 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('7 + ? = 10','3','7 + 3 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('6 + ? = 10','4','6 + 4 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 + ? = 10','5','5 + 5 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + ? = 10','6','4 + 6 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + ? = 10','7','3 + 7 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + ? = 10','8','2 + 8 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + ? = 10','9','1 + 9 = 10'));
		//9

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + ? = 10','9','1 + 9 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + ? = 10','8','2 + 8 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + ? = 10','7','3 + 7 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + ? = 10','6','4 + 6 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 + ? = 10','5','5 + 5 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('6 + ? = 10','4','6 + 4 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('7 + ? = 10','3','7 + 3 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + ? = 10','2','8 + 2 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('9 + ? = 10','1','9 + 1 = 10'));
		//18

		var totalNewGoal       = parseInt(this.mScoreNeeded / 2);
		var totalNew           = 0;
		var newQuestionElement = 0;
   		var elementCounter     = 0;
                
                for (i = 0; i <= 17; i++)
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

	},
 
	showCorrectAnswer: function()
        {
		this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },

	showCorrectAnswerOutOfTime: function()
        {
                this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        }
});
