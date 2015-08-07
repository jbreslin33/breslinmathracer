var TimesTablesNineGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesNineSheet(this);	
       	this.parent(application,this.mSheet);
}

});
