var NormalSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
},

pickItem: function()
{
	//would love to loop till we got no dup

	if (parseInt(APPLICATION.mGame.mScore) == 0)
	{
                        APPLICATION.mQuestionTypeCurrent = 'k.cc.a.1_1';
	}
	else if (parseInt(APPLICATION.mGame.mScore) == 1)
	{
                        APPLICATION.mQuestionTypeCurrent = 'k.cc.a.1_1';
	}
	else if (parseInt(APPLICATION.mGame.mScore) == 2)
	{
                        APPLICATION.mQuestionTypeCurrent = 'k.cc.a.1_2';
	}
	else if (parseInt(APPLICATION.mGame.mScore) == 3)
	{
                        APPLICATION.mQuestionTypeCurrent = 'k.cc.a.1_3';
	}
	else
	{
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
                        	APPLICATION.getLeastAsked(APPLICATION.mItemTypesArray,APPLICATION.mItemAttemptsTypeArrayOne,APPLICATION.mItemAttemptsTransactionCodeArrayOne);
                        	APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastAsked;
                	}
                	if (r == 2)
                	{
                        	APPLICATION.getLeastCorrect(APPLICATION.mItemTypesArray,APPLICATION.mItemAttemptsTypeArrayOne,APPLICATION.mItemAttemptsTransactionCodeArrayOne);
                        	APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastCorrect;
                	}
		}
	}
},

createItem: function()
{
	this.pickItem();

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
