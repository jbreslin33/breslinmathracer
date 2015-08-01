var NormalGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new NormalSheet(this);	
       	this.parent(application,this.mSheet);
}

});
