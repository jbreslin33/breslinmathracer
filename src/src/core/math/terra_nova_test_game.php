var TerraNovaTestGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TerraNovaTestSheet(this);	
       	this.parent(application,this.mSheet);
}

});
