var BasicSkillsFifthGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new BasicSkillsFifthSheet(this);	
       	this.parent(application,this.mSheet);
}

});
