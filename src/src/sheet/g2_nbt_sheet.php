var g2_nbt_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);

	//place value
	this.mIDArray.push('2.nbt.a.1_1');
	this.mIDArray.push('2.nbt.a.1_2');
	this.mIDArray.push('2.nbt.a.1_3');

	//add sub within 100	
	this.mIDArray.push('2.nbt.b.5_1');
	this.mIDArray.push('2.nbt.b.5_2');
	this.mIDArray.push('2.nbt.b.5_3');
	this.mIDArray.push('2.nbt.b.5_4');
	this.mIDArray.push('2.nbt.b.5_5');

	//add 4 2 digit numbers
	this.mIDArray.push('2.nbt.b.6_1');
	this.mIDArray.push('2.nbt.b.6_2');
	
	//addition subtraction within 1000
	this.mIDArray.push('2.nbt.b.7_16');
	this.mIDArray.push('2.nbt.b.7_17');
	this.mIDArray.push('2.nbt.b.7_18');
	this.mIDArray.push('2.nbt.b.7_19');
	this.mIDArray.push('2.nbt.b.7_20');
	this.mIDArray.push('2.nbt.b.7_21');

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
                itemAttempt.setEvaluationsID(23);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
