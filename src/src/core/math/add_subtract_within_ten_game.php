var AddSubtractWithinTenGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new AddSubtractWithinTenSheet(this);	
       	this.parent(application,this.mSheet);
}

});
