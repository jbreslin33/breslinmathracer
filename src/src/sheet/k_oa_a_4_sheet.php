var k_oa_a_4_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
	
	this.mIDArray.push('k.oa.a.4_1');
	this.mIDArray.push('k.oa.a.4_2');
	this.mIDArray.push('k.oa.a.4_3');
	this.mIDArray.push('k.oa.a.4_4');
	this.mIDArray.push('k.oa.a.4_5');
	this.mIDArray.push('k.oa.a.4_6');
	this.mIDArray.push('k.oa.a.4_7');
	this.mIDArray.push('k.oa.a.4_8');
	this.mIDArray.push('k.oa.a.4_9');
	
	this.mIDArray.push('k.oa.a.4_21');
	this.mIDArray.push('k.oa.a.4_22');
	this.mIDArray.push('k.oa.a.4_23');
	this.mIDArray.push('k.oa.a.4_24');
	this.mIDArray.push('k.oa.a.4_25');
	this.mIDArray.push('k.oa.a.4_26');
	this.mIDArray.push('k.oa.a.4_27');
	this.mIDArray.push('k.oa.a.4_28');
	this.mIDArray.push('k.oa.a.4_29');
	
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
                itemAttempt.setEvaluationsID(26);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
