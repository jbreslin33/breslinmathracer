var g1_oa_b_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	       	
                //input pad
                this.mInputPad = new LongQuestionNumberPad(application);
        },

        createCorrectAnswerBar: function()
        {
                //question bar header
                if (!this.mCorrectAnswerBarHeader)
                {
                        this.mCorrectAnswerBarHeader = new Shape(150,50,300,50,this,"","","");
                        this.mCorrectAnswerBarHeader.mMesh.innerHTML = 'Correct Answer: ' + this.mQuiz.getQuestion().getAnswer();
                }

                //question bar
                if (!this.mCorrectAnswerBar)
                {
                        this.mCorrectAnswerBar = new Shape(300,50,25,100,this,"","","");
                        this.mCorrectAnswerBar.mMesh.innerHTML = '';
                }
        },

	createQuestions: function()
        {
 		this.parent();

		//commutative

                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 3 = 11 and 3 + ? = 11','8','8 + 3 = 11 and 3 + 8 = 11'));

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
