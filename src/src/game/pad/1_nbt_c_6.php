var g1_nbt_c_6 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.mThresholdTime = 6000;
	},

	createQuestions: function()
        {
 		this.parent();

		var varA = 0;
		var varB = 0;
		var varC = 0;

		this.mQuiz.resetQuestionArray();

		for (s = 0; s < this.mScoreNeeded; s++)
		{	
			varC = 100;
			while (varC > 99 || varC < 0)
			{	
				varA = Math.floor((Math.random()*9)+1);		
				varA = varA * 10;
				
				varB = Math.floor((Math.random()*9)+1);		
				varB = varB * 10;
				varC = parseInt(varA - varB);
			}
			//ok we broke while now add question...
			this.mQuiz.mQuestionArray.push(new Question('' + varA + ' - ' +  varB + ' = ', '' + varC));
		}
	}
});
