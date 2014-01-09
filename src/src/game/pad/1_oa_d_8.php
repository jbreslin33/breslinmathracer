var g1_oa_d_8 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);

		//answers 
                this.mThresholdTime = 10000;

		//input pad
		this.mInputPad = new ButtonMultipleChoicePad(application);
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

		var equalOrNot = Math.floor((Math.random()*2));
		var addendA = 0;
		var addendB = 0;
		var sumReal = 100;
		var sumFake = 100;

              	for (i = 0; i < this.mScoreNeeded; i++)
		{
			if (equalOrNot == 0)
			{
				while(sumReal > 10)
				{
					addendA = Math.floor((Math.random()*10)+1);
					addendA = Math.floor((Math.random()*10)+1);
					sumReal = parseInt(addendA + addendB);
				
					var question = new Question('' + addendA + ' + ' + addendB + ' = ' + sumReal,'true');
					this.mQuiz.mQuestionArray.push(question);
				}
			}
			else if (equalOrNot == 1)
			{
				while(sumReal > 10 || sumFake == sumReal )
				{
					addendA = Math.floor((Math.random()*10)+1);
					addendA = Math.floor((Math.random()*10)+1);
					sumReal = parseInt(addendA + addendB);
					sumFake = Math.floor((Math.random()*10)+1);
				
					var question = new Question('' + addendA + ' + ' + addendB + ' = ' + sumFake,'false');
					this.mQuiz.mQuestionArray.push(question);
				}
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
