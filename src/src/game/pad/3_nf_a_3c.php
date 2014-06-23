var g3_nf_a_3c = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(12);
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

		// 1/1 
                question = new Question('What is 1/1 expressed as a whole number?', '1');
                this.mQuiz.mQuestionArray.push(question);
	
		// 1 
                question = new Question('What is 1 expressed as a fraction?', '1/1');
                this.mQuiz.mQuestionArray.push(question);
		question.mAnswerArray.push('2/2');
		question.mAnswerArray.push('3/3');
		question.mAnswerArray.push('4/4');
		
		//2/1 
                question = new Question('What is 2/1 expressed as a whole number?', '2');
                this.mQuiz.mQuestionArray.push(question);
		
		// 2 
                question = new Question('What is 2 expressed as a fraction?', '2/1');
                this.mQuiz.mQuestionArray.push(question);
		question.mAnswerArray.push('4/2');
		question.mAnswerArray.push('8/4');
		
		//3/1 
                question = new Question('What is 3/1 expressed as a whole number?', '3');
                this.mQuiz.mQuestionArray.push(question);
		
		// 3 
                question = new Question('What is 3 expressed as a fraction?', '3/1');
                this.mQuiz.mQuestionArray.push(question);
		question.mAnswerArray.push('6/2');
		
		//4/1 
                question = new Question('What is 4/1 expressed as a whole number?', '4');
                this.mQuiz.mQuestionArray.push(question);

		// 4 
                question = new Question('What is 4 expressed as a fraction?', '4/1');
                this.mQuiz.mQuestionArray.push(question);
		question.mAnswerArray.push('8/2');
		
		//5/1 
                question = new Question('What is 5/1 expressed as a whole number?', '5');
                this.mQuiz.mQuestionArray.push(question);

		// 5 
                question = new Question('What is 5 expressed as a fraction?', '5/1');
                this.mQuiz.mQuestionArray.push(question);
		
		//6/1 
                question = new Question('What is 6/1 expressed as a whole number?', '6');
                this.mQuiz.mQuestionArray.push(question);
		
		// 6 
                question = new Question('What is 6 expressed as a fraction?', '6/1');
                this.mQuiz.mQuestionArray.push(question);

               	//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
