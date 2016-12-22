var MainMenuGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new MainMenuSheet(this);	
       	this.parent(application,this.mSheet);
}

});
