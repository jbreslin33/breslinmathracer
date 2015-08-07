var TimesTablesFourGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesFourSheet(this);	
       	this.parent(application,this.mSheet);
}

});
