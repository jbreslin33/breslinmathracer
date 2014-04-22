var g3_nf_a_3a = new Class(
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

		var numeratorA  = 0;
		var numeratorB  = 0;

		var numerator   = 0;
		var denominator = 0;

		this.mQuiz.resetQuestionArray();

		// 1/2 2/4
                question = new Question('What is an equivalent fraction for 1/2?', '2/4');
                this.mQuiz.mQuestionArray.push(question);
    		question.mAnswerPool.push('1/4');
    		question.mAnswerPool.push('2/3');
    		question.mAnswerPool.push('1/5');
		
		// 1/3 2/6
                question = new Question('What is an equivalent fraction for 1/3?', '2/6');
                this.mQuiz.mQuestionArray.push(question);
    		question.mAnswerPool.push('1/4');
    		question.mAnswerPool.push('2/3');
    		question.mAnswerPool.push('2/3');
	}
});
