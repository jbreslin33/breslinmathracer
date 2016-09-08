var g5_nf_a_1_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g5_nf_a_1_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
