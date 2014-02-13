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
		
		var totalA = 0;
		var totalB = 0;
		var totalC = 0;
		var totalD = 0;
		var totalAGoal = parseInt( parseInt(this.mScoreNeeded / 2) - parseInt(1));
		var totalBGoal = parseInt( parseInt(this.mScoreNeeded / 2) - parseInt(1));
		var totalCGoal = parseInt( parseInt(this.mScoreNeeded / 2) - parseInt(1));
		var totalDGoal = parseInt( parseInt(this.mScoreNeeded / 2) - parseInt(1));

		while (totalA < totalAGoal || totalB < totalBGoal || totalC < totalCGoal || totalD < totalDGoal)
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
				var randomChance = Math.floor((Math.random()*4));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.k_oa_a_2_A());
					totalA++;
				}	
				if (randomChance == 1)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.k_oa_a_2_B());
					totalB++;
				}
				if (randomChance == 2)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.k_oa_a_2_C());
					totalC++;
				}
				if (randomChance == 3)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.k_oa_a_2_D());
					totalD++;
				}
			}
		}
	}
});
