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

	APPLICATION.sendItemAttemptInsert(41,'main','menu',this.mDateNow,41,1,APPLICATION.mGame.mUnmastered);



 //	this.setItem(pick);
        //var itemAttempt = new ItemAttempt();
        //APPLICATION.mItemAttemptsArray.push(itemAttempt);
        //pick.setItemAttempt(itemAttempt);
        //itemAttempt.mType = pick.mType;
        //itemAttempt.setEvaluationsID(1);

}



});
