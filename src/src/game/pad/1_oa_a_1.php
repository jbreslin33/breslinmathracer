var g1_oa_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	
		//score needed	
		this.setScoreNeeded(20);

		//threshold
		this.mThresholdTime = 120000;

                //input pad
                this.mInputPad = new BigQuestionNumberPad(application);

		//word problems
		this.mWordProblems = new WordProblems();
	},

        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(200,200);
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.parent();

                this.mShapeArray[0].setPosition(400,50);

                this.mShapeArray[1].setSize(200,200);
                this.mShapeArray[1].setPosition(200,200);
        },

	createQuestions: function()
        {
 		this.parent();
		
		var totalAddition        = 0;
		var totalSubtraction     = 0;

		while (totalAddition < this.mScoreNeeded * .4 || totalSubtraction < this.mScoreNeeded * .4)
		{	
			this.mQuiz.resetQuestionArray();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.getAdditionQuestion(20,2));
					totalAddition++;
				}	
				if (randomChance == 1)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.getSubtractionQuestion(20));
					totalSubtraction++;
				}
			}
		}
	}
});
