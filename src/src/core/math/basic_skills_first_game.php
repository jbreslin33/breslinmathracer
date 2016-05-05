var BasicSkillsFirstGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new BasicSkillsFirstSheet(this);	
       	this.parent(application,this.mSheet);
}

});
