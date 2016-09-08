var g4_nf_b_3_c_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g4_nf_b_3_c_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
