var TimesTablesEightGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesEightSheet(this);	
       	this.parent(application,this.mSheet);
}

});
