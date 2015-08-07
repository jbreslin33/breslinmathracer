var TimesTablesThreeGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesThreeSheet(this);	
       	this.parent(application,this.mSheet);
}

});
