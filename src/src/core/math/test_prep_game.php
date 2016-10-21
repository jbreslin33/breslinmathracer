var TestPrepGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TestPrepSheet(this);	
       	this.parent(application,this.mSheet);
}

});
