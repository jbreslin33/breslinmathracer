var g2_nbt_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g2_nbt_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
