var g1_oa_b_3 = new Class(
{

Extends: Pad,

	initialize: function(application)
	{
       		this.parent(application);
	 
		//time 
                this.mThresholdTime = 60000;

		//score needed
		this.setScoreNeeded(20);
     	
                //input pad
                this.mInputPad = new LongQuestionNumberPad(application);
        },

        createCorrectAnswerBar: function()
        {
                //question bar header
                if (!this.mCorrectAnswerBarHeader)
                {
                        this.mCorrectAnswerBarHeader = new Shape(150,50,300,50,this,"","","");
                        this.mCorrectAnswerBarHeader.mMesh.innerHTML = '';
                }

                //question bar
                if (!this.mCorrectAnswerBar)
                {
                        this.mCorrectAnswerBar = new Shape(300,50,25,100,this,"","","");
                        this.mCorrectAnswerBar.mMesh.innerHTML = '';
                }
        },
 
	//states 
        showCorrectAnswerOutOfTime: function()
        {
		this.parent();
		this.mCorrectAnswerBarHeader.mMesh.innerHTML = 'Out of Time! Correct Answer: ' + this.mQuiz.getQuestion().getAnswer();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },
	
	showCorrectAnswer: function()
        {
		this.parent();
                this.mCorrectAnswerBar.mMesh.innerHTML = '' + this.mQuiz.getQuestion().getShowAnswer();
        },

	//questions
	createQuestions: function()
        {
 		this.parent();

		//commutative
                this.mQuiz.mQuestionPoolArray.push(new Question('9 + 1 = 10 and 1 + ? = 10','9','9 + 1 = 10 and 1 + 9 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('8 + 2 = 10 and 2 + ? = 10','8','8 + 2 = 10 and 2 + 8 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('7 + 3 = 10 and 3 + ? = 10','7','7 + 3 = 10 and 3 + 7 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('6 + 4 = 10 and 4 + ? = 10','6','6 + 4 = 10 and 4 + 6 = 10'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 2 = 3 and 2 + ? = 3','1','1 + 2 = 3 and 2 + 1 = 3'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 3 = 4 and 3 + ? = 4','1','1 + 3 = 4 and 3 + 1 = 4'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 3 = 5 and 3 + ? = 5','2','2 + 3 = 5 and 3 + 2 = 5'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 4 = 6 and 4 + ? = 6','2','2 + 4 = 6 and 4 + 2 = 6'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 4 = 7 and 4 + ? = 7','3','3 + 4 = 7 and 4 + 3 = 7'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 5 = 8 and 5 + ? = 8','3','3 + 5 = 8 and 5 + 3 = 8'));
		
		//associative
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 6 + 4 = 12 and 2 + ? = 12','10','2 + 6 + 4 = 12 and 2 + 10 = 12'));
                this.mQuiz.mQuestionPoolArray.push(new Question('4 + 7 + 3 = 14 and 4 + ? = 14','10','4 + 7 + 3 = 14 and 4 + 10 = 14'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 8 + 2 = 13 and 3 + ? = 13','10','3 + 8 + 2 = 13 and 3 + 10 = 13'));
                this.mQuiz.mQuestionPoolArray.push(new Question('3 + 5 + 5 = 13 and 3 + ? = 13','10','3 + 5 + 5 = 13 and 3 + 10 = 13'));
                this.mQuiz.mQuestionPoolArray.push(new Question('1 + 4 + 4 = 9 and 1 + ? = 9','8','1 + 4 + 4 = 9 and 1 + 8 = 9'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 3 + 4 = 9 and 2 + ? = 9','7','2 + 3 + 4 = 9 and 2 + 7 = 9'));
                this.mQuiz.mQuestionPoolArray.push(new Question('2 + 3 + 2 = 7 and 2 + ? = 7','5','2 + 3 + 2 = 7 and 2 + 5 = 7'));
                this.mQuiz.mQuestionPoolArray.push(new Question('7 + 5 + 2 = 14 and 7 + ? = 14','7','7 + 5 + 2 = 14 and 7 + 7 = 14'));
                this.mQuiz.mQuestionPoolArray.push(new Question('9 + 5 + 4 = 18 and 9 + ? = 19','9','9 + 5 + 4 = 19 and 9 + 9 = 18'));
                this.mQuiz.mQuestionPoolArray.push(new Question('6 + 2 + 4 = 12 and 6 + ? = 12','6','6 + 2 + 4 = 12 and 6 + 6 = 12'));

		var totalNew           = 0;
                
		while (totalNew < this.mScoreNeeded * .45)
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
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[this.mApplication.mLevel]);
					totalNew++;
				}	
				if (randomChance == 1)
				{
					var randomElement = Math.floor((Math.random()*this.mApplication.mLevel));		
					this.mQuiz.mQuestionArray.push(this.mQuiz.mQuestionPoolArray[randomElement]);
				}
			}
		}
	}
});
