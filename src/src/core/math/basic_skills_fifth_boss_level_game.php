var BasicSkillsFifthBossLevelGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new BasicSkillsFifthBossLevelSheet(this);	
       	this.parent(application,this.mSheet);
}

});
