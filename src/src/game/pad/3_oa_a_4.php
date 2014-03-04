var g3_oa_a_4 = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
       		this.parent(application);
	},
	
	//state overides
	showCorrectAnswerEnter: function()
	{
		this.parent();
        	this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ANSWER: ' + this.mQuiz.getQuestion().getAnswer();
	},

	showCorrectAnswerOutOfTimeEnter: function()
        {
		this.parent();
        	this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ANSWER: ' + this.mQuiz.getQuestion().getAnswer();
        },

	createQuestions: function()
        {
  		this.parent();

		this.mQuiz.resetQuestionArray();

              	for (i = 0; i < this.mScoreNeeded; i++)
		{
			var minusOrNot = Math.floor((Math.random()*2));
			var StandardFormOrNot = Math.floor((Math.random()*2));
			var missingVar = Math.floor((Math.random()*3)+1);
			var VarA = 0;
			var VarB = 0;
			var VarC = 100;

			//multiplication
			if (minusOrNot == 0)
			{
				while(VarC > 20)
				{
					VarA = Math.floor((Math.random()*10)+1);
					VarB = Math.floor((Math.random()*10)+1);
					VarC = parseInt(VarA * VarB);
				}
				//ok we have an equation with sum < 20  in the form a+b=c

				//a+b=c
				if (StandardFormOrNot == 0)
				{
					if (missingVar == 0)
					{
						var question = new Question('? x ' + VarB + ' = ' + VarC,'' + VarA);
						this.mQuiz.mQuestionArray.push(question);
					}
					else if (missingVar == 1)
					{
						var question = new Question('' + VarA + ' x ? = ' + VarC,'' + VarB);
						this.mQuiz.mQuestionArray.push(question);
					}
					else if (missingVar == 2)
					{
						var question = new Question('' + VarA + ' x ' + VarB + ' = ?','' + VarC);
						this.mQuiz.mQuestionArray.push(question);
					}
				}
				//c=a+b
				else if (StandardFormOrNot == 1)
				{
   					if (missingVar == 0)
                                        {
                                                var question = new Question('? = ' + VarA + ' x ' + VarB,'' + VarC);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 1)
                                        {
                                                var question = new Question('' + VarC + ' = ? x ' + VarB,'' + VarA);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 2)
                                        {
                                                var question = new Question('' + VarC + ' = ' + VarA + ' x ?','' + VarB);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
				}
			}
 			//division
                        if (minusOrNot == 1)
                        {
				//num % 1 != 0
                                while(VarC > 20 || VarC < 0 || VarA % VarB != 0 || VarA < VarB)
                                {
                                        VarA = Math.floor((Math.random()*10)+1);
                                        VarB = Math.floor((Math.random()*10)+1);
                                        VarC = parseInt(VarA / VarB);
                                }
                                //ok we have an equation with sum < 20  in the form a+b=c

                                //a+b=c
                                if (StandardFormOrNot == 0)
                                {
                                        if (missingVar == 0)
                                        {
                                                var question = new Question('? / ' + VarB + ' = ' + VarC,'' + VarA);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 1)
                                        {
                                                var question = new Question('' + VarA + ' / ? = ' + VarC,'' + VarB);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 2)
                                        {
                                                var question = new Question('' + VarA + ' / ' + VarB + ' = ?','' + VarC);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                }
                                //c=a+b
                                else if (StandardFormOrNot == 1)
                                {
                                        if (missingVar == 0)
                                        {
                                                var question = new Question('? = ' + VarA + ' / ' + VarB,'' + VarC);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 1)
                                        {
                                                var question = new Question('' + VarC + ' = ? / ' + VarB,'' + VarA);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 2)
                                        {
                                                var question = new Question('' + VarC + ' = ' + VarA + ' / ?','' + VarB);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                }
                        }
		}
	}
});
