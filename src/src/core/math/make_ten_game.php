var MakeTenGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new MakeTenSheet(this);	
       	this.parent(application,this.mSheet);
}

});
