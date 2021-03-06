var NormalSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
	APPLICATION.mEvaluationsID == APPLICATION.mEvaluationsItemTypesEvaluationsIDArray[i]
        APPLICATION.mHud.setOrange('G:' + APPLICATION.mEvaluationsID);

	//lets find and set number of questions from db	
	for (y=0; y < APPLICATION.mEvaluationsItemTypesArray.length; y++)
	{
		if (parseInt(APPLICATION.mEvaluationsID) == parseInt(APPLICATION.mEvaluationsItemTypesArray[y]))
		{
			this.mQuestions = APPLICATION.mEvaluationsItemTypesQuestionsArray[y]; 
		}
	}

	//fake potentially big array
        for (i=0; i < APPLICATION.mEvaluationsItemTypesItemTypesArray.length; i++)
        {	
               	if (APPLICATION.mEvaluationsID == APPLICATION.mEvaluationsItemTypesEvaluationsIDArray[i])
               	{
                       	this.mTempIDArray.push('' + APPLICATION.mEvaluationsItemTypesItemTypesArray[i]);
               	}
        }

	//shuffle
        this.shuffle(this.mTempIDArray,500);
	
	//just load enuf for questions total to real array
        for (i=0; i < this.mQuestions; i++)
        {	
                this.mIDArray.push('' + this.mTempIDArray[i]);
        }

        this.shuffle(this.mIDArray,500);

	//prime the hud  	
	APPLICATION.mHud.setViolet('1:' + this.mIDArray.length);
   	APPLICATION.mHud.setCyan('' + 'grade: 0%');
},

pickItem: function()
{
	if ( (APPLICATION.mEvaluationsID > 1 && APPLICATION.mEvaluationsID < 41) || (APPLICATION.mEvaluationsID > 998 && APPLICATION.mEvaluationsID < 1500) )
	{
        	if (this.mCurrentElement < this.mIDArray.length)
        	{
                	APPLICATION.mQuestionTypeCurrent = this.mIDArray[this.mCurrentElement];
        	}
        	else //its over....check here????
        	{
                	APPLICATION.mEvaluationsID = 41;
        	}
	}

	if (APPLICATION.mEvaluationsID == 1)
	{
		var s = APPLICATION.mItemAttemptsTypeArray.length; 

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
                	//APPLICATION.getQuestionTypeFromGrade(1);
			//lets get first and if its not a dup dont even go in
			while (APPLICATION.mQuestionTypeLast == APPLICATION.mQuestionTypeCurrent)
       			{
       				var r = Math.floor(Math.random()*100);
				//r = 4;
				if (r < 10)
				{
                			//APPLICATION.askFromARandomOldStandard();
                			APPLICATION.getQuestionTypeFromGrade(1);
					APPLICATION.mQuestionTypeCurrent = APPLICATION.mQuestionType;
					//APPLICATION.log('Q: 1');
				}
               			if (r >= 10 && r < 45)
				{
                			APPLICATION.getQuestionTypeFromGrade(1);
					APPLICATION.mQuestionTypeCurrent = APPLICATION.mQuestionType;
					//APPLICATION.log('Q: 2');
				}
               			if (r >= 45 && r < 80)
				{
                			APPLICATION.getQuestionTypeFromGrade(2);
					APPLICATION.mQuestionTypeCurrent = APPLICATION.mQuestionType;
					//APPLICATION.log('Q: 3');
				}
               			if (r >= 80 && r < 90)
               			{
                       			APPLICATION.getLeastAsked(APPLICATION.mItemTypesArray,APPLICATION.mItemAttemptsTypeArray,APPLICATION.mItemAttemptsTransactionCodeArray);
                      			APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastAsked;
					//APPLICATION.log('Q: 4');
               			}
               			if (r >= 90 && r < 101)
               			{
                       			APPLICATION.getLeastCorrect(APPLICATION.mItemTypesArray,APPLICATION.mItemAttemptsTypeArray,APPLICATION.mItemAttemptsTransactionCodeArray);
                       			APPLICATION.mQuestionTypeCurrent = APPLICATION.mLeastCorrect;
					//APPLICATION.log('Q: 5');
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
