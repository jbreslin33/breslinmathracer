var HomeworkGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new HomeworkSheet(this);	
       	this.parent(application,this.mSheet);
}

});
