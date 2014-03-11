var g3_oa_b_6 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
		this.a = 0;
		this.b = 0;
		this.c = 0;
		this.x = 0;
	},

        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);
             
		if (this.mQuiz.getQuestion().mAnswerArray.length > 1)
                {
                        this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' = ' + this.mQuiz.getQuestion().getAnswer() + ' or you could have put:' + this.mQuiz.getQuestion().mAnswerArray[1];
                }
                else
                {
                        this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' = ' + this.mQuiz.getQuestion().getAnswer();
                }

                //move dont forget
                this.mShapeArray[8].setVisibility(false);
                this.mShapeArray[9].setVisibility(false);
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.parent();

                this.mShapeArray[0].setPosition(650,170);

                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);

		if (this.mQuiz.getQuestion().mAnswerArray.length > 1)
		{ 
			this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' = ' + this.mQuiz.getQuestion().getAnswer() + ' or you could have put:' + this.mQuiz.getQuestion().mAnswerArray[1];
		}
		else
		{
			this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' = ' + this.mQuiz.getQuestion().getAnswer();
		}

                //move frantic clock
                this.mShapeArray[8].setPosition(650,300);
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

		this.mQuiz.resetQuestionArray();

              	for (i = 0; i < this.mScoreNeeded; i++)
		{
			this.a = 0;
			this.b = 0;
			this.x = 0;
			while (this.a == this.b)
			{
				this.a = Math.floor((Math.random()*10)+1);
				this.b = Math.floor((Math.random()*10)+1);
				var question = new Question('Find ' + this.a + '÷' + this.b + ' by finding the number that makes ' + this.a + ' when multiplied by ' + this.b + '.','' + this.x);
				this.mQuiz.mQuestionArray.push(question);
				totalA++;
                        }
		}
	}
});
