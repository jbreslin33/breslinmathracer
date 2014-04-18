var g3_nbt_a_1 = new Class(
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

		var varA = 0;
		var varB = 0;
		var varC = 0;

		var randomChance = 0;

		while (totalA < this.mScoreNeeded * .4 || totalB < this.mScoreNeeded * .4)
		{
			this.mQuiz.resetQuestionArray();
			totalA = 0;
			totalB = 0;

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				varC = 10000;
				randomChance = Math.floor((Math.random()*2));		

				while (varC > 999 || varC < 0)
				{	
					varA = Math.floor((Math.random()*999));		
					varB = Math.floor((Math.random()*999));		
				
					if (randomChance == 0)
					{
						varC = parseInt(varA + varB);
					}
					else
					{
						varC = parseInt(varA - varB);
					}
				}
   				if (randomChance == 0)
                                {
                                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' + ' +  varB + ' = ', '' + varC));
                                        totalA++;
                                }
                                else
                                {
                                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' - ' +  varB + ' = ', '' + varC));
                                        totalB++;
                                }
			}
			//ok we broke while now add question...
		}
	}
});
