/* EVALUATION: If student is correct on all evaluation questions this class will act like all other classes. If a student gets one wrong however we will take action. We will send student back to that standard but will will set a featured type in that learning standard. */ 

var Evaluation = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new Sheet(this);	
		this.mSheet.mLearningStandard = 'evaluation';
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
