var TimesTablesTheSuperIzzyGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesTheSuperIzzySheet(this);	
       	this.parent(application,this.mSheet);
}

});
