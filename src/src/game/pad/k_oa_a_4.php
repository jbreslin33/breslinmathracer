var k_oa_a_4 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	       	
		//input pad
                this.mInputPad = new NumberPad(application);

		this.setScoreNeeded(20);
	},
/*
        //showCorrectAnswer
        showCorrectAnswerEnter: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;

                this.mShapeArray[1].setPosition(400,175);
                this.mShapeArray[1].setVisibility(true);
                this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();

                this.mShapeArray[9].setVisibility(true);

                this.mInputPad.hide();
        },

        //outOfTime
        outOfTimeEnter: function()
        {
                this.mCorrectAnswerStartTime = this.mTimeSinceEpoch;

                this.mShapeArray[0].setPosition(400,150);
                this.mShapeArray[0].mMesh.innerHTML = 'GO FASTER!';
                this.mShapeArray[0].setVisibility(true);

                this.mShapeArray[1].setPosition(400,175);
                this.mShapeArray[1].setVisibility(true);
                this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getQuestion() + ' ' + this.mQuiz.getQuestion().getAnswer();

                //frantic clock
                this.mShapeArray[8].setVisibility(true);

                this.mInputPad.hide();
        },
*/

        showCorrectAnswerEnter: function()
        {
		this.parent();
                this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },

        outOfTimeEnter: function()
        {
                this.parent();
                this.mShapeArray[1].mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },

	createQuestions: function()
        {
 		this.parent();

		//add
                this.mQuiz.mQuestionPoolArray.push(new Question('9 + ? = 10','1','9 + 1 = 10'));
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
