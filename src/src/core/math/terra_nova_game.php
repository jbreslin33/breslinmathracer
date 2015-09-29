var TerraNovaGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TerraNovaSheet(this);	
       	this.parent(application,this.mSheet);
}

});
