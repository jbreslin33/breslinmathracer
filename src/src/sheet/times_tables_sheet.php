var TimesTablesSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
	this.mIDArray = new Array();
	
},

createItem: function()
{
	var streak = parseInt(this.mGame.getStreak()); 
	if (streak < this.mIDArray.length)
	{
        	APPLICATION.mQuestionTypeCurrent = this.mIDArray[streak];
	}
	else
	{
		//would love to loop till we got no dup
        	while (APPLICATION.mQuestionTypeLast == APPLICATION.mQuestionTypeCurrent)
        	{
        		var r = Math.floor(Math.random()*19);
        		APPLICATION.mQuestionTypeCurrent = this.mIDArray[r];
		}
	}

        var pick = 0;

        if (pick == 0)
        {
                pick = this.mPicker.getItem(APPLICATION.mQuestionTypeCurrent);
        }
        if (pick == 0)
        {
                pick = this.mPickerBrian.getItem(APPLICATION.mQuestionTypeCurrent);
        }
        if (pick == 0)
        {
                pick = this.mPickerJim.getItem(APPLICATION.mQuestionTypeCurrent);
        }

        //if you got an item then add it to sheet
        if (pick != 0)
        {
                this.setItem(pick);
                var itemAttempt = new ItemAttempt();
                APPLICATION.mItemAttemptsArray.push(itemAttempt);
                pick.setItemAttempt(itemAttempt);
              	itemAttempt.mType = pick.mType;
		APPLICATION.log('dido:' + APPLICATION.mEvaluationsID);
               	itemAttempt.setEvaluationsID(APPLICATION.mEvaluationsID);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
 	APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}
});
