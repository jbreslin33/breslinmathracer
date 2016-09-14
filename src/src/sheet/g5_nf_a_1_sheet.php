var g5_nf_a_1_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

        this.mIDArray.push('5.nf.a.1_1'); 
        this.mIDArray.push('5.nf.a.1_2'); 
        this.mIDArray.push('5.nf.a.1_3'); 
        this.mIDArray.push('5.nf.a.1_4'); 
        this.mIDArray.push('5.nf.a.1_5'); 
        this.mIDArray.push('5.nf.a.1_6'); 
        this.mIDArray.push('5.nf.a.1_7'); 
        this.mIDArray.push('5.nf.a.1_8'); 
        this.mIDArray.push('5.nf.a.1_9'); 
	
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
                itemAttempt.setEvaluationsID(35);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
