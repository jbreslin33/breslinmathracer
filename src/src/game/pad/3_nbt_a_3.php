var g3_nbt_a_3 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	},

        createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(200,200,140,140,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

	createQuestions: function()
        {
 		this.parent();

		var totalA = 0;
		var totalB = 0;
		var varA   = 0;

		var randomChance = 0;

		while (totalA < this.mScoreNeeded * .4 || totalB < this.mScoreNeeded * .4)
		{
			this.mQuiz.resetQuestionArray();
			totalA = 0;
			totalB = 0;
			varC = 0; 

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				randomChance = Math.floor((Math.random()*2));		
				varA = Math.floor((Math.random()*999));		

				if (randomChance == 0)
				{
					varC = Math.round(varA/10)*10
                                        this.mQuiz.mQuestionArray.push(new Question('What is ' + varA + ' rounded to the nearest 10?', '' + varC));
                                        totalA++;
				}
				else
				{
					varC = Math.round(varA/100)*100
                                        this.mQuiz.mQuestionArray.push(new Question('What is ' + varA + ' rounded to the nearest 100?', '' + varC));
                                        totalB++;
				}
			}
		}
	}
});
