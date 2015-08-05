var TimesTablesTwoSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
},

createItem: function()
{
	//would love to loop till we got no dup
        while (APPLICATION.mQuestionTypeLast == APPLICATION.mQuestionTypeCurrent)
        {
        	var r = Math.floor(Math.random()*3);

                if (r == 0)
                {
                        APPLICATION.getFirst();
                        APPLICATION.mQuestionTypeCurrent = APPLICATION.mFirst;
                }
                if (r == 1)
                {
                        APPLICATION.getLeastAsked();
                        APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastAsked;
                }
                if (r == 2)
                {
                        APPLICATION.getLeastCorrect();
                        APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastCorrect;
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
               	itemAttempt.setEvaluationsID(1);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
 	APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}
});
