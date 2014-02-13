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
		var totalF = 0;
		var totalG = 0;
		var totalH = 0;
		var totalI = 0;
		var totalJ = 0;
		var totalK = 0;
		var totalL = 0;

		while (totalA < 1 || totalB < 1 || totalC < 1 || totalD < 1 || totalE < 1 || totalF < 1|| totalG < 1 || totalH < 1 || totalI < 1 || totalJ < 1 || totalK < 1 || totalL < 1)
		{	
			this.mQuiz.resetQuestionArray();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*12));		
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
				if (randomChance == 5)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_F());
					totalF++;
				}
				if (randomChance == 6)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_G());
					totalG++;
				}
				if (randomChance == 7)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_H());
					totalH++;
				}
				if (randomChance == 8)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_I());
					totalI++;
				}
				if (randomChance == 9)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_J());
					totalJ++;
				}
				if (randomChance == 10)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_K());
					totalK++;
				}
				if (randomChance == 11)
				{
					this.mQuiz.mQuestionArray.push(this.mWordProblems.g1_oa_a_1_L());
					totalL++;
				}
			}
		}
	}
});
