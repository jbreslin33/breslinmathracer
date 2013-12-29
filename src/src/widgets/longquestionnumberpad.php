var LongQuestionNumberPad  = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
		this.parent(application)
	},

	createNumQuestion: function()
	{
 		//question
                this.mNumQuestion = new Shape(300,50,25,100,this.mGame,"","","");
		this.mInputPadArray.push(this.mNumQuestion);
	}
});
