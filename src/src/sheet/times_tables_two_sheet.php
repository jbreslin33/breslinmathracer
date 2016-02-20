var TimesTablesTwoSheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
	this.mIDArray.push('3.oa.c.7_82');
	this.mIDArray.push('3.oa.c.7_1');
	this.mIDArray.push('3.oa.c.7_2');
	this.mIDArray.push('3.oa.c.7_4');
	this.mIDArray.push('3.oa.c.7_6');
	this.mIDArray.push('3.oa.c.7_8');
	this.mIDArray.push('3.oa.c.7_10');
	this.mIDArray.push('3.oa.c.7_12');
	this.mIDArray.push('3.oa.c.7_14');
	this.mIDArray.push('3.oa.c.7_16');
	this.mIDArray.push('3.oa.c.7_92');
	this.mIDArray.push('3.oa.c.7_1');
	this.mIDArray.push('3.oa.c.7_3');
	this.mIDArray.push('3.oa.c.7_5');
	this.mIDArray.push('3.oa.c.7_7');
	this.mIDArray.push('3.oa.c.7_9');
	this.mIDArray.push('3.oa.c.7_11');
	this.mIDArray.push('3.oa.c.7_13');
	this.mIDArray.push('3.oa.c.7_15');
	this.mIDArray.push('3.oa.c.7_17');

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
                itemAttempt.setEvaluationsID(3);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
