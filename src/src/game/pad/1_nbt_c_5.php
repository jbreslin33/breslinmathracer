var g1_nbt_c_5 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		this.mThresholdTime = 60000;
		
		this.setScoreNeeded(20);

                //input pad
                this.mInputPad = new NumberPad(application);
	},

	createQuestions: function()
        {
 		this.parent();

		var varA = 0;
		var varB = 0;
		var varC = 0;

		//reset vars and arrays
		for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
		{
			this.mQuiz.mQuestionArray[d] = 0;
		} 
		this.mQuiz.mQuestionArray = 0;
		this.mQuiz.mQuestionArray = new Array();

		for (s = 0; s < this.mScoreNeeded; s++)
		{	
			varC = 100;
			while (varC > 99)
			{	
				//50% chance of different type of question 
				var randomChance = Math.floor((Math.random()*2));		

				//b = 1 digit
				if (randomChance == 0)
				{
					varA = Math.floor((Math.random()*99)+1);		
					varB = Math.floor((Math.random()*10));		
					varC = parseInt(varA + varB);
				}	

				//b = multiple of ten
				if (randomChance == 1)
				{
					varA = Math.floor((Math.random()*99)+1);		
					varB = Math.floor((Math.random()*10));		
					varB = parseInt(varB * 10);
					varC = parseInt(varA + varB);
				}
			}
			//ok we broke while now add question...
			this.mQuiz.mQuestionArray.push(new Question('' + varA + ' + ' +  varB + ' = ', '' + varC));
			
		}
	}
});
