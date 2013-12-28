var BigQuestionNumberPad  = new Class(
{

Extends: NumberPad,

	initialize: function(application)
	{
		this.parent(application)
	},

	createNumQuestion: function()
	{
 		//question
                this.mNumQuestion = new Shape(200,200,50,100,this.mGame,"","","");
		this.mInputPadArray.push(this.mNumQuestion);
	}
});
