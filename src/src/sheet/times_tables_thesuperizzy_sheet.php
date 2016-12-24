var TimesTablesTheSuperIzzySheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
	//grab last 10 wrong answers that are not dups

	var c = 0;
	while (this.mIDArray.length < 9 && c < APPLICATION.mItemAttemptsTypeArrayTwelve.length)
	{
		APPLICATION.log('t:' + APPLICATION.mItemAttemptsTypeArrayTwelve[c]); 

		if (APPLICATION.mItemAttemptsTransactionCodeArrayTwelve[c] != 1)
		{
			var dup = false;
			for (j = 0; j < this.mIDArray.length; j++)
			{
				if (APPLICATION.mItemAttemptsTypeArrayTwelve[c] == this.mIDArray[j]) 
				{
					dup = true;
				}
			}
			if (dup == false)
			{
				this.mIDArray.push('' + APPLICATION.mItemAttemptsTypeArrayTwelve[c]);
			}
		} 
		c++;
	}
	APPLICATION.log('s:' + APPLICATION.mItemAttemptsTypeArrayTwelve.length); 

	this.mCurrentElement = 0;
	this.shuffle(500);
},

pickItem: function()
{
        if (this.mCurrentElement < this.mIDArray.length)
        {
                APPLICATION.mQuestionTypeCurrent = this.mIDArray[this.mCurrentElement];
                this.mCurrentElement++;
        }
        else
        {
                APPLICATION.mEvaluationsID = 41;
        }
},

createItem: function()
{
        this.pickItem();

        if (APPLICATION.mEvaluationsID == 41)
        {
                return;
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
                itemAttempt.setEvaluationsID(19);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
