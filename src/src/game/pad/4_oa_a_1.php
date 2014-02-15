var g4_oa_a_1 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	       	
		//input pad
                this.mInputPad = new BigQuestionNumberPad(application);

		this.mThresholdTime = 120000;

		this.setScoreNeeded(20);
	},

     	//showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.parent();

                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);

                //move dont forget
                //this.mShapeArray[8].setVisibility(false);
                //this.mShapeArray[9].setVisibility(false);
                
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.parent();

                this.mShapeArray[0].setPosition(650,170);

                this.mShapeArray[1].setSize(700,100);
                this.mShapeArray[1].setPosition(380,80);

                //move frantic clock
                this.mShapeArray[8].setPosition(650,300);
		
		this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },

	createQuestions: function()
        {
 		this.parent();

		//add
                this.mQuiz.mQuestionPoolArray.push(new Question('Interpret 35 = 5 × 7 as a statement that 35 is 5 times as many as ? and 7 times as many as 5.','7','Interpret 35 = 5 × 7 as a statement that 35 is 5 times as many as 7 and 7 times as many as 5.'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + ? = 10','2','8 + 2 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('7 + ? = 10','3','7 + 3 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('6 + ? = 10','4','6 + 4 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 + ? = 10','5','5 + 5 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + ? = 10','6','4 + 6 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + ? = 10','7','3 + 7 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + ? = 10','8','2 + 8 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + ? = 10','9','1 + 9 = 10'));
		//9

		this.mQuiz.mQuestionPoolArray.push(new Question('1 + ? = 10','9','1 + 9 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + ? = 10','8','2 + 8 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + ? = 10','7','3 + 7 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + ? = 10','6','4 + 6 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('5 + ? = 10','5','5 + 5 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('6 + ? = 10','4','6 + 4 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('7 + ? = 10','3','7 + 3 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + ? = 10','2','8 + 2 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('9 + ? = 10','1','9 + 1 = 10'));
		//18
               
		//extra 
		this.mQuiz.mQuestionPoolArray.push(new Question('9 + ? = 10','1','9 + 1 = 10'));

		var totalNew           = 0;
                
		while (totalNew < this.mScoreNeeded * .4 || totalNew > this.mScoreNeeded * .6)
		{	
			//reset vars and arrays
			totalNew = 0;

			this.mQuiz.resetQuestionArray();

			for (s = 0; s < this.mScoreNeeded; s++)
			{	
				//50% chance of asking newest question
				var randomChance = Math.floor((Math.random()*2));		
				if (randomChance == 0)
				{
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[parseInt(this.mApplication.mLevel-1)]);
					totalNew++;
				}	
				if (randomChance == 1)
				{
					var randomElement = Math.floor((Math.random()*parseInt(this.mApplication.mLevel-1)));		
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
				}
			}
		}
	}
});
