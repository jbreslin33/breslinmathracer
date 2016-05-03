var CoreGame = new Class(
{

Extends: Game,

	initialize: function(application,sheet)
	{
       		this.parent(application);
		this.mSheet = sheet;	
		this.mSheet.createItem();
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
