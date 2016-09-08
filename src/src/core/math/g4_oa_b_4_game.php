var g4_oa_b_4_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g4_oa_b_4_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
