var k_oa_a_2 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
		
		this.setScoreNeeded(20);

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
		var totalAdditionGoal    = parseInt( parseInt(this.mScoreNeeded / 2) - parseInt(1));
		var totalSubtractionGoal = parseInt( parseInt(this.mScoreNeeded / 2) - parseInt(1));

		while (totalAddition < totalAdditionGoal || totalSubtraction < totalSubtractionGoal)
		{	
			//RESET as we have either just started or failed to reach totalNewGoal
			totalNew = 0;
			for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
			{
				this.mQuiz.mQuestionArray[d] = 0;
			} 
			this.mQuiz.mQuestionArray = 0;
			this.mQuiz.mQuestionArray = new Array();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.getAdditionQuestion(10,2));
					totalAddition++;
				}	
				if (randomChance == 1)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.getSubtractionQuestion(10));
					totalSubtraction++;
				}
			}
		}
	}
});
