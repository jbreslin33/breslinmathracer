var TimesTablesFiveSheet = new Class(
{
Extends: TimesTablesSheet,

initialize: function(game)
{
	this.parent(game);
	this.mIDArray.push('3.oa.c.7_85');
	this.mIDArray.push('3.oa.c.7_7');
	this.mIDArray.push('3.oa.c.7_22');
	this.mIDArray.push('3.oa.c.7_35');
	this.mIDArray.push('3.oa.c.7_46');
	this.mIDArray.push('3.oa.c.7_47');
	this.mIDArray.push('3.oa.c.7_49');
	this.mIDArray.push('3.oa.c.7_51');
	this.mIDArray.push('3.oa.c.7_53');
	this.mIDArray.push('3.oa.c.7_55');
	this.mIDArray.push('3.oa.c.7_95');
	this.mIDArray.push('3.oa.c.7_6');
	this.mIDArray.push('3.oa.c.7_21');
	this.mIDArray.push('3.oa.c.7_34');
	this.mIDArray.push('3.oa.c.7_46');
	this.mIDArray.push('3.oa.c.7_48');
	this.mIDArray.push('3.oa.c.7_50');
	this.mIDArray.push('3.oa.c.7_52');
	this.mIDArray.push('3.oa.c.7_54');
	this.mIDArray.push('3.oa.c.7_56');

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
                itemAttempt.setEvaluationsID(6);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
