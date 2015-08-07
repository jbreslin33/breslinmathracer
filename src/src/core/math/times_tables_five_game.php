var TimesTablesFiveGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesFiveSheet(this);	
       	this.parent(application,this.mSheet);
}

});
