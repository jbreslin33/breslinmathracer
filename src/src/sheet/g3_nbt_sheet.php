var g3_nbt_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

	//rounding to 10 and 100 within 1000
        this.mIDArray.push('3.nbt.a.1_1');
        this.mIDArray.push('3.nbt.a.1_2');
        this.mIDArray.push('3.nbt.a.1_3');
        this.mIDArray.push('3.nbt.a.1_4');
        this.mIDArray.push('3.nbt.a.1_5');
        this.mIDArray.push('3.nbt.a.1_6');
        this.mIDArray.push('3.nbt.a.1_7');
        this.mIDArray.push('3.nbt.a.1_8');
        this.mIDArray.push('3.nbt.a.1_9');
        this.mIDArray.push('3.nbt.a.1_10');
        this.mIDArray.push('3.nbt.a.1_11');
        this.mIDArray.push('3.nbt.a.1_12');
        this.mIDArray.push('3.nbt.a.1_13');
        this.mIDArray.push('3.nbt.a.1_14');

	
        //this.mIDArray.push('3.nbt.a.2_1');
        //this.mIDArray.push('3.nbt.a.2_2');

        //addition subtraction within 1000
	//done in 2nd
/*
        this.mIDArray.push('2.nbt.b.7_16');
        this.mIDArray.push('2.nbt.b.7_17');
        this.mIDArray.push('2.nbt.b.7_18');
        this.mIDArray.push('2.nbt.b.7_19');
        this.mIDArray.push('2.nbt.b.7_20');
        this.mIDArray.push('2.nbt.b.7_21');
*/
	//times by 1 digit by 10
        this.mIDArray.push('3.nbt.a.3_1');

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
                itemAttempt.setEvaluationsID(22);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
