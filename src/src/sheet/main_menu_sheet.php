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


 //	this.setItem(pick);
        //var itemAttempt = new ItemAttempt();
        //APPLICATION.mItemAttemptsArray.push(itemAttempt);
        //pick.setItemAttempt(itemAttempt);
        //itemAttempt.mType = pick.mType;
        //itemAttempt.setEvaluationsID(1);

}



});
