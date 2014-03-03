var g2_nbt_b_6 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	},

	createQuestions: function()
        {
 		this.parent();

		var totalA = 0;
		var totalB = 0;
		var totalC = 0;

		var varA = 0;
		var varB = 0;
		var varC = 0;
		var varD = 0;
		var varE = 0;

		var randomChance = 0;

		while (totalA < this.mScoreNeeded * .2 || totalB < this.mScoreNeeded * .2 || totalC < this.mScoreNeeded * .2)
		{
			this.mQuiz.resetQuestionArray();
			totalA = 0;
			totalB = 0;
			totalC = 0;

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				randomChance = Math.floor((Math.random()*3));		

				varA = Math.floor((Math.random()*89)+11);		
				varB = Math.floor((Math.random()*89)+11);		
				varC = Math.floor((Math.random()*89)+11);		
				varD = Math.floor((Math.random()*89)+11);		
				
				if (randomChance == 0)
				{
					varE = parseInt(varA + varB);
				}
				if (randomChance == 1)
				{
					varE = parseInt(varA + varB + varC);
				}
				if (randomChance == 2)
				{
					varE = parseInt(varA + varB + varC + varD);
				}

   				if (randomChance == 0)
                                {
                                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' + ' +  varB + ' = ', '' + varE));
                                        totalA++;
                                }
   				if (randomChance == 1)
                                {
                                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' + ' +  varB + ' + ' + varC + ' = ', '' + varE));
                                        totalB++;
                                }
   				if (randomChance == 2)
                                {
                                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' + ' +  varB + ' + ' + varC + ' + ' + varD + ' = ', '' + varE));
                                        totalC++;
                                }
			}
		}
	}
});
