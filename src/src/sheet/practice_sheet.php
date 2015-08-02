var PracticeSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
},

createItem: function()
{
	APPLICATION.mItemAttemptsID = APPLICATION.mPracticeItemID;
	var pick = 0;

        if (pick == 0)
        {
        	pick = this.mPicker.getItem(APPLICATION.mItemAttemptsID);
        }
        if (pick == 0)
        {
                pick = this.mPickerBrian.getItem(APPLICATION.mItemAttemptsID);
        }
        if (pick == 0)
        {
                pick = this.mPickerJim.getItem(APPLICATION.mItemAttemptsID);
        }

        //if you got an item then add it to sheet
        if (pick != 0)
        {
        	this.setItem(pick);
                var itemAttempt = new ItemAttempt();
                APPLICATION.mItemAttemptsArray.push(itemAttempt);
                pick.setItemAttempt(itemAttempt);
                itemAttempt.mType = pick.mType;
		itemAttempt.setEvaluationsID(2);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mItemAttemptsIDLast = APPLICATION.mItemAttemptsID;
}

});
