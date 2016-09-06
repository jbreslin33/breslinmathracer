var g3_oa_c_7_Game = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new g3_oa_c_7_Sheet(this);	
       	this.parent(application,this.mSheet);
}

});
