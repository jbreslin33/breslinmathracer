var QuestionCompare = new Class(
{

Extends: Question,
        initialize: function(question,answer,a,b)
        {
                this.parent(question,answer)
		this.mA = a;
		this.mB = b; 
	},

	set: function(question,answer)
	{
		this.mQuestion = question;
		this.mAnswer = answer;
	},

	setVariables: function(a,b)
	{
		this.mA = a;
		this.mB = b;
	},

	getVariableA: function()
	{
		return this.mA;
	},
	
	getVariableB: function()
	{
		return this.mB;
	}
});
