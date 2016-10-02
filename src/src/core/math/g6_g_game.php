var g6_g_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g6_g_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
