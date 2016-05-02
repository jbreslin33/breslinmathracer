var BasicSkills4thGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new BasicSkills4thSheet(this);	
       	this.parent(application,this.mSheet);
}

});
