var g2_oa_b_2_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g2_oa_b_2_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
