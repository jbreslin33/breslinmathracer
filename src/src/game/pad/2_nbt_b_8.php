var g2_nbt_b_8 = new Class(
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
		var totalD = 0;

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var randomChance = 0;

		while (totalA < this.mScoreNeeded * .2 || totalB < this.mScoreNeeded * .2 || totalC < this.mScoreNeeded * .2 || totalD < this.mScoreNeeded * .2)
		{
			this.mQuiz.resetQuestionArray();
			totalA = 0;
			totalB = 0;

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				varC = 10000;
				randomChance = Math.floor((Math.random()*4));		

				while (varC > 999 || varC < 0)
				{	
					varA = Math.floor((Math.random()*899)+101);		
			
					if (randomChance == 0)
					{
						varB = 10		
						varC = parseInt(varA + varB);
					}
					if (randomChance == 1)
					{
						varB = 100;	
						varC = parseInt(varA + varB);
					}
					if (randomChance == 2)
					{
						varB = 10;	
						varC = parseInt(varA - varB);
					}
					if (randomChance == 3)
					{
						varB = 100;	
						varC = parseInt(varA - varB);
					}
				}
   				if (randomChance == 0)
                                {
                                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' + ' +  varB + ' = ', '' + varC));
                                        totalA++;
                                }
   				if (randomChance == 1)
                                {
                                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' + ' +  varB + ' = ', '' + varC));
                                        totalB++;
                                }
   				if (randomChance == 2)
                                {
                                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' - ' +  varB + ' = ', '' + varC));
                                        totalC++;
                                }
   				if (randomChance == 3)
                                {
                                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' - ' +  varB + ' = ', '' + varC));
                                        totalD++;
                                }
			}
			//ok we broke while now add question...
		}
	}
});
