var BasicSkillsFourthGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new BasicSkillsFourthSheet(this);	
       	this.parent(application,this.mSheet);
}

});
