var TestGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TestSheet(this);	
       	this.parent(application,this.mSheet);
}

});
