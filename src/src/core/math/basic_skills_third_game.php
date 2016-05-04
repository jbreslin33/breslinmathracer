var BasicSkillsThirdGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new BasicSkillsThirdSheet(this);	
       	this.parent(application,this.mSheet);
}

});
