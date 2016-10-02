var g6_ns_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g6_ns_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
