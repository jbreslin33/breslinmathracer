var g6_ee_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g6_ee_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
