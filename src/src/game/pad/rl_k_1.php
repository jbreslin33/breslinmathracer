var rl_k_1 = new Class(
{

Extends: MultipleChoicePad,

	initialize: function(application)
	{
       		this.parent(application);

		this.setScoreNeeded(2);

		//sound shape
		this.mVivaldi = new Shape(50,50,500,300,this,"AUDIO","","");		

		//for new browsers
		this.mVivaldi.mMesh.controls = true;
		this.mVivaldi.mMesh.src="/audio/spring.mp3";
	
		//for old browsers	
		this.mVivaldi.mMesh.setAttribute('href', '/audio/spring.mp3');
                this.mVivaldi.mMesh.innerHTML = "Vivaldi!";
	},

	createNumQuestion: function()
        {
                //question
                this.mNumQuestion = new Shape(200,100,120,95,this,"","","");
                this.mShapeArray.push(this.mNumQuestion);
                this.mNumQuestion.mCollidable = false;
                this.mNumQuestion.mCollisionOn = false;
        },

        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(200,100);
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();
        },

	createQuestions: function()
        {
 		this.parent();

		this.mQuiz.resetQuestionArray();
	
		//1
		question = new Question('The boy had a red ball.', 'red');
                this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool.push('boy');
		question.mAnswerPool.push('ball');
		
		//2
		question = new Question('The girl went home.', 'girl');
                this.mQuiz.mQuestionArray.push(question);
		question.mAnswerPool.push('went');
		question.mAnswerPool.push('home');

		//buffer
                this.mQuiz.mQuestionArray.push(new Question('buf','buf'));

                //random
                this.mQuiz.randomize(10);
	}
});
