var AddSubtractWithinTwentyGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new AddSubtractWithinTwentySheet(this);	
       	this.parent(application,this.mSheet);
}

});
