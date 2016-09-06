var g1_nbt_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g1_nbt_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
