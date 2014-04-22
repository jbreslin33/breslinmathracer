var g3_nf_a_3b = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(10);
	},

        createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(200,200,140,140,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },
 
        showCorrectAnswerEnter: function()
        {
		this.parent();
                this.mShapeArray[1].setPosition(200,200);
        },

	createQuestions: function()
        {
 		this.parent();

		this.mQuiz.resetQuestionArray();

		// 1/2 2/4
                question = new Question('What is an equivalent fraction for 1/2?', '2/4');
                this.mQuiz.mQuestionArray.push(question);
		question.mAnswerArray.push('3/6');
		question.mAnswerArray.push('4/8');
		question.mAnswerArray.push('5/10');
	
		// 2/4 1/2
                question = new Question('What is an equivalent fraction for 2/4?', '1/2');
                this.mQuiz.mQuestionArray.push(question);
    		question.mAnswerPool.push('1/3');
    		question.mAnswerPool.push('2/6');
    		question.mAnswerPool.push('3/4');
		
		// 1/2 3/6
                question = new Question('What is an equivalent fraction for 1/2?', '3/6');
                this.mQuiz.mQuestionArray.push(question);
    		question.mAnswerPool.push('1/4');
    		question.mAnswerPool.push('2/3');
    		question.mAnswerPool.push('1/5');
		
		// 2/4 3/6
                question = new Question('What is an equivalent fraction for 2/4?', '3/6');
                this.mQuiz.mQuestionArray.push(question);
    		question.mAnswerPool.push('1/3');
    		question.mAnswerPool.push('2/6');
    		question.mAnswerPool.push('3/4');
		
		// 3/6 2/4
                question = new Question('What is an equivalent fraction for 3/6?', '2/4');
                this.mQuiz.mQuestionArray.push(question);
    		question.mAnswerPool.push('1/3');
    		question.mAnswerPool.push('2/6');
    		question.mAnswerPool.push('3/4');

		// 3/6 1/2
                question = new Question('What is an equivalent fraction for 3/6?', '1/2');
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
		
		// 2/6 1/3
                question = new Question('What is an equivalent fraction for 2/6?', '1/3');
                this.mQuiz.mQuestionArray.push(question);
    		question.mAnswerPool.push('1/4');
    		question.mAnswerPool.push('2/3');
    		question.mAnswerPool.push('2/3');
		
		// 2/3 4/6
                question = new Question('What is an equivalent fraction for 2/3?', '4/6');
                this.mQuiz.mQuestionArray.push(question);
    		question.mAnswerPool.push('1/4');
    		question.mAnswerPool.push('2/6');
    		question.mAnswerPool.push('1/3');
		
		// 4/6 2/3
                question = new Question('What is an equivalent fraction for 4/6?', '2/3');
                this.mQuiz.mQuestionArray.push(question);
    		question.mAnswerPool.push('1/4');
    		question.mAnswerPool.push('2/6');
    		question.mAnswerPool.push('1/3');

               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                //this.mQuiz.randomize(10);
	}
});
