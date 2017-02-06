var NormalSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

        APPLICATION.mHud.setOrange('G:' + APPLICATION.mEvaluationsID);

	if (APPLICATION.mEvaluationsID == 25)
	{
        	this.mIDArray.push('k.cc.a.1_1');
        	this.mIDArray.push('k.cc.a.1_2');

        	this.mIDArray.push('k.cc.a.2_1');
        	this.mIDArray.push('k.cc.a.2_2');
        	this.mIDArray.push('k.cc.a.2_3');
        	this.mIDArray.push('k.cc.a.2_4');
        	this.mIDArray.push('k.cc.a.2_5');
        	this.mIDArray.push('k.cc.a.2_6');
        	this.mIDArray.push('k.cc.a.2_7');
        	this.mIDArray.push('k.cc.a.2_8');
       	 	this.mIDArray.push('k.cc.a.2_9');
        	this.mIDArray.push('k.cc.a.2_10');
        	this.mIDArray.push('k.cc.a.2_11');
        	
		this.mCurrentElement = 0;
        	this.shuffle(500);
        
		APPLICATION.mHud.setViolet('1:' + this.mIDArray.length);
	}
	if (APPLICATION.mEvaluationsID == 26)
	{
       		this.mIDArray.push('k.oa.a.4_1');
        	this.mIDArray.push('k.oa.a.4_2');
        	this.mIDArray.push('k.oa.a.4_3');
        	this.mIDArray.push('k.oa.a.4_4');
        	this.mIDArray.push('k.oa.a.4_5');
        	this.mIDArray.push('k.oa.a.4_6');
        	this.mIDArray.push('k.oa.a.4_7');
        	this.mIDArray.push('k.oa.a.4_8');
       		this.mIDArray.push('k.oa.a.4_9');

       	 	this.mIDArray.push('k.oa.a.4_21');
        	this.mIDArray.push('k.oa.a.4_22');
        	this.mIDArray.push('k.oa.a.4_23');
        	this.mIDArray.push('k.oa.a.4_24');
        	this.mIDArray.push('k.oa.a.4_25');
        	this.mIDArray.push('k.oa.a.4_26');
        	this.mIDArray.push('k.oa.a.4_27');
        	this.mIDArray.push('k.oa.a.4_28');
        	this.mIDArray.push('k.oa.a.4_29');

        	this.mCurrentElement = 0;
        	this.shuffle(500);
		APPLICATION.mHud.setViolet('1:' + this.mIDArray.length);
	}
},

pickItem: function()
{
	if (APPLICATION.mEvaluationsID > 1 && APPLICATION.mEvaluationsID < 41)
	{
        	if (this.mCurrentElement < this.mIDArray.length)
        	{
                	APPLICATION.mQuestionTypeCurrent = this.mIDArray[this.mCurrentElement];
                	this.mCurrentElement++;
        	}
        	else //its over....check here????
        	{
                	APPLICATION.mEvaluationsID = 41;
        	}
	}

	if (APPLICATION.mEvaluationsID == 1)
	{
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
			while (APPLICATION.mQuestionTypeLast == APPLICATION.mQuestionTypeCurrent)
       			{
       				var r = Math.floor(Math.random()*100);
				if (r < 10)
				{
                			APPLICATION.askFromARandomOldStandard();
					APPLICATION.mQuestionTypeCurrent = APPLICATION.mQuestionType;
				}
               			if (r >= 10 && r < 45)
				{
                			APPLICATION.getQuestionType(1);
					APPLICATION.mQuestionTypeCurrent = APPLICATION.mQuestionType;
					//APPLICATION.log('Q: A1');
				}
               			if (r >= 45 && r < 80)
				{
                			APPLICATION.getQuestionType(2);
					APPLICATION.mQuestionTypeCurrent = APPLICATION.mQuestionType;
					//APPLICATION.log('Q: A2');
				}
               			if (r >= 80 && r < 90)
               			{
                       			APPLICATION.getLeastAsked(APPLICATION.mItemTypesArray,APPLICATION.mItemAttemptsTypeArrayOne,APPLICATION.mItemAttemptsTransactionCodeArrayOne);
                      			APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastAsked;
					//APPLICATION.log('Q: D');
               			}
               			if (r >= 90 && r < 101)
               			{
                       			APPLICATION.getLeastCorrect(APPLICATION.mItemTypesArray,APPLICATION.mItemAttemptsTypeArrayOne,APPLICATION.mItemAttemptsTransactionCodeArrayOne);
                       			APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastCorrect;
					//APPLICATION.log('Q: E');
               			}
			} //while
		} //else escape from kinder
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
		this.set(pick);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

	document.body.style.backgroundColor = "grey";

        //set this as last for next run
 	APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}
});
