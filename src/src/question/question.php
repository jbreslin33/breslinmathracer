var Question = new Class(
{
        initialize: function(question,answer)
        {
		//question
		this.mQuestion = question;

		//answer
		this.mAnswer = answer;

		//is solved
		this.mSolved = false;
        },
	
	set: function(question,answer)
	{
		this.mQuestion = question;
		this.mAnswer = answer;
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
	}

});


