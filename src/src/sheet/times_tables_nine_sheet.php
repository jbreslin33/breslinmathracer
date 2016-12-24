var TimesTablesNineSheet = new Class(
{
Extends: TimesTablesSheet,

initialize: function(game)
{
	this.parent(game);
	
	this.mIDArray.push('3.oa.c.7_15');
	this.mIDArray.push('3.oa.c.7_30');
	this.mIDArray.push('3.oa.c.7_43');
	this.mIDArray.push('3.oa.c.7_54');
	this.mIDArray.push('3.oa.c.7_63');
	this.mIDArray.push('3.oa.c.7_70');
	this.mIDArray.push('3.oa.c.7_75');
	this.mIDArray.push('3.oa.c.7_78');
	this.mIDArray.push('3.oa.c.7_14');
	this.mIDArray.push('3.oa.c.7_29');
	this.mIDArray.push('3.oa.c.7_42');
	this.mIDArray.push('3.oa.c.7_53');
	this.mIDArray.push('3.oa.c.7_62');
	this.mIDArray.push('3.oa.c.7_69');
	this.mIDArray.push('3.oa.c.7_74');

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
                itemAttempt.setEvaluationsID(10);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
