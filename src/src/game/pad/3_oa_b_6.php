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

		var totalA = 0; 
		var totalB = 0; 
		var totalC = 0; 

		while(totalA < 5 || totalB < 5 || totalC < 5)  
		{
			totalA = 0; 
			totalB = 0; 
			totalC = 0; 

			this.mQuiz.resetQuestionArray();

              		for (i = 0; i < this.mScoreNeeded; i++)
			{
				var property = Math.floor((Math.random()*3));
				//communative
				if (property == 0)	
				{
					this.a = 0;
					this.b = 0;
					while (this.a == this.b)
					{
						this.a = Math.floor((Math.random()*10)+1);
						this.b = Math.floor((Math.random()*10)+1);
						var question = new Question('Using the Communative property of multiplication write this expression another way: ' + this.a + 'x' + this.b,'' + this.b + 'x' + this.a);
						this.mQuiz.mQuestionArray.push(question);
						totalA++;
					}
				}

				//associative
				if (property == 1)
                                {
                                        this.a = Math.floor((Math.random()*10)+1);
                                        this.b = Math.floor((Math.random()*10)+1);
                                        this.c = Math.floor((Math.random()*10)+1);
                                        var question = new Question('Using the Associative property of multiplication write this expression another way: ' + this.a + 'x' + this.b + 'x' + this.c,'' + parseInt(this.a * this.b) + 'x' + this.c);
					question.mAnswerArray.push('' + this.a + 'x' + parseInt(this.b * this.c));
                                        this.mQuiz.mQuestionArray.push(question);
                                        totalB++;
                                }

				//distributive
				if (property == 2)
                                {
					this.x = 1000;
					while (this.x > 100 || this.b + this.c > 10)
					{
                                        	this.a = Math.floor((Math.random()*10)+1);
                                        	this.b = Math.floor((Math.random()*10)+1);
                                        	this.c = Math.floor((Math.random()*10)+1);
						this.x = parseInt(this.a * (this.b + this.c));
					}
                                        var question = new Question('Using the Distributive property of multiplication solve this: ' + this.a + 'x(' + this.b + '+' + this.c + ')','' + this.x);
                                        this.mQuiz.mQuestionArray.push(question);
                                        totalC++;
                                }
                        }
		}
	}
});
