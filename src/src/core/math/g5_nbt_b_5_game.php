var g5_nbt_b_5_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g5_nbt_b_5_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
