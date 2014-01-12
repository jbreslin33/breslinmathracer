var g1_nbt_a_1 = new Class(
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

	createQuestions: function()
        {
  		this.parent();

                for (d = 0; d < this.mQuiz.mQuestionArray.length; d++)
                {
                        this.mQuiz.mQuestionArray[d] = 0;
                }
                this.mQuiz.mQuestionArray = 0;
                this.mQuiz.mQuestionArray = new Array();

              	for (i = 0; i < this.mScoreNeeded; i++)
		{
			var minusOrNot = Math.floor((Math.random()*2));
			var StandardFormOrNot = Math.floor((Math.random()*2));
			var missingVar = Math.floor((Math.random()*3)+1);
			var VarA = 0;
			var VarB = 0;
			var VarC = 100;

			//addition
			if (minusOrNot == 0)
			{
				while(VarC > 20)
				{
					VarA = Math.floor((Math.random()*20)+1);
					VarB = Math.floor((Math.random()*20)+1);
					VarC = parseInt(VarA + VarB);
				}
				//ok we have an equation with sum < 20  in the form a+b=c

				//a+b=c
				if (StandardFormOrNot == 0)
				{
					if (missingVar == 0)
					{
						var question = new Question('? + ' + VarB + ' = ' + VarC,'' + VarA);
						this.mQuiz.mQuestionArray.push(question);
					}
					else if (missingVar == 1)
					{
						var question = new Question('' + VarA + ' + ? = ' + VarC,'' + VarB);
						this.mQuiz.mQuestionArray.push(question);
					}
					else if (missingVar == 2)
					{
						var question = new Question('' + VarA + ' + ' + VarB + ' = ?','' + VarC);
						this.mQuiz.mQuestionArray.push(question);
					}
				
				}
				//c=a+b
				else if (StandardFormOrNot == 1)
				{
   					if (missingVar == 0)
                                        {
                                                var question = new Question('? = ' + VarA + ' + ' + VarB,'' + VarC);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 1)
                                        {
                                                var question = new Question('' + VarC + ' = ? + ' + VarB,'' + VarA);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 2)
                                        {
                                                var question = new Question('' + VarC + ' = ' + VarA + ' + ?','' + VarB);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
				}
			}
 			//subtraction
                        if (minusOrNot == 1)
                        {
                                while(VarC > 20 || VarC < 0)
                                {
                                        VarA = Math.floor((Math.random()*20)+1);
                                        VarB = Math.floor((Math.random()*20)+1);
                                        VarC = parseInt(VarA - VarB);
                                }
                                //ok we have an equation with sum < 20  in the form a+b=c

                                //a+b=c
                                if (StandardFormOrNot == 0)
                                {
                                        if (missingVar == 0)
                                        {
                                                var question = new Question('? - ' + VarB + ' = ' + VarC,'' + VarA);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 1)
                                        {
                                                var question = new Question('' + VarA + ' - ? = ' + VarC,'' + VarB);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 2)
                                        {
                                                var question = new Question('' + VarA + ' - ' + VarB + ' = ?','' + VarC);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }

                                }
                                //c=a+b
                                else if (StandardFormOrNot == 1)
                                {
                                        if (missingVar == 0)
                                        {
                                                var question = new Question('? = ' + VarA + ' - ' + VarB,'' + VarC);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 1)
                                        {
                                                var question = new Question('' + VarC + ' = ? - ' + VarB,'' + VarA);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                        else if (missingVar == 2)
                                        {
                                                var question = new Question('' + VarC + ' = ' + VarA + ' - ?','' + VarB);
                                                this.mQuiz.mQuestionArray.push(question);
                                        }
                                }
                        }

		}
	},

	//state overides
	showCorrectAnswer: function()
	{
		this.parent();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ANSWER: ' + this.mQuiz.getQuestion().getAnswer();
	},

	showCorrectAnswerOutOfTime: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;
                this.mInputPad.hide();
        	this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ANSWER: ' + this.mQuiz.getQuestion().getAnswer();
                this.showCorrectAnswerBar();
                this.showClockShape();
        }
});
