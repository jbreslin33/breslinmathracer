var TimesTablesTheIzzyGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesTheIzzySheet(this);	
       	this.parent(application,this.mSheet);
}

});
