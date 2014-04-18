var g3_nf_a_1 = new Class(
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

		var varA   = 0;
		var varB   = 0;
		var varC   = 0;

		this.mQuiz.resetQuestionArray();

		for (s = 0; s < this.mScoreNeeded; s++)
		{	
			varA = Math.floor((Math.random()*9)+1);		
			varB = Math.floor((Math.random()*8)+1);		
			varB = varB * 10;		
			varC = parseInt(varA * varB);		

                        this.mQuiz.mQuestionArray.push(new Question('What is ' + varA + ' X ' + varB + '?' , '' + varC));
		}
	}
});
