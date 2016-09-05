var k_cc_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new k_cc_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
