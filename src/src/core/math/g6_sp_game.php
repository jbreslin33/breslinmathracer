var g6_sp_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g6_sp_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
