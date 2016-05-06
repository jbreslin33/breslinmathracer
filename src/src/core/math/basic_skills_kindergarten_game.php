var BasicSkillsKindergartenGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new BasicSkillsKindergartenSheet(this);	
       	this.parent(application,this.mSheet);
}

});
