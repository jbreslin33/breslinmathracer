var g4_nbt_b_5 = new Class(
{
Extends: NumberPad,
	initialize: function(application)
	{
       		this.parent(application);
	},

	createQuestions: function()
        {
 		this.parent();

		var varA = 0;
		var varB = 0;
		var varC = 0;

		this.mQuiz.resetQuestionArray();

		for (s = 0; s < this.mScoreNeeded / 2; s++)
		{	
			varC = 10000;
			while (varC > 999 || varC < 0)
			{	
				varC = 10000;
				varA = Math.floor((Math.random()*999));		
				varB = Math.floor((Math.random()*999));		
				varC = parseInt(varA + varB);
			}
                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' + ' +  varB + ' = ', '' + varC));
		}
		for (s = 0; s < this.mScoreNeeded / 2; s++)
		{
			varC = 10000;
			while (varC > 999 || varC < 0)
			{	
				varC = 10000;
				varA = Math.floor((Math.random()*999));		
				varB = Math.floor((Math.random()*999));		
				varC = parseInt(varA - varB);
			}
                        this.mQuiz.mQuestionArray.push(new Question('' + varA + ' - ' +  varB + ' = ', '' + varC));
		}
                //buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
