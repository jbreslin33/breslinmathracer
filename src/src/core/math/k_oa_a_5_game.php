var k_oa_a_5_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new k_oa_a_5_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
