var BasicSkillsFourthBossLevelGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new BasicSkillsFourthBossLevelSheet(this);	
       	this.parent(application,this.mSheet);
}

});
