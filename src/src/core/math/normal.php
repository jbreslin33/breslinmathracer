/* NORMAL: This class will grab the earliest 10 items that have not yet been mastered and ask them in inverse pyramid form  
it is therefore decoupled from core standards tables. The items will be the only things that are related to core standards

*/ 

var Normal = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
	
		this.mSheet = new Sheet(this);	
		this.mSheet.mLearningStandard = 'normal';
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
