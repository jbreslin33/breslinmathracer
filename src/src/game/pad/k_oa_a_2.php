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

		while (totalA < this.mScoreNeeded * .2 || totalB < this.mScoreNeeded * .2 || totalC < this.mScoreNeeded * .2 || totalD < this.mScoreNeeded * .2)
		{	
			this.mQuiz.resetQuestionArray();

			//ADD questions
			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*4));		
				this.log('s:' + s);
				if (randomChance == 0)
				{
       					this.mQuiz.mQuestionArray.push(this.mWordProblems.makeXeApB(2,9,2,9,2,9,'Luke had','toy cars. His cousin Mikey brings', 'toy cars to play with Luke. How many cars do the boys have to play with now?'));
					totalA++;
				}	

				if (randomChance == 1)
				{
       					this.mQuiz.mQuestionArray.push(this.mWordProblems.makeXeApB(2,9,2,9,2,9,'Brent had',' books about dinosaurs. He got', 'more books about dinasaurs from the library. How many books about dinosaurs does Brent have now?'));
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
