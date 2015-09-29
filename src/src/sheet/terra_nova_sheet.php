var TerraNovaSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
 	for (i = 1; i < 100; i++)
        {
                var a = '3.oa.c.7_';
                var b = '' + i;
                var c = '' + a + b;
                this.mIDArray.push('' + c);
        }
},

pickItem: function()
{
	//would love to loop till we got no dup
        while (APPLICATION.mQuestionTypeLast == APPLICATION.mQuestionTypeCurrent)
        {
        	var r = Math.floor(Math.random()*3);

                if (r == 1)
                {
                        APPLICATION.getLeastAsked(this.mIDArray,APPLICATION.mItemAttemptsTypeArrayTwelve,APPLICATION.mItemAttemptsTransactionCodeArrayTwelve);
                        APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastAsked;
                }
                if (r == 2)
                {
                        APPLICATION.getLeastCorrect(this.mIDArray,APPLICATION.mItemAttemptsTypeArrayTwelve,APPLICATION.mItemAttemptsTransactionCodeArrayTwelve);
                        APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastCorrect;
                }
                if (r == 3) // random
		{
        		var t = Math.floor(Math.random()*99)+1;
                        APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastAsked;
                	var a = '3.oa.c.7_';
                	var b = '' + t;
                	APPLICATION.mQuestionTypeCurrent = '' + a + b;
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
               	itemAttempt.setEvaluationsID(14);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
 	APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}
});
