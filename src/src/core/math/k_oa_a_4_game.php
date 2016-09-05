var k_oa_a_4_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new k_oa_a_4_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
