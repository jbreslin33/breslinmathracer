/*
Ask 3 levels of the same question type. This will mean at most student will get 6 in a row correct which will still leave type available to evaluation.
*/
var Remediate = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new Sheet(this);	
		this.mSheet.mLearningStandard = 'remediate';
		this.mSheet.createItems();
		this.mSheet.createShapes();
	},

	destructor: function()
	{
		this.parent();
		this.mSheet.destructor();
	},

	update: function()
	{
		this.parent();
	
		if (this.mSheet)
		{	
			this.mSheet.update();
		}
	}
});
