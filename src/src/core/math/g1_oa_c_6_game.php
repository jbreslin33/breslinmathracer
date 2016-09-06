var g1_oa_c_6_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g1_oa_c_6_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
