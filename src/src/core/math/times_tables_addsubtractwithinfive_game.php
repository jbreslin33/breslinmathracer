var TimesTablesAddSubtractWithinFiveGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new TimesTablesAddSubtractWithinFiveSheet(this);	
       	this.parent(application,this.mSheet);
}

});
