var g3_nbt_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g3_nbt_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
