var PracticeGame = new Class(
{

Extends: CoreGame,

initialize: function(application)
{
	this.mSheet = new PracticeSheet(this);	
       	this.parent(application,this.mSheet);
}

});
