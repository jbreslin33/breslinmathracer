var TimesTablesEightSheet = new Class(
{
Extends: TimesTablesSheet,

initialize: function(game)
{
	this.parent(game);

	this.mIDArray.push('3.oa.c.7_13');
	this.mIDArray.push('3.oa.c.7_28');
	this.mIDArray.push('3.oa.c.7_41');
	this.mIDArray.push('3.oa.c.7_52');
	this.mIDArray.push('3.oa.c.7_61');
	this.mIDArray.push('3.oa.c.7_68');
	this.mIDArray.push('3.oa.c.7_73');
	this.mIDArray.push('3.oa.c.7_74');
	this.mIDArray.push('3.oa.c.7_12');
	this.mIDArray.push('3.oa.c.7_27');
	this.mIDArray.push('3.oa.c.7_40');
	this.mIDArray.push('3.oa.c.7_51');
	this.mIDArray.push('3.oa.c.7_60');
	this.mIDArray.push('3.oa.c.7_67');
	this.mIDArray.push('3.oa.c.7_75');

	this.mCurrentElement = 0;
	this.shuffle(50);
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
                itemAttempt.setEvaluationsID(9);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
