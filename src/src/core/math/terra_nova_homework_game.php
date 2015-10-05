var TerraNovaHomeworkGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TerraNovaHomeworkSheet(this);	
       	this.parent(application,this.mSheet);
}

});
