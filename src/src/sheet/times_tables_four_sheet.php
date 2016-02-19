var TimesTablesFourSheet = new Class(
{
Extends: TimesTablesSheet,

initialize: function(game)
{
	this.parent(game);
	this.mIDArray.push('3.oa.c.7_84');
	this.mIDArray.push('3.oa.c.7_5');
	this.mIDArray.push('3.oa.c.7_20');
	this.mIDArray.push('3.oa.c.7_33');
	this.mIDArray.push('3.oa.c.7_34');
	this.mIDArray.push('3.oa.c.7_36');
	this.mIDArray.push('3.oa.c.7_38');
	this.mIDArray.push('3.oa.c.7_40');
	this.mIDArray.push('3.oa.c.7_42');
	this.mIDArray.push('3.oa.c.7_44');
	this.mIDArray.push('3.oa.c.7_94');
	this.mIDArray.push('3.oa.c.7_4');
	this.mIDArray.push('3.oa.c.7_19');
	this.mIDArray.push('3.oa.c.7_33');
	this.mIDArray.push('3.oa.c.7_35');
	this.mIDArray.push('3.oa.c.7_37');
	this.mIDArray.push('3.oa.c.7_39');
	this.mIDArray.push('3.oa.c.7_41');
	this.mIDArray.push('3.oa.c.7_43');
	this.mIDArray.push('3.oa.c.7_45');

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
                itemAttempt.setEvaluationsID(5);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
