var TimesTablesSevenGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesSevenSheet(this);	
       	this.parent(application,this.mSheet);
}

});
