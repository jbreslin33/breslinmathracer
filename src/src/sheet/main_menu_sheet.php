var MainMenuSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
},

createItem: function()
{
	var item = new main_menu(this);
	this.setItem(item);
}



});
