var Question = new Class(
{
        initialize: function(question,answer,showAnswer)
        {
		//question
		this.mQuestion = question;

		//answer
		this.mAnswer = answer;
		
		//showAnswer
		this.mShowAnswer = showAnswer;

		//is solved
		this.mSolved = false;

  		//answer pool
                this.mAnswerPool = new Array();

		//choiceArray
		this.mChoiceA = '';
		this.mChoiceB = '';
		this.mChoiceC = '';
		this.mChoiceD = '';

		this.mShapeArray = new Array();

        },

	setChoice: function(letter,choice)
	{
		if (letter == 'A') 
		{
			this.mChoiceA = choice;
		}	
		if (letter == 'B') 
		{
			this.mChoiceB = choice;
		}	
		if (letter == 'C') 
		{
			this.mChoiceC = choice;
		}	
		if (letter == 'D') 
		{
			this.mChoiceD = choice;
		}	
	},
        
	setChoices: function()
        {
                this.mCorrectChoiceNumber = 0;

                var goOnce = true;

                while (goOnce == true || this.mCorrectChoiceNumber == this.mLastCorrectChoiceNumber || this.mChoiceA == this.mChoiceB || this.mChoiceA == this.mChoiceC || this.mChoiceB == this.mChoiceC)
                {
                        this.mCorrectChoiceNumber = Math.floor((Math.random()*3));

                        this.mChoiceA = this.mAnswerPool[Math.floor((Math.random()*parseInt(this.mAnswerPool.length)))];
                        this.mChoiceB = this.mAnswerPool[Math.floor((Math.random()*parseInt(this.mAnswerPool.length)))];
                        this.mChoiceC = this.mAnswerPool[Math.floor((Math.random()*parseInt(this.mAnswerPool.length)))];

                        if (this.mCorrectChoiceNumber == 0)
                        {
                                this.mChoiceA = this.getAnswer();
                        }
                        if (this.mCorrectChoiceNumber == 1)
                        {
                                this.mChoiceB = this.getAnswer();
                        }
                        if (this.mCorrectChoiceNumber == 2)
                        {
                                this.mChoiceC = this.getAnswer();
                        }
                        goOnce = false;
                }
                this.mLastCorrectButtonNumber = this.mCorrectButtonNumber;
        },
	
	set: function(question,answer)
	{
		this.mQuestion = question;
		this.mAnswer = answer;
		this.mSolved = false;
	},
	
	set: function(question,answer,showAnswer)
	{
		this.mQuestion = question;
		this.mAnswer = answer;
		this.mShowAnswer = showAnswer;
		this.mSolved = false;
	},

	setQuestion: function(question)
	{
		this.mQuestion = question;
	},

	setAnswer: function(answer)
	{
		this.mAnswer = answer;
	},	
	
	setShowAnswer: function(showAnswer)
	{
		this.mShowAnswer = answer;
	},

	setSolved: function(b)
	{
		this.mSolved = b;
	},
	
	getSolved: function()
	{
		return this.mSolved;
	},
	
	getQuestion: function()
	{
		return this.mQuestion;
	},

	getAnswer: function()
	{
		return this.mAnswer;
	},
	
	getShowAnswer: function()
	{
		return this.mShowAnswer;
	},

	hideShapes: function()
	{
   		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(false);
                }
	},
	
	showShapes: function()
	{
   		for (i = 0; i < this.mShapeArray.length; i++)
                {
                        this.mShapeArray[i].setVisibility(true);
                }
	}
});
