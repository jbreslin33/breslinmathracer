var BasicSkillsSecondGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new BasicSkillsSecondSheet(this);	
       	this.parent(application,this.mSheet);
}

});
