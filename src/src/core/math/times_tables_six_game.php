var TimesTablesSixGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesSixSheet(this);	
       	this.parent(application,this.mSheet);
}

});
