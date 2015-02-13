/* GAME: */

var GameSheet = new Class(
{

Extends: Game,

	initialize: function(application)
	{
       		this.parent(application);
		this.mSheet = 0;	
	},

	destructor: function()
	{
		this.parent();
		this.mSheet.destructor();
		this.mSheet = 0;
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
