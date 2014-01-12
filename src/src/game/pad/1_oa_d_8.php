var g1_oa_d_8 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

		//input pad
		this.mInputPad = new NumberPad(application);
	},

	showQuestion: function()
	{
		this.mInputPad.showQuestion();	
	},
 
	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
	},
   
	createQuestions: function()
        {
  		this.parent();

                for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
                {
                        this.mQuiz.mQuestionArray[d] = 0;
                }
                this.mQuiz.mQuestionArray = 0;
                this.mQuiz.mQuestionArray = new Array();

		var minusOrNot = Math.floor((Math.random()*2));
		var StandardFormOrNot = Math.floor((Math.random()*2));
		var missingVar = Math.floor((Math.random()*3)+1);
		var varA = 0;
		var varB = 0;
		var varC = 100;

              	for (i = 0; i < this.mScoreNeeded; i++)
		{
			//addition
			if (minusOrNot == 0)
			{
				while(VarC > 20)
				{
					varA = Math.floor((Math.random()*20)+1);
					varB = Math.floor((Math.random()*20)+1);
					varC = parseInt(VarA + VarB);
				}
				//ok we have an equation with sum < 20  in the form a+b=c

				//a+b=c
				if (standardFormOrNot == 0)
				{
					if (missingVar == 0)
					{
						var question = new Question('? + ' + VarB + ' = ' + VarC,'' + VarA);
						this.mQuiz.mQuestionArray.push(question);
					}
					else if (missingVar == 1)
					{
						var question = new Question('' + VarA + ' ? ' = ' + VarC,'' + VarB);
						this.mQuiz.mQuestionArray.push(question);
					}
					else if (missingVar == 2)
					{
						var question = new Question('' + VarA + ' + ' + VarB + ' = ' + VarC,'' + VarC);
						this.mQuiz.mQuestionArray.push(question);
					}
				
				}
				//c=a+b
				else if (standardFormOrNot == 1)
				{
   					if (missingVar == 0)
                                        {
                                                var question = new Question('' + VarC + ' = ' + VarA + ' + ' + VarB,'' + VarC);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 1)
                                        {
                                                var question = new Question('' + VarA + ' ? ' = ' + VarC,'' + VarB);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 2)
                                        {
                                                var question = new Question('' + VarA + ' + ' + VarB + ' = ' + VarC,'' + VarC);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }

				
				}


				while(sumReal > 20)
				{
					varA = Math.floor((Math.random()*20)+1);
					varB = Math.floor((Math.random()*20)+1);
					sumReal = parseInt(addendA + addendB);
				
					var question = new Question('' + addendA + ' + ' + addendB + ' = ' + sumReal,'true');
					this.mQuiz.mQuestionArray.push(question);
				}
			}
			else if (minusOrNot == 1)
			{
			}
		}

		for (i = 0; i < this.mQuiz.mQuestionArray.length; i++)
		{
			this.mQuiz.mQuestionArray[i].setChoice('A','true');
			this.mQuiz.mQuestionArray[i].setChoice('B','false');
		}
	},

	//state overides
	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        }
});
