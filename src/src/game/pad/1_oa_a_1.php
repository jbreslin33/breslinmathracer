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
		
		var totalA = 0;
		var totalB = 0;
		var totalC = 0;
		var totalD = 0;
		var totalE = 0;

		while (totalA < 1 || totalB < 1 || totalC < 1 || totalD < 1 || totalE < 1)
		{	
			this.mQuiz.resetQuestionArray();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*5));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_A());
					totalA++;
				}	
				if (randomChance == 1)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_B());
					totalB++;
				}
				if (randomChance == 2)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_C());
					totalC++;
				}
				if (randomChance == 3)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_D());
					totalD++;
				}
				if (randomChance == 4)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_E());
					totalE++;
				}
			}
		}
	}
});
