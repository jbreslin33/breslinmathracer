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

		var numeratorA    = 0;
		var denominatorA  = 0;
		
		var numeratorB    = 0;
		var denominatorB  = 0;

		this.mQuiz.resetQuestionArray();

		for (s = 0; s < this.mScoreNeeded; s++)
		{	
			numeratorA   = Math.floor((Math.random()*4)+1);		
			denominatorA = Math.floor((Math.random()*4)+1);		

                        this.mQuiz.mQuestionArray.push(new Question('Sally ate ' + numeratorA + ' / ' + denominatorA + ' of a pie?' , '' + numeratorA + '/' + denominatorA));
		}
	}
});
