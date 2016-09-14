var g5_oa_a_1_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

        this.mIDArray.push('5.oa.a.1_1'); 
        this.mIDArray.push('5.oa.a.1_2'); 
        this.mIDArray.push('5.oa.a.1_3'); 
        this.mIDArray.push('5.oa.a.1_4'); 
        this.mIDArray.push('5.oa.a.1_5'); 
        this.mIDArray.push('5.oa.a.1_6'); 
        this.mIDArray.push('5.oa.a.1_7'); 
        this.mIDArray.push('5.oa.a.1_8'); 
        this.mIDArray.push('5.oa.a.1_9'); 
        this.mIDArray.push('5.oa.a.1_10'); 
        this.mIDArray.push('5.oa.a.1_11'); 
        this.mIDArray.push('5.oa.a.1_12'); 
        this.mIDArray.push('5.oa.a.1_13'); 
        this.mIDArray.push('5.oa.a.1_14'); 
        this.mIDArray.push('5.oa.a.1_15'); 
        this.mIDArray.push('5.oa.a.1_16'); 
        this.mIDArray.push('5.oa.a.1_17'); 
        this.mIDArray.push('5.oa.a.1_18'); 
        this.mIDArray.push('5.oa.a.1_19'); 
        this.mIDArray.push('5.oa.a.1_20'); 
        this.mIDArray.push('5.oa.a.1_21'); 
        this.mIDArray.push('5.oa.a.1_22'); 
	
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
                APPLICATION.mEvaluationsID = 1;
        }
},

createItem: function()
{
        this.pickItem();

        if (APPLICATION.mEvaluationsID == 1)
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
                itemAttempt.setEvaluationsID(31);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
