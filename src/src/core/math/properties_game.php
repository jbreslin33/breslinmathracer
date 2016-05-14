var PropertiesGame = new Class(
{

Extends: CoreGame,
initialize: function(application)
{
	this.mSheet = new PropertiesSheet(this);	
       	this.parent(application,this.mSheet);
}

});
