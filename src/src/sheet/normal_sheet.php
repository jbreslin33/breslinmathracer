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
	var s = APPLICATION.mItemAttemptsTypeArrayOne.length; 

	if (parseInt(APPLICATION.mGame.mScore) == 0 && s < 10)
	{
		APPLICATION.mQuestionTypeCurrent = 'k.cc.a.1_1';
	}
	if (parseInt(APPLICATION.mGame.mScore) == 1 && s < 10)
	{
                APPLICATION.mQuestionTypeCurrent = 'k.cc.a.1_2';
	}
	else if (parseInt(APPLICATION.mGame.mScore) == 2 && s < 10)
	{
                APPLICATION.mQuestionTypeCurrent = 'k.cc.a.2_1';
	}
	else if (parseInt(APPLICATION.mGame.mScore) == 3 && s < 10)
	{
                APPLICATION.mQuestionTypeCurrent = 'k.cc.a.2_2';
	}
	else 
	{
		//lets get first and if its not a dup dont even go in
                APPLICATION.getFirst();
                APPLICATION.mQuestionTypeCurrent = APPLICATION.mFirst;
		//APPLICATION.log('getFirst');
		while (APPLICATION.mQuestionTypeLast == APPLICATION.mQuestionTypeCurrent)
        	{
        		var r = Math.floor(Math.random()*100);
                	
                	if (r < 45)
                	{
                        	APPLICATION.getLeastAsked(APPLICATION.mItemTypesArray,APPLICATION.mItemAttemptsTypeArrayOne,APPLICATION.mItemAttemptsTransactionCodeArrayOne);
                        	APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastAsked;
				//APPLICATION.log('leastAsked');
                	}
                	if (r >= 45 && r < 50)
                	{
                        	APPLICATION.getLeastAskedHalf(APPLICATION.mItemTypesArray,APPLICATION.mItemAttemptsTypeArrayOne,APPLICATION.mItemAttemptsTransactionCodeArrayOne);
                        	APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastAskedHalf;
				//APPLICATION.log('leastAskedHalf');
                	}
                	if (r >= 50 && r < 95)
                	{
                        	APPLICATION.getLeastCorrect(APPLICATION.mItemTypesArray,APPLICATION.mItemAttemptsTypeArrayOne,APPLICATION.mItemAttemptsTransactionCodeArrayOne);
                        	APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastCorrect;
				//APPLICATION.log('leastCorrect');
                	}
                	if (r >= 95)
                	{
                        	APPLICATION.getLeastCorrectHalf(APPLICATION.mItemTypesArray,APPLICATION.mItemAttemptsTypeArrayOne,APPLICATION.mItemAttemptsTransactionCodeArrayOne);
                        	APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastCorrectHalf;
				//APPLICATION.log('leastCorrectHalf');
                	}
		}
	}
},

createItem: function()
{
if (APPLICATION.mUsername == 'b')
{
	APPLICATION.mQuestionTypeCurrent = this.mPickerBrian.getDev();
}
else if (APPLICATION.mUsername == 'j')
{
	APPLICATION.mQuestionTypeCurrent = this.mPickerJim.getDev();
}
else
{
	this.pickItem();
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

	document.body.style.backgroundColor = "848484";
	for (var i = 0; i < APPLICATION.mHud.mTan.mMesh.length; i++)
	{
		if (APPLICATION.mQuestionTypeCurrent == APPLICATION.mHud.mTan.mMesh.options.item(i).text)
		{
			var count = 0;
			for (var j = 0; j < APPLICATION.mItemAttemptsTypeArrayOne.length; j++)
			{
				if (APPLICATION.mItemAttemptsTypeArrayOne[j] == APPLICATION.mQuestionTypeCurrent)
				{
					count++;	
				}
			}
			if (count > 2) //green 
			{
				document.body.style.backgroundColor = "339966";
			}
			else //grey
			{
				document.body.style.backgroundColor = "848484";
			}
		}
	}

	if (APPLICATION.mGame.mUnmastered > 10)
	{
		document.body.style.backgroundColor = "red";
	}
	document.body.style.backgroundColor = "grey";

        //set this as last for next run
 	APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}
});
