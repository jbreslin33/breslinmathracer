var g1_nbt_c_5 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.mThresholdTime = 10000;
	},

	createQuestions: function()
        {
 		this.parent();

		var varA = 0;
		var varB = 0;
		var varC = 0;
		var randomChance = 0;

		this.mQuiz.resetQuestionArray();

		for (s = 0; s < this.mScoreNeeded; s++)
		{	
			varC = 100;
			while (varC > 99 || varC < 0)
			{	
				//50% chance of different type of question 
				randomChance = Math.floor((Math.random()*2));		

				//10 more
				if (randomChance == 0)
				{
					varA = Math.floor((Math.random()*99)+1);		
					varB = 10		
					varC = parseInt(varA + varB);
				}	

				//10 less
				if (randomChance == 1)
				{
					varA = Math.floor((Math.random()*99)+1);		
					varB = 10;		
					varC = parseInt(varA - varB);
				}
			}
			//ok we broke while now add question...
			if (randomChance == 0)
			{
				this.mQuiz.mQuestionArray.push(new Question('' + varA + ' + ' +  varB + ' = ', '' + varC));
			}
			else
			{
				this.mQuiz.mQuestionArray.push(new Question('' + varA + ' - ' +  varB + ' = ', '' + varC));
			}
		}
	}
});
