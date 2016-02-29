var TimesTablesThreeSheet = new Class(
{
Extends: TimesTablesSheet,

initialize: function(game)
{
	this.parent(game);
	this.mIDArray.push('3.oa.c.7_3');
	this.mIDArray.push('3.oa.c.7_18');
	this.mIDArray.push('3.oa.c.7_19');
	this.mIDArray.push('3.oa.c.7_21');
	this.mIDArray.push('3.oa.c.7_23');
	this.mIDArray.push('3.oa.c.7_25');
	this.mIDArray.push('3.oa.c.7_27');
	this.mIDArray.push('3.oa.c.7_29');
	this.mIDArray.push('3.oa.c.7_2');
	this.mIDArray.push('3.oa.c.7_20');
	this.mIDArray.push('3.oa.c.7_22');
	this.mIDArray.push('3.oa.c.7_24');
	this.mIDArray.push('3.oa.c.7_26');
	this.mIDArray.push('3.oa.c.7_28');
	this.mIDArray.push('3.oa.c.7_30');

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
                itemAttempt.setEvaluationsID(4);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
