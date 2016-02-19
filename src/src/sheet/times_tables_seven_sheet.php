var TimesTablesSevenSheet = new Class(
{
Extends: TimesTablesSheet,

initialize: function(game)
{
	this.parent(game);
	this.mIDArray.push('3.oa.c.7_87');
	this.mIDArray.push('3.oa.c.7_11');
	this.mIDArray.push('3.oa.c.7_26');
	this.mIDArray.push('3.oa.c.7_39');
	this.mIDArray.push('3.oa.c.7_50');
	this.mIDArray.push('3.oa.c.7_59');
	this.mIDArray.push('3.oa.c.7_66');
	this.mIDArray.push('3.oa.c.7_67');
	this.mIDArray.push('3.oa.c.7_69');
	this.mIDArray.push('3.oa.c.7_71');
	this.mIDArray.push('3.oa.c.7_97');
	this.mIDArray.push('3.oa.c.7_10');
	this.mIDArray.push('3.oa.c.7_25');
	this.mIDArray.push('3.oa.c.7_38');
	this.mIDArray.push('3.oa.c.7_49');
	this.mIDArray.push('3.oa.c.7_58');
	this.mIDArray.push('3.oa.c.7_66');
	this.mIDArray.push('3.oa.c.7_68');
	this.mIDArray.push('3.oa.c.7_70');
	this.mIDArray.push('3.oa.c.7_72');

	this.mCurrentElement = 0;
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
                itemAttempt.setEvaluationsID(8);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
