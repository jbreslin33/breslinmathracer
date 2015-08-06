var TimesTablesSixGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesTwoSheet(this);	
       	this.parent(application,this.mSheet);
}

});
