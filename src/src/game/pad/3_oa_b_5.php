var g3_oa_b_5 = new Class(
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

		var totalA = 0; 
		var totalB = 0; 
		var totalC = 0; 

		while(totalA < 1)  
		{
			totalA = 0; 
			totalB = 0; 
			totalC = 0; 

			this.mQuiz.resetQuestionArray();

              		for (i = 0; i < this.mScoreNeeded; i++)
			{
				var property = Math.floor((Math.random()*3));
				if (property < 3)	
				{
					this.a = Math.floor((Math.random()*10)+1);
					this.b = Math.floor((Math.random()*10)+1);
					var question = new Question('' + this.a + 'x' + this.b,'' + this.b + 'x' + this.a);
					this.mQuiz.mQuestionArray.push(question);
					totalA++;
				}

				/*
				//multiplication
				if (minusOrNot == 0)
				{
					VarA = Math.floor((Math.random()*10)+1);
					VarB = Math.floor((Math.random()*10)+1);
					VarC = parseInt(VarA * VarB);

					//a+b=c
					if (StandardFormOrNot == 0)
					{
						if (missingVar == 0)
						{
							var question = new Question('? x ' + VarB + ' = ' + VarC,'' + VarA);
							this.mQuiz.mQuestionArray.push(question);
							totalA++;
						}
						else if (missingVar == 1)
						{
							var question = new Question('' + VarA + ' x ? = ' + VarC,'' + VarB);
							this.mQuiz.mQuestionArray.push(question);
							totalB++;
						}
						else if (missingVar == 2)
						{
							var question = new Question('' + VarA + ' x ' + VarB + ' = ?','' + VarC);
							this.mQuiz.mQuestionArray.push(question);
							totalC++;
						}
					}
					//c=a+b
					else if (StandardFormOrNot == 1)
					{
   						if (missingVar == 0)
                                        	{
                                                	var question = new Question('? = ' + VarA + ' x ' + VarB,'' + VarC);
                                                	this.mQuiz.mQuestionArray.push(question);
							totalD++;
                                        	}
                                        	else if (missingVar == 1)
                                        	{
                                                	var question = new Question('' + VarC + ' = ? x ' + VarB,'' + VarA);
                                                	this.mQuiz.mQuestionArray.push(question);
							totalE++;
                                        	}
                                        	else if (missingVar == 2)
                                        	{
                                                	var question = new Question('' + VarC + ' = ' + VarA + ' x ?','' + VarB);
                                                	this.mQuiz.mQuestionArray.push(question);
							totalF++;
                                        	}
					}
				}
 				//division
                        	if (minusOrNot == 1)
                        	{
					//num % 1 != 0
                                	while(VarA % VarB != 0 || VarA < VarB)
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
							totalG++;
                                        	}
                                        	else if (missingVar == 1)
                                        	{
                                                	var question = new Question('' + VarA + ' / ? = ' + VarC,'' + VarB);
                                                	this.mQuiz.mQuestionArray.push(question);
							totalH++;
                                        	}
                                        	else if (missingVar == 2)
                                        	{
                                                	var question = new Question('' + VarA + ' / ' + VarB + ' = ?','' + VarC);
                                                	this.mQuiz.mQuestionArray.push(question);
							totalI++;
                                        	}
                                	}
                                	//c=a+b
                                	else if (StandardFormOrNot == 1)
                                	{
                                        	if (missingVar == 0)
                                        	{
                                                	var question = new Question('? = ' + VarA + ' / ' + VarB,'' + VarC);
                                                	this.mQuiz.mQuestionArray.push(question);
							totalJ++;
                                        	}
                                        	else if (missingVar == 1)
                                        	{
                                                	var question = new Question('' + VarC + ' = ? / ' + VarB,'' + VarA);
                                                	this.mQuiz.mQuestionArray.push(question);
							totalK++;
                                        	}
                                        	else if (missingVar == 2)
                                        	{
                                                	var question = new Question('' + VarC + ' = ' + VarA + ' / ?','' + VarB);
                                                	this.mQuiz.mQuestionArray.push(question);
							totalL++;
						}
                                        }
                                }
				VarCTotal = VarC + VarCTotal;
				*/
                        }
		}
	}
});
