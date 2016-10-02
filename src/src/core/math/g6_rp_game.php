var g6_rp_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g6_rp_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
