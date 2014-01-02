var Question = new Class(
{
        initialize: function(question,answer)
        {
		//question
		this.mQuestion = question;

		//answer
		this.mAnswer = answer;
		
		//showAnswer
		this.mShowAnswer = '';

		//is solved
		this.mSolved = false;

		//choiceArray
		this.mChoiceA = '';
		this.mChoiceB = '';
		this.mChoiceC = '';
		this.mChoiceD = '';
        },

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
	}
});
