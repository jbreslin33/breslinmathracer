var g3_md_b_3 = new Class(
{

Extends: RulerPad,

	initialize: function(application)
	{
       		this.parent(application);

		// Creates canvas 640 × 480 at 10, 50
		var r = Raphael(10, 50, 640, 480);
		r.barchart(0, 0, 620, 260, [76, 70, 67, 71, 69], {})
   		txtattr = { font: "12px sans-serif" };
                r.text(160, 10, "Single Series Chart").attr(txtattr);
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
