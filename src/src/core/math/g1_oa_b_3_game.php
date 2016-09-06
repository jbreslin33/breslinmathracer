var g1_oa_b_3_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g1_oa_b_3_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
