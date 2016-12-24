var k_oa_a_5_Sheet = new Class(
{
Extends: Sheet,

initialize: function(game)
{
	this.parent(game);
	//add
	this.mIDArray.push('k.oa.a.5_12');
	this.mIDArray.push('k.oa.a.5_13');
	this.mIDArray.push('k.oa.a.5_14');
	this.mIDArray.push('k.oa.a.5_15');
	this.mIDArray.push('k.oa.a.5_16');
	this.mIDArray.push('k.oa.a.5_17');
	this.mIDArray.push('k.oa.a.5_18');
	this.mIDArray.push('k.oa.a.5_19');
	this.mIDArray.push('k.oa.a.5_20');
	this.mIDArray.push('k.oa.a.5_21');

	//subtract
	this.mIDArray.push('k.oa.a.5_29');
	this.mIDArray.push('k.oa.a.5_30');
	this.mIDArray.push('k.oa.a.5_31');
	this.mIDArray.push('k.oa.a.5_32');
	
	this.mIDArray.push('k.oa.a.5_34');
	this.mIDArray.push('k.oa.a.5_35');
	this.mIDArray.push('k.oa.a.5_36');
	
	this.mIDArray.push('k.oa.a.5_38');
	this.mIDArray.push('k.oa.a.5_39');
	
	this.mIDArray.push('k.oa.a.5_41');

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
                itemAttempt.setEvaluationsID(13);
        }
        else
        {
                APPLICATION.log('no item picked by pickers!');
        }

        //set this as last for next run
        APPLICATION.mQuestionTypeLast = APPLICATION.mQuestionTypeCurrent;
}

});
