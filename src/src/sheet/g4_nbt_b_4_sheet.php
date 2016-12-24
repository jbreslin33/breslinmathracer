var g4_nbt_b_4_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

    	this.mIDArray.push('4.nbt.b.4_1'); 
        this.mIDArray.push('4.nbt.b.4_2'); 
        this.mIDArray.push('4.nbt.b.4_3'); 
        this.mIDArray.push('4.nbt.b.4_4'); 
        this.mIDArray.push('4.nbt.b.4_5'); 
        this.mIDArray.push('4.nbt.b.4_6'); 
        this.mIDArray.push('4.nbt.b.4_7'); 
        this.mIDArray.push('4.nbt.b.4_8'); 
        this.mIDArray.push('4.nbt.b.4_9'); 
        this.mIDArray.push('4.nbt.b.4_10'); 
        this.mIDArray.push('4.nbt.b.4_11'); 
        this.mIDArray.push('4.nbt.b.4_12'); 
        this.mIDArray.push('4.nbt.b.4_13'); 
        this.mIDArray.push('4.nbt.b.4_14'); 	

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
