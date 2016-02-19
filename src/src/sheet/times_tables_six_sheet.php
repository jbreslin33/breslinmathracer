var TimesTablesSixSheet = new Class(
{
Extends: TimesTablesSheet,

initialize: function(game)
{
	this.parent(game);
	this.mIDArray.push('3.oa.c.7_86');
	this.mIDArray.push('3.oa.c.7_9');
	this.mIDArray.push('3.oa.c.7_24');
	this.mIDArray.push('3.oa.c.7_37');
	this.mIDArray.push('3.oa.c.7_48');
	this.mIDArray.push('3.oa.c.7_57');
	this.mIDArray.push('3.oa.c.7_58');
	this.mIDArray.push('3.oa.c.7_60');
	this.mIDArray.push('3.oa.c.7_62');
	this.mIDArray.push('3.oa.c.7_64');
	this.mIDArray.push('3.oa.c.7_96');
	this.mIDArray.push('3.oa.c.7_8');
	this.mIDArray.push('3.oa.c.7_23');
	this.mIDArray.push('3.oa.c.7_36');
	this.mIDArray.push('3.oa.c.7_47');
	this.mIDArray.push('3.oa.c.7_57');
	this.mIDArray.push('3.oa.c.7_59');
	this.mIDArray.push('3.oa.c.7_61');
	this.mIDArray.push('3.oa.c.7_63');
	this.mIDArray.push('3.oa.c.7_64');


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
                itemAttempt.setEvaluationsID(7);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
